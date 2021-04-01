<?php include "connection.php"; 
?>
      <?php
       if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
      
           
        
        $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("query failed".mysqli_error());
        }
    } 
elseif(isset($_POST['update'])){
    
     $username = $_POST['username'];
     $password = $_POST['password'];
     $id = $_POST['id'];
    
     $query = "UPDATE users SET username = '$username' , password = '$password' WHERE id=$id";
     $result = mysqli_query($connection, $query);
    if(!$result){
            die("query failed".mysqli_error());
        }
    
}
elseif(isset($_POST['delete'])){
    
     $id = $_POST['id'];
    
     $query = "DELETE from users  WHERE id=$id";
     $result = mysqli_query($connection, $query);
    if(!$result){
            die("query failed".mysqli_error($query));
        }
    
}
//else{
//    echo "failed :)";
//}
$query2 = "SELECT * FROM users";
 $result2 = mysqli_query($connection, $query2);

    while($row = mysqli_fetch_assoc($result2)){
        print_r($row);
    }
    ?>
