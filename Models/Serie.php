<?php

require_once(__DIR__ . "/Production.php");
require_once(__DIR__ . "/Genre.php");


class Serie extends Production
{
  private $seasons;
  private $episodes;

  function __construct(string $title, string $lang, float $rate, array $genres, int $seasons, int $episodes)
  {
    parent::__construct($title, $lang, $rate, $genres);
    $this->setSeasons($seasons);
    $this->setEpisodes($episodes);
  }

  public function setSeasons(int $seasons)
  {
    $this->seasons = $seasons;
  }

  public function setEpisodes(int $episodes)
  {
    $this->episodes = $episodes;
  }

  public function getSeasons()
  {
    return $this->seasons;
  }

  public function getEpisodes()
  {
    return $this->episodes;
  }
}
