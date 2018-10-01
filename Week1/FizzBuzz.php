<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fizz Buzz</title>
    </head>
    <body>
        <h1>Fizz Buzz</h1>
        
        <ul>   
        <?php 
            for($i = 1; $i<101; $i++){

               if ( $i%2 == 0 && $i % 3 == 0 ) {
    
                   echo 'Fizz Buzz <br />';
                }//if
               else if($i%2 == 0 && $i%3 != 0){
                   echo 'Fizz <br />';
                }//elsif
               else if($i%3 == 0 && $i%2 != 0){
                   echo 'Buzz <br />';
                }//elsif
               else{
                   echo $i . '<br />';
                }//else
            }//for
        ?>
        </ul> 
               
        
    </body>
</html>