<?php


namespace Etn\Service;


use Etn\Exceptions\ResponseException;
use Etn\Type\BusScheduleRequest;
use Etn\Helper\BusSchedulerHelper;
use Etn\Helper\SeatHelper;
use Etn\Factory\BusScheduleFactory;
use Etn\Type\BusSchedule;
use Etn\Type\SeatRequest;
use Etn\Type\Seat;
use Etn\Factory\SeatFactory;
use Etn\Type\SeatReservationRequest;
use Etn\Type\ConfirmTicketRequest;
use Etn\Type\LogEntryEtn;
use Etn\Type\OriginDestinationRequest;
use Rocket\Bus\Mexico\SharedBundle\BookingEngines\Type\LogEntry;


class Client implements ServiceInterface
{


    protected $soapClient;
    protected $logEntry;
    const DEFAULT_SERVICE_CLASS = 0;
    const DEFAULT_ADULT_COUNT = 1;
    const START_HOUR = "000000";
    const FINISH_HOUR = "235959";
    const CORRIDA_NOT_FOUND_ERROR = 'No Existe la Corrida Solicitada.';
    const ERROR_FOUND = "E";
    const NO_ERRORS_FOUND = "00";
    const NO_ERRORS_FOUND_MESSAGE = "Sin Error";
    const NOT_A_VALID_SEAT = "000";
    const LINES_PER_ROW = 4;
    const TOKEN ="CBUS";



    public function __construct($soapClient)

    {
        $this->setSoapClient($soapClient);

    }

    public function fetchPlaceMappings(OriginDestinationRequest $originDestinationRequest)
    {
      try {
          $serviceType="getOficinas";
          $params = [
              "E_aClaveEmpresaSolicita" => $originDestinationRequest->getEmpresaSolicita()
          ];

          $soapResponse = $this->soapClient->__soapCall($serviceType, $params);

      }
      catch(\Exception $e){
          if ($e->getMessage() == "looks like we got no XML document") {
              $lastResponse = $this->soapClient->__getLastResponse();
              $translatedResponse = iconv('ISO-8859-1', 'ascii//TRANSLIT', $lastResponse);
              preg_match('/(.*)\<Return xsi:type="xsd:string"\>(.*)\<\/S\_aOficinas\>/',
                  $translatedResponse, $response);

              return $response[2];

          }
      }
    }

    public function fetchRoutes(OriginDestinationRequest $originDestinationRequest)
    {
       try {
           $serviceType="Destinos";

           $params = array(
               "E_aClaveOficinaOrigen" => $originDestinationRequest->getOrigen(),
               "E_aEmpresasolicita" => $originDestinationRequest->getEmpresaSolicita(),
               "E_aEmpresaViaja" => $originDestinationRequest->getEmpresaViaja()

           );

           $soapResponse = $this->soapClient->__soapCall($serviceType,$params);

           if (trim($soapResponse)===""){
               throw new ResponseException ("Destination not found!");
           }
           return $soapResponse;

       }
       catch(\Exception $e){


       }
    }

    public function getBusSchedules(BusScheduleRequest $busScheduleRequest)
    {
      try{

          $serviceType = 'ConsultaCorridas';

          $busSchedulerHelper = new BusSchedulerHelper();
          $Params = $busSchedulerHelper ->setBusScheduleRequest($busScheduleRequest);

          var_dump($Params);
          $soapParam = array(
              'citec' => $Params
          );

          $soapResponse = $this->soapClient->__soapCall($serviceType, $Params);
          $simpleXmlResponse = simplexml_load_string($soapResponse);
          $response = self::normalizeServices($simpleXmlResponse);
/*
          if(!isset($soapResponse->out->Record)) {
              return new BusSchedule();
          }
*/       // var_dump($response);
          return $response;

      }
      catch (\Exception $e) {
       $e->getMessage();

      }


    }

    public function getStops()
    {
        // TODO: Implement getStops() method.
    }




