<?php /*

<div class="reproductor" style="width: 620px;">
	<audio id="player" preload="true">
		<source src="http://50.22.212.195:8231/stream" type="audio/mpeg">
	</audio>
			<div id="audioplayer">
			<button id="pButton" class="play"></button>
			<progress id="seekbar" value="0.0011233128594421399" max="1"></progress>
			<span id="timeline">00:00</span>
			<input id="volume" type="range" min="0" max="100" value="100">
			<img class="volumen" src="images/volumen.png">
			<img class="fullscreen" src="images/fullscreen.png" onclick="toggleFullscreen()" style="cursor: pointer;"></div>
</div>

*/ ?>


<audio id="demo" class="pls" preload="" controls="">
	<source src="http://50.22.212.195:8231/stream">
    <p>Tu navegador no implementa el elemento audio</p>
</audio>
<script>
	   var song = document.getElementsByTagName('audio')[0];

	   song.volume() = 30%;
	   /*
       if (song.paused)
           song.play();
       else
           song.pause();
       }*/
       alert("llego aqui a audio");
</script>

<?php  ?>
<div class="controles">
	<div class="bbt-1"><button onclick="document.getElementById('demo').play()"><i class="pla fa fa-play"></i></button></div>
	<div class="bbt-2"><button onclick="document.getElementById('demo').pause()"><i class="pla fa fa-pause"></i></button></div>
	<div class="bbt-3"><button onclick="document.getElementById('demo').volume+=0.1"><i class="pla fa fa-volume-up"></i></button></div>
	<div class="bbt-4"><button onclick="document.getElementById('demo').volume-=0.1"><i class="pla fa fa-volume-down"></i></button></div>    
</div>
