<?php

class Controller
{
    //fields
    private $_f3;

    //constructor
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    //routing to home page which is GET/
    function home()
    {
        $view = new Template();
        echo $view->render("views/home.html");
    }

    //routing to home page which is GET/ hours
    function hours()
    {

        $this->_f3->set("inTimes", DataLayer::getInTime());
        echo $_POST['inTimes'];
        $view = new Template();
        echo $view->render("views/hours.html");
    }




//    function timeToDecimal($time) {
//     this function will serve as a converter from time to decimals.
//        // Split the time into hours and minutes
//        list($hours, $minutes) = explode(':', $time);
//
//        // Convert hours and minutes to decimal
//        $decimalHours = $hours + ($minutes / 60);
//
//        return $decimalHours;
//    }
}