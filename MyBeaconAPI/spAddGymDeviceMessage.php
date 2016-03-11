        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

        
        $results = $func->spAddGymDeviceMessage($gymID, $beaconTypeID, $message);
        echo json_encode($results);
        ?>