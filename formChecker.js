function Checkout()
{
    var user = document.getElementById("user").value;
	var passwd = document.getElementById("password").value;

	var email = /\b\w+@\w+\.com\b/;

    if(!email.test(user)){

		window.alert("Invalid username. Must be of the form user@domain.com");
		return false;
	}

}
