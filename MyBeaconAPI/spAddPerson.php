        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

        
        $results = $func->spAddPerson($wellMatixPersonID, $name, $surname, $emailAddress);
        
        echo json_encode($results);
        ?>
        
    </body>