<?php
	include "syllables.php";
	$words=file("./Data/words.txt");
	$word=rand(0,count($words)-1);
	$word=$words[$word];

//	$word="accompany";
	$word=preg_replace('/\s+/', '', $word);
	echo find_syll($word);
?>