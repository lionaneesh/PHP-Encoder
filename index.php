<?php
if ( isset($_POST['code']) &&
     $_POST['code'] != '' )
{
    $encoded = base64_encode(gzdeflate(trim(stripslashes($_POST['code'].' '),'<?php,?>'),9));
    $encode = '
<?php
$encoded = \''.$encoded.'\';
eval(gzinflate(base64_decode($encoded)));
?>';
}
else
{
    $encode = 'Please Enter your Code! and Click Submit!';    
}
?>
<html>
<head>
	<title>Base64 -> Gzip -> Eval PHP encoder</title>
</head>
<style>
div.end 
{
    width:100%;
    background:#222;
    color: white;
    padding: 10px;
}
</style>
<body>
 <center>
 <form method="POST">
        <textarea style='font-weight:bold;background:black;color:lightgreen;' name="code" cols="100" rows="30"><?php echo $encode;?></textarea><br />
        <input type="submit" value="Encode :D" style="padding: 10px;;"/>
 </form>
</center>
</body>
</html>
