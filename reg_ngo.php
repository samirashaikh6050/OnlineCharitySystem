<!DOCTYPE html>
<html>
<head>
	<style>
		table, th,td
		{
			border: 1px solid black;
			border-collapse: collapse;
		}
		th,td
		{
			padding:8px;
		}
		th{
			text-align: left;
		}
	</style>
	<title>NGO Details</title>
</head>
<link rel="stylesheet" type="text/css" href="donatordashcss.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
$servername = "localhost:3345";
$username = "root";
$password = "";
$dbname = "charitysystem"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  ID, Full_name, Login_email, Address, Contact_no  FROM ngo_login";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
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
      <a href="mymeddonation.php">Medicine</a>
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
</div>
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
            <th> NGO Name </th>
    	    <th> Email-Id </th>
            <th> Address </th>
            <th> Contact </th>
    	</tr>
    		
   <?<?php 
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
    <tr>
    	<td><?php echo $row['ID'];?></td>
        <td><?php echo $row['Full_name'];?></td>
    	<td><?php echo $row['Login_email'];?></td>
        <td><?php echo $row['Address'];?></td>
        <td><?php echo $row['Contact_no'];?></td>
    </tr>
    </div>
    <?php 
}
?>

    </table>
	<div class="footer">
<a style="font-size: 20px; padding-top: 20px; color:white"  href="faq.php"> FAQ</a> &nbsp&nbsp&nbsp
<a style="font-size: 20px; color:white" href="feedback.php"> Feedback</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
NGOs willing to register...<a style="font-size: 20px" href="ngoreg.php">Click Here</a>
<p style="font-size: 15px">NGO's can contact the portal at <a style="font-size: 15px; color:white" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWsmGWPMtvtdLrBBlhLpMCfgBxVfqMHgCDLsTCVjmqSmzdbjlxVvNMtZWSsCPbHcPjvcTJcNG">abc@gmail.com</a></p>
	</div>
</body>
</html>
