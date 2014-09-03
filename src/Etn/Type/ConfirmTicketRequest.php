<?php


namespace Etn\Type;


class ConfirmTicketRequest
{
    private $cveOrigen;
    private $cveCorrida;
    private $fechaCorrida;
    private $folioReservacion;
    private $cveEmpresaSolicita;
    private $cveEmpresaViaje;
    private $cveSucursalExterna;
    private $cveOficinaExterna;
    private $fechaContableExterna;
    private $formaPagoExterna;
    private $formaPagoTemp;
    private $sesion;

    /**
     * @param mixed $cveCorrida
     */
    public function setCveCorrida($cveCorrida)
    {
        $this->cveCorrida = $cveCorrida;
    }

    /**
     * @return mixed
     */
    public function getCveCorrida()
    {
        return $this->cveCorrida;
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
     * @param mixed $cveOficinaExterna
     */
    public function setCveOficinaExterna($cveOficinaExterna)
    {
        $this->cveOficinaExterna = $cveOficinaExterna;
    }

    /**
     * @return mixed
     */
    public function getCveOficinaExterna()
    {
        return $this->cveOficinaExterna;
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
     * @param mixed $cveSucursalExterna
     */
    public function setCveSucursalExterna($cveSucursalExterna)
    {
        $this->cveSucursalExterna = $cveSucursalExterna;
    }

    /**
     * @return mixed
     */
    public function getCveSucursalExterna()
    {
        return $this->cveSucursalExterna;
    }

    /**
     * @param mixed $fechaContableExterna
     */
    public function setFechaContableExterna($fechaContableExterna)
    {
        $this->fechaContableExterna = $fechaContableExterna;
    }

    /**
     * @return mixed
     */
    public function getFechaContableExterna()
    {
        return $this->fechaContableExterna;
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
     * @param mixed $formaPagoExterna
     */
    public function setFormaPagoExterna($formaPagoExterna)
    {
        $this->formaPagoExterna = $formaPagoExterna;
    }

    /**
     * @return mixed
     */
    public function getFormaPagoExterna()
    {
        return $this->formaPagoExterna;
    }

    /**
     * @param mixed $formaPagoTemp
     */
    public function setFormaPagoTemp($formaPagoTemp)
    {
        $this->formaPagoTemp = $formaPagoTemp;
    }

    /**
     * @return mixed
     */
    public function getFormaPagoTemp()
    {
        return $this->formaPagoTemp;
    }

    /**
     * @param mixed $sesion
     */
    public function setSesion($sesion)
    {
        $this->sesion = $sesion;
    }

    /**
     * @return mixed
     */
    public function getSesion()
    {
        return $this->sesion;
    }



} 