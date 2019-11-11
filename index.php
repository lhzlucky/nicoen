<?php
	// 文件
	$items = array(
	);
	require_once('config/mydata.php');
    $data = array(
        'playlist' => $items
    );
?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>乐乐学</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="full-screen" content="yes">

    <link rel="apple-touch-icon" href="images/appiPhone3x.png">
    
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src='js/jaudio.js'></script>
	<script>
		<?php
			echo 'var g_data = ' .json_encode($data) .';';
		?>
		$(function(){
			$(".jAudio--player").jAudio(g_data);
		});
	</script>
</head>
<body>
	<article class="htmleaf-container">
		<div class='jAudio--player'>
		    <audio></audio>
		    <div class='jAudio--ui'>
		      <div class='jAudio--thumb'></div>
		      <div class='jAudio--status-bar'>
		        <div class='jAudio--details'></div>
		        <div class='jAudio--volume-bar'></div>
		        <div class='jAudio--progress-bar'>
		          <div class='jAudio--progress-bar-wrapper'>
		            <div class='jAudio--progress-bar-played'>
		              <span class='jAudio--progress-bar-pointer'></span>
		            </div>
		          </div>
		        </div>
		        <div class='jAudio--time'>
		          <span class='jAudio--time-elapsed'>00:00</span>
		          <span class='jAudio--time-total'>00:00</span>
		        </div>
		      </div>
		    </div>

		    <div class='jAudio--playlist'>
		    </div>

		    <div class='jAudio--controls'>
		      <ul>
		        <li><button class='btn' data-action='prev' id='btn-prev'><span></span></button></li>
		        <li><button class='btn' data-action='play' id='btn-play'><span></span></button></li>
		        <li><button class='btn' data-action='next' id='btn-next'><span></span></button></li>
		      </ul>
		    </div>

		</div>
	</article>
	
	
</body>
</html>

