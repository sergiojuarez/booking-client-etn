<?php

namespace Etn\Type;


class BusSchedule {

    private $destinoFinal;
    private $tipoItinerario;
    private $horaCorrida;
    private $tipoCorrida;
    private $empresaCorrida;
    private $servicio;
    private $tarifa;
    private $dispEstudiantes;
    private $dispInsen;
    private $dispMaestros;
    private $dispGeneral;
    private $corrida;
    private $sala;
    private $anden;
    private $tarifaAdulto;
    private $tarifaNino;
    private $tarifaInsen;
    private $tarifaEstudiante;
    private $tarifaMaestro;
    private $claveDestino;
    private $tipoLectura;
    private $claveCtl;
    private $secuencia;
    private $fechaDesfaza;
    private $ubicacion;
    private $fechaInicial;
    private $cupoAutobus;
    private $errorNumero;
    private $errorCadena;
    private $dispNinios;
    private $dispPromo;
    private $tarifaPromo;
    private $fechaLlegada;
    private $moneda;
    private $dispProgPaisano;
    private $tarifaProgPaisano;
    private $oficinaFrontera;
    private $porcentajeTramoFrontera;
    private $marcaCorrida;
    private $aplicaIva;

    /**
     * @param mixed $anden
     */
    public function setAnden($anden)
    {
        $this->anden = $anden;
    }

    /**
     * @return mixed
     */
    public function getAnden()
    {
        return $this->anden;
    }

    /**
     * @param mixed $claveCtl
     */
    public function setClaveCtl($claveCtl)
    {
        $this->claveCtl = $claveCtl;
    }

    /**
     * @return mixed
     */
    public function getClaveCtl()
    {
        return $this->claveCtl;
    }

    /**
     * @param mixed $claveDestino
     */
    public function setClaveDestino($claveDestino)
    {
        $this->claveDestino = $claveDestino;
    }

    /**
     * @return mixed
     */
    public function getClaveDestino()
    {
        return $this->claveDestino;
    }

    /**
     * @param mixed $corrida
     */
    public function setCorrida($corrida)
    {
        $this->corrida = $corrida;
    }

    /**
     * @return mixed
     */
    public function getCorrida()
    {
        return $this->corrida;
    }

    /**
     * @param mixed $cupoAutobus
     */
    public function setCupoAutobus($cupoAutobus)
    {
        $this->cupoAutobus = $cupoAutobus;
    }

    /**
     * @return mixed
     */
    public function getCupoAutobus()
    {
        return $this->cupoAutobus;
    }

    /**
     * @param mixed $destinoFinal
     */
    public function setDestinoFinal($destinoFinal)
    {
        $this->destinoFinal = $destinoFinal;
    }

    /**
     * @return mixed
     */
    public function getDestinoFinal()
    {
        return $this->destinoFinal;
    }

    /**
     * @param mixed $dispEstudiantes
     */
    public function setDispEstudiantes($dispEstudiantes)
    {
        $this->dispEstudiantes = $dispEstudiantes;
    }

    /**
     * @return mixed
     */
    public function getDispEstudiantes()
    {
        return $this->dispEstudiantes;
    }

    /**
     * @param mixed $dispGeneral
     */
    public function setDispGeneral($dispGeneral)
    {
        $this->dispGeneral = $dispGeneral;
    }

    /**
     * @return mixed
     */
    public function getDispGeneral()
    {
        return $this->dispGeneral;
    }

    /**
     * @param mixed $dispInsen
     */
    public function setDispInsen($dispInsen)
    {
        $this->dispInsen = $dispInsen;
    }

    /**
     * @return mixed
     */
    public function getDispInsen()
    {
        return $this->dispInsen;
    }

    /**
     * @param mixed $dispMaestros
     */
    public function setDispMaestros($dispMaestros)
    {
        $this->dispMaestros = $dispMaestros;
    }

    /**
     * @return mixed
     */
    public function getDispMaestros()
    {
        return $this->dispMaestros;
    }

