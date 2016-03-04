function Checkout()
{
    var user = document.getElementById("user").value;
	var passwd = document.getElementById("password").value;
	var qdsktop = document.getElementById("dsktop").value;
    var qlptop = document.getElementById("lptop").value;
    var qcellp = document.getElementById("cphone").value;

	var email = /\b\w+@\w+\.com\b/;

    if(!email.test(user))
    {

		window.alert("Invalid username. Must be of the form user@domain.com");
		return false;
	}

    if(passwd =="")
    {
        window.alert("Password cannot be blank");
        return false;
    }

    if(qdsktop<0 || isNaN(qdsktop) || qlptop<0 || isNaN(qlptop) || qcellp<0 || isNaN(qcellp))
    {
        window.alert("Invalid quantity(s)");
        return false;
    }

    return true;
}
