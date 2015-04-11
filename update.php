<?php
	function valid_arr($arr,&$container){
		$c=count($arr);

		$container='array(';
	//	echo $c."|";
		for($i=0;$i<$c-1;$i++)
		{
			//echo $arr[$i]." ";
			$container=$container."'".$arr[$i]."',";
		}
		//echo $arr[$c-1]."|";
		$container=$container."'".$arr[$c-1]."')";
		//echo $container."         ";
	}
	include "./Data/5syll.php";
	include "./Data/4syll.php";
	include "./Data/3syll.php";
	include "./Data/2syll.php";
	include "./Data/1syll.php";
	$syllables=$_POST["sylls"];
	foreach ($syllables as $syll) {
		$syll=preg_replace('/\s+/', '', $syll);
		echo $syll."|";
		if(strlen($syll)==5&&!in_array($syll,$l5))
		{
			array_push($l5,$syll);
		}

		if(strlen($syll)==4&&!in_array($syll,$l4))
		{
			array_push($l4,$syll);
		}

		if(strlen($syll)==3&&!in_array($syll,$l3))
		{
			array_push($l3,$syll);
		}

		if(strlen($syll)==2&&!in_array($syll,$l2))
		{
			array_push($l2,$syll);
		}
	}
	$arr5='';
	valid_arr($l5,$arr5);
	valid_arr($l4,$arr4);
	valid_arr($l3,$arr3);
	valid_arr($l2,$arr2);
	//echo $arr5;
	file_put_contents("./Data/5syll.php",'<?php $l5='.$arr5."; ?>");
	file_put_contents("./Data/4syll.php",'<?php $l4='.$arr4."; ?>");
	file_put_contents("./Data/3syll.php",'<?php $l3='.$arr3."; ?>");
	file_put_contents("./Data/2syll.php",'<?php $l2='.$arr2."; ?>");
//	echo "done writing";
?>