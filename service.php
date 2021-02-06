<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
 
  <!-- <link rel="stylesheet" href="stycle.css" type="text/css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	 <link rel="stylesheet" type="text/css" href="stylie.css">
 
</head>
<body bgcolor="lighblue" align="centre" >
	<h3>
		HERE YOU CAN RESERVE YOUR FOOD TIMING
	</h3>
	<div class="py-5">
		<h2 class="text-center">RESERVATION</h2>
	</div>
	<div class="w-50 m-auto">
<form action="customerinfo.php" method="post" class="form">
  <div class="form-group row">
  	<!-- <div class="col-sm-2" ></div> -->
    
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
      <input type="number" name="mobile" class="form-control" maxlength="10" required />
    </div>
   </div>

    <div class="form-group row">
	    <label  class="col-sm-3">Timing  <sup>*</sup></label>
	    <div class="col-sm-6">
	      <input type="time" name="timing" class="form-control" required />
	    </div>
    </div>
    <div class="form-group row">
	    <label  class="col-sm-3">seat<sup>*</sup> </label>
	    <div class="col-sm-6">
	      <input type="number" name="seat" class="form-control" max="100" required />
	    </div>
    </div>
  <div class="form-group row">
		<label class="col-sm-3">comment</label>
		<div class="col-sm-6">
	      <textarea name="comments"  class="form-control">
			</textarea>
	    </div>	
	    </div>	
	<p><b>Do your payment of alteast 500 Rs for reservation</b></p>
	<h5>Dont worry this will be deducted from your final bill</h5>
  

 <fieldset action="customerinfo.php">
  <div class="form-group-row">
    <div class="col-sm-3">
          <legend>Payment</legend>
   </div>
 
       <div class="control-group">
            <label class="control-label">Card Holder's Name <sub>*</sub></label>
            <div class="controls">
              <input type="text" class="input-block-level" pattern="\w+ \w+.*" placeholder="Fill your first and last name" required>
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Card Number<sup>*</sup></label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span3">
                  <input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="First four digits" required>
                </div>
                <div class="span3">
                  <input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="Second four digits" required>
                </div>
                <div class="span3">
                  <input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="Third four digits" required>
                </div>
                <div class="span3">
                  <input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" placeholder="Fourth four digits" required>
                </div>
              </div>
            </div>
          
       
          <div class="control-group">
            <label class="control-label">Card Expiry Date</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span9">
                  <select class="input-block-level">
                    <option>January</option>
                    <option>...</option>
                    <option>june</option>
                    <option>...</option>
                    <option>December</option>
                  </select>
                </div>
                <div class="span3">
                  <select class="input-block-level">
                    <option>2012</option>
                    <option>...</option>
                    <option>2024</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label">Card CVV<sup>*</sup></label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span3">
                  <input type="text" class="input-block-level" autocomplete="off" maxlength="3" pattern="\d{3}" placeholder ="Three digits at back of your card" required>
                </div>
                
                
              </div>
            </div>
          </div>
           <div class="control-group">
            <label class="control-label">password<sup>*</sup></label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span3">
                  <input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" required>
                </div>
                
                
              </div>
            </div>
          </div>
          <div class="control-group">
            <label for="currency-field">Enter Amount<sup>*</sup></label>
            <div class="controls">
              <div class="row-fluid">
                <div class="span3">
                  <input type="number" name="Amount" id="currency-field" min="500" value="Amount" required />
                </div>
              </div>
            </div>
          </div>
          
      
        </div>    
    </fieldset>
   
	  <div>	
	<button type="submit" class="btn btn-primary">submit</button>	
      </div>
</form>

</body>
</html>
