<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  
	<!-- Normalize CSS -->  
	  <link rel="stylesheet" href="normalize.css">
    <!-- custom CSS -->
	  <link rel="stylesheet" href="style.css">	  
	  
  </head>
  <body>
	  
	  <div class="game-container">
		  <div id="EnemyHand" class="hand">
			 <div id="enemyCardOne" class="player-card"></div>
			 <div id="enemyCardTwo" class="player-card all-player-cards one"></div>
			 <div id="enemyCardThree" class="player-card all-player-cards two"></div> 
			 <div id="enemyCardFour" class="player-card all-player-cards three"></div>
			 <div id="enemyCardFive" class="player-card all-player-cards four"></div>
			 <div id="enemyCardSix" class="player-card all-player-cards five"></div>
		  </div>
		  <div class="game-board">
			  <div id="slot1" class="card-slot card-offset-left" onclick="card.checkIfSet(1)"></div>
			  <div id="slot2" class="card-slot" onclick="card.checkIfSet(2)"></div>	
			  <div id="slot3" class="card-slot card-offset-right" onclick="card.checkIfSet(3)"></div>
			  <div id="slot4" class="card-slot card-offset-left" onclick="card.checkIfSet(4)"></div>
			  <div id="slot5" class="card-slot" onclick="card.checkIfSet(5)"></div>
			  <div id="slot6" class="card-slot card-offset-right" onclick="card.checkIfSet(6)"></div>
			  <div id="slot7" class="card-slot card-offset-left" onclick="card.checkIfSet(7)"></div>
			  <div id="slot8" class="card-slot" onclick="card.checkIfSet(8)"></div>
			  <div id="slot9" class="card-slot card-offset-right" onclick="card.checkIfSet(9)"></div>
		  </div>
		  <div class="hand player-hand">
			  <div id="playerCardOne" class="player-card" onclick="card.selected('playerCardOne');"></div> 
			  <div id="playerCardTwo" class="player-card all-player-cards one" onclick="card.selected('playerCardTwo');"></div>
			  <div id="playerCardThree" class="player-card all-player-cards two" onclick="card.selected('playerCardThree');"></div>
			  <div id="playerCardFour" class="player-card all-player-cards three" onclick="card.selected('playerCardFour');"></div>
			  <div id="playerCardFive" class="player-card all-player-cards four" onclick="card.selected('playerCardFive');"></div> 
			  <div id="playerCardSix" class="player-card all-player-cards five" onclick="card.selected('playerCardSix');"></div> 
		  </div>	  	
	  </div>
    

	  <!-- jQuery -->
	  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	  <!-- custom js -->
	  <script src="app.js"></script>
	  
	  
  </body>
	
</html>