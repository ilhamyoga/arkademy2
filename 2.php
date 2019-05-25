<?php
	function betweenDays($date1,$date2){
		$pecahTgl1 = explode("-", $date1);
		$thn1 = $pecahTgl1[0];
		$bln1 = $pecahTgl1[1];
		$tgl1 = $pecahTgl1[2];
		$i = 0;
		do{
			$tanggal = date("Y-m-d", mktime(0, 0, 0, $bln1, $tgl1+$i, $thn1));
			echo $tanggal."<br>";
			$i++;
		}
		while ($tanggal != $date2);
	}
	betweenDays("2019-11-01", "2019-11-05");
?>