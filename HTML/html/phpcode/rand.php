
 <tt>
 <?php
	for($i = 0; $i < 2000; $i++){
		//echo(rand() . "<br>");
		//echo(rand() . "<br>");
		//echo(rand(65,91));
		//echo "<br />";
		$a = (rand(65,91));
		$b = (rand(65,91));
		$c = (rand(65,91));
		//echo "$a $b $c";
		$ac = chr($a);
		$bc = chr($b);
		$cc = chr($c);
		//echo "<br />";
		//echo "$ac $bc $cc";
		$txt = $ac.$bc.$cc;
		//echo "<br />";
		if ($txt == "ABC")echo "***";
		echo "$txt&nbsp;";
	
		if ($i % 20 == 0  ){echo "<br />";}
	
	 }
 ?>
 </tt>
	
