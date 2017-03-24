<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/forecast/q/CA/semarang.json");
	$json_string2 = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/astronomy/q/Australia/semarang.json");
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/ee25287f3d5c72db/planner_07010731/q/CA/semarang.json");
	
	$parsed_json = json_decode ($json_string);
	$parsed_json2 = json_decode ($json_string2);
	$parsed_json3 = json_decode ($json_string3);
	
	$location = $parsed_json->{"response"}->results[0]->{"name"};
	$test = $parsed_json2->{"moon_phase"}->{"current_time"}->{"minute"};
	$a = $parsed_json3->{"response"}->results[0]->{"zmw"};
	
	echo "Di lihat dari Indonesia";
	echo "<br>";
	echo "Kota saya di ${location}\n";
    echo "<br>";	
	echo "Suhu Kemarau diindonesia : ${test}<sup>0</sup>C\n";
	echo "<br>";
	echo "Kode Lokasi : ${a}\n";
?>