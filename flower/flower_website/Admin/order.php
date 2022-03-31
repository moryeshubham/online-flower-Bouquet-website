<?php
 include "connection.php";
 include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
        <title>CUSTOMER_INFO</title>
        <link rel="stylesheet" type="text/css" href="style-1.css">
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
       
            <!--using bootstrap-->
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
    <br>
    <br>

<?php
$res=mysqli_query($db,"SELECT selectflower , fprice
                      FROM `payment`;");

                echo "<table class='table table-bordered table-hover ' style='width:60%; margin-left:120px;' >";
                        echo "<tr style='background-color:#49ab9b; color:white;'>";
                                //Table header
                                echo "<th>"; echo "Floers-Orders";	echo "</th>";
                                echo "<th>"; echo "Amount-Paid";  echo "</th>";
                               
                        echo "</tr>";
       

        while($row=mysqli_fetch_assoc($res))
        {
                echo "<tr>";
                        echo "<td>"; echo $row['selectflower']; echo "</td>"; 
                        echo "<td>"; echo $row['fprice']; echo "</td>";
                echo "</tr>";
        }
        echo "</table>";    

?>
</body>
</html>