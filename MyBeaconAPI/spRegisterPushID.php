
        <?php
        include '..//Class//APIClass.php';
        

        $func = new APIClass();

        $data = json_decode(file_get_contents('php://input'));
        $userID = $data->userid;
        $deviceUDID = $data->deviceudid;
        $pushID = $data->pushid;

        $results = $func->spRegisterPushID($userID, $deviceUDID, $pushID);
        echo json_encode($results);

        ?>

