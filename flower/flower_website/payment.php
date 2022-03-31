<?php
 include "connection.php";
 include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
        <title>Payment</title>
        <link rel="stylesheet" type="text/css" href="style-1.css">
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
       
            <!--using bootstrap-->
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

             <style>
                    
             </style>

</head>
<body style="background-color: #6adf4ac4;">
    <h1 style="margin-left:410px; margin-top:50px; font-size: 55px;font-family: Lucida Console;">
    <b>Make New Payment</b></h1> 
    <form name="payment_form" action="" method="POST">
    
    <label style=" margin-left:520px; margin-top:50px; font-size:16px;">Full Name :-</label>
    <input class="form-control" style="height: 40px; width: 390px; margin-left:520px; " type="text"
     name="fullname" placeholder="Full Name" required=""> <br>

     <label style=" margin-left:520px; margin-top:20px; font-size:16px;">ID-NO :-</label>
    <input class="form-control" style="height: 40px; width: 390px; margin-left:520px;" type="text"
     name="id_no" placeholder="ID-NO" required=""> <br>
  <!--select flower-->
  <label  style=" margin-left:520px; margin-top:20px; font-size:16px;">FLOWERS :-</label>
  <select style="height: 40px; width: 280px; margin-left:520px; " name="selectflower">
    <option disabled selected>-- Select ANY ONE...--</option>
    <?php
       
        $records = mysqli_query($db, "SELECT fname From flowers");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['fname'] ."'>" .$data['fname'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
<br><br>
  <!--amount-->
  <label style=" margin-left:520px; margin-top:20px; font-size:16px;">AMOUNT :-</label>
  <select style="height: 40px; width: 280px; margin-left:520px;" name="fprice">
    <option disabled selected>-- Select Accurate Prices--</option>
    <?php
       
        $record = mysqli_query($db, "SELECT fprice From flowers");  // Use select query here 

        while($data = mysqli_fetch_array($record))
        {
            echo "<option value='". $data['fprice'] ."'>" .$data['fprice'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select> <br>
  

 
   <!--payment-id -->
  <label style=" margin-left:520px; margin-top:20px; font-size:16px;">Payment-ID</label>
  <input class="form-control" style="height: 40px; width: 390px; margin-left:520px;" type="text"
     name="payment_id" placeholder="Payment-ID" required=""> <br>


    <!--payment-type -->
  <label style=" margin-left:520px; margin-top:20px; font-size:16px;">Payment-Type</label>
  <select style="height: 40px; width: 390px; margin-left:520px;" type="text"
     name="payment_type" placeholder="Payment-type" required="">
	    <option value="">--- Select Payment Type ---</option>
	  <option value="online">Online</option>
	  <option value="Gpay">Gpay</option>
	  <option value="Phonepay">Phonepay</option>
    <option value="Patym">Patym</option>
    <option value="Debit Card">Debit Card</option>
    <option value="Net Banking">Net Banking</option>
</select>
 <br>

     <input class="btn btn-default" id="submit_fd" type="submit" name="submit1" 
     value="SUBMIT" style="color:white; background-color: #333;
      width: 80px; height: 40px; margin-left: 680px; margin-bottom:80px; margin-top:40px; " > 
</form>


<?php

        if(isset($_POST['submit1']))
        {
            $ql="INSERT INTO `payment` VALUES ('$_POST[fullname]','$_POST[id_no]','$_POST[selectflower]'
            ,'$_POST[fprice]','$_POST[payment_id]','$_POST[payment_type]');";
            mysqli_query($db,$ql);

            ?>
            <script type="text/javascript">
             alert("Payment successful");
             window.location="payment.php";
            </script>
        <?php
        }
        else if(isset($_POST['submit23'])){
            ?>
            <script type="text/javascript">
             alert("payment not successful");
             </script>
             <?php
        }
?>
</body>
</html>