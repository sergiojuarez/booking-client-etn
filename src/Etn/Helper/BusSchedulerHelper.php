<?php
/**
 * Created by PhpStorm.
 * User: sergiojuarez
 * Date: 8/28/14
 * Time: 5:08 PM
 */

namespace Etn\Helper;

use Etn\Type\BusSchedule;
use Etn\Type\BusScheduleRequest;

/**
 * @Service
 */
class BusSchedulerHelper {
    function __construct()
    {
    }


    /**
* @Inject
*/



    public function getFactoryBusSchedule(){

    $busSchedule = BusScheduleFacory::create();

}

    public function setBusScheduleRequest(BusScheduleRequest $busScheduleRequest){

        //$serviceP = array($busScheduleRequest);
        $formattedDate = $busScheduleRequest->getFecha()->format('dmY');
        $serviceParams = [
          'p_cve_origen_1' => $busScheduleRequest->getCveOrigen(),
          'p_cve_destino_2' => $busScheduleRequest->getCveDestino(),
          'p_fecha_3' =>  $formattedDate,
          'p_hora_4' =>  $busScheduleRequest->getHora(),
          'p_tipo_servicio_5' => $busScheduleRequest->getTipoServicio(),
          'p_cve_empresa_6' => $busScheduleRequest->getCveEmpresa(),
          'p_no_adulto_7' => $busScheduleRequest->getNumAdultos(),
          'p_no_nino_8' =>  $busScheduleRequest->getNumNino(),
          'p_no_insen_9' => $busScheduleRequest->getNumInsen(),
          'p_no_estudiante_10' =>  $busScheduleRequest->getNumEstudiante(),
          'p_no_maestro_11' => $busScheduleRequest->getNumMaestro(),
          'p_multiempresa_12' =>  $busScheduleRequest->getMultiEmpresa(),
          'p_no_progPaisano_13' =>  $busScheduleRequest->getNoProgramaPaisano(),
          'E_hHoraFin' =>  $busScheduleRequest->getHoraFin(),
    ];

       return $serviceParams;


    }

}