    /**
     * @param SeatRequest $seatrequest
     * @return array
     * @throws \Etn\Exceptions\SoapException
     */
    public function getSeatMapDiagram(SeatRequest $seatRequest, SeatHelper $seatHelper)
    {
        try{
        $serviceType = 'ConsultaDiagrama';

        $departureDate = $seatRequest->getFechaCorrida();
        $formattedDepartureDate = $departureDate->format('dmY');

        $soapParams = array(
            'E_aEmpresaSolicia' => $seatRequest->getEmpresaSolicita(),
            'E_nClaveCorrida' => $seatRequest->getClaveCorrida(),
            'E_aFechaCorrida' => $formattedDepartureDate,
            'E_aEmpresaCorrida' => $seatRequest->getEmpresaCorrida()
        );


        $soapResponse = $this->soapClient->__soapCall($serviceType, $soapParams);

         $availableSeatsResponse =  $seatHelper->normalizeSeatsMap($soapResponse);

        if ( $availableSeatsResponse['errorMessage'] !== "") {
            throw new ResponseException(
                'There was a communication error with the Bus Line'
            );
        }
         // var_dump($availableSeatsResponse);
        return $availableSeatsResponse;
        }
        catch(\Exception $e){
            $e->getMessage();
        }
    }
    /**
     * @param SeatRequest $seatRequest
     * @return array
     * @throws \Etn\Exceptions\ResponseException;
     */
    public function getAvailableSeats(SeatRequest $seatRequest, SeatHelper $seatHelper)
    {
        $serviceType = 'ConsultaOcupacion';

        $departureDate = $seatRequest->getFechaCorrida();
        $formattedDepartureDate = $departureDate->format('dmY');

        $soapParams = array(
            'p_cve_origen_1' => $seatRequest->getClaveOrigen(),
            'p_cve_destino_2' => $seatRequest->getClaveDestino(),
            'p_fecha_3' => $formattedDepartureDate,
            'p_cve_corrida_4' => $seatRequest->getClaveCorrida(),
            'p_cve_empresa_5' => $seatRequest->getEmpresaSolicita(),
            'p_cve_empresa_corrida_6' => $seatRequest->getEmpresaCorrida(),
        );

        $soapResponse = $this->soapClient->_soapCall($serviceType, $soapParams);


        $availableSeatsResponse = $seatHelper->normalizeAvailableSeats($soapResponse);
        if ($availableSeatsResponse['errorMessage'] !== NULL) {
            throw new ResponseException(
                'There was a communication error with the Bus Line'
            );
        }

        return $availableSeatsResponse;
    }


    /**
     * @param SeatRequest $seatRequest
     */
    public function getSeatMap(SeatRequest $seatRequest) {
        $seatHelper = new SeatHelper();
        $availableSeats = $this->getAvailableSeats($seatRequest, $seatHelper);
        $availableSeatsMap = $this->getSeatMapDiagram($seatRequest, $seatHelper);

        $seatsAvailable = $availableSeats['availability'];
        $seatsMap = $availableSeatsMap['seats'];
        $seats = $seatHelper->mergeAvailableSeatsWithMap($seatsAvailable, $seatsMap);

        return $seats;
    }

