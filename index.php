<!DOCTYPE html>
<html>
<head>
	<title>try form</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
 	<link href="images/favicon.png" rel="icon" type="image/png">
	<!--meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--css-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <!-- Load jQuery UI CSS  -->
    <link rel="stylesheet" href="css/jquery-ui.css" />

    <style type="text/css">
    	.popover-content{color: red;}
    </style>

</head>
<body>
	<form>
		<div class="col-md-12" style="padding: 5%; font-family: Times New Roman">
			<div class="col-md-4" >
				<div class="form-group">
					<label>First Name</label>
					<!-- Changes made -->
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
					<input type="text" id="phone_number" placeholder="9999999999" class="form-control" >

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
                        <input id="dob" class="form-control" size="16" type="text" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input2" value="" />
                </div>

			</div>
		</div>



		<div class="col-md-10" align="left" style="padding-left:6%;">
			<button id="submit" type="button" value="Submit" class="btn btn-success btn-lg">Submit</button>
		</div>

	</form>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>


	<!-- Load jQuery JS -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script_ajax.js"></script>
	<script src="js/validateForm.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript">
	        $('.form_date').datetimepicker({
	        todayHighlight: 1,
	        minView: 2
	    });
	</script>
	<script type="text/javascript">
		$('#submit').click(function() {
			myFunction();
		})
	</script>
	<script type="text/javascript">

		$('#phone_number').focusout(function() {
			$('#phone_number').val(checkNumber($('#phone_number').val()));
			if($('#phone_number').val() == '') {
				$('#phone_number').popover({
					content: "Enter a correct phone number",
					placement: "bottom",

				});
				$('#phone_number').popover('show');
			}
		})
		$('#check').click(function(){
	        event.preventDefault();
	            if ($('#check').is(':checked')) {
	            	$('#checktext').hide();

            }
        })


	</script>
</body>
</html>
