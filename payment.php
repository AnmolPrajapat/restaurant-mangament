<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<meta charset="utf-8">
 
  <!-- <link rel="stylesheet" href="stycle.css" type="text/css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h3 >you have to pay Rs 500 for reservation</h3>
<h4>dont worry! This amount will be adusted in you final bill</h4>

<form action="customerinfo.php" method="post" class="form">
  <div class="form-group row">
  	<!-- <div class="col-sm-2" ></div> -->
    
    <label class="col-sm-3">choose you payment method <sup>*</sup></label>
		
    <div class="col-sm-6">
      <input type="number" name="payment" class="form-control" required>
      <input>
      <ul type= "radio">
      	<li> paytm</li>
      	<li> google paytm</li>
        <li> UPI</li>
        <li> debit card</li>

      </ul>
    </div>
    <div class="form-group row">

	<button type="submit" class="btn btn-primary">pay now</button>	
</div>
</div>
 </form>

</body>
</html>