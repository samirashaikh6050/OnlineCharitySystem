   
<!DOCTYPE html>
<html>
<head>
<title>Money</title>
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

 
 $brand= stripslashes($_REQUEST['brand']);
 $brand = mysqli_real_escape_string($conn,$brand);

 $generic= stripslashes($_REQUEST['generic']);
$generic = mysqli_real_escape_string($conn,$generic);
 
 $quantity = stripslashes($_REQUEST['quantity']);
 $quantity = mysqli_real_escape_string($conn,$quantity);
 
 
$query2 = "INSERT into money_form (Full_name,Login_email,ngo_name,ngo_email,quantity,user_id)
VALUES ('$fname','$username','$brand','$generic','$quantity','$id')";
        $result1 = mysqli_query($conn,$query2);
        if($result1){
            echo "<div class='form'>
<h3>Your Donation Form has been successfully submitted. Your donated money will be soon collected by the NGO or some individual. Thank You for donating!! </h3>

</div>";    
   }

    }else{
?>

    <div class="simpleform" style="width:400px;
    height:550px; padding-top:1%; top: 50%;">
<form id ="registration" action="" method="post">
 <h2>&nbsp&nbsp&nbsp&nbsp Personal Details</h2> 
Full Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname" id="button" placeholder="" size="35" required><br><br>

Email Id: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" id="button" placeholder="" size="35" required><br><br>


NGO Name: &nbsp&nbsp<input type="text" name="brand" id="button" placeholder="" size="35" required><br><br>

NGO Email:&nbsp<input type="text" name="generic" id="button" placeholder="" size="35" required><br><br>

Amount: &nbsp&nbsp&nbsp<input type="number" name="quantity" id="button" size="5" placeholder="" required><br><br>

<input type="submit" name="submit" value="Pay" formaction="payment.php"> &nbsp&nbsp&nbsp
<input type="reset" name="reset" value="Clear">
</form>
</div>
<?php } ?>
</body>
</html>
