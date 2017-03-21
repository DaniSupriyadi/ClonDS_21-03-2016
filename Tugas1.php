<?php 
$json_string = file_get_contents("http://api.wunderground.com/api/7a7e5a57d3e99d78/geolookup/astronomy/conditions/q/CA/San_Francisco.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$wind_mph = $parsed_json->{'current_observation'}->{'wind_mph'};
$temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
$visibility_km= $parsed_json->{'current_observation'}->{'visibility_km'};
$relative_humidity = $parsed_json->{'current_observation'}->{'relative_humidity'};
$ageOfMoon = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
$percentIlluminated = $parsed_json->{'moon_phase'}->{'percentIlluminated'};
echo "Location : ${location}\n";
echo "<br>";
echo "Current weather : ${weather}\n";
echo "<br>";
echo "Temperatures : ${temp_c} celcius\n";
echo "<br>";
echo "Current wind speed : ${wind_mph} mph \n";
echo "<br>";
echo "Visibility : ${visibility_km} km\n";
echo "<br>";
echo "Humidity : ${relative_humidity}\n";
echo "<br>";
echo "Age Of Moon : ${ageOfMoon}\n";
echo "<br>";
echo "Iluminated : ${percentIlluminated}%\n";
?>