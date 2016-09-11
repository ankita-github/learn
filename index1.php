
<!DOCTYPE html>
<html>
<head>
	<title>try form</title>
	<!-- Favicon -->
 	<link href="images/favicon.png" rel="icon" type="image/png">
	<!--meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--css-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
     <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <!-- Load jQuery JS -->
    <script src="js/jquery.js"></script>

    <script src="js/script.js"></script>
    <script src="js/script_ajax.js"></script>
	<script src="js/validateForm.js"></script>
</head>
<body>
	<form>
		<div class="col-md-12" style="padding: 5%; font-family: Times New Roman">
			<div class="col-md-4" >
				<div class="form-group">
					<label>First Name</label>
					<input class="form-control" type="text" placeholder="First Name" id="fname" required>
				</div>
	            <div class="form-group">
					<label>E-mail</label>
					<input class="form-control" type="email" id="email" name="" placeholder="xyz@gmail.com" required>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Last Name</label>
					<input class="form-control" type="text" placeholder="Last Name" id="lname" required>
				</div>
				<div class="form-group">
					<label>Phone Number</label>
					<input type="text" id="phone_number" placeholder="9999999999" class="form-control" onblur= "this.value = checkNumber(this.value)">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Gender&nbsp;&nbsp;</label><br>
		  			<input type="radio" id="sex" name="gender" value="male" > Male&nbsp;&nbsp;
					<input type="radio" id="sex" name="gender" value="female"> Female&nbsp;&nbsp;
					<input type="radio" id="sex" name="gender" value="other"> Other&nbsp;&nbsp;
				</div>
				<div class="form-group" style="padding-top: 2.5%">
					<label>Date of Birth</label>
                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                        <input class="form-control" size="16" type="text" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input2" value="" />
                </div>

			</div>
		</div>

			<div class="col-md-2" align="left">
				<input class="form-control" id="submit" type="button" value="Submit" >
			</div>
		


	</form>
	<script type="text/javascript">
		$('#submit').click(function() {
			myFunction();
		})
	</script>
	<!--<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>-->
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<!--<script type="text/javascript" src="./js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>-->
	<script type="text/javascript">
	        $('.form_date').datetimepicker({
	        language:  'en',
	        weekStart: 1,
	        todayBtn:  1,
	        autoclose: 1,
	        todayHighlight: 1,
	        startView: 2,
	        minView: 2,
	        forceParse: 0
	    });
	</script>

</body>
</html>
