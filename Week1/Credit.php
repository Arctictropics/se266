<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Money you owe</title>
    </head>
    <body>
    <center><h1>Credit card payments</h1></center>
        
        <form name="Credit" method="post">
            <center>
           <b>Amount owed     :</b><input type="number" value="0" name="owe">
            <br>
            <br>
           <b>Interest Rate   :</b><input type="number" value="0" name="rate">
            <br>
            <br>
           <b>Monthly Payment :</b><input type="number" value="0" name="pay">
            <br>
            <br>
            <input type="submit" value="submit to the debt" name="submit">
            <br>
            
        
        
        
        
        <ul>   
        <?php 
            
        
            if(isset($_POST['num']) && isset($_POST['rate']) && isset($_POST['pay'])){
                
                  if(($_POST['num'] >= 0) && ($_POST['rate'] >= 0) && ($_POST['pay'] >= 0)){
                        
                  }
                
            }//if
            else{
                
                echo "Welcome to debt! Lets see how hard it'll hit your wallet!";
                
            }
        
        
        ?>
        </ul> 
        </center>    
        </form>      
        
    </body>
</html>