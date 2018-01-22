function UserInputs(){
	var email =document.getElementById("email").value;
	var role =document.getElementById("role").value;
	var username =document.getElementById("username").value;
	var password =document.getElementById("password").value;
	var confirmPassword =document.getElementById("confirmPassword").value;
	if (password===confirmPassword) {
		document.getElementById("error").innerHTML="";
		document.getElementById('register').reset();
		registerNewUser(email,username,role,password);
		return false;
	}else{
		document.getElementById("error").innerHTML="The Two Password Fields Should Match!!";
		return false;
	}

	
}
function registerNewUser(email,username,password,role){
	console.log(email+'/'+username+'/'+password+'/'+role);
}