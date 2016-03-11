
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        
        $data = json_decode(file_get_contents('php://input'));
        $beacon_type_id = $data->username;
        $uuid = $data->password;
        $major_id = $data->deviceudid;
        $minor_id = $data->deviceudid;

        $results = $func->spAddBeacon($beacon_type_id, $uuid, $major_id, $minor_id);
        echo json_encode($results);
        ?>

