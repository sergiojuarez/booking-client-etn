<?php


namespace Etn\Service;

use Etn\Exceptions\SoapException;
use Etn\Type\BusScheduleRequest;
use Etn\Helper\BusSchedulerHelper;
use Etn\Factory\BusScheduleFactory;
use Etn\Type\BusSchedule;


class Client implements ServiceInterface
{

    protected  $soapClient;


    const DEFAULT_SERVICE_CLASS = 0;
    const DEFAULT_ADULT_COUNT = 1;

    const START_HOUR = "000000";
    const FINISH_HOUR = "235959";
    const CORRIDA_NOT_FOUND_ERROR = 'No Existe la Corrida Solicitada.';
    const ERROR_FOUND = "E";
    const NO_ERRORS_FOUND = "00";
    const NOT_A_VALID_SEAT = "000";
    const LINES_PER_ROW = 4;



    public function __construct($soapClient)

    {
        $this->setSoapClient($soapClient);

    }

    public function fetchPlaceMappings()
    {
        // TODO: Implement fetchPlaceMappings() method.
    }

    public function fetchRoutes()
    {
        // TODO: Implement fetchRoutes() method.
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

          if(!isset($soapResponse->out->Record)) {
              return new BusSchedulesCollection();
          }

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
     * @param AvailableSeatsRequest $request
     * @return array
     * @throws \Etn\Exceptions\SoapException
     */
    public function getSeatMapDiagram(AvailableSeatsRequest $request)
    {
        $serviceType = 'ConsultaDiagrama';

        $departureDate = $request->getDepartureDate();
        $formattedDepartureDate = $departureDate->format('dmY');

        $soapParams = array(
            'E_aOficinaOrigen' => $request->getOrigin(),
            'E_aOficineDestino' => $request->getDestination(),
            'E_aFechaSalidaInicio' => $formattedDepartureDate,
            'E_nClaveCorrida' => $request->getServiceNumber(),
            'E_aEmpresaSolicita' => $request->getSolicitingCompany(),
            'E_aEmpresaViaja' => $request->getServingCompany(),
            'E_lVentaConexion' => $request->getConnection()

        );

        $soapResponse = $this->soapClient->{$serviceType}($soapParams);

        $availableSeatsResponse = $this->normalizeAvailableSeatsMap(
            $soapResponse->response
        );

        if (
            isset($availableSeatsResponse['errorNumber']) &&
            ($availableSeatsResponse['errorNumber'] != 0)
        ) {
            throw new SoapException(
                'There was a communication error with the Bus Line'
            );
        }

        return $availableSeatsResponse;
    }

    public function reservationSeat()
    {
        // TODO: Implement reservationSeat() method.
    }

    public function cancelReservationSeat()
    {
        // TODO: Implement cancelReservationSeat() method.
    }

    public function buyTicket()
    {
        // TODO: Implement buyTicket() method.
    }

    public function cancelTicket()
    {
        // TODO: Implement cancelTicket() method.
    }

    protected function callSoapServiceByType($type, $params)
    {
        $options = array('trace' => 1, 'exception' => 1);

        var_dump($params);
        $response = $this->soapClient->__soapCall($type, $params, array('trace' => $options));

        var_dump("aqui");
        //var_dump($this->soapCli->_getLastRequest());
         var_dump($response);
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


}