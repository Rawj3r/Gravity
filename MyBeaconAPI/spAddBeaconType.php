
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

                
        $results = $func->spAddBeaconType($name);
        echo json_encode($results);
        ?>