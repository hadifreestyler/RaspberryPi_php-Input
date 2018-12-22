<html>
<head>

<title> HTML FORMMMMM </title>

<style>
body{
	background: #bfbfbf;
}
form{
	text-align: center;
	padding:20px;
	color:#ff0000;
	margin: auto;
	font-size:90px;
	background:#bfbfbf;
}
input [type=number]{
	width:100%;
	padding:5px;
	font-size:17px;
}
input [type=submit]{
	padding:5px;
	font-size:17px;
}
</style>
</head>

	

   <body>


	<form action="index.php" method="get">
	<label>Value:
        <input style="height:20%; width:100%; font-size:200%" step="0.001" type="number" name="value" />
    </label>
	
	<label>
        <input style="height:10%; width:50%; font-size:60%"type="Submit"/>
    </label>
		
	
	</form>
    <br>
	<?php 
	$value = $_GET['value'];
	
	system(" gpio -g mode 24 out ") ;
	
$time1 = shell_exec('echo $( date +%s%N)');

    system(" gpio -g write 24 1 ") ;

	system(" sleep $value ") ;
	
	system(" gpio -g write 24 0 ") ;

$time2 = shell_exec('echo $( date +%s%N)');
	
	$result = ($time2 - $time1) ;
	
	echo $result ;
	?>

   </body>
</html>

