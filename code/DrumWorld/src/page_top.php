<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-2">
<script>
	function showResult(str){
		if (str.length==0){
			document.getElementById("livesearch").innerHTML="";
			document.getElementById("livesearch").style.border="0px";
			return;
		}
		if (window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		smlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
				document.getElementById("livesearch").style.border="1px solid #A5ACB2";
			}
		}
		xmlhttp.open("GET","search.php?q="+str,true);
		xmlhttp.send();
	}	
</script>
<TITLE>Drum World</TITLE>

<LINK REL ="stylesheet" HREF="..\css\drum.css" TYPE="text/css">
<LINK REL ="stylesheet" HREF="..\css\bootstrap\css\bootstrap.min.css" TYPE="text/css">
<link rel="stylesheet" href="..\css\bootstrap\css\bootstrap-theme.css" TYPE="text/css">

</HEAD>

<BODY bgcolor="#ffffff">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="..\css\bootstrap\js\bootstrap.min.js"></script>
	<div class="container" >
		<div align = "center" color = "white"> <h1>   Drum    <img src="../pics/logo/logo1.jpg" width="100" height= "70">   World   </h1> </div>
		<div class = "row-fluid">

	