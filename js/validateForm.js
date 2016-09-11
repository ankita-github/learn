
function checkNumber(input){
	var pattern = /^[1-9][0-9]{9}$/;
	//window.alert(input);
	if( pattern.test(input)){
		return input;
	}
	else
		return '';
  
}
