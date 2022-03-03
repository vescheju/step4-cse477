<?php


namespace Wumpus;


class WumpusView
{
    /**
     * Constructor
     * @param Wumpus $wumpus The Wumpus object
     */
    public function __construct(Wumpus $wumpus) {
        $this->wumpus = $wumpus;
    }

    /**
     * Generate the HTML for the number of arrows remaining
     * @return string HTML
     */
    public function presentArrows() {
        $a = $this->wumpus->numArrows();
        return "<p>You have $a arrows remaining.</p>";
    }

    /**
     * Generate the HTML for the status section of the page
     */
    public function presentStatus() {
        $room = $this->wumpus->getCurrent()->getNum();

        $html = <<<HTML
<h2>You are in room $room</h2>
HTML;
        if($this->wumpus->hearBirds()) {
            $html .= '<p>You hear birds!</p>';
        }
        if($this->wumpus->feelDraft()) {
            $html .= '<p>You  feel a draft!</p>';
        }
        if($this->wumpus->smellWumpus()) {
            $html .= '<p>You smell a wumpus!</p>';
        }
        if($this->wumpus->wasCarried()) {
            $html .= '<p>You were carried by the birds to room '.$room.'</p>';
        }

        return $html;
    }

    /**
     * Present the links for a room
     * @param int $ndx An index 0 to 2 for the three rooms
     * @return string HTML
     */
    public function presentRoom($ndx) {
        $room = $this->wumpus->getCurrent()->getNeighbors()[$ndx];
        $roomnum = $room->getNum();
        $roomndx = $room->getNdx();
        $roomurl = "game-post.php?m=$roomndx";
        $shooturl = "game-post.php?s=$roomndx";

        $html = <<<HTML
<div class="room">
  <img src="cave2.jpg" width="180" height="135" alt="Another cave."/>
  <p><a href="$roomurl">$roomnum</a></p>
<p><a href="$shooturl">Shoot Arrow</a></p>
</div>
HTML;

        return $html;
    }

    public function presentNewGame(){
        $roomurl = "game-post.php?n";
        $html = <<<HTML
<p><a href="$roomurl">Start Game</a></p>
HTML;
        return $html;
    }


    private $wumpus;    // The Wumpus object
}