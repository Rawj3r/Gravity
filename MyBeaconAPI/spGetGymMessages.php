
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        
        $data = json_decode(file_get_contents('php://input'));
        $userID = $data->userid;

        $results = $func->spGetGymMessages($userID);     
        echo json_encode($results,JSON_PRETTY_PRINT);
        ?>

