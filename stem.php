<?php
$result  = "Result";
if(isset($_POST['submit']))
{
$str1=$_POST['str1'] ;
$str2 = $_POST['str2'];

/* echo mb_strlen($str1); */
$lastchr = mb_substr($str1,$str1-1);

if($lastchr=="்")
{
	/*	echo mb_strlen($str1)-1;
	echo mb_substr($str2,0,mb_strlen($str1)-1); */
	if(mb_substr($str1,0,mb_strlen($str1)-1)==mb_substr($str2,0,mb_strlen($str1)-1))
	{
		$result  = "Match Found";
	}
	else
	{
		$result  = "Not Match";
	}
	
}
else
{
	$result  = "No Need for stemming";
}
}
?>
<html>
<title>Stemmer</title>
<body>
<form name="form1" method="POST" >
	<table>
		<tr><td> Focus Keyword</td><td><input type="text" name="str1"></td>
	<tr><td>Original Word</td><td><input type="text" name="str2"></td></tr>
	<tr><td><input type="Submit" value="Check" name="submit"></td>
		<td><span style="color:red;"><?php echo $result; ?></span></td></tr>
	</table>
</form>
</body>
</html>