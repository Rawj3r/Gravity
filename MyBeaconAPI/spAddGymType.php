        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

                
        $results = $func->spAddGymType($name);
        echo json_encode($results);
        ?>