<?php

namespace App\Interfaces;
use App\Interfaces\IWeatherObserver;

interface IWeatherStation extends \SplSubject{

  public function attach(\SplObserver $splObserver);

  public function detach(\SplObserver $splObserver);

  public function notify();

}

?>