    /**
     * @param mixed $dispNinios
     */
    public function setDispNinios($dispNinios)
    {
        $this->dispNinios = $dispNinios;
    }

    /**
     * @return mixed
     */
    public function getDispNinios()
    {
        return $this->dispNinios;
    }

    /**
     * @param mixed $dispPromo
     */
    public function setDispPromo($dispPromo)
    {
        $this->dispPromo = $dispPromo;
    }

    /**
     * @return mixed
     */
    public function getDispPromo()
    {
        return $this->dispPromo;
    }

    /**
     * @param mixed $empresaCorrida
     */
    public function setEmpresaCorrida($empresaCorrida)
    {
        $this->empresaCorrida = $empresaCorrida;
    }

    /**
     * @return mixed
     */
    public function getEmpresaCorrida()
    {
        return $this->empresaCorrida;
    }

    /**
     * @param mixed $errorCadena
     */
    public function setErrorCadena($errorCadena)
    {
        $this->errorCadena = $errorCadena;
    }

    /**
     * @return mixed
     */
    public function getErrorCadena()
    {
        return $this->errorCadena;
    }

    /**
     * @param mixed $errorNumero
     */
    public function setErrorNumero($errorNumero)
    {
        $this->errorNumero = $errorNumero;
    }

    /**
     * @return mixed
     */
    public function getErrorNumero()
    {
        return $this->errorNumero;
    }

    /**
     * @param mixed $fechaDesfaza
     */
    public function setFechaDesfaza($fechaDesfaza)
    {
        $this->fechaDesfaza = $fechaDesfaza;
    }

    /**
     * @return mixed
     */
    public function getFechaDesfaza()
    {
        return $this->fechaDesfaza;
    }

    /**
     * @param mixed $fechaInicial
     */
    public function setFechaInicial($fechaInicial)
    {
        $this->fechaInicial = $fechaInicial;
    }

    /**
     * @return mixed
     */
    public function getFechaInicial()
    {
        return $this->fechaInicial;
    }

    /**
     * @param mixed $fechaLlegada
     */
    public function setFechaLlegada($fechaLlegada)
    {
        $this->fechaLlegada = $fechaLlegada;
    }

    /**
     * @return mixed
     */
    public function getFechaLlegada()
    {
        return $this->fechaLlegada;
    }

    /**
     * @param mixed $horaCorrida
     */
    public function setHoraCorrida($horaCorrida)
    {
        $this->horaCorrida = $horaCorrida;
    }

    /**
     * @return mixed
     */
    public function getHoraCorrida()
    {
        return $this->horaCorrida;
    }

    /**
     * @param mixed $moneda
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
    }

    /**
     * @return mixed
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * @param mixed $sala
     */
    public function setSala($sala)
    {
        $this->sala = $sala;
    }

    /**
     * @return mixed
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * @param mixed $secuencia
     */
    public function setSecuencia($secuencia)
    {
        $this->secuencia = $secuencia;
    }

    /**
     * @return mixed
     */
    public function getSecuencia()
    {
        return $this->secuencia;
    }

    /**
     * @param mixed $servicio
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;
    }

    /**
     * @return mixed
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * @param mixed $tarifa
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
    }

    /**
     * @return mixed
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * @param mixed $tarifaAdulto
     */
    public function setTarifaAdulto($tarifaAdulto)
    {
        $this->tarifaAdulto = $tarifaAdulto;
    }

    /**
     * @return mixed
     */
    public function getTarifaAdulto()
    {
        return $this->tarifaAdulto;
    }

    /**
     * @param mixed $tarifaEstudiante
     */
    public function setTarifaEstudiante($tarifaEstudiante)
    {
        $this->tarifaEstudiante = $tarifaEstudiante;
    }

    /**
     * @return mixed
     */
    public function getTarifaEstudiante()
    {
        return $this->tarifaEstudiante;
    }

    /**
     * @param mixed $tarifaInsen
     */
    public function setTarifaInsen($tarifaInsen)
    {
        $this->tarifaInsen = $tarifaInsen;
    }

