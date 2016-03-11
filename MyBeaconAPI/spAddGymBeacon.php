
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

                
        $results = $func->spAddGymBeacon($gymID, $beaconID);
        echo json_encode($results);
        ?>
