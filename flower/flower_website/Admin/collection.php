<?php
 include "connection.php";
 include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
        <title>FLOWERS COLLECTION</title>
        <link rel="stylesheet" type="text/css" href="">
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
       
            <!--using bootstrap-->
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


</head>
<body ><br>


<!--        order button      -->        
        <form action="order.php"><button style="background-color:#db51c0;  margin-top:30px;
        margin-left:100px; color:white;"
                class="btn btn=default"> ORDERS
                                </button>
        </form>



<!--                 search bar           -->
                <div class="search_b">
                <form class="navbar-form" method="post" name="t_searchbar">
                        <div style="margin-left: 1030px;">
                                <input type="text" class="form-control" name="search" placeholder="
                                Search Here..." required="">
                                <button style="background-color:#49ab9b ; color:white;" type="submit" name="submit"
                                 class="btn btn=default">
                                <span class="glyphicon glyphicon-search"> </span>
                                </button>
                        </div>
                </form>
                </div>



    <div class="container-fluid" ">        
    <div class="col-md-12">
    <div class="row">
  

<br>
<br>
<!-------------  search bar php code   -------------------->
<?php
        if(isset($_POST['submit']))
        {


                $q=mysqli_query($db,"SELECT fname,fprice,fdescription, photo FROM `flowers` 
                where fname like '%$_POST[search]%' 
                 OR fprice like '%$_POST[search]%' 
                 OR fdescription like '%$_POST[search]%' ;
                  ");

                if (mysqli_num_rows($q)==0)
                {
                        echo "sorry Not found , please try searching again!!";
                }
                else{
                        /* when searching keywords are in database then executed this one  */
                    while($row=mysqli_fetch_array($q)){      /* cards code taken from bootstramp for simplicity */
                        echo"
                        <div style='margin-top:50px; margin-bottom:20px;' class='  col-md-6 col-lg-4 col-sm-6  mb-4 margin-auto'>
                            <form action='' method='POST'>
                              <div style='background-color:yellow;' class='card m-auto' style='width: 18rem;'>
                      
                                  <img src='$row[photo]' class=' card-img-top m-auto' style='width: 330px;  height: 250px; padding-top:30px;
                                    padding-left:70px;' >
                                  <input type='hidden' name='photo' value='$row[photo]'>
                      
                                  <div class='card-body text-center'> 
                                        <h5 style='background-color:red; color:white; height:50px; text-alignment:center;padding-top:16px;
                                         width:220px;  margin-left:89px;' class='card-title  font-size-4 font-weight-bold'>$row[fname]
                                        </h5>
                                        <p class='card-text' style='background-color:pink; color:black; font-size:15px; height:40px;
                                        width:90px;margin-left:150px; padding-top:10px;' >  $ $row[fprice].00
                                        </p><br>
                                        <p class='card-text' style='color:#228B22;  height:80px; width:350px; text-alignment:center;
                                        margin-left:30px;
                                        '><b> $row[fdescription]</b>
                                        </p>
                                       
                                <button style='background-color:#49ab9b ; color:white;'
                                 type='submit' name='submit1'
                                 class='btn btn=default'> Delete
                                </button>
                                            <input type='hidden' class='form-control' name='fname' placeholder='Enter Flower Name' 
                                            required=''>
                                            <input type='hidden' name='fname' value='$row[fname]'>
                                            <input type='hidden' name='fprice' value='$row[fprice]'>
                                            <input type='hidden' name='fdescription' style='width:200px;' value='$row[fdescription]'> <br><br>
                                  </div>
                              </div>
                            </form>
                        </div>
                      ";    }   
                }
        }
/*   if button is not pressed   then table data remain same as it is server data */
        else{
$Record=mysqli_query($db,"SELECT * FROM `flowers`");
    while($row=mysqli_fetch_array($Record)){
        /* cards code taken from bootstramp for simplicity */
        echo"
        <div style='margin-top:50px; margin-bottom:20px;' class='  col-md-6 col-lg-4 col-sm-6  mb-4 margin-auto'>
            <form action='' method='POST'>
              <div style='background-color:yellow;' class='card m-auto' style='width: 18rem;'>
      
                  <img src='$row[photo]' class=' card-img-top m-auto' style='width: 330px;  height: 250px; padding-top:30px;
                    padding-left:70px;' >
                  <input type='hidden' name='photo' value='$row[photo]'>
      
                  <div class='card-body text-center'> 
                        <h5 style='background-color:red; color:white; height:50px; text-alignment:center;padding-top:16px;
                         width:220px;  margin-left:89px;' class='card-title  font-size-4 font-weight-bold'>$row[fname]
                        </h5>
                        <p class='card-text' style='background-color:pink; color:black; font-size:15px; height:40px;
                        width:90px;margin-left:150px; padding-top:10px;' >  $ $row[fprice].00
                        </p><br>
                        <p class='card-text' style='color:#228B22;  height:80px; width:350px; text-alignment:center;
                        margin-left:30px;
                        '><b> $row[fdescription]</b>
                        </p><br>
                        <button style='background-color:#49ab9b ; color:white; height:40px; width:85px; font-size:20px;'
                                 type='submit' name='submit1'
                                 class='btn btn=default'> Delete
                                </button>
                                            <input type='hidden' class='form-control' name='fname' placeholder='Enter Flower Name' 
                                            required=''>
      
                            <input type='hidden' name='fname' value='$row[fname]'>
                            <input type='hidden' name='fprice' value='$row[fprice]'>
                            <input type='hidden' name='fdescription' style='width:200px;' value='$row[fdescription]'> <br><br>
                  </div>
              </div>
            </form>
        </div>
      "; 
}   


                    
        }    
 ?>
      
      </div>
    </div>
    </div>


   
</body>
</html>