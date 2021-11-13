<!DOCTYPE html>
<html>
<head>
    <style>
        table, th,td
        {
            border: 2px solid black;
        }
        th,td
        {
            padding:12px;
        }
        th{
            text-align: left;
        }
    </style>
    <title>NGO Details</title>
</head>
<link rel="stylesheet" type="text/css" href="mydonationcss.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
$servername = "localhost:3345 ";
$username = "root";
$password = "";
$dbname = "charitysystem"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  ID, Full_name, Login_email, Age, Gender, Address, Contact_no  FROM executive";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<body>
<header>
        <div class="navbar">
             <a href="ngodash.php"> Home </a>
             <div class="dropdown">
    <button class="dropbtn">Donation List
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="mdonationlist.php">Medicine</a>
      <a href="fdonationlist.php">Food</a>
      <a href="mondonationlist.php">Money</a>
      <a href="bdonationlist.php">Books</a>
      <a href="cdonationlist.php">Clothes</a>
    </div>
  </div>
  <a href="executivedetails.php"> Executive Details</a>
  <a href="ngologin.php"> Logout</a>
</div>
<br><br>
<h2 style="text-align: center;"> Executive Details</h2>
    <div class="tab">    
    <table align="left" style="width:600px; text-align:left;
    left:22%;
    top:19%;
    font-size:15px;
    background-color:lightgrey;
    position:absolute;
    color:black;"> 
        <tr>
            <th> ID </th>
            <th> Executive Name </th>
            <th> Email-Id </th>
            <th> Age </th>
            <th> Gender </th>
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
        <td><?php echo $row['Age'];?></td>
        <td><?php echo $row['Gender'];?></td>
        <td><?php echo $row['Address'];?></td>
        <td><?php echo $row['Contact_no'];?></td>   
    </tr>
    </div>
    <?php 
}
?>

    </table>
    <div class="footer">
<a style="font-size: 20px" href="faq.php"> FAQ</a> &nbsp&nbsp&nbsp
<a style="font-size: 20px" href="feedback.php"> Feedback </a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
NGOs willing to register...<a style="font-size: 20px" href="ngoreg.php">Click Here</a>
<p style="font-size: 20px">NGO's can contact the portal at <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWsmGWPMtvtdLrBBlhLpMCfgBxVfqMHgCDLsTCVjmqSmzdbjlxVvNMtZWSsCPbHcPjvcTJcNG">oumdsp@gmail.com</a></p>
    </div>
</body>
</html>
