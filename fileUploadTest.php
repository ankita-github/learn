<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- change in branch -->
<form method="post" enctype="multipart/form-data">
    <input type="text" id="first" name="first" value="Bob" />
    <input type="text" id="last" name="last" value="Smith" />
    <input name="image" id="image" type="file" />
    <button id="data">Submit</button>
</form>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
	$("#data").click(function(event){
		event.preventDefault();
	    var info = {
	    	firstName: $('#first').val(),
	    	lastName: $('#last').val(),
	    	image: $('#image').val()
	    }
	    console.log(info);
	    $.ajax({
	        url: 'fileUploadTestSubmit.php',
	        type: 'POST',
	        method: 'POST',
	        data: info,
	        async: false,
	        success: function (data) {
	            alert('OK!');
	        },
	        cache: false,
	        contentType: false,
	        processData: false
	    });

	    return false;
	});
</script>
</body>
</html>
