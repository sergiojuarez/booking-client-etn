<?php
/**
 * Created by PhpStorm.
 * User: sergiojuarez
 * Date: 9/1/14
 * Time: 1:35 PM
 */

namespace Etn\Validations;

use Etn\Exceptions\ResponseException;


class Validate {

    public static function validOrigins($places)
    {
        if (!isset($places->ObtenerLocalidadesActivasResult)
            || !isset($places->ObtenerLocalidadesActivasResult->any)
        ) {
            throw new ResponseException("Origins empty");
        }
    }

    public static function validDestinations($destination)
    {
        if (!isset($destination->ConsultarDestinosDisponiblesResult)
        ) {
            throw new ResponseException("Destinations is empty");
        }
    }






} 