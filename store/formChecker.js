function formChecker()
{
	if(parseInt(document.getElementById("sand").value) < 0)
	{
		alert("You must enter a number greater than or equal to zero");
		return false;
	}
	if(parseInt(document.getElementById("nugs").value) < 0)
	{
		alert("You must enter a number greater than or equal to zero");
		return false;
	}
	if(parseInt(document.getElementById("strips").value) < 0)
	{
		alert("You must enter a number greater than or equal to zero");
		return false;
	}
	if(document.getElementById("password").value == "")
	{
		alert("You must enter your password");
		return false;
	}
	if(!(document.getElementById("stan").checked) && !(document.getElementById("over").checked) && !(document.getElementById("three").checked))
	{
		alert("You must select a shipping option");
		return false;
	}
}
