<?php
use App\Interfaces\IWeatherObserver;
use App\Interfaces\IWeatherStation;

use App\Subscribers\CurrentWeather;
use App\Subscribers\DangerousWeather;
use App\Subscribers\TomorrowWeather;

use App\Weathersubject\WeatherStation;

require ('vendor/autoload.php');
include ('template.html');

// Création de la station météo (le sujet).
$weatherStation = new WeatherStation();

/*
 * Création des dispositifs météo (les observateurs) et enregistrement de chacun d'eux auprès du
 * sujet. C'est ici que la dépendance entre le sujet et les observateurs est créé.
 */
$weatherStation->attach(new CurrentWeather());
$weatherStation->attach(new DangerousWeather());
$weatherStation->attach(new TomorrowWeather());


// Exécution de la station météo.
$weatherStation->run();
?>
