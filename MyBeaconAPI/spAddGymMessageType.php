        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

        
        $results = $func->spAddGymMessageType($gymID, $messageTypeID);
        echo json_encode($results);
        ?>