<?php


namespace Etn\Type;


class BusScheduleRequest {

    private $cveOrigen;
    private $cveDestino;
    private $fecha;
    private $hora;
    private $tipoServicio;
    private $cveEmpresa;
    private $numAdultos;
    private $numNino;
    private $numInsen;
    private $numEstudiante;
    private $numMaestro;
    private $multiEmpresa;
    private $noProgramaPaisano;
    private $horaFin;

    /**
     * @param mixed $cveDestino
     */
    public function setCveDestino($cveDestino)
    {
        $this->cveDestino = $cveDestino;
    }

    /**
     * @return mixed
     */
    public function getCveDestino()
    {
        return $this->cveDestino;
    }

    /**
     * @param mixed $cveEmpresa
     */
    public function setCveEmpresa($cveEmpresa)
    {
        $this->cveEmpresa = $cveEmpresa;
    }

    /**
     * @return mixed
     */
    public function getCveEmpresa()
    {
        return $this->cveEmpresa;
    }

    /**
     * @param mixed $cveOrigen
     */
    public function setCveOrigen($cveOrigen)
    {
        $this->cveOrigen = $cveOrigen;
    }

    /**
     * @return mixed
     */
    public function getCveOrigen()
    {
        return $this->cveOrigen;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha(\DateTime $fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $horaFin
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;
    }

    /**
     * @return mixed
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * @param mixed $multiEmpresa
     */
    public function setMultiEmpresa($multiEmpresa)
    {
        $this->multiEmpresa = $multiEmpresa;
    }

    /**
     * @return mixed
     */
    public function getMultiEmpresa()
    {
        return $this->multiEmpresa;
    }

    /**
     * @param mixed $noProgramaPaisano
     */
    public function setNoProgramaPaisano($noProgramaPaisano)
    {
        $this->noProgramaPaisano = $noProgramaPaisano;
    }

    /**
     * @return mixed
     */
    public function getNoProgramaPaisano()
    {
        return $this->noProgramaPaisano;
    }

    /**
     * @param mixed $numAdultos
     */
    public function setNumAdultos($numAdultos)
    {
        $this->numAdultos = $numAdultos;
    }

    /**
     * @return mixed
     */
    public function getNumAdultos()
    {
        return $this->numAdultos;
    }

    /**
     * @param mixed $numEstudiante
     */
    public function setNumEstudiante($numEstudiante)
    {
        $this->numEstudiante = $numEstudiante;
    }

    /**
     * @return mixed
     */
    public function getNumEstudiante()
    {
        return $this->numEstudiante;
    }

    /**
     * @param mixed $numInsen
     */
    public function setNumInsen($numInsen)
    {
        $this->numInsen = $numInsen;
    }

    /**
     * @return mixed
     */
    public function getNumInsen()
    {
        return $this->numInsen;
    }

    /**
     * @param mixed $numMaestro
     */
    public function setNumMaestro($numMaestro)
    {
        $this->numMaestro = $numMaestro;
    }

    /**
     * @return mixed
     */
    public function getNumMaestro()
    {
        return $this->numMaestro;
    }

    /**
     * @param mixed $numNino
     */
    public function setNumNino($numNino)
    {
        $this->numNino = $numNino;
    }

    /**
     * @return mixed
     */
    public function getNumNino()
    {
        return $this->numNino;
    }

    /**
     * @param mixed $tipoServicio
     */
    public function setTipoServicio($tipoServicio)
    {
        $this->tipoServicio = $tipoServicio;
    }

    /**
     * @return mixed
     */
    public function getTipoServicio()
    {
        return $this->tipoServicio;
    }



} 