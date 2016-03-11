        <?php
        include '..//Class//APIClass.php';
        
        $func = new APIClass();
        

                
        $results = $func->spAddPersonGymMembership($personID, $gymID, $membershipNumber);
        
        echo json_encode($results);
        ?>
        ?>
