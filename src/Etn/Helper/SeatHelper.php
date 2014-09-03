<?php
/**
 * Created by PhpStorm.
 * User: sergiojuarez
 * Date: 9/2/14
 * Time: 11:44 AM
 */

namespace Etn\Helper;

use Etn\Type\Seat;
use Etn\Factory\SeatFactory;


class SeatHelper
{


    function __construct()
    {

    }


    public function normalizeSeatsMap($string)
    {
        $totalTokensPerFloor = 54;
        $totalSeatsPerRow = 4;
        $lastRowOnAFloor = 13;

        list (
            $mapString,
            $numberOfRowsString,
            $numberOfRowsString2,
            $errorMessage
            ) = explode('|', $string);


        $numberOfRows = explode('|', $numberOfRowsString);

        $removedSpaceAndCharacterString = preg_replace('/\s/', '', $mapString);

        $allTokens = explode(',', $removedSpaceAndCharacterString);

        $floorTokens = array_chunk($allTokens, $totalTokensPerFloor);


        unset($floorTokens[2]);

        foreach ($floorTokens as $floor => $tokens) {
            foreach ($tokens as $position => $token) {

                $seatNumber = intval(substr($token, 0, 3));
                $row = intval($position / 4);
                $column = $position % 4;


                $isLastRowOnFloor = intval($position / $totalSeatsPerRow + 1) >=
                    $lastRowOnAFloor;


                $lastRowColumn = ($isLastRowOnFloor)?
                    ($position - ($totalSeatsPerRow  * ($lastRowOnAFloor-1))) % 5:
                    false;

                $seats[$seatNumber] = array(
                    'floor' => $floor,
                    'x' => ($isLastRowOnFloor)? $lastRowOnAFloor : $row,
                    'y' => ($isLastRowOnFloor)? $lastRowColumn : $column,
                );

            }
        }
        unset($seats[0]);
        $availableSeatsMap = array(
            'seats' => $seats,
            'numberOfRows' => $numberOfRows,
            'errorMessage' => $errorMessage

        );

        return $availableSeatsMap;
    }

    public  function normalizeAvailableSeats($string)
    {

        list($seatsOcupancy, $errorNo, $errorMsg) = explode('|', $string);
        $ocupancyArr = str_split($seatsOcupancy);

        foreach ($ocupancyArr as $seat => $ocupied) {
            $availability[$seat + 1] = ($ocupied == 0)? true : false;
        }

        $availableSeats = array(
            'availability' => $availability,
            'errorNumber' => $errorNo,
            'errorMessage' => $errorMsg
        );

        return $availableSeats;
    }

    public function mergeAvailableSeatsWithMap($seatsAvailable, $seatsMap)
    {
        $seats = array();

        foreach ($seatsMap as $index => $seat) {

            $seatParams = array(
                'seatNumber' => $index,
                'xPos' => $seat['x'],
                'yPos' => $seat['y'],
                'floor' => $seat['floor'],
                'isAvailable' => $seatsAvailable[$index],
            );

            $seats[] = SeatFactory::create($seatParams);
        }

        return $seats;
    }




}