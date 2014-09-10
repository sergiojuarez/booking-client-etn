<?php


namespace Etn\Service;


use Etn\Service\MockSoapClient;
use Etn\Service\Mock\Webservice;
use Etn\Type\BusScheduleRequest;
use Etn\Helper\BusSchedulerHelper;

class ClientTest extends \PHPUnit_Framework_TestCase
{

   protected $fakeSoapClient;
    //protected $soapFake;
    protected $client;


    public function setUp()
    {
        $this->fakeSoapClient = new \MockSoapClient('fake://wdsl');
        $this->client = new Client($this->fakeSoapClient);

    }


/*
    public function setUp()
    {
        //$this->soapFake = $this->getMockSoap("FakeRul");
        //$this->client = new Client($this->soapFake);
    }

    public function getMockSoap()
    {
//        $url = "http://190.145.82.98/SATServicesclickbus/Service/WSVentaOnline.svc";
//        $endpoint = "http://190.145.82.98/SATServicesclickbus/Service/WSVentaOnline.svc/basic?wsdl";
//        $params = ["trace" => 1,'soap_version' => \SOAP_1_2];
//        $soap = new \SoapClient($endpoint, $params);
        $soap = \Mockery::mock("\SoapClient");
        $soap->shouldReceive("__setSoapHeaders");
        $soap->shouldReceive("__getLastRequest")
            ->andReturn("<?xml >");
        $soap->shouldReceive("__getLastResponse")
            ->andReturn("<?xml >");
        $soap->shouldReceive("url");
        return $soap;
    }
*/
    public function test_if_instance_is_ok()
    {
        $this->assertInstanceOf('Etn\Service\Client', $this->client);
    }

   public function testGetStops()
    {

    }

    public function testGetBusSchedules(){

        $tomorrow = new \DateTime('tomorrow');
        $requestRuns = new BusScheduleRequest();
        $busSchedulerHelper = new BusSchedulerHelper();
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
        $params = $busSchedulerHelper->setBusScheduleRequest($requestRuns);
        $runs = $this->client->getBusSchedules($requestRuns);

        $this->assertNotEmpty($requestRuns,"si hay");



    }





}