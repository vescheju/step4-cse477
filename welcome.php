<?php
require 'lib/game.inc.php';
$view = new Wumpus\WumpusView($wumpus);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="game.css" type="text/css" rel="stylesheet" />
    <meta charset="UTF-8">
    <title>Welcome to Stalking the Wumpus</title>
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
    <img src="cave-wumpus.jpg" alt="A bloody wumpus cat." width="600" height="325" />
</figure>

<div class="body">
    <div class="welcome">
        <p>Welcome to <span style="font-style: italic;font-size: 1.2em">
            Stalking the Wumpus</span> </p>
        <p><a href="instructions.php">Instructions</a></p>
        <?php echo $view->presentNewGame(); ?>
    </div>



</div>


</body>
</html>