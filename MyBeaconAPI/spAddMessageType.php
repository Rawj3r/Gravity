        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

                
        $results = $func->spAddMessageType($name);
        echo json_encode($results);
        ?>
