<?php

require_once(__DIR__ . "/Genre.php");

class Production
{
  public $title;
  public $lang;
  public $rate;
  public $genre;
  public function __construct(
    string $title,
    string $lang,
    float $rate = null,
    Genre $genre = null,
  ) {
    $this->title = $title;
    $this->lang = $lang;
    $this->rate = $rate;
    $this->genre = $genre;
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
    return $this->genre?->getName();
  }

  public function getGenreDesc()
  {
    return $this->genre?->getDescription();
  }

  public function setGenre(Genre $genre)
  {
    $this->genre = $genre;
  }
  public function setRate(float $rate)
  {
    $this->rate = $rate;
  }
}