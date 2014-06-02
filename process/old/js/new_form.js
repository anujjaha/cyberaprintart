function saveNewJob()
{
 	var key = document.getElementById("key").value;
	var skey = document.getElementById("skey").value;
	var rone = document.getElementById("rone").value;
	var rtwo = document.getElementById("rtwo").value;
	var rthree = document.getElementById("rthree").value;
	var subtotal = document.getElementById('total').value;
	var advance = document.getElementById('advance').value;
	var total;
	if(rone == "")
	{ rone = 0; }
	if(rtwo == "")
	{ rtwo = 0; }
	if(rthree == "")
	{ rthree = 0; }
	total = parseInt(rone) + parseInt(rtwo) + parseInt(rthree);
	document.getElementById('total').value = total;
	if(advance == "")
	{
		document.getElementById("advance").focus();	
		return false;
	}
	if(key == "")
	{
		alert("Please Provide Security Key");
		document.getElementById("key").focus();
		return false;
	}
}

function test()
{
	var total = document.getElementById("total").value;
	var advance = document.getElementById("advance").value;
	var due;
	due = parseInt(total) - parseInt(advance);
	document.getElementById('due').value = due;
}
