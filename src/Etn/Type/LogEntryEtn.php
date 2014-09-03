<?php


namespace Etn\Type;


class LogEntryEtn
{

   private $lastRequest;
   private $lastResponse;
   private $lastRequestDateTime;
   private $lastResponseDateTime;

    /**
     * @param mixed $lastRequest
     */
    public function setLastRequest($lastRequest)
    {
        $this->lastRequest = $lastRequest;
    }

    /**
     * @return mixed
     */
    public function getLastRequest()
    {
        return $this->lastRequest;
    }

    /**
     * @param mixed $lastRequestDateTime
     */
    public function setLastRequestDateTime($lastRequestDateTime)
    {
        $this->lastRequestDateTime = $lastRequestDateTime;
    }

    /**
     * @return mixed
     */
    public function getLastRequestDateTime()
    {
        return $this->lastRequestDateTime;
    }

    /**
     * @param mixed $lastResponse
     */
    public function setLastResponse($lastResponse)
    {
        $this->lastResponse = $lastResponse;
    }

    /**
     * @return mixed
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }

    /**
     * @param mixed $lastResponseDateTime
     */
    public function setLastResponseDateTime($lastResponseDateTime)
    {
        $this->lastResponseDateTime = $lastResponseDateTime;
    }

    /**
     * @return mixed
     */
    public function getLastResponseDateTime()
    {
        return $this->lastResponseDateTime;
    }



} 