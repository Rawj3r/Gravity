
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        
        $data = json_decode(file_get_contents('php://input'));
        $personGymMembershipID = $data->personGymMembershipID;
        $personDeviceInfoID = $data->personDeviceInfoID;
        
        $results = $func->spAddPersonGymMembershipDeviceInfo($personGymMembershipID, $personDeviceInfoID);
        
        echo json_encode($results);
        ?>

