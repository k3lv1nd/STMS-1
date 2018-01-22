function UserInputs(){
	var email =document.getElementById("email").value;
	var role =document.getElementById("role").value;
	var username =document.getElementById("username").value;
	var password =document.getElementById("password").value;
	var confirmPassword =document.getElementById("confirmPassword").value;
	if (password===confirmPassword) {
		if (password.length<6) {
			document.getElementById("error").innerHTML="Password Should be a Minimum of 6 Characters!!";
		}else{
			var data={username:username,email:email,password:password,role:role};
			document.getElementById("error").innerHTML="";
			document.getElementById('register').reset();
			$.ajax({
				type:"POST",
				url:"registernewuser.php",
				data:data,
				success:function(data){
					console.log(data);
				},
				error:function(data){
					console.log('Error:'+data);
				}
			});
		}
		
	}else{
		document.getElementById("error").innerHTML="The Two Password Fields Should Match!!";
		
	}

return false;	
}
