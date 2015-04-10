<?php
	include "syllables.php";
	$words=file("./Data/words.txt");
	$word=rand(0,count($words)-1);
	$word=$words[$word];
	//$word="grandpa";
	echo find_syll($word);
?>