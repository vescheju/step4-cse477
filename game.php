<?php
require 'lib/game.inc.php';
$view = new Wumpus\WumpusView($wumpus);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="game.css" type="text/css" rel="stylesheet" />
    <meta charset="UTF-8">
    <title>Stalking the Wumpus</title>
</head>
<body>
<header>
    <nav>
        <p><a href="welcome.php">New Game</a>
            <a href="game.php">Game</a>  <a href="instructions.php">Instructions</a></p>
    </nav>
    <h1>
        Stalking the Wumpus
    </h1>

</header>



<figure>
    <img src="cave.jpg" alt="A cave." width="600" height="325" />
</figure>


<div class="body">
    <div class="game">
        <?php
        echo $view->presentStatus();
        ?>

    </div>

    <div class="rooms">
        <?php
        echo $view->presentRoom(0);
        echo $view->presentRoom(1);
        echo $view->presentRoom(2);
        ?>
    </div>

    <div class="game">
        <?php
        echo $view->presentArrows();
        ?>
    </div>

</div>

</body>
</html>