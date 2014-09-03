<?php


namespace Etn\Type;


class Seat {

    private $seatNumber;
    private $xPos;
    private $yPos;
    private $floor;
    private $isAvailable;

    /**
     * @param mixed $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param mixed $isAvailable
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return mixed
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * @param mixed $seatNumber
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }

    /**
     * @return mixed
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * @param mixed $xPos
     */
    public function setXPos($xPos)
    {
        $this->xPos = $xPos;
    }

    /**
     * @return mixed
     */
    public function getXPos()
    {
        return $this->xPos;
    }

    /**
     * @param mixed $yPos
     */
    public function setYPos($yPos)
    {
        $this->yPos = $yPos;
    }

    /**
     * @return mixed
     */
    public function getYPos()
    {
        return $this->yPos;
    }









} 