<?php

// Insert a new row to the given CSV file:
function insert_a_new_row($csv_file, $data){
	$f = fopen($csv_file.".csv", "a");
	fputcsv($f, $data);
	fclose($f);
	echo "The given data packet is added to the <i><b>".$csv_file.".csv</b></i> file successfully!";
}

if(isset($_GET["orp"]) && isset($_GET["pH"]) && isset($_GET["tds"]) && isset($_GET["turbidity"]) && isset($_GET["pollution"])){
	$data = array($_GET["orp"], $_GET["pH"], $_GET["tds"], $_GET["turbidity"], $_GET["pollution"]);
	insert_a_new_row("water_pollution_data_set", $data);
}else{
	echo "Waiting Data...";
}

?>