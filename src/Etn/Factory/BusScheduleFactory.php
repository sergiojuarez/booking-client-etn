<?php

namespace Etn\Factory;

use Etn\Type\BusSchedule;
use Etn\Type\BusSchedulesCollection;

class BusScheduleFactory {

    public static function createFromXmlResponse($xml)
    {
        $busSchedule = new BusSchedule();

        $busSchedule->setDestinoFinal((string)$xml->Destino_final);
        $busSchedule->setTipoItinerario((string)$xml->Tipo_itinerario);
        $busSchedule->setHoraCorrida((string)$xml->Hora_Corrida);
        $busSchedule->setTipoCorrida((string)$xml->Tipo_Corrida);
        $busSchedule->setTipoCorrida((string)$xml->Empresa_Corrida);
        $busSchedule->setServicio((string)$xml->Servicio);
        $busSchedule->setTarifa((float)$xml->Tarifa);
        $busSchedule->setDispEstudiantes((int)$xml->Disp_Estudiantes);
        $busSchedule->setDispInsen((int)$xml->Disp_Insen);
        $busSchedule->setDispMaestros((int)$xml->Disp_Maestros);
        $busSchedule->setDispGeneral((int)$xml->Disp_General);
        $busSchedule->setCorrida((int)$xml->Corrida);
        $busSchedule->setSala((string)$xml->Sala);
        $busSchedule->setAnden((string)$xml->Anden);
        $busSchedule->setTarifaAdulto((float)$xml->Tarifa_Adulto);
        $busSchedule->setTarifaNino((float)$xml->Tarifa_Nino);
        $busSchedule->setTarifaInsen((float)$xml->Tarifa_Insen);
        $busSchedule->setTarifaEstudiante((float)$xml->Tarifa_Estudiante);
        $busSchedule->setTarifaMaestro((float)$xml->Tarifa_Maestro);
        $busSchedule->setClaveDestino((int)$xml->Clave_Destino);
        $busSchedule->setTipoLectura((string)$xml->Tipo_Lectura);
        $busSchedule->setClaveCtl((string)$xml->Clave_Ctl);
        $busSchedule->setSecuencia((string)$xml->Secuencia);
        $busSchedule->setFechaDesfaza((string)$xml->Fecha_desfaza);
        $busSchedule->setUbicacion((string)$xml->Ubicacion);
        $busSchedule->setFechaInicial((string)$xml->Fecha_Inicial);
        $busSchedule->setCupoAutobus((int)$xml->Cupo_Autobus);
        $busSchedule->setErrorNumero((string)$xml->Error_Numero);
        $busSchedule->setErrorCadena((string)$xml->Error_Cadena);
        $busSchedule->setDispNinios((int)$xml->Disp_Ninios);
        $busSchedule->setDispPromo((int)$xml->Disp_Promo);
        $busSchedule->setTarifaPromo((float)$xml->Tarifa_Promo);
        $busSchedule->setFechaLlegada((string)$xml->Fecha_Llegada);
        $busSchedule->setMoneda((string)$xml->Moneda);
        $busSchedule->setDispProgPaisano((int)$xml->Disp_Progpaisano);
        $busSchedule->setTarifaProgPaisano((float)$xml->Tarifa_Progpaisano);
        $busSchedule->setOficinaFrontera((string)$xml->Oficina_Frontera);
        $busSchedule->setPorcentajeTramoFrontera((float)$xml->Porcentaje_Tramo_Frontera);
        $busSchedule->setMarcaCorrida((string)$xml->Marca_Corrida);
        $busSchedule->setAplicaIva((string)$xml->Aplica_IVA);


        return $busSchedule;
    }



}

