function check()
{
	var key = document.getElementById('key').value;
	var skey = document.getElementById('skey').value;	
	if(key == "")
	{
		alert("Please Fill security Key");
		document.getElementById('key').focus();
		return false;
	}
	if(key != skey )
	{
		alert("Please Provide Valid Security Key");
		document.getElementById('key').value = "";
		document.getElementById('key').focus();
		return false;
	}
}

