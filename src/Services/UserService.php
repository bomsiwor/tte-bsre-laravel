<?php

namespace Bomsiwor\TteBsre\Services;

class UserService
{
  private $urlFragment;

  public function __construct()
  {
    $this->urlFragment = "users/";
  }

  public function add(string $fragment)
  {
    $this->urlFragment .= $fragment;

    return $this;
  }

  public function getResult(): string
  {
    return $this->urlFragment;
  }
}
