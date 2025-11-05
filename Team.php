<?php
class Team {
    private $teamName;
    private $totalPoints = 0;
    private $totalGoals = 0;
    private $totalGames = 0;

    public function __construct($teamName) {
        $this->teamName = $teamName;
    }

    public function finalScore($hGoals, $aGoals) {
        $this->totalGoals = $this->totalGoals + $hGoals;
        $this->totalGames = $this->totalGames + 1;

        if ($hGoals > $aGoals) {
            $this->totalPoints = $this->totalPoints + 3;
        } elseif ($hGoals == $aGoals) {
            $this->totalPoints = $this->totalPoints + 1;
        }
    }

    public function getGoalAverage() {
        if ($this->totalGames > 0) {
            return $this->totalGoals / $this->totalGames;
        } else {
            return 0;
        }
    }
}

?>