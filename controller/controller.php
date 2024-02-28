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
        //part 2, once submitted. the form will turn into post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //initialize variables
            $startTime = "";
            $outTime = "";
            $sales = "";
            $tips = "";
            // check to see if in and out time is set
            if(isset($_POST['startTime']) and Validate::validInTime($_POST['startTime'])) {
                $startTime = $_POST['startTime'];
//                echo $startTime;
            }
            else{
                $this->_f3->set('error["startTime"]' , "invalid in time");
            }
//            this will check for the out time
            if(isset($_POST['outTime']) and Validate::validOutTime($_POST['outTime'])) {
                $outTime = $_POST['outTime'];
            }
            else{
                $this->_f3->set('error["outTime"]' , "invalid out time");
            }

//            if there is no error, it will put the value into the payout class.
            if(empty($this->_f3->get('error')))
            {
                $payout = new Payout($startTime, $outTime);
                $this->_f3->set('SESSION.payout' , $payout);

                $this->_f3->reroute('summary');
            }

        }


       //part one, it will go here first to display the informations before it goes to post
        $this->_f3->set("inTimes", DataLayer::getInTime());
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