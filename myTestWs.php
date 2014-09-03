<?php
require_once 'vendor/autoload.php';


use Etn\Type\BusSchedule;
use Etn\Type\BusScheduleRequest;
use Etn\Type\SeatRequest;
use Etn\Helper\SeatHelper;
use Etn\Type\SeatReservationRequest;
use Etn\Type\ConfirmTicketRequest;



$sClient = new SoapClient('http://201.131.2.164:30014/citec.wsdl',array('trace' => 1, 'exceptions' => 0));

var_dump($sClient);

$client = new \Etn\Service\Client($sClient);

echo '-----------------------------------connection'."\n";

echo '-----------------------------------getAllDestinationsForAnOrigin'."\n";

$tomorrow = new \DateTime('tomorrow', new \DateTimeZone('America/Mexico_City'));
//var_dump($tomorrow);

$requestRuns = new BusScheduleRequest();
$requestRuns->setCveOrigen("GDLJ");
$requestRuns->setCveDestino("MEXN");
$requestRuns->setFecha($tomorrow);
$requestRuns->setHora("000000" );
$requestRuns->setTipoServicio("");
$requestRuns->setCveEmpresa("CBUS");
$requestRuns->setNumAdultos(1);
$requestRuns->setNumNino(0);
$requestRuns->setNumInsen(0);
$requestRuns->setNumEstudiante(0);
$requestRuns->setNumMaestro(0);
$requestRuns->setMultiEmpresa(1);
$requestRuns->setNoProgramaPaisano(0);
$requestRuns->setHoraFin("235959");



//$response = $sClient->ConsultaCorridas($params);


$runs = $client->getBusSchedules($requestRuns);

//$result = simplexml_load_string($runs);
//var_dump($runs);


//echo 'Last response: '. $sClient->__getLastRequest();
//var_dump($result);

echo '-----------------------------------getRuns'."\n";





$seatRequest = new SeatRequest();

$seatRequest->setEmpresaSolicita("CBUS");
$seatRequest->setClaveCorrida(176);
$seatRequest->setFechaCorrida($tomorrow);
$seatRequest->setEmpresaCorrida("TLU");
$seatRequest->setClaveOrigen("GDLJ");
$seatRequest->setClaveDestino("MEXN");
$seatHelper = new SeatHelper();

//var_dump($soapParams);
$seatDiagram = $client->getSeatMapDiagram($seatRequest,$seatHelper);
//$response = $sClient->ConsultaDiagrama($soapParams);
//var_dump($seatDiagram);
echo 'Last request: '. $sClient->__getLastRequest();

$seatAvailable = $client->getAvailableSeats($seatRequest,$seatHelper);

//echo 'Last request: '. $sClient->__getLastRequest();

$mySeat = $client->getSeatMap($seatRequest);

//var_dump($mySeat);

//echo 'Last request: '. $sClient->__getLastRequest();

$seatReservationRequest = new SeatReservationRequest();

$seatReservationRequest->setClaveOrigen($seatRequest->getClaveOrigen());
$seatReservationRequest->setClaveDestino($seatRequest->getClaveDestino());
$seatReservationRequest->setFechaCorrida($seatRequest->getFechaCorrida());
$seatReservationRequest->setHora("");
$seatReservationRequest->setNumAdulto(1);
$seatReservationRequest->setNumNino(0);
$seatReservationRequest->setNumInsen(0);
$seatReservationRequest->setNumEstudiante(0);
$seatReservationRequest->setNumMaestro(0);
$seatReservationRequest->setNumCorrida(191);
$seatReservationRequest->setAsientos(27);
$seatReservationRequest->setNombre("LUIS PEREZ GARCIA                 ");
$seatReservationRequest->setFolioReservacion(0);
$seatReservationRequest->setCveEmpresaSolicita($seatRequest->getEmpresaSolicita());
$seatReservationRequest->setCveEmpresaViaje($seatRequest->getEmpresaCorrida());
$seatReservationRequest->setNumPromocion(0);
$seatReservationRequest->setCadenaPromocion("");
$seatReservationRequest->setTipoTerminal("I");
$seatReservationRequest->setTipoCliente("A");
$seatReservationRequest->setTipoOperacion("R");
$seatReservationRequest->setEsIntercambio(0);
$seatReservationRequest->setClaveOperacionOriginal("");
$seatReservationRequest->setConsecutivoOperOriginal("");
$seatReservationRequest->setNumProgPaisano(0);
$seatReservationRequest->setEsBoletoFrontera("");
$seatReservationRequest->setDatosBoletosFrontera("");

$myReservation = $client->reservationSeat($seatReservationRequest);

var_dump("--------********".$seatReservationRequest->getFolioReservacion());

//$myCancelTicket = $client->cancelReservationSeat($seatReservationRequest);

//var_dump($myCancelTicket);

$confirmTicketrequest = new ConfirmTicketRequest();

$confirmTicketrequest->setCveOrigen($seatReservationRequest->getClaveOrigen());
$confirmTicketrequest->setCveCorrida($seatReservationRequest->getNumCorrida());
$confirmTicketrequest->setFechaCorrida($seatReservationRequest->getFechaCorrida());
$confirmTicketrequest->setFolioReservacion($seatReservationRequest->getFolioReservacion());
$confirmTicketrequest->setCveEmpresaSolicita($seatReservationRequest->getCveEmpresaSolicita());
$confirmTicketrequest->setCveEmpresaViaje($seatReservationRequest->getCveEmpresaViaje());
$confirmTicketrequest->setCveSucursalExterna("");
$confirmTicketrequest->setCveOficinaExterna("");
$confirmTicketrequest->setFechaContableExterna("");
$confirmTicketrequest->setFormaPagoExterna("");
$confirmTicketrequest->setFormaPagoTemp("");
$confirmTicketrequest->setSesion("");

$myConfirmTicket = $client->buyTicket($confirmTicketrequest);

var_dump($myConfirmTicket);

var_dump("------------------------------");

var_dump("---------------*********".$confirmTicketrequest->getFolioReservacion());



$myCancelTicketrequest = $client->cancelTicket($confirmTicketrequest);

var_dump($myConfirmTicket);








