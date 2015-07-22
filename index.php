<html>
	<head>
		<title>
			Local Server | Home
		</title>
		<link rel="stylesheet" href="WebMaster/bootstrap-3.3.4-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="main.css" media="screen"/>
	</head>
	<body>
		
		<nav class="navbar navbar-inverse navbar-fixed-top">
				<div>
			      <a target ="_blank" class="navbar-brand" href="http://localhost/MAMP/?language=English">MAMP</a>
			    </div>
				<ul class="nav navbar-nav navbar-left">
					<li class="active"><a>Server Root</a></li>
					<li><a target="_blank" href="WebMaster/personalweb/version0?note=<?php echo urlencode("draft")?>">Personal Website</a></li>
					<li><a target="_blank" href="WebMaster/soccer/html">Soccer Page</a></li>
				</ul>
				<form class= "navbar-form pull-right" action = "index.php" method="post">
						<input class="form-control" type="text" placeholder="username" name="usr"/>
						<input class="form-control"type="password" placeholder="password" name="pw"/>
						<button class="btn btn-success">Sign in</button>
				</form>
		</nav>

		<div class="jumbotron">
			<div class = "container">
				<h1>Local Server</h1>
				<p>
					Welcome! This server is powered by MAMP and owned by Harry Shao. MAMP is one of the most popular web server environments for Mac OSX. You can check out php information <a target="_blank" href='phpinfo.php'>here</a>. Have fun!
				</p>
				<a target="_blank" href= "https://www.mamp.info/en/" class="btn btn-primary btn-lg">Learn more...</a>
			</div>
		</div>
		
		<div id="player">

			<div class="audio-control">
				<audio id="audio" controls="controls">
					Your browser does not support HTML5 audio
				</audio>
			</div>

			<div class="btn-group audio-control pull-right" role ="group">
				<button class="btn btn-default" id="prev">&lt;</button>
				<button class="btn btn-default" id="next">&gt;</button>
			</div>
			<div class="list-group song-list">
				<li class="list-group-item info">
					<img id ="info-pic"height="50px" width="50px" src="pic/jiangnan.png"/>
					<p id="info-text">正在播放：江南 -- 林俊杰</p>
				</li>
				<a id="li0" class="list-group-item">
					1&nbsp;&nbsp;江南	
					<div class="pull-right">林俊杰</div>		
				</a>
				<a id="li1" class="list-group-item">
					2&nbsp;&nbsp;庐州月
					<div class="pull-right">许嵩</div>	
				</a>
				<a id="li2" class="list-group-item">
					3&nbsp;&nbsp;稻香
					<div class="pull-right">周杰伦</div>	
				</a>
				<a id="li3" class="list-group-item">
					4&nbsp;&nbsp;匆匆那年
					<div class="pull-right">王菲</div>	
				</a>
				<a id="li4" class="list-group-item">
					5&nbsp;&nbsp;青花瓷
					<div class="pull-right">周杰伦</div>	
				</a>
			</div>
		</div>

		<div>
			<ul>
				<li><a href="WebMaster/slide">Slide Show</a></li>
				<li><a href="WebMaster/menu">Side Menu</a></li>
				<li><a href="WebMaster/post">Discusstion Board</a></li>
				<li><a href="WebMaster/newsreader">Newsreader</a></li>
			</ul>
		</div>

		
		
		
		<script src="WebMaster/jquery-1.11.3.min.js"></script>
		<script src="WebMaster/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
		<script src="audio.js"></script>
		<script src="main.js"></script>
	</body>
</html>
