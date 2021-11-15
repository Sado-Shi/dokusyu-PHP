<?php
trait Machine
{
  private $goto = 'Starting...Machine!';

  public function go()
  {
    print $this->goto;
  }
}
