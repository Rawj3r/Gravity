
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

        
        $results = $func->spAddGymMessage($gymID, $personDeviceInfoID, $title, $message);
        echo json_encode($results);
        ?>