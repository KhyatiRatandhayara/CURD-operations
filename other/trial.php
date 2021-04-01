<html>

<head>

   
</head>

<body>
 
  <div class="container">
   <form action="query.php" method="post">
   
   <div class="form-group">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username">
   </div>
   
   <div class="form-group">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">
    <br>
   </div>
    <button class="btn btn-primary" type="submit" name="submit">submit</button>
   <button class="btn btn-primary" type="submit" name="update">update</button>
    <button class="btn btn-primary" type="submit" name="delete">delete</button>
   <select name="id" id="">
   <?php include "connection.php";
       $query2 = "SELECT * FROM users";
     $result2 = mysqli_query($connection, $query2);

       while($row = mysqli_fetch_assoc($result2)){
           $id = $row['id'];
           echo "<option value='$id'>$id</option>";
       }
       ?>
   </select>
   
      
    </form>
   
   </div>
    </body>
    
</html>