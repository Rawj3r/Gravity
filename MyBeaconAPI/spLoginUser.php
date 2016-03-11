<?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        
        $data = json_decode(file_get_contents('php://input'));
        $username = $data->username;
        $password = $data->password;
        $deviceUDID = $data->deviceudid;

        // $username = 'testi';
        // $password = 'testi';
        // $deviceUDID = 'de;fh;ioehs;o';

        
        $results = $func->spLoginUser($deviceUDID, $username, $password);

        echo json_encode($results,JSON_PRETTY_PRINT);
?>
