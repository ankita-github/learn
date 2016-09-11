

function myFunction() {

	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var email = document.getElementById("email").value;
	var dob = document.getElementById("dob").value;
	var gender = document.getElementById("sex").value;
	var phone_number = document.getElementById("phone_number").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'fname=' + fname + '&lname=' + lname +'&email=' + email + '&phone_number=' + phone_number +'&dob=' + dob + '&gender=' + gender;
	if (lname == '' ||fname == ''|| email == '' || dob == '' || phone_number == '' || gender == '') {
	alert("Please Fill All Fields");
	} else {
		// AJAX code to submit form.
		$.ajax({
		type: "POST",
		url: "ajaxjs.php",
		data: dataString,
		cache: false,
		success: function(html) {
		alert(html);
		}
	});
	}
	return false;
}