
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        
        $data = json_decode(file_get_contents('php://input'));
        $emailAddress = $data->emailAddress;

        
        $results = $func->spGetDeviceTokenByEmailAddress($emailAddress);     
        echo json_encode($results);
        ?>

