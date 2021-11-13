<!DOCTYPE html>
<html>
<head>
<title>Payment</title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="meddonatecss.css"/>
<body>

    <div class="simpleform" style="width:400px;
    height:550px; padding-top:1%; top: 50%;">
<form id ="Payment" action="" method="post">
 <h2>&nbsp&nbsp&nbsp&nbsp Payment Details</h2>
<label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <br>
Name on card: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname" id="button" placeholder="" size="35" required><br><br>

Card Number: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="cardnumber" id="button" placeholder="" size="35" required><br><br>

Exp Month & Year: &nbsp&nbsp <br>
<input type="text" name="month" id="button" placeholder="" size="35" required><br><br>
CCV: &nbsp&nbsp&nbsp <br>
<input type="number" name="quantity" id="button" size="5" placeholder="" required><br><br>

<input type="submit" name="submit" value="Pay"> &nbsp&nbsp&nbsp
<input type="reset" name="reset" value="Clear">
</form>
</div>
</body>
</html>