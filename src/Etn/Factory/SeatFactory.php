<?php
/**
 * Created by PhpStorm.
 * User: sergiojuarez
 * Date: 9/2/14
 * Time: 11:31 AM
 */

namespace Etn\Factory;
use Etn\Type\Seat;


class SeatFactory {

    public static function create($params)
    {
        $Seat = new Seat();


        $Seat->setSeatNumber($params['seatNumber']);
        $Seat->setXPos($params['xPos']);
        $Seat->setYPos($params['yPos']);
        $Seat->setFloor($params['floor']);
        $Seat->setIsAvailable($params['isAvailable']);

        return $Seat;
    }

} 