<?php

namespace Medium;

interface MediumInterface
{

  public function read();

  public function write($content);

  public function open();

  public function remove();

}
