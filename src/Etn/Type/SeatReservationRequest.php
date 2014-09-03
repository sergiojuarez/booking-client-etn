<?php


namespace Etn\Type;


class SeatReservationRequest {

    private $claveOrigen;
    private $claveDestino;
    private $fechaCorrida;
    private $hora;
    private $numAdulto;
    private $numNino;
    private $numInsen;
    private $numEstudiante;
    private $numMaestro;
    private $numCorrida;
    private $asientos;
    private $nombre;
    private $folioReservacion;
    private $cveEmpresaSolicita;
    private $cveEmpresaViaje;
    private $numPromocion;
    private $cadenaPromocion;
    private $tipoTerminal;
    private $tipoCliente;
    private $tipoOperacion;
    private $esIntercambio;
    private $claveOperacionOriginal;
    private $consecutivoOperOriginal;
    private $numProgPaisano;
    private $esBoletoFrontera;
    private $datosBoletosFrontera;

    /**
     * @param mixed $asientos
     */
    public function setAsientos($asientos)
    {
        $this->asientos = $asientos;
    }

    /**
     * @return mixed
     */
    public function getAsientos()
    {
        return $this->asientos;
    }

    /**
     * @param mixed $cadenaPromocion
     */
    public function setCadenaPromocion($cadenaPromocion)
    {
        $this->cadenaPromocion = $cadenaPromocion;
    }

    /**
     * @return mixed
     */
    public function getCadenaPromocion()
    {
        return $this->cadenaPromocion;
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
     * @param mixed $claveOperacionOriginal
     */
    public function setClaveOperacionOriginal($claveOperacionOriginal)
    {
        $this->claveOperacionOriginal = $claveOperacionOriginal;
    }

    /**
     * @return mixed
     */
    public function getClaveOperacionOriginal()
    {
        return $this->claveOperacionOriginal;
    }

    /**
     * @param mixed $claveOrigen
     */
    public function setClaveOrigen($claveOrigen)
    {
        $this->claveOrigen = $claveOrigen;
    }

    /**
     * @return mixed
     */
    public function getClaveOrigen()
    {
        return $this->claveOrigen;
    }

    /**
     * @param mixed $consecutivoOperOriginal
     */
    public function setConsecutivoOperOriginal($consecutivoOperOriginal)
    {
        $this->consecutivoOperOriginal = $consecutivoOperOriginal;
    }

    /**
     * @return mixed
     */
    public function getConsecutivoOperOriginal()
    {
        return $this->consecutivoOperOriginal;
    }

    /**
     * @param mixed $cveEmpresaSolicita
     */
    public function setCveEmpresaSolicita($cveEmpresaSolicita)
    {
        $this->cveEmpresaSolicita = $cveEmpresaSolicita;
    }

    /**
     * @return mixed
     */
    public function getCveEmpresaSolicita()
    {
        return $this->cveEmpresaSolicita;
    }

    /**
     * @param mixed $cveEmpresaViaje
     */
    public function setCveEmpresaViaje($cveEmpresaViaje)
    {
        $this->cveEmpresaViaje = $cveEmpresaViaje;
    }

    /**
     * @return mixed
     */
    public function getCveEmpresaViaje()
    {
        return $this->cveEmpresaViaje;
    }

    /**
     * @param mixed $datosBoletosFrontera
     */
    public function setDatosBoletosFrontera($datosBoletosFrontera)
    {
        $this->datosBoletosFrontera = $datosBoletosFrontera;
    }

    /**
     * @return mixed
     */
    public function getDatosBoletosFrontera()
    {
        return $this->datosBoletosFrontera;
    }

    /**
     * @param mixed $esBoletoFrontera
     */
    public function setEsBoletoFrontera($esBoletoFrontera)
    {
        $this->esBoletoFrontera = $esBoletoFrontera;
    }

    /**
     * @return mixed
     */
    public function getEsBoletoFrontera()
    {
        return $this->esBoletoFrontera;
    }

    /**
     * @param mixed $esIntercambio
     */
    public function setEsIntercambio($esIntercambio)
    {
        $this->esIntercambio = $esIntercambio;
    }

    /**
     * @return mixed
     */
    public function getEsIntercambio()
    {
        return $this->esIntercambio;
    }

    /**
     * @param mixed $fechaCorrida
     */
    public function setFechaCorrida($fechaCorrida)
    {
        $this->fechaCorrida = $fechaCorrida;
    }

    /**
     * @return mixed
     */
    public function getFechaCorrida()
    {
        return $this->fechaCorrida;
    }

    /**
     * @param mixed $folioReservacion
     */
    public function setFolioReservacion($folioReservacion)
    {
        $this->folioReservacion = $folioReservacion;
    }

    /**
     * @return mixed
     */
    public function getFolioReservacion()
    {
        return $this->folioReservacion;
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
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $numAdulto
     */
    public function setNumAdulto($numAdulto)
    {
        $this->numAdulto = $numAdulto;
    }

    /**
     * @return mixed
     */
    public function getNumAdulto()
    {
        return $this->numAdulto;
    }

    /**
     * @param mixed $numCorrida
     */
    public function setNumCorrida($numCorrida)
    {
        $this->numCorrida = $numCorrida;
    }

    /**
     * @return mixed
     */
    public function getNumCorrida()
    {
        return $this->numCorrida;
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
     * @param mixed $numProgPaisano
     */
    public function setNumProgPaisano($numProgPaisano)
    {
        $this->numProgPaisano = $numProgPaisano;
    }

    /**
     * @return mixed
     */
    public function getNumProgPaisano()
    {
        return $this->numProgPaisano;
    }

    /**
     * @param mixed $numPromocion
     */
    public function setNumPromocion($numPromocion)
    {
        $this->numPromocion = $numPromocion;
    }

    /**
     * @return mixed
     */
    public function getNumPromocion()
    {
        return $this->numPromocion;
    }

    /**
     * @param mixed $tipoCliente
     */
    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;
    }

    /**
     * @return mixed
     */
    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }

    /**
     * @param mixed $tipoOperacion
     */
    public function setTipoOperacion($tipoOperacion)
    {
        $this->tipoOperacion = $tipoOperacion;
    }

    /**
     * @return mixed
     */
    public function getTipoOperacion()
    {
        return $this->tipoOperacion;
    }

    /**
     * @param mixed $tipoTerminal
     */
    public function setTipoTerminal($tipoTerminal)
    {
        $this->tipoTerminal = $tipoTerminal;
    }

    /**
     * @return mixed
     */
    public function getTipoTerminal()
    {
        return $this->tipoTerminal;
    }



} 