<?php

namespace Etn\Service;

use  Etn\Type\BusScheduleRequest;


interface ServiceInterface
{

    public function fetchPlaceMappings();
    public function fetchRoutes();
    public function getBusSchedules(BusScheduleRequest $busScheduleRequest);
    public function getStops();
    public function getSeatMap();
    public function reservationSeat();
    public function cancelReservationSeat();
    public function buyTicket();
    public function cancelTicket();


}
