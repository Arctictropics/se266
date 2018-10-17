<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './dbconnect.php';
        include './functions.php';
        
        
        $db = getDatabase();
            
            $result = '';
            if (isPostRequest()) {
                $id = filter_input(INPUT_POST, 'id');
                $corp = filter_input(INPUT_POST, 'corp');
                $owner = filter_input(INPUT_POST, 'owner');
                $phone = filter_input(INPUT_POST, 'phone');
                $email = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
                $stmt = $db->prepare("UPDATE corps set corp = :corp, owner = :owner, phone = :phone, email = :email, zipcode = :zipecode, incorp_dt = :incorp_dt where id = :id");
                
                $binds = array(
                    ":id" => $id,
                    ":corp" => $corp,
                    ":owner" => $owner,
                    ":phone" => $phone,
                    ":email" => $email,
                    ":zipcode" => $zipcode,
                    ":incorp_dt" => $incorp_dt
                );
                
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $result = 'Record updated';
                }
            } else {
                $id = filter_input(INPUT_GET, 'id');
                $stmt = $db->prepare("SELECT * FROM corps where id = :id");
                $binds = array(
                    ":id" => $id
                );
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $results = $stmt->fetch(PDO::FETCH_ASSOC);
                }
                if ( !isset($id) ) {
                    die('Record not found');
                }
                $dataone = $results['dataone'];
                $datatwo = $results['datatwo'];
            }
        
        ?>
        
        <h1><?php echo $result; ?></h1>
        
        <form method="post" action="#">            
            Data one <input type="text" value="<?php echo $dataone; ?>" name="dataone" />
            <br />
            Data two <input type="text" value="<?php echo $datatwo; ?>" name="datatwo" />
            <br />  
            <input type="hidden" value="<?php echo $id; ?>" name="id" /> 
            <input type="submit" value="Update" />
        </form>
        
        <p> <a href="view-action.php">View page</a></p>


        
    </body>
</html>