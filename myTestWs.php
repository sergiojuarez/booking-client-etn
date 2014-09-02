<?php
require_once 'vendor/autoload.php';


use Etn\Type\BusSchedule;
use Etn\Type\BusScheduleRequest;
use Etn\Type\SeatRequest;



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


//$type='ConsultaCorridas';
//$response = $sClient->ConsultaCorridas($params);
//$response = $sClient->__soapCall($type, $params);

//$runs = $client->getBusSchedules($requestRuns);

//$result = simplexml_load_string($runs);
//var_dump($runs);


//echo 'Last response: '. $sClient->__getLastRequest();
//var_dump($result);

echo '-----------------------------------getRuns'."\n";

/*$soapParams =[
    'E_aEmpresaSolicia' =>"CBUS",
    'E_nClaveCorrida' => 176,
    'E_aFechaCorrida' => "02092014",
    'E_aEmpresaCorrida' => "TLU"
];*/




$seatRequest = new SeatRequest();

$seatRequest->setEmpresaSolicita("CBUS");
$seatRequest->setClaveCorrida(176);
$seatRequest->setFechaCorrida($tomorrow);
$seatRequest->setEmpresaCorrida("TLU");

//var_dump($soapParams);
$seatDiagram = $client->getSeatMapDiagram($seatRequest);
//$response = $sClient->ConsultaDiagrama($soapParams);
//var_dump($response);
echo 'Last request: '. $sClient->__getLastRequest();