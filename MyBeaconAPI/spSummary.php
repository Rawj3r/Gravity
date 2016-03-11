
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();

        $data = json_decode(file_get_contents('php://input'));
        $userID = $data->userid;
        $period = $data->period;
                
        $results = $func->spSummary($userID,$period); 
        
        
        echo json_encode($results,JSON_PRETTY_PRINT);
        ?>

