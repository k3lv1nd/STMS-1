function RegisterNewUser(){
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
			
			
			$.ajax({
				type:"POST",
				url:"registernewuser.php",
				data:data,
				success:function(data){
					document.getElementById("displayresponse").style.display='';
					document.getElementById("displayresponse").classList.remove('alert-danger');
					document.getElementById("displayresponse").classList.remove('alert-success');
					document.getElementById('a_login').style.backgroundColor = '';
					if (data==='1') {
						document.getElementById('register').reset();
						document.getElementById("displayresponse").className +=' alert-success';
						document.getElementById("displayresponse").innerHTML="User Successfully Registered.Proceed to Login...";
						document.getElementById('a_login').style.backgroundColor = '#03fbfb';
						//setTimeout(function(){window.location='http://localhost/STMS/index.php';},3000);
					}else if(data==='2'){
						document.getElementById("displayresponse").className +=' alert-danger';
						document.getElementById("displayresponse").innerHTML=
						"A very Bad Error has Occured, But a team of highly trained Monkeys have been dispatched to handle it.No worry!";

					}else{
						console.log(data);
						document.getElementById("displayresponse").className +=' alert-danger';
						document.getElementById("displayresponse").innerHTML="User Already Exists in Our records!";

					}
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