    /**
     * @return mixed
     */
    public function getTarifaInsen()
    {
        return $this->tarifaInsen;
    }

    /**
     * @param mixed $tarifaMaestro
     */
    public function setTarifaMaestro($tarifaMaestro)
    {
        $this->tarifaMaestro = $tarifaMaestro;
    }

    /**
     * @return mixed
     */
    public function getTarifaMaestro()
    {
        return $this->tarifaMaestro;
    }

    /**
     * @param mixed $tarifaNino
     */
    public function setTarifaNino($tarifaNino)
    {
        $this->tarifaNino = $tarifaNino;
    }

    /**
     * @return mixed
     */
    public function getTarifaNino()
    {
        return $this->tarifaNino;
    }

    /**
     * @param mixed $tarifaPromo
     */
    public function setTarifaPromo($tarifaPromo)
    {
        $this->tarifaPromo = $tarifaPromo;
    }

    /**
     * @return mixed
     */
    public function getTarifaPromo()
    {
        return $this->tarifaPromo;
    }

    /**
     * @param mixed $tipoCorrida
     */
    public function setTipoCorrida($tipoCorrida)
    {
        $this->tipoCorrida = $tipoCorrida;
    }

    /**
     * @return mixed
     */
    public function getTipoCorrida()
    {
        return $this->tipoCorrida;
    }

    /**
     * @param mixed $tipoItinerario
     */
    public function setTipoItinerario($tipoItinerario)
    {
        $this->tipoItinerario = $tipoItinerario;
    }

    /**
     * @return mixed
     */
    public function getTipoItinerario()
    {
        return $this->tipoItinerario;
    }

    /**
     * @param mixed $tipoLectura
     */
    public function setTipoLectura($tipoLectura)
    {
        $this->tipoLectura = $tipoLectura;
    }

    /**
     * @return mixed
     */
    public function getTipoLectura()
    {
        return $this->tipoLectura;
    }

    /**
     * @param mixed $ubicacion
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }

    /**
     * @return mixed
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * @param mixed $aplicaIva
     */
    public function setAplicaIva($aplicaIva)
    {
        $this->aplicaIva = $aplicaIva;
    }

    /**
     * @return mixed
     */
    public function getAplicaIva()
    {
        return $this->aplicaIva;
    }

    /**
     * @param mixed $dispProgPaisano
     */
    public function setDispProgPaisano($dispProgPaisano)
    {
        $this->dispProgPaisano = $dispProgPaisano;
    }

    /**
     * @return mixed
     */
    public function getDispProgPaisano()
    {
        return $this->dispProgPaisano;
    }

    /**
     * @param mixed $marcaCorrida
     */
    public function setMarcaCorrida($marcaCorrida)
    {
        $this->marcaCorrida = $marcaCorrida;
    }

    /**
     * @return mixed
     */
    public function getMarcaCorrida()
    {
        return $this->marcaCorrida;
    }

    /**
     * @param mixed $oficinaFrontera
     */
    public function setOficinaFrontera($oficinaFrontera)
    {
        $this->oficinaFrontera = $oficinaFrontera;
    }

    /**
     * @return mixed
     */
    public function getOficinaFrontera()
    {
        return $this->oficinaFrontera;
    }

    /**
     * @param mixed $porcentajeTramoFrontera
     */
    public function setPorcentajeTramoFrontera($porcentajeTramoFrontera)
    {
        $this->porcentajeTramoFrontera = $porcentajeTramoFrontera;
    }

    /**
     * @return mixed
     */
    public function getPorcentajeTramoFrontera()
    {
        return $this->porcentajeTramoFrontera;
    }

    /**
     * @param mixed $tarifaProgPaisano
     */
    public function setTarifaProgPaisano($tarifaProgPaisano)
    {
        $this->tarifaProgPaisano = $tarifaProgPaisano;
    }

    /**
     * @return mixed
     */
    public function getTarifaProgPaisano()
    {
        return $this->tarifaProgPaisano;
    }


} 