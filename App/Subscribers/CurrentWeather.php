<?php

namespace App\Subscribers;
use App\Interfaces\IWeatherObserver;

class CurrentWeather implements IWeatherObserver
{
    public function refresh($rain, $temperature, $wind)
    {
        // Code affichant le niveau de précipitation, la température et la vitesse du vent.
        echo '<h3>CurrentWeatherDisplay</h3><em>Météo en temps réel</em>';
    }

    public function update(\SplSubject $weatherSubject){

      echo '<em>notification de l\'observateur</em>';
      $this.$weatherSubject->refresh();
    }
}

?>
