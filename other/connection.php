<?php
    
        $connection = mysqli_connect('localhost', 'root', '','loginpage');
        if($connection){
            echo "connected...";
        }
        else{
            echo "not connected...";
        }
        ?>