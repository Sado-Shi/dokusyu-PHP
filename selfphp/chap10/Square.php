<?php
require_once 'IFigure.php';

class Square extends Figure {
  public function getArea(): float {
    return $this->width * $this->height;
  }
}
