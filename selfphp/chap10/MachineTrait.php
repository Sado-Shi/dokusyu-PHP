<?php
require_once 'Machine.php';

trait MachineTrait {
  use Machine;
  private $starting = 'Starting...Run!';

  public function run() {
    print $this->starting;
  }
}
