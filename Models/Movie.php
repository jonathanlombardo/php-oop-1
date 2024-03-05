<?php

require_once(__DIR__ . "/Production.php");
require_once(__DIR__ . "/Genre.php");


class Movie extends Production
{
  private $time;
  private $profit;

  function __construct(string $title, string $lang, float $rate, Genre $genre, int $time, float $profit)
  {
    parent::__construct($title, $lang, $rate, $genre);
    $this->setTime($time);
    $this->setProfit($profit);
  }

  public function setTime(int $time)
  {
    $this->time = $time;
  }

  public function setProfit(float $profit)
  {
    $this->profit = $profit;
  }

  public function getTime()
  {
    return $this->time;
  }

  public function getProfit()
  {
    return $this->profit;
  }

  public function getTimeText()
  {
    if (!$this->time)
      return "#N/D";
    return $this->time . " min";
  }

  public function getProfitText()
  {
    if (!$this->profit)
      return "#N/D";
    return number_format($this->profit, 2, ",", ".") . " $";
  }
}
