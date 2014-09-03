<?php

namespace Etn\Service;

use  Etn\Type\BusScheduleRequest;
use  Etn\Type\SeatRequest;
use  Etn\Type\SeatReservationRequest;
use  Etn\Type\ConfirmTicketRequest;
use  Etn\Type\OriginDestinationRequest;


interface ServiceInterface
{

    public function fetchPlaceMappings(OriginDestinationRequest $originDestinationRequest);
    public function fetchRoutes(OriginDestinationRequest $originDestinationRequest);
    public function getBusSchedules(BusScheduleRequest $busScheduleRequest);
    public function getStops();
    public function getSeatMap(SeatRequest $seatRequest);
    public function reservationSeat(SeatReservationRequest $seatReservationRequest);
    public function cancelReservationSeat(SeatReservationRequest $seatReservationRequest);
    public function buyTicket(ConfirmTicketRequest $confirmTicketRequest);
    public function cancelTicket(ConfirmTicketRequest $confirmTicketRequest);


}
