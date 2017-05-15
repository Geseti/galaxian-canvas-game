<!DOCTYPE html>
<html>
	<title>Galaxian</title>
	<?php	include '../../../header.php'; ?>
	
	<style>
		canvas {
			position: fixed;
			//top: 0px;
			//left: 0px;
			background: transparent;
			margin-left: auto;
			margin-right: auto;
			display: block;
			
		}
		#background {
			z-index: -2;
		}
		#main {
			z-index: -1;
		}
		#ship {
			z-index: 0;
		}
		.score {
			position: fixed;
			color: #FF7F00;
			font-family: Helvetica, sans-serif;
			cursor: default;
			font-size: 20px;
			font-size: 3vw;
		}
		.game-over {
			position: relative;
			top: 120px;
			//margin: 0 auto;
			left: 210px;
			color: #FF7F00;
			font-family: Helvetica, sans-serif;
			font-size: 30px;
			font-size: 5vw;
			cursor: default;
			display: none;
			text-align: center;
		}
		.restart:hover {
			color: #FFD700;
		}
		.gameover {
			cursor: default;
			position: relative;
		}
		.restart {
			cursor: pointer;
			position: relative;
		}
		@media only screen and (min-width: 600px) {
			.score {
				font-size: 20px;
			}
			.game-over {
				font-size: 30px;
			}
			
		}
		@media only screen and (max-width: 600px) {
			.game-over span {
				top: -50px;
				left: calc(0% - 125px);
			}
		}
		
		
		
		
	</style>
	
	<body>
		
		<?php include '../../../navbar-fixed-top.php'; ?>
		
		<div class='container' style="padding: 0px;">
		
			<div class='container-canvas' style="width: 600px; margin: 0 auto;">
				
				<!-- The canvas for the panning background -->
				<canvas id="background" class='img-responsive' width="600" height="360">
					Your browser does not support canvas. Please try again with a different browser.
				</canvas>
				
				<!-- The canvas for all enemy ships and bullets -->
				<canvas id="main" class='img-responsive' width="600" height="360">
				</canvas>
				
				<!-- The canvas the ship uses (can only move up
				 one forth the screen.) -->
				<canvas id="ship" class='img-responsive' width="600" height="360">
				</canvas>
				<div class='score'>SCORE: <span id="score"></span></div>
				
				<!--<div>-->
					<!--<div class="container" style="text-align: center; vertical-align: middle; display: table-cell;">-->
						<div class='game-over' id="game-over"><span class="gameover">GAME OVER<br></span><span class="restart" onclick="game.restart()">Restart</span></div>
					<!--</div>-->
				<!--</div>-->
				
			</div>
			
		</div> <!-- /container -->	
		
		<?php include '../../../bootstrap-core-js.php'; ?>
	</body>
	
	<!-- Game script files -->
	<script src=".\js\galaxian.js"></script>
	<script src=".\js\keycodes.js"></script>
		
	
	
</html>