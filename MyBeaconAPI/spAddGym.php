
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

                
        $results = $func->spAddGym($gymTypeID, $name);
        echo json_encode($results);
        ?>