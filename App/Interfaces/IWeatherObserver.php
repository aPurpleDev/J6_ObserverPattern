<?php

namespace App\Interfaces;
use App\Interfaces\IWeatherStation;

interface IWeatherObserver extends \SplObserver{

  public function update(\SplSubject $splSubject);

}

?>
