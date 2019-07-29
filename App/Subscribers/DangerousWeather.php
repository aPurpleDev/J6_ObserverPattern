<?php
namespace App\Subscribers;
use App\Interfaces\IWeatherObserver;

class DangerousWeather implements IWeatherObserver
{
    public function refresh($rain, $temperature, $wind)
    {
        // Code affichant le niveau de précipitation, la température et la vitesse du vent.
        echo '<h3>DangerousWeatherDisplay</h3><em>Bulletin vigilance météo</em>';
    }

    public function update(\SplSubject $weatherSubject){

      echo '<em>notification de l\'observateur</em>';
      $this.$weatherSubject->refresh();
    }
}

?>
