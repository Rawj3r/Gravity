        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

        
        $results = $func->spAddPersonDeviceInfo($personID, $mobileNumber, $deviceBrand, $deviceModel, $oSTypeID, $deviceUDID);
        
        echo json_encode($results);
        ?>
