<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><?php
$n=10;
$a=0 ;
$b=1;
$s=0;
$i=2;
echo $a;

echo $b;
while ($i<$n)
{
$s=$a+$b;
$a=$b;
$b=$s;
$i++;
echo $s." ";
}



?>




</body>
</html>
