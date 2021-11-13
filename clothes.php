   
<!DOCTYPE html>
<html>
<head>
<title>Clothes Donation</title>
</head>
<link rel="stylesheet" type="text/css" href="meddonatecss.css"/>
<body>
    <?php
$conn = new mysqli ('localhost:3345', 'root', '', 'charitysystem');
session_start();
$user=$_SESSION["username"]; 
$query="SELECT * from user_login where Login_email='$user'";
$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$id=$row["ID"];
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes


 $fname = stripslashes($_REQUEST['fname']);
        //escapes special characters in a string
  $fname = mysqli_real_escape_string($conn,$fname); 
 
 $username= stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($conn,$username);

 $house= stripslashes($_REQUEST['house']);
 $house = mysqli_real_escape_string($conn,$house);

$city = stripslashes($_REQUEST['city']);
 $city = mysqli_real_escape_string($conn,$city);

 $state = stripslashes($_REQUEST['state']);
 $state = mysqli_real_escape_string($conn,$state);

 $pincode = stripslashes($_REQUEST['pincode']);
 $pincode = mysqli_real_escape_string($conn,$pincode);

 $country = stripslashes($_REQUEST['country']);
 $country  = mysqli_real_escape_string($conn,$country);
 
 $item= stripslashes($_REQUEST['item']);
 $item = mysqli_real_escape_string($conn,$item);

 $quantity = stripslashes($_REQUEST['quantity']);
 $quantity = mysqli_real_escape_string($conn,$quantity);
 

 $dt = stripslashes($_REQUEST['dt']);
 $dt= mysqli_real_escape_string($conn,$dt);

 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($conn,$email);
 

$query2 = "INSERT into clothes_form
 (Full_name,Login_email,Address,Country,gender,quantity,donation_type,receiver_email,user_id)
VALUES ('$fname','$username','$house.$city.$state.$pincode','$country','$item','$quantity','$dt','$email','$id')";
        $result1 = mysqli_query($conn,$query2);

        if($result1){
            echo "<div class='form'>
<h3>Your Donation Form has been successfully submitted. Your donated clothes will be soon collected by the NGO or some individual. Thank You for donating!! </h3>
</div>";    
   }
    }else{
?>

    <div class="simpleform" style="width:400px;
    height:950px; padding-top:1%;">
<form id ="registration" action="" method="post">
 <h2 style="left:23%;">Clothes Details</h2> 
Full Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname" id="button" placeholder="" size="35" required><br><br>

Email Id: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" id="button" placeholder="" size="35" required><br><br>

Address for Clothes Collection:<br>
<input type="text" name="house" id="button" placeholder="House No,Building & Area" size="35" required><br><br>
<input type="text" name="city" placeholder="City/Town/District" size="35" required><br><br>
<input type="text" name="state" placeholder="State/Union Territory" size="35" required> <br><br>
<input type="text" name="pincode" size=15 placeholder="Pincode" required><br><br>
<input type="text" name="country" placeholder="Country" size="35" required><br><br>

Select Gender:&nbsp<input type="checkbox" name="item" id="item" value="Male"> Male<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             &nbsp&nbsp&nbsp<input type="checkbox" name="item" id="item" value="Female"> Female<br>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             &nbsp&nbsp&nbsp<input type="checkbox" name="item" id="item" value="Adult"> Adult<br>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             &nbsp&nbsp&nbsp<input type="checkbox" name="item" id="item" value="Children"> Children<br><br>


Total Number: &nbsp&nbsp&nbsp<input type="number" name="quantity" id="button" size="5" placeholder="" required><br><br>

Donation Type: <br>
<input type="radio" name="dt" id="dt" value="NGO"> NGO
<input type="radio" name="dt" id="dt" value="Individual"> Individual
<br><br>

Receiver's Email:&nbsp<input type="text" name="email" size="20" required><br><br><br>

<input type="submit" name="submit" value="Submit"> &nbsp&nbsp&nbsp
<input type="reset" name="reset" value="Clear">
</form>
</div>
<?php } ?>
</body>
</html>
