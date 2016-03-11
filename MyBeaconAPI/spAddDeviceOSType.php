
        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();

        $results = $func->spAddDeviceOSType($name, $version);
        echo json_encode($results);
        ?>