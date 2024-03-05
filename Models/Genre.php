<?php

class Genre
{
  private $name;
  private $adult;
  private $description;

  function __construct(string $name, bool $adult, string $description)
  {
    $this->name = $name;
    $this->adult = $adult;
    $this->description = $description;
  }

  public function getName(): string
  {
    return $this->name;
  }
  public function getAdult(): bool
  {
    return $this->adult;
  }
  public function getDescription(): string
  {
    return $this->description;
  }
}