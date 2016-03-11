
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        
        $data = json_decode(file_get_contents('php://input'));
        $userID = $data->userid;
        $mood = $data->mood;
        $message = $data->message;
                
        $results = $func->spAddGymVisitFeedback($userID, $mood, $message);
        echo json_encode($results , JASON_PRETTY_PRINT);
        ?>

