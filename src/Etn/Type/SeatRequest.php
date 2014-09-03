<?php
/**
 * Created by PhpStorm.
 * User: sergiojuarez
 * Date: 9/1/14
 * Time: 9:45 PM
 */

namespace Etn\Type;


class SeatRequest
{

    private $empresaSolicita;
    private $claveCorrida;
    private $fechaCorrida;
    private $empresaCorrida;
    private $claveOrigen;
    private $claveDestino;


    /**
     * @param mixed $claveCorrida
     */
    public function setClaveCorrida($claveCorrida)
    {
        $this->claveCorrida = $claveCorrida;
    }

    /**
     * @return mixed
     */
    public function getClaveCorrida()
    {
        return $this->claveCorrida;
    }

    /**
     * @param mixed $empresaSolicita
     */
    public function setEmpresaSolicita($empresaSolicita)
    {
        $this->empresaSolicita = $empresaSolicita;
    }

    /**
     * @return mixed
     */
    public function getEmpresaSolicita()
    {
        return $this->empresaSolicita;
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



} 