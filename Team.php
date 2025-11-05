<?php

class Team {

    private $name;
    private $totalGoals = 0;
    private $totalGames = 0;
    private $totalPoints = 0;

    public function __construct($param1)
    {
        $this->name = $param1;
    }

    public function finalScore($param1, $param2)
    {
        $this->totalGoals = $this->totalGoals + $param1;
        $this->totalGames = $this->totalGames + 1;

        if ($param1 > $param2) {
            $this->totalPoints = $this->totalPoints + 3;
        }
        else if ($param1 == $param2) {
            $this->totalPoints = $this->totalPoints + 1;
        }
    }
}

?>