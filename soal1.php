<?php

// app.php

class App {
  
}
$app = new App();

$app->name = "Harry Potter Game";
$app->age = 20;
$app->address = "Jl. Diponegoro no.7";
$app->hobi = array('ngoding','mengaji','baca');
$app->is_married = false;
$app->list_school = array(
	name=> 'Universitas Muhammadiyah Tangerang',
	year_in=>'2015',
	year_out=>'2019',
	major=>'Teknik Informatika'
	);
$app->skills = array(
	skill_name =>'Java dan Kotlin',
	level => array('beginner','advanced','expert')
	);
$app->interest_in_coding = true;

$jsonData = json_encode($app);
echo $jsonData."\n";

