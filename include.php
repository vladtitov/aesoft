<?php
$ln='_ru';
	function include2($url){
		include ($url);
	/*	$content  = file_get_contents($url);
		$pos = strpos($content,'<');
		$pos = strpos($content,' ',$pos);
		$newstring=substr_replace($content, ' data-src="'.$url.'" ', $pos, 0);
	echo $newstring;*/
	}
?>