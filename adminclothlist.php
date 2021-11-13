<!DOCTYPE html>
<html>
<head>
    <title> Donations List </title>
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
</head>
<link rel="stylesheet" type="text/css" href="mydonationcss.css"/>
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
            <a href="admindash.html"> Home </a>
    <div class="dropdown">
    <button class="dropbtn">View Donations
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="adminmedlist.php">Medicine</a>
      <a href="adminfoodlist.php">Food</a>
      <a href="adminmoneylist.php">Money</a>
      <a href="adminbooklist.php">Books</a>
      <a href="adminclothlist.php">Clothes</a>
    </div>
  </div>
    <a href="addngo.php"> Add NGO </a>
    <a href="addexe.php"> Add Executive</a>
    <a href="donatordetails.php"> View Donator List</a>
  <a href="ngodetails.php"> View NGO List </a>
  <a href="home.html"> Logout</a>
</div>
<br><br>
<h2 style="text-align: center;"> Donated Clothes</h2>
        
<div class="tab">       

    <table align="center" style="width:600px; text-align:left;
    left:18%;
    top:19%;
    font-size:15px;
    background-color:lightgrey;
    position:absolute;
    color:black;"> 
        <tr>
                <th> ID </th>
                <th> Donator's Name </th>
                <th> Donator's Email-Id </th>
                <th> Donator's Address</th>
                <th> Clothes Type </th>
                <th> Quantity</th>
                <th> NGO Email-Id</th>
        </tr>
<?php
$sql = "SELECT * FROM clothes_form";
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
        <td><?php echo $row['Address'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['quantity'];?></td>
        <td><?php echo $row['receiver_email'];?></td>
    </tr>
    </div>
    <?php 
}
mysqli_close($conn);
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