<?php


class Payout
{

    // fields
    private $_inTime;
    private $_outTime;
    private $_sales;
    private $_tips;

    //constructor
    function __construct ($inTime = "", $outTime ="", $sales="", $tips = "")
    {
        $this->_inTime = $inTime;
        $this->_outTime = $outTime;
        $this->_sales = $sales;
        $this->_tips = $tips;
    }

//    getters
    public function getInTime()
    {
        return $this->_inTime;
    }

    public function getOutTime()
    {
        return $this->_outTime;
    }

    public function getSales()
    {
        return $this->_sales;
    }

    public function getTips()
    {
        return $this->_tips;
    }

    // setters
    public function setInTime($inTime)
    {
        $this->_inTime = $inTime;
    }

    public function setOutTime($outTime)
    {
        $this->_outTime = $outTime;
    }

    public function setSales($sales)
    {
        $this->_sales = $sales;
    }

    public function setTips($tips)
    {
        $this->_tips = $tips;
    }


}
