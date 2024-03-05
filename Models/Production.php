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
    float $rate,
    $genres,
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
    if (empty($this->genres))
      return "#N/D";
    $names = array_map(fn($genre) => $genre->getName(), $this->genres);
    return implode(" | ", $names);
  }

  public function getGenreDesc()
  {
    if (empty($this->genres))
      return "#N/D";
    $descs = array_map(fn($genre) => $genre->getDesc(), $this->genres);
    return implode(" | ", $descs);
  }

  public function setGenres($genres)
  {
    if (!is_array($genres))
      $genres = [$genres];

    foreach ($genres as $genre) {
      if (!($genre instanceof Genre)) {
        throw new Exception("Genre type error");
      }
    }

    $this->genres = $genres;
  }
  public function setRate(float $rate)
  {
    $this->rate = $rate;
  }
}