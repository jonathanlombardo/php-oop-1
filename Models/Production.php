<?php

require_once(__DIR__ . "/Genre.php");

class Production
{
  protected $title;
  protected $lang;
  protected $rate;
  protected $genres;
  public function __construct(
    string $title,
    string $lang,
    float $rate = null,
    array $genres = null,
  ) {
    $this->title = $title;
    $this->lang = $lang;
    $this->rate = $rate;
    $this->setGenres($genres);
  }

  public function getTitle(): string
  {
    return $this->title;
  }
  public function getLang(): string
  {
    return $this->lang;
  }
  public function getRate(): float
  {
    return $this->rate;
  }

  public function getGenreName()
  {
    foreach ($this->genres as $genre) {
      echo $genre->getName() . " | ";
    }
  }

  public function getGenreDesc()
  {
    foreach ($this->genres as $genre) {
      echo $genre->getDesc() . "|";
    }
  }

  public function setGenres(array $genres)
  {
    foreach ($genres as $genre) {
      if (!($genre instanceof Genre)) {
        throw new InvalidArgumentException("Genre type error");
      }
    }
    $this->genres = $genres;
  }
  public function setRate(float $rate)
  {
    $this->rate = $rate;
  }
}