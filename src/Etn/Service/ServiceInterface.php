<?php

namespace Etn\Service;

use  Etn\Type\BusScheduleRequest;
use  Etn\Type\SeatRequest;
use  Etn\Type\SeatReservationRequest;
use  Etn\Type\ConfirmTicketRequest;


interface ServiceInterface
{

    public function fetchPlaceMappings();
    public function fetchRoutes();
    public function getBusSchedules(BusScheduleRequest $busScheduleRequest);
    public function getStops();
    public function getSeatMap(SeatRequest $seatRequest);
    public function reservationSeat(SeatReservationRequest $seatReservationRequest);
    public function cancelReservationSeat(SeatReservationRequest $seatReservationRequest);
    public function buyTicket(ConfirmTicketRequest $confirmTicketRequest);
    public function cancelTicket(ConfirmTicketRequest $confirmTicketRequest);


}
