<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><?php
$n=5;
$a=1;
$sp=0;
for($r=1;$r<=$n;$r++)
{ 
for($c=1;$c<=$r;$c++){
if($c%2-1==0) 
{
echo " A ";
}
 else
 {
 echo " B ";
 } 
   
}

echo "<br/>";
}


?>




</body>
</html>