    public function reservationSeat(SeatReservationRequest $seatReservationRequest)
    {

        try{
            $serviceType = 'PeticionReservacionP';

            $departureDate = $seatReservationRequest->getFechaCorrida();
            $formattedDepartureDate = $departureDate->format('dmY');

            $soapParams = array(
                'p_cve_origen_1' => $seatReservationRequest->getClaveOrigen(),
                'p_cve_destino_2' => $seatReservationRequest->getClaveDestino(),
                'p_fecha_3' => $formattedDepartureDate,
                'p_hora_4' => $seatReservationRequest->getHora(),
                'p_no_adulto_5' => $seatReservationRequest->getNumAdulto(),
                'p_no_nino_6' => $seatReservationRequest->getNumNino(),
                'p_no_insen_7' => $seatReservationRequest->getNumInsen(),
                'p_no_estudiante_8' => $seatReservationRequest->getNumEstudiante(),
                'p_no_maestro_9' => $seatReservationRequest->getNumMaestro(),
                'p_corrida_10' => $seatReservationRequest->getNumCorrida(),
                'p_asientos_11' => $seatReservationRequest->getAsientos(),
                'p_nombres_12' => $seatReservationRequest->getNombre(),
                'p_folio_reservacion_13' => $seatReservationRequest->getFolioReservacion(),
                'E_aClaveEmpresaSolicita' => $seatReservationRequest->getCveEmpresaSolicita(),
                'E_aClaveEmpresaViaja' => $seatReservationRequest->getCveEmpresaViaje(),
                'P_no_promocion'=> $seatReservationRequest->getNumPromocion(),
                'P_aCadenaPromociones' => $seatReservationRequest->getCadenaPromocion(),
                'E_aTipoTerminal' => $seatReservationRequest->getTipoTerminal(),
                'E_aTipoCliente' => $seatReservationRequest->getTipoCliente(),
                'E_aTipoOperacion' => $seatReservationRequest->getTipoOperacion(),
                'E_nEsIntercambio' => $seatReservationRequest->getEsIntercambio(),
                'E_nClaveOperacionOriginal' => $seatReservationRequest->getClaveOperacionOriginal(),
                'E_nConsecutivoOperacionOrigina' => $seatReservationRequest->getConsecutivoOperOriginal(),
                'E_no_ProgramaPaisano' => $seatReservationRequest->getNumProgPaisano(),
                'E_EsBoletoFrontera' => $seatReservationRequest->getEsBoletoFrontera(),
                'E_aDatosBoletoFrontera' => $seatReservationRequest->getDatosBoletosFrontera()
            );


            $soapResponse = $this->soapClient->__soapCall($serviceType, $soapParams);

            $reservationResponse = explode("|", $soapResponse);

            if (self::isSeatReservationSuccessful($reservationResponse)) {
                $seatReservationRequest->setFolioReservacion($reservationResponse[0]);
                return $reservationResponse;
            }
            else {
                throw new ResponseException(
                    'There was an Error during seat reservation'
                );
            }

        }
        catch(\Exception $e){
            $e->getMessage();
        }
    }

    /**
     * @param array $reservationResponse
     * @return bool
     */
    protected static function isSeatReservationSuccessful($reservationResponse)
    {
        return (isset($reservationResponse[3]) && $reservationResponse[3] == self::NO_ERRORS_FOUND_MESSAGE);
    }

    public function cancelReservationSeat(SeatReservationRequest $seatReservationRequest)
    {
        try {
            $serviceType = 'PeticionLiberaReservacion';

            $params = [
                "p_folio_reservacion_1" => $seatReservationRequest->getFolioReservacion(),
                "p_cve_empresa_2" => $seatReservationRequest->getCveEmpresaSolicita(),
                "p_cve_empresa_corrida_3" => $seatReservationRequest->getCveEmpresaViaje()
            ];

            $soapResponse = $this->soapClient->__soapCall($serviceType, $params);
            return $soapResponse;
        }
        catch (\Exception $e){
            $e->getMessage();
        }
    }

    public function buyTicket(ConfirmTicketRequest $confirmTicketRequest)
    {
        try {
            $serviceType = 'PeticionConfirmacion';

            $departureDate = $confirmTicketRequest->getFechaCorrida();
            $formattedDepartureDate = $departureDate->format('dmY');

            $params = array(
                "p_cve_origen_1" => $confirmTicketRequest->getCveOrigen(),
                "p_corrida_2" => $confirmTicketRequest->getCveCorrida(),
                "p_fecha_3" => $formattedDepartureDate,
                "p_folio_reservacion_4" => $confirmTicketRequest->getFolioReservacion(),
                "p_cve_empresa_5" => $confirmTicketRequest->getCveEmpresaSolicita(),
                "p_cve_empresa_viaja_6" => $confirmTicketRequest->getCveEmpresaViaje(),
                "E_nClaveSucursalExterna" => $confirmTicketRequest->getCveSucursalExterna(),
                "E_aClaveOficinaExterna" => $confirmTicketRequest->getCveOficinaExterna(),
                "E_fFechaContableExterna" => $confirmTicketRequest->getFechaContableExterna(),
                "E_aFormaPagoExterna" => $confirmTicketRequest->getFormaPagoExterna(),
                "E_bFormasPagoTemp" => $confirmTicketRequest->getFormaPagoTemp(),
                "E_nSesionBol" => $confirmTicketRequest->getSesion()
            );
           // var_dump($params);
            $soapResponse = $this->soapClient->__soapCall($serviceType, $params);

            $lastRequest = $this->soapClient->__getLastRequest();
            $lastRequestDateTime = new \DateTime();
            $lastResponseDateTime = new \DateTime();

            $logEntryEtn = new LogEntryEtn();
            $logEntryEtn->setLastRequest($lastRequest);
            $logEntryEtn->setLastResponse($soapResponse);
            $logEntryEtn->setLastRequestDateTime($lastRequestDateTime);
            $logEntryEtn->setLastResponseDateTime($lastResponseDateTime);

           // $this->setCommunicationLog($logEntryEtn);

            return $soapResponse;
        }
        catch (\Exception $e) {
            $e->getMessage();
        }

    }

    public function cancelTicket(ConfirmTicketRequest $confirmTicketRequest)
    {
        try {

            $serviceType = 'PeticionLiberaReservacion';

               $params = array(
                "p_folio_reservacion_1" => $confirmTicketRequest->getFolioReservacion(),
                "p_cve_empresa_2" => $confirmTicketRequest->getCveEmpresaSolicita(),
                "p_cve_empresa_corrida_3" => $confirmTicketRequest->getCveEmpresaViaje()

               );

            var_dump($params);

            $soapResponse = $this->soapClient->__soapCall($serviceType, $params);

            $lastRequest = $this->soapClient->__getLastRequest();
            $lastRequestDateTime = new \DateTime();
            $lastResponseDateTime = new \DateTime();

            $logEntryEtn = new LogEntryEtn();
            $logEntryEtn->setLastRequest($lastRequest);
            $logEntryEtn->setLastResponse($soapResponse);
            $logEntryEtn->setLastRequestDateTime($lastRequestDateTime);
            $logEntryEtn->setLastResponseDateTime($lastResponseDateTime);

            //$this->setCommunicationLog($logEntryEtn);

            return $soapResponse;

        }
        catch (\Exception $e) {
            $e->getMessage();
        }
    }

    protected function callSoapServiceByType($type, $params)
    {
        $options = array('trace' => 1, 'exception' => 1);

        $response = $this->soapClient->__soapCall($type, $params, array('trace' => $options));

        return $response;
    }

    public function setSoapClient($soapClient)
    {
        $this->soapClient = $soapClient;
    }

    protected static function normalizeServices($xmlServices)
    {
        $services = array();
        foreach ($xmlServices->Record as $service) {
            $serviceResponse = BusScheduleFactory::
                createFromXmlResponse($service);
            $services[] = $serviceResponse;
        }
        return $services;
    }

    public function setCommunicationLog(LogEntryEtn $logEntryEtn)
    {
        $this->logEntry = new LogEntry();
        $this->logEntry->setRequestBody($logEntryEtn->getLastRequest());
        $this->logEntry->setResponseBody($logEntryEtn->getLastResponse());
        $this->logEntry->setRequestDateTime($logEntryEtn->getLastRequestDateTime());
        $this->logEntry->setResponseDateTime($logEntryEtn->getLastResponseDateTime());

        return $this;
    }

    public function getCommunicationLog()
    {
        return $this->logEntry;
    }


}