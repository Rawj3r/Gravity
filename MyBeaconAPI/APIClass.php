<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of APIClass used manipulate the MyEdBeacon database via the stored procudures.
 *
 * @author Nkosi RN
 */
class APIClass {

//Connection********************************************************************
// Create connection to the database
    public function connector() {

        $servername = "whm.empirestate.co.za";
        $username = "Simba_ES";
        $password = "simbaisawinner!123";
        $dbURL = "EDMyBeacon";

        $conn = new mysqli($servername, $username, $password, $dbURL);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }



        public function spAddPersonGymVisit_($userID, $uuid, $deviceUDID, $timeIn) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddPersonGymVisit_(?,?,?,?)");
            $query->bind_param('ssss', $userID, $uuid, $deviceUDID, $timeIn);

            if ($query->execute()) {

                $query->bind_result($respond);

            $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddPersonGymVisit. " . $ex->getMessage();
        }
        
    }
    
    
//******************************************************************************
//Call stored procedures from the MyEdBeacon Database via php methods***********
//
//Insert************************************************************************

    /**
     * Insert a new Beacon record into the Beacon table in the MyEdBeacon
     * @param type $beacon_type_id.
     * @param type $uuid.
     * @param type $major_id.
     * @param type $minor_id.
     */
    public function spAddBeacon($beacon_type_id, $uuid, $major_id, $minor_id) {
        $connection = $this->connector();

        try {
            
$query = $connection->prepare("CALL spAddBeacon(?,?,?,?)");
            $query->bind_param('ssss', $beacon_type_id, $uuid, $major_id, $minor_id);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }}

                $query->close();
                return $temp;
        } catch (Exception $ex) {
            echo "Error spAddBeacon. " . $ex->getMessage();
        }
    }



    /**
     * Insert a new BeaconType record into the BeaconType table in the MyEdBeacon
     * @param type $name.
     */
    public function spAddBeaconType($name) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddBeaconType(?)");
            $query->bind_param('s', $name);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddBeaconType. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new BeaconDeviceOSType record into the BeaconDeviceOSType table in the MyEdBeacon
     * @param type $name.
     * @param type $version.
     */
    public function spAddDeviceOSType($name, $version) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddDeviceOSType(?,?)");
            $query->bind_param('ss', $name, $version);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddDeviceOSType. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddGym record into the AddGym table in the MyEdBeacon
     * @param type $gymTypeID.
     * @param type $name.
     */
    public function spAddGym($gymTypeID, $name) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddGym(?,?)");
            $query->bind_param('ss', $gymTypeID, $name);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddGym. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddGymBeacon record into the AddGymBeacon table in the MyEdBeacon
     * @param type $gymID.
     * @param type $beaconID.
     */
    public function spAddGymBeacon($gymID, $beaconID) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddGymBeacon(?,?)");
            $query->bind_param('ss', $gymID, $beaconID);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddGymBeacon. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddGymDeviceMessage record into the AddGymDeviceMessage table in the MyEdBeacon
     * @param type $gymID.
     * @param type $beaconTypeID.
     * @param type $message.
     */
    public function spAddGymDeviceMessage($gymID, $beaconTypeID, $message) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddGymDeviceMessage(?,?,?)");
            $query->bind_param('sss', $gymID, $beaconTypeID, $message);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddGymDeviceMessage. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddGymMessage record into the AddGymMessage table in the MyEdBeacon
     * @param type $gymID.
     * @param type $personDeviceInfoID.
     * @param type $title.
     * @param type $message.
     */
    public function spAddGymMessage($gymID, $personDeviceInfoID, $title, $message) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddGymMessage(?,?,?,?)");
            $query->bind_param('ssss', $gymID, $personDeviceInfoID, $title, $message);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddGymMessage. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddGymMessageType record into the AddGymMessageType table in the MyEdBeacon
     * @param type $gymID.
     * @param type $messageTypeID.
     */
    public function spAddGymMessageType($gymID, $messageTypeID) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddGymMessageType(?,?)");
            $query->bind_param('ss', $gymID, $messageTypeID);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddGymMessageType. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddGymType record into the AddGymType table in the MyEdBeacon
     * @param type $name.
     */
    public function spAddGymType($name) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddGymType(?)");
            $query->bind_param('s', $name);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddGymType. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddGymVisitFeedback record into the AddGymVisitFeedback table in the MyEdBeacon
     * @param type $userID.
     * @param type $mood.
     * @param type $message.
     */
    public function spAddGymVisitFeedback($userID, $mood, $message) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddGymVisitFeedback(?,?,?)");
            $query->bind_param('sss', $userID, $mood, $message);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddGymVisitFeedback. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddMessageType record into the AddMessageType table in the MyEdBeacon
     * @param type $name.
     */
    public function spAddMessageType($name) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddMessageType(?)");
            $query->bind_param('s', $name);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddMessageType. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddPerson record into the AddPerson table in the MyEdBeacon
     * @param type $wellMatixPersonID.
     * @param type $name.
     * @param type $surname.
     * @param type $emailAddress.
     */
    public function spAddPerson($wellMatixPersonID, $name, $surname, $emailAddress) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddPerson(?,?,?,?)");
            $query->bind_param('ssss', $wellMatixPersonID, $name, $surname, $emailAddress);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddPerson. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddPersonDeviceInfo record into the AddPersonDeviceInfo table in the MyEdBeacon
     * @param type $personID.
     * @param type $mobileNumber.
     * @param type $deviceBrand.
     * @param type $deviceModel.
     * @param type $oSTypeID.
     * @param type $deviceUDID.
     */
    public function spAddPersonDeviceInfo($personID, $mobileNumber, $deviceBrand, $deviceModel, $oSTypeID, $deviceUDID) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddPersonDeviceInfo(?,?,?,?,?,?)");
            $query->bind_param('ssssss', $personID, $mobileNumber, $deviceBrand, $deviceModel, $oSTypeID, $deviceUDID);

            if ($query->execute()) {
                $query->bind_result($respond);
                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddPersonDeviceInfo. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddPersonGymMembership record into the AddPersonGymMembership table in the MyEdBeacon
     * @param type $personID.
     * @param type $gymID.
     * @param type $membershipNumber.
     */
    public function spAddPersonGymMembership($personID, $gymID, $membershipNumber) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddPersonGymMembership(?,?,?)");
            $query->bind_param('sss', $personID, $gymID, $membershipNumber);

            if ($query->execute()) {
                $query->bind_result($respond);

            $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddPersonGymMembership. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddPersonGymMembershipDeviceInfo record into the AddPersonGymMembershipDeviceInfo table in the MyEdBeacon
     * @param type $personGymMembershipID.
     * @param type $personDeviceInfoID.
     */
    public function spAddPersonGymMembershipDeviceInfo($personGymMembershipID, $personDeviceInfoID) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddPersonGymMembershipDeviceInfo(?,?)");
            $query->bind_param('ss', $personGymMembershipID, $personDeviceInfoID);

            if ($query->execute()) {
                
                $query->bind_result($respond);

                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
            } else {
                echo "failed";
            }
            
            
        }
         catch (Exception $ex) {
            echo "Error spAddPersonGymMembershipDeviceInfo. " . $ex->getMessage();
        }
    }

    /**
     * Insert a new AddPersonGymVisit record into the AddPersonGymVisit table in the MyEdBeacon
     * @param type $userID.
     * @param type $uuid.
     * @param type $deviceUDID.
     * @param type $timeIn.
     * @param type $timeOut.
     */
    public function spAddPersonGymVisit($userID, $uuid, $deviceUDID, $timeIn, $timeOut) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spAddPersonGymVisit(?,?,?,?,?)");
            $query->bind_param('sssss', $userID, $uuid, $deviceUDID, $timeIn, $timeOut);

            if ($query->execute()) {

                $query->bind_result($respond);

            $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "Respond" => $respond
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spAddPersonGymVisit. " . $ex->getMessage();
        }
        
    }

//******************************************************************************
//Select************************************************************************

    /**
     * Select a Device Token of a specific email address
     * @param type $emailAddress.
     * @return array $hold
     */
    function spGetDeviceTokenByEmailAddress($emailAddress) {
        $connection = $this->connector();
        $DeviceTokenID = null;
        try {
            $query = $connection->prepare("CALL spGetDeviceTokenByEmailAddress(?)");
            $query->bind_param('s', $emailAddress);

            if ($query->execute()) {

                $query->bind_result($DeviceTokenID);

                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                "DeviceTokenID" => $DeviceTokenID
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
        }
        } catch (Exception $ex) {
            echo 'Error spGetDeviceTokenByEmailAddress. ' . $ex->getMessage();
        }
    }

    /**
     * Select Gym Messages of a specific user ID
     * @param type $userID.
     * @return array $hold
     */
    function spGetGymMessages($userID) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spGetGymMessages(?)");
            $query->bind_param('s', $userID);

            if ($query->execute()) {

                $query->bind_result($Name, $Title, $Message, $DateCreated);

                $temp = array();
                
                while($query->fetch()){

                array_push($temp, array(
                                'Gym' => $Name,
                                'Title' => $Title,
                                'Message' => $Message,
                                'Date Created' => $DateCreated
                                ));
                //echo 'success';
            }

                //echo 'success';

                $query->close();
                return $temp;
            } else {
                echo 'failed';
            }
            
        } catch (Exception $ex) {
            echo 'Error spGetGymMessages. ' . $ex->getMessage();
        }
    }

    /**
     * Select Gym Visit Dates of a specific user ID
     * @param type $userID.
     * @return array $hold
     */
    function spGetGymVisitDates($userID) {
        $connection = $this->connector();

        try {
            $query = $connection->prepare("CALL spGetGymVisitDates(?)");
            $query->bind_param('s', $userID);

            if ($query->execute()) {

                $query->bind_result($Name, $TimeIn, $TimeOut);
                
                $temp = array();
                
                while($query->fetch()){


                array_push($temp, array(
                                'Gym' => $Name,
                                'TimeIn' => $TimeIn,
                                'TimeOut' => $TimeOut
                                ));
                //echo 'success';
            }
            $query->close();
            return $temp;
            } else {
                echo 'failed';
            }
            
        } catch (Exception $ex) {
            echo 'Error spGetGymVisitDates. ' . $ex->getMessage();
        }
    }

    /**
     * Select Gym Visit Dates of a specific user ID
     * Get the Visit count, avarage visit duration, last visit date
     * @param type $userID.
     * @return array $hold
     */
    function spSummary($userID,$period) {
        $connection = $this->connector();
        date_default_timezone_set('Africa/Johannesburg');

        try {
            $query = $connection->prepare("CALL spSummary(?)");
            $query->bind_param('s', $userID);

            if ($query->execute()) {

                $query->bind_result($Name, $TimeIn, $TimeOut);

                $hold = array();

                //Visit count
                $count = 0;
                $sumDate = 0;
                $diff = 0;
                $avarage = 0;
                //last visit date
                $displayTime = 0;
                
                while($query->fetch()){
                
                $displayTime = $TimeOut;
                //avarage visit duration
                if($period == 0){  
                    $start_week = strtotime("last sunday midnight");
                    $end_week = strtotime("next saturday",$start_week);
                    $start_week = date("Y-m-d H:i:s",$start_week);
                    $end_week = date("Y-m-d H:i:s",$end_week);
                    if($TimeIn >= $start_week && $TimeOut <= $end_week){
                        $count++;

                        //Our dates
                        $date1 = date($TimeIn);
                        $date2 = date($TimeOut);
                        $date1Timestamp = strtotime($date1);
                        $date2Timestamp = strtotime($date2);
                        
                        //Calculate the difference.
                        $difference = $date2Timestamp - $date1Timestamp;
                        // echo $difference;
                        
                       $sumDate =$sumDate + $difference;
                       
                    } 
                }elseif ($period == 1) {
                    $start_month = strtotime('first day of this month');
                    $end_month = strtotime('last day of this month');   
                    $start_month =  date('Y-m-d H:i:s', ($start_month));
                    $end_month = date('Y-m-d H:i:s', ($end_month));
                    if($TimeIn >= $start_month && $TimeOut <= $end_month){
                        $count++;

                       //Our dates
                        $date1 = date($TimeIn);
                        $date2 = date($TimeOut);
                        $date1Timestamp = strtotime($date1);
                        $date2Timestamp = strtotime($date2);
                        
                        //Calculate the difference.
                        $difference = $date2Timestamp - $date1Timestamp;
                        // echo $difference;
                        
                       $sumDate =$sumDate + $difference;
                    }
                }elseif ($period == 2){
                    $count++;
                    $date1 = $TimeIn;
                        //Our dates
                        $date1 = date($TimeIn);
                        $date2 = date($TimeOut);
                        $date1Timestamp = strtotime($date1);
                        $date2Timestamp = strtotime($date2);
                        
                        //Calculate the difference.
                        $difference = $date2Timestamp - $date1Timestamp;
                        // echo $difference;
                        
                       $sumDate =$sumDate + $difference;
                    }
                }

                $avarage = avg($count,$sumDate);
                $avarage = $avarage;

                if($avarage > 0){
                    $time = secondsToTime($avarage);
                    array_push($hold, array('VisitCount' => $count,
                            'AvgVisitDuration' => $time,
                            'LastVisitDate' => $displayTime));
                }else{
                    $time = 0;
                }
                $query->close();
                return $hold;
            } else {
                echo 'failed';
            }
            
        } catch (Exception $ex) {
            echo 'Error spGetGymVisitDates. ' . $ex->getMessage();
        }
    }

//******************************************************************************
//Update************************************************************************

    /**
     * Update Login user
     * @param type $deviceUDID.
     * @param type $username.
     * @param type $password.
     */
    function spLoginUser($deviceUDID, $username, $password) {
        $connection = $this->connector();
        try {
            $query = $connection->prepare("CALL spLoginUser(?,?,?)");

            $query->bind_param('sss', $deviceUDID, $username, $password);

            if ($query->execute()) {

                $query->bind_result($respond);

            $query->fetch();
            $hold = $arrayName = array('UserID' => $respond,
                                'IsSuccess' => true,
                                'Message' => "Success");
            $query->close();
            return $hold;
        }} catch (Exception $ex) {
            echo "Error spLoginUser..." . $ex->getMessage();
        }
        
    }

    /**
     * Update Registerd Push ID
     * @param type $userID.
     * @param type $deviceUDID.
     * @param type $deviceTokenID.
     */
    function spRegisterPushID($userID, $deviceUDID, $deviceTokenID) {
        $connection = $this->connector();

        //$result = $connection->query("SELECT * FROM")

        try {
            $query = $connection->prepare("CALL spRegisterPushID(?,?,?)");

            $query->bind_param('sss', $userID, $deviceUDID, $deviceTokenID);

            if ($query->execute()) {

                $query->bind_result($rowCount);
                $temp = array();

            while($query->fetch()){

                array_push($temp, array(
                                "rowCount" => $rowCount
                                ));
                //echo 'success';
            }
            $query->close();
            return $temp;
        }
        } catch (Exception $ex) {
            echo "Error spRegisterPushID..." . $ex->getMessage();
        }
    }
}
//******************************************************************************
//functions
    function avg($count,$sum){

        $avg = @($sum/$count);

        if($sum === 0){
            $time = null;
        }
        return $avg;
    }
    function secondsToTime($seconds){
        // extract hours
        $hours = floor($seconds / (60 * 60));
 
        // extract minutes
        $divisor_for_minutes = $seconds % (60 * 60);
        $minutes = floor($divisor_for_minutes / 60);
 
        // extract the remaining seconds
        $divisor_for_seconds = $divisor_for_minutes % 60;
        $seconds = ceil($divisor_for_seconds);
 
        return "$hours(h):$minutes(m):$seconds(s)";
        }
