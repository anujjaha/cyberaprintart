function t1()
{	
	var q1 =  document.getElementById("qone").value;
	var r1 = document.getElementById("rone").value;
	var a1 = document.getElementById("aone").value;
	var tot1;
	if(document.getElementById('rate1').checked)
	{
	tot1 = parseFloat(q1) * parseFloat(r1);	
	tot1 = Math.round(tot1);
	document.getElementById("aone").value = tot1;
	document.getElementById("rone").value = r1;
	}
	else
	{
	tot1 = parseFloat(a1) / parseFloat(q1);
	tot1 = Math.round(tot1);
	document.getElementById("rone").value = tot1;
	document.getElementById("aone").value = a1;
	}
}

function t2()
{	
	var q1 =  document.getElementById("qtwo").value;
	var r1 = document.getElementById("rtwo").value;
	var a1 = document.getElementById("atwo").value;
	var tot1;
	if( document.getElementById('rate2').checked)
	{
	tot1 = parseFloat(q1) * parseFloat(r1);	
	tot1 = Math.round(tot1);
	document.getElementById("atwo").value = tot1;
	document.getElementById("rtwo").value = r1;
	}
	else
	{
	tot1 = parseFloat(a1) / parseFloat(q1);
	tot1 = Math.round(tot1);
	document.getElementById("rtwo").value = tot1;
	document.getElementById("atwo").value = a1;
	}
}

function t3()
{	
	var q1 =  document.getElementById("qthree").value;
	var r1 = document.getElementById("rthree").value;
	var a1 = document.getElementById("athree").value;
	var tot1;
	if( document.getElementById('rate3').checked)
	{
	tot1 = parseFloat(q1) * parseFloat(r1);	
	tot1 = Math.round(tot1);
	document.getElementById("athree").value = tot1;
	document.getElementById("rthree").value = r1;
	}
	else
	{
	tot1 = parseFloat(a1) / parseFloat(q1);
	tot1 = Math.round(tot1);
	document.getElementById("rthree").value = tot1;
	document.getElementById("athree").value = a1;
	}
}

function t4()
{	
	var q1 =  document.getElementById("qfour").value;
	var r1 = document.getElementById("rfour").value;
	var a1 = document.getElementById("afour").value;
	var tot1;
	if( document.getElementById('rate4').checked)
	{
	tot1 = parseFloat(q1) * parseFloat(r1);	
	tot1 = Math.round(tot1);
	document.getElementById("afour").value = tot1;
	document.getElementById("rfour").value = r1;
	}
	else
	{
	tot1 = parseFloat(a1) / parseFloat(q1);
	tot1 = Math.round(tot1);
	document.getElementById("rfour").value = tot1;
	document.getElementById("afour").value = a1;
	}
}


function saveNewJob()
{
	var key = document.getElementById("key").value;
	var skey = document.getElementById("skey").value;
	var rone = document.getElementById("aone").value;
	var rtwo = document.getElementById("atwo").value;
	var rthree = document.getElementById("athree").value;
	var rfour = document.getElementById("afour").value;
	var subtotal = document.getElementById('total').value;
	var advance = document.getElementById('advance').value;
	var due = document.getElementById('due').value;
	var total;
	if(rone == "")
	{ rone = 0; }
	if(rtwo == "")
	{ rtwo = 0; }
	if(rthree == "")
	{ rthree = 0; }
	if(rfour == "")
	{ rfour = 0; }
	total = parseFloat(rone) + parseFloat(rtwo) + parseFloat(rthree)+ parseFloat(rfour);
	total = Math.floor(total);
	document.getElementById('total').value = total;
	if(advance == "")
	{
		document.getElementById("advance").focus();	
		return false;
	}
	else if(due == "")
	{
		alert("Please Check Due Amount");
		document.getElementById("due").focus();
		return false;
	}
	else if(key == "")
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
	due = parseFloat(total) - parseFloat(advance);
	document.getElementById('due').value = due;
	document.getElementById('balance').value = due;
	saveNewJob();
}

function myTime()
{
	document.getElementById('ntype').focus();
	var currentTime = new Date()
	var hours = currentTime.getHours()
	var minutes = currentTime.getMinutes()
	if (minutes < 10)
	minutes = "0" + minutes
	var suffix = "AM";
	if (hours >= 12) {
	suffix = "PM";
	hours = hours - 12;
	}
	if (hours == 0) {
	hours = 12;
	}
	document.getElementById("myTime").value = hours + ":" + minutes + " " + suffix ;
	document.getElementById("ntype").focus();
}

function cusType()
{
	if(document.getElementById("ntype").checked)
	{
		document.getElementById("csname").disabled=true;
		document.getElementById("ctname").disabled=false;
	}
	if(document.getElementById("otype").checked)
	{
		document.getElementById("ctname").disabled=true;
		document.getElementById("csname").disabled=false;
	}
}

function completeAmt()
{
	var due = document.getElementById("due").value;
	var balance = document.getElementById("balance").value;
	var camt;
	camt = balance - due;
	document.getElementById("due").value = camt;
}