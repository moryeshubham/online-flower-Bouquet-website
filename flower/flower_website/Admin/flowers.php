<?php
 include "connection.php";
 include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
        <title>ADD NEW FLOWERS</title>
        <link rel="stylesheet" type="text/css" href="style-1.css">
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
       
            <!--using bootstrap-->
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


</head>
<body>
        <div  style="background-image: url('images/fadd.jpg'); 
	             background-size: cover;"><br><br>

<h1 style="margin-left:430px; width: 540px; font-size: 55px; color:aqua; background-color:blueviolet; font-family: Lucida Console;">
    <b>
                 ADD NEW FLOWERS</b></h1>
<form action="" method="post" enctype="multipart/form-data">
                
                <label style="color: white; margin-left:220px; margin-top:50px; font-size:16px;"><h4><b> Flower Name:- </b>
                </h4></label>
                <input  class="form-control" style="height: 40px; width: 390px; margin-left:220px; " type="text"
                 name="fname" placeholder="Enter Flower name" required ><br>
                
                <label style="color: white; margin-left:220px; margin-top:50px; font-size:16px;"><h4><b>Flower Price:-</b>
                </h4></label>
                <input class="form-control" style="height: 40px; width: 390px; margin-left:220px; "
                    type="text" name="fprice" placeholder="Enter Flower Price" required><br>
                
                <label style="color: red; background-color:aqua; margin-left:220px; margin-top:50px; font-size:16px;"><h4><b>
                    Flower Description:-</b></h4></label> <br> <br>
                <textarea  name="fdescription" placeholder="Description....." style="height:140px;
                 width: 390px; margin-left:220px;"></textarea> 

                    <br>
                <label style="color: white; margin-left:220px; margin-top:50px; font-size:16px;"><h4><b>Flower Image:-
                    </b></h4></label>
                <input class="form-control" style="height: 40px; width: 390px; margin-left:220px; " type="file" 
                name="file"><br>
               <br>
                <button style="color:white; background-color: #333;width: 80px; height: 40px; margin-left: 350px;
                 margin-bottom:80px; margin-top:40px; " class="btn btn-default" type="submit" 
                name="submit">Save</button><br><br><br>
            
            </form>
            <?php

if(isset($_POST['submit']))
{
            $f_name=$_POST['fname'];
            $f_price=$_POST['fprice'];
            $f_desc=$_POST['fdescription'];
            $f_image=$_FILES['file'];
            $image_loc=$_FILES['file']['tmp_name'];
            $image_name=$_FILES['file']['name'];
            $img_des="images/".$image_name;
            move_uploaded_file($image_loc,"images/".$image_name);
           
        
    $ql="INSERT INTO `flowers`(`fname`, `fprice`, 
    `fdescription`, `photo`) VALUES ('$f_name','$f_price','$f_desc','$img_des')";
    mysqli_query($db,$ql);
    

    ?>
    <script type="text/javascript">
     alert("Added successful");
    /* window.location="flo.php";*/
    </script>
<?php
}
else if(isset($_POST['submit23'])){
    ?>
    <script type="text/javascript">
     alert("Not Added successful");
     </script>
     <?php
}
?>
            

  </div>
</body>
</html>