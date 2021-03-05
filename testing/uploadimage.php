<?php
$conn = mysqli_connect('localhost','root','','displayupload');
if(!$conn){
    echo "not connected";
}
if(isset($_POST['save'])){
$files =$_FILES['file'];
    
    print_r($files);
    
$filename =$files['name'];
$fileerror =$files['error'];  
$filetmp = $files['tmp_name'];  

    $extention =explode('.',$filename);
    $filecheck = strtolower(end($extention));
    
    $fileextstored =array('jpg','png','jpeg');
    
    if(in_array($filecheck, $fileextstored)){
        $destinationfile = 'upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
        $query ="INSERT INTO imageupload(image) VALUES ('$destinationfile')";
        $result = mysqli_query($conn, $query);
        //echo "success..";
        
    }
    
}
?>
<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0 ,user-scalable=no">

    <title>Notes MarketPlace</title>

    <!--favicon-->
    <link rel="shortcut icon" href="image/home/favicon.ico">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

   

</head>

<body>
    <form method="post" action="uploadimage.php" enctype="multipart/form-data">

        <div class="form-group">
            <label>Display Picture</label>
            <div class="picture-2">
                <input id="file-input" type="file" name="file">
            </div>
        </div>
       <button type="submit" class="btn btn-note" name="save">SAVE</button>
    </form>

    <!--custom jquery-->
    <script src="javascript/jquery.min.js"></script>

    <!--bootstrap-->
    <script src="javascript/bootstrap/bootstrap.min.js"></script>
</body>

</html>