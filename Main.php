<!DOCTYPE html>
<html>
<head>
<title>
SPORTS FAN CLUB REGISTRATION
</title><style>
body
{

}</style><script>//document.getElementById("main").innerHTML="";</script>
</head>
<body>
	<h1>
		Details :
	</h1>
	<button onclick="loadDoc1()">Start</button><div id="main">
	<form id="fullform" method="POST" action="save.php">

		<div id="d1">
			<input type="text" id="Q1" name="Q1">
		</div>
		<div id="d2">
			<input type="text" id="Q2" name="Q2">
		</div>
		<div id="d3">  
			<br>
			<span id="s1" name="s1">
			</span>
			<input type="radio" name="O3" id="O31" value="O31" onclick="loadDoc3(this.value)">
			<br>
			<span id="s2" name="s2">
			</span>
  			<input type="radio" name="O3" id="O32" value="O32" onclick="loadDoc3(this.value)">
  			<br>
		</div>


		<div id="d4">
			<input type="text" id="Q4" name="Q4">
		</div>
		<div id="d5">
			<input type="text" id="Q5" name="Q5">
		</div>
		<div id="d6"> 
			<br>
			<span id="d61" name="d61">
			</span>
			<input type="radio" name="O6" id="O61" value="O61" onclick="loadDoc6(this.value)">
			<br>
			<span id="d62" name="d62">
			</span>
  			<input type="radio" name="O6" id="O62" value="O62" onclick="loadDoc6(this.value)">
  			<br>
		</div>


		<div id="d7">
			<input type="text" id="Q7" name="Q7">
		</div>
		<div id="d8">
			<input type="text" id="Q8" name="Q8">
		</div>
		<div id="d9"> 
			<br>
			<span id="d91" name="d91">
			</span>
			<input type="radio" name="O9" id="O91" value="O91" onclick="loadDoc9(this.value)">
			<br>
			<span id="d92" name="d92">
			</span>
  			<input type="radio" name="O9" id="O92" value="O92" onclick="loadDoc9(this.value)">
  			<br>
		</div>


		<div id="d10">
			<input type="text" id="Q10" name="Q10">
		</div>
		<div id="d11">
			<input type="text" id="Q11" name="Q11">
		</div>
		<div id="d12"> 
			<input type="text" id="Q12" name="Q12">
		</div>

<input type="submit">

		
	</form></div>
	<script>
	function loadDoc1() {//document.getElementById("main").innerHTML=document.getElementById("fullform").innerHTML;
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange=function() 
  		{
    		if (this.readyState == 4 && this.status == 200) 
    		{
      			var myObj = JSON.parse(this.responseText);
				document.getElementById("d1").innerHTML = myObj.Q1+document.getElementById("d1").innerHTML;
				document.getElementById("d2").innerHTML = myObj.Q2+document.getElementById("d2").innerHTML;
				document.getElementById("d3").innerHTML = myObj.Q3+document.getElementById("d3").innerHTML;
				document.getElementById("s1").innerHTML = myObj.O31;
				document.getElementById("s2").innerHTML = myObj.O32;
    		}
  		};
  		xhttp.open("GET", "First.php?", true);
  		xhttp.send();
  	}

  		function loadDoc3(str) {
  			//document.getElementById("qq").innerHTML=str;
  			if(str=="O31")
  			{document.getElementById("O32").disabled = true;
  				str=document.getElementById("s1").innerHTML;
  				//document.getElementById("O31").readonly=true;  
  				document.getElementById("O31").value=document.getElementById("s1").innerHTML;
  			}			
  			if(str=="O32")
  			{document.getElementById("O31").disabled = true;
  				str=document.getElementById("s2").innerHTML; 
  				document.getElementById("O32").value=document.getElementById("s2").innerHTML;
  			}
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange=function() 
  		{
    		if (this.readyState == 4 && this.status == 200) 
    		{
      			var myObj1 = JSON.parse(this.responseText);
				document.getElementById("d4").innerHTML = myObj1.Q4+document.getElementById("d4").innerHTML;
				document.getElementById("d5").innerHTML = myObj1.Q5+document.getElementById("d5").innerHTML;
				document.getElementById("d6").innerHTML = myObj1.Q6+document.getElementById("d6").innerHTML;
				document.getElementById("d61").innerHTML = myObj1.O61;
				document.getElementById("d62").innerHTML = myObj1.O62;
    		}
  		};
  		xhttp.open("GET", "Second.php?option="+str, true);
  		xhttp.send();
  	}

  		function loadDoc6(str) {
  			//document.getElementById("qq").innerHTML=str;
  			if(str=="O61")
  			{	document.getElementById("O62").disabled = true;
  		str=document.getElementById("d61").innerHTML;  
  			document.getElementById("O61").value=document.getElementById("d61").innerHTML;
  			}			
  			if(str=="O62")
  			{document.getElementById("O61").disabled = true;
  				str=document.getElementById("d62").innerHTML;  	
  				document.getElementById("O62").value=document.getElementById("d62").innerHTML;		
  			}
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange=function() 
  		{
    		if (this.readyState == 4 && this.status == 200) 
    		{
      			var myObj2 = JSON.parse(this.responseText);
				document.getElementById("d7").innerHTML = myObj2.Q7+document.getElementById("d7").innerHTML;
				document.getElementById("d8").innerHTML = myObj2.Q8+document.getElementById("d8").innerHTML;
				document.getElementById("d9").innerHTML = myObj2.Q9+document.getElementById("d9").innerHTML;
				document.getElementById("d91").innerHTML = myObj2.O91;
				document.getElementById("d92").innerHTML = myObj2.O92;
    		}
  		};
  		xhttp.open("GET", "Third.php?option="+str, true);
  		xhttp.send();
  	}


  		function loadDoc9(str) {
  			//document.getElementById("qq").innerHTML=str;
  			if(str=="O91")
  			{	str=document.getElementById("d91").innerHTML; document.getElementById("O92").disabled = true;
  			document.getElementById("O91").value=document.getElementById("d91").innerHTML; 		
  			}	
  			if(str=="O92")
  			{	str=document.getElementById("d92").innerHTML; document.getElementById("O93").disabled = true; 
  			document.getElementById("O92").value=document.getElementById("d92").innerHTML;
  			}			
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange=function() 
  		{
    		if (this.readyState == 4 && this.status == 200) 
    		{
      			var myObj3 = JSON.parse(this.responseText);
				document.getElementById("d10").innerHTML = myObj3.Q10+document.getElementById("d10").innerHTML;
				document.getElementById("d11").innerHTML = myObj3.Q11+document.getElementById("d11").innerHTML;
				document.getElementById("d12").innerHTML = myObj3.Q12+document.getElementById("d12").innerHTML;
				//document.getElementById("d91").innerHTML = myObj2.O91;
				//document.getElementById("d92").innerHTML = myObj2.O92;
    		}
  		};
  		xhttp.open("GET", "Fourth.php?option="+str, true);
  		xhttp.send();
  	}


  	</script>

</body>
</html>