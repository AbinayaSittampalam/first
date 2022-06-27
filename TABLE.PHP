<HTML>
<BODY>
<table BORDER="1">


<?PHP
FUNCTION TABLE(){
	GLOBAL $NUMBER;
		
	FOR($Y=1;$Y<=10;$Y++){
			ECHO "<TR>";
	FOR($X=1;$X<=10;$X++)
	{
		ECHO "<TD>";
		$NUMBER=$Y*$X;
	ECHO $NUMBER;
		
}
}
}
TABLE();


?>
</TABLE>
<?PHP
$myString="hello, world!";
echo strstr($myString,"wor")."<br/>";
echo(strstr($myString,"xyz")?"yes":"no")."<br/>";
echo strstr($myString,"wor",true);
echo strpos($myString,"wor")."<br/>";
echo strpos($myString,"xyz")."<br/>";

echo strpos($myString,"o")."<br/>";
echo strpos($myString,"o",5)."<br/>";

$myString1="i say,nay ,nay,and thrice nay!";
echo substr_count($myString1,"nay")."<br/>";
echo substr_count($myString1,"nay",9)."<br/>";
echo substr_count($myString1,"nay",9,6)."<br/>";
echo str_replace("nay","twice",$myString1,$num)."<br/>";
echo"the text was replaced $num times.<br/>";
echo substr_replace($myString1,"twice",19,5)."<br/>";
echo substr_replace($myString1,"twice",19,-20)."<br/>";

$my="0123456789";
echo substr_replace($my,"*",2,0)."<br/>";
define("PI_VAL",3.74);
$Y=50;
PRINTF("VLUE OF PI IS:%D NUMBER OF SUBJECTS IN Y:%",6,$Y);
echo "<br/>";
ECHO"|".TRIM($myString)."|\n";
echo "<br/>";
ECHO"|".rTRIM($myString)."|\n";
?>

<?php
$authors=array("Steinbeck","kafka","tolkien","dickens");
$mybook=array("title"=>"the grapes of warth","author"=>"john steinbeck","pubyear"=>1939);
/*
for($i=0;$i<5;$i++)
{
	echo $authors[$i];
}
*/

print_r($authors);
echo"<br>";
print_r($mybook);

?>


</BODY>

</HTML>