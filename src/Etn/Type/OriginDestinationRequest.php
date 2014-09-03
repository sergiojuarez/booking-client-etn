<?php
/**
 * Created by PhpStorm.
 * User: sergiojuarez
 * Date: 9/3/14
 * Time: 6:12 PM
 */

namespace Etn\Type;


class OriginDestinationRequest {

    private $empresaSolicita;
    private $origen;
    private $empresaViaja;

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
     * @param mixed $empresaViaja
     */
    public function setEmpresaViaja($empresaViaja)
    {
        $this->empresaViaja = $empresaViaja;
    }

    /**
     * @return mixed
     */
    public function getEmpresaViaja()
    {
        return $this->empresaViaja;
    }

    /**
     * @param mixed $origen
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;
    }

    /**
     * @return mixed
     */
    public function getOrigen()
    {
        return $this->origen;
    }




} 