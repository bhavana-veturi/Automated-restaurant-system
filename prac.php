<?php
$a=array(
	"a"=>array("c"=>2),
	"b"=>array("q"=>4));
foreach ($a as $key => $value) {
	$min=0;
	$sub="";
	foreach ($value as $q => $w) {
		if($min<$w){
			$min=$w;
			$sub=$q;
		}
		# code...
	}
	echo $sub."<br>".$min;
	# code...
}
?>