<!DOCTYPE html>
<html>
<head>
    <style>
        table, th,td
        {
            border: 1px solid black;
        }
        th,td
        {
            padding:12px;
        }
        th{
            text-align: left;
        }
    </style>
	<title> My Donations </title>
</head>
<link rel="stylesheet" type="text/css" href="donatordashcss.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
session_start();
// Create connection
$conn = mysqli_connect("localhost:3345", "root", "", "charitysystem");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<body> 
<header>
 <div class="navbar">
    <a href="donatordash.html"> Home </a>
  <div class="dropdown">
    <button class="dropbtn">My Donations
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="mydonation.php">Medicine</a>
       <a href="myfooddonation.php">Food</a>
      <a href="mymoneydonation.php">Money</a>
      <a href="mybookdonation.php">Books</a>
      <a href="myclothesdonation.php">Clothes</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Donate
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="meddonate.php">Medicine</a>
       <a href="fooddonate.php">Food</a>
      <a href="moneydonate.php">Money</a>
      <a href="bookdonate.php">Books</a>
      <a href="clothes.php">Clothes</a>
    </div>
  </div>
  <a href="reg_ngo.php"> View Registered NGO</a>
  <a href="home.html"> Logout</a>
</div><br><h2 style="text-align: center;"> Clothes Donated</h2>
		<div class="tab">
    <table align="left" style="width:600px; text-align:left;
    left:18%;
    top:19%;
    font-size:15px;
    background-color:lightgrey;
    position:absolute;
    color:black;"> 
            <tr>
    			<th> ID </th>
    			<th> Name </th>
    			<th> Email-Id </th>
    			<th> Gender </th>
    			<th> Quantity</th>
    			<th> Donation Type </th>
    			<th> Receiver's Email </th>
    	</tr>
<?php
$user=$_SESSION["username"]; 
$query="SELECT * from user_login where Login_email='$user'";
$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$id=$row["ID"];
$sql = "SELECT * FROM clothes_form WHERE user_id=$id";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
$rowcount=mysqli_num_rows($result);
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	

?>
    		
    <tr>
    	<td><?php echo $row['ID'];?></td>
    	<td><?php echo $row['Full_name'];?></td>
    	<td><?php echo $row['Login_email'];?></td>
    	<td><?php echo $row['gender'];?></td>
    	<td><?php echo $row['quantity'];?></td>
    	<td><?php echo $row['donation_type'];?></td>
    	<td><?php echo $row['receiver_email'];?></td>
    </tr>
    </div>
    <?php 
}
mysqli_close($conn);
?>
    </table>
	<div class="footer">
<a style="font-size: 20px; padding-top: 20px; color:white"  href="faq.php"> FAQ</a> &nbsp&nbsp&nbsp
<a style="font-size: 20px; color:white" href="feedback.php"> Feedback</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
NGOs willing to register...<a style="font-size: 20px" href="ngoreg.php">Click Here</a>
<p style="font-size: 15px">NGO's can contact the portal at <a style="font-size: 15px; color:white" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWsmGWPMtvtdLrBBlhLpMCfgBxVfqMHgCDLsTCVjmqSmzdbjlxVvNMtZWSsCPbHcPjvcTJcNG">abc@gmail.com</a></p>
    </div>
</header>
</body>
</html>