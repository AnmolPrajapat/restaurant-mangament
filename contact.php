contact.php
<!--mysqli_select_db($con, 'restaurant reservation');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$timing = $_POST['timing'];
$comments = $_POST['comments'];-->
<!-- action="customerinfo.php"-->
<!--
$query = " insert into customerinfodata (user, email, mobile, timing, comments)
values ('$user','$email','$mobile','$timing','$comments')";

mysqli_query($con,$query);

<form action="customerinfo.php" method="post">
		<div class="form-group">
		<label>Customer Name</label>
		<input type="text" name="user" class="form-control">
	</div> 
        <div class="form-group">
		<label>E-mail Id</label>
		<input type="text" name="email" class="form-control">
	</div> 
		<div class="form-group">
		<label>Mobile No</label>
		<input type="text" name="mobile" class="form-control">
	</div> 
	<div class="form-group">
		<label>timing</label>
		<input type="text" name="timing" class="form-control">
	</div> 


		<div class="form-group">
		<label>comment</label>
		<textarea class="form-control" name="comments">
		</textarea>
	</div> 
	<button type="submit" class="btn btn-primary">Submit</button>	
	</form>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"> -->
 
  <!-- <link rel="stylesheet" href="stycle.css" type="text/css"> -->
  <!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body bgcolor="lightblue" align="centre" >
	<h3>
		HERE YOU CAN RESERVE YOUR FOOD TIMING
	</h3>
	<div class="py-5">
		<h2 class="text-center">RESERVATION</h2>
	</div>
	<div class="w-50 m-auto">
 <form action="customerinfo.php" method="post" class="form">
  <div class="form-group row">-->
  	<!-- <div class="col-sm-2" ></div> -->
    <!--
    <label class="col-sm-3">Customer Name <sup>*</sup></label>	
    <div class="col-sm-6">
      <input type="text" name="user" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-3">Email</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control">
    </div> 
  </div>
  <div class="form-group row">
    <label class="col-sm-3">Moblie no.  <sup>*</sup></label>
    <div class="col-sm-6">
      <input type="number" name="mobile" class="form-control" required>
    </div>
   </div>

    <div class="form-group row">
	    <label  class="col-sm-3">Timing  <sup>*</sup></label>
	    <div class="col-sm-6">
	      <input type="time" name="timing" class="form-control" required />
	    </div>
    </div>
  <div class="form-group row">
		<label class="col-sm-3">comment</label>
		<div class="col-sm-6">
	      <textarea name="comments"  class="form-control">
			</textarea>
	    </div>	
	    </div>	
	
	<div>	
	<button type="submit" class="btn btn-primary">submit</button>	
</div>

	
</form>

</body>
</html>
-->