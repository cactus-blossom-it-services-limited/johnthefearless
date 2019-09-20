<?php

namespace Foggyline\Catalog\Model;

// Just a dummy class, for testing purposes
class Layer
{
  public function dummy() {
    $time = time();
    sleep(2);
    $time = time() - $time;
    return $time;
  }
}
 ?>
