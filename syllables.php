<?php
	function find_syll($word){
		include "./Data/5syll.php";
		include "./Data/4syll.php";
		include "./Data/3syll.php";
		include "./Data/2syll.php";
		include "./Data/1syll.php";
		$c5=count($l5);
		$c4=count($l4);
		$c3=count($l3);
		$c2=count($l2);
		$c1=count($l1);
		$len=strlen($word);
		$found=false;
		//echo $c5." / ".$c4." / ".$c3." / ".$c2." / ".$c1." / ".$len." at ".$word;
		for($i=0;$i<$len;$i++)
		{
			$found=false;
			for($j=0;$j<$c5;$j++)
			{
				if(strpos($word,$l5[$j])===$i)
				{
					$word = substr_replace($word, "|", $i+5, 0);
					$i+=5;
					$found=true;
					break;
				}
			}
			//echo "no 5";

			if(!$found)
			{
				for($j=0;$j<$c4;$j++)
				{
					if(strpos($word,$l4[$j])===$i)
					{
						$word = substr_replace($word, "|", $i+4, 0);
						$i+=4;
						$found=true;
						break;
					}
				}
			}


			if(!$found)
			{
				for($j=0;$j<$c3;$j++)
				{
					if(strpos($word,$l3[$j])===$i)
					{
						$word = substr_replace($word, "|", $i+3, 0);
						$i+=3;
						$found=true;
						break;
					}
				}
			}


			if(!$found)
			{
				for($j=0;$j<$c2;$j++)
				{
					if(strpos($word,$l2[$j])===$i)
					{
						$word = substr_replace($word, "|", $i+2, 0);
						$i+=2;
						$found=true;
						break;
					}
				}
			}


			if(!$found)
			{
				for($j=0;$j<$c1;$j++)
				{
					if(strpos($word,$l1[$j])===$i)
					{
						$word = substr_replace($word, "|", $i+1, 0);
						$i+=1;
						$found=true;
						break;
					}
				}
			}
		}
		return $word;
	}
?>