<!DOCTYPE html>
<meta charset="utf-8">
<title>Moshling <?php echo $moshlings_json[$slug]['name'] ?></title>
<meta content="#3a8102" name="theme-color"/>
<meta name="keywords" content="moshi, moshi monsters, remake, rewritten, community, moshy, kids, game, online, virtual world, safe, friendly, free">
<meta name="description" content="<?php echo $moshlings_json[$slug]['moshlingjournal']['biography'] ?>">
<meta property="og:title" content="Moshling <?php echo $moshlings_json[$slug]['name'] ?>" />
<meta property="og:url" content="<?php echo $siteURL; ?>/moshlings?id=<?php echo $slug; ?>" />
<meta property="og:image" content="<?php echo $cdnURL; ?>/moshlings/thumbnails/<?php echo $slug ?>.png">
<meta property="og:description" content="<?php echo $moshlings_json[$slug]['moshlingjournal']['biography'] ?>">
<meta name="twitter:title" content="Moshling <?php echo $moshlings_json[$slug]['name'] ?>">
<meta name="twitter:description" content="<?php echo $moshlings_json[$slug]['moshlingjournal']['biography'] ?>">
<meta name="twitter:image" content="<?php echo $cdnURL; ?>/moshlings/thumbnails/<?php echo $slug ?>.png">
<meta name="twitter:site" content="<?php echo $siteURL; ?>/moshlings?id=<?php echo $slug; ?>" />
<meta name="twitter:card" content="summary">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Arvo&family=Boogaloo&family=Karla:wght@400;700&family=Luckiest+Guy&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $cdnURL; ?>/moshlings/css/style.min.css?v=2">
<link rel="shortcut icon" href="<?php echo $cdnURL; ?>/moshlings/images/favicon.webp" type="image/x-icon">
<?php include_once('../includes/gtag.php');  ?>
</head>
<body class="MindCandyMoshlingsBundle_moshling_index">
<header class="header">    
<nav class="secondary-navigation">
<ul>
<li class="home">
<a href="." class="logo">Moshlings!</a>
</li>
</ul>
</nav>
</header>
<div class="moshling-info">
<div class="moshling-info-wrapper">
<header class="top">
<div class="padded-content">
<div class="title-holder">
<h1 class="fn"><?php echo $moshlings_json[$slug]['name'] ?></h1>
<span class="id">
#<?php echo $moshlings_json[$slug]['rank'] ?>
<img src="<?php echo $cdnURL; ?>/moshlings/images/number_frame.webp">
</span>
</div>
<section class="category">
<p>Set: <b class="role"><?php echo $moshlings_json[$slug]['moshlingjournal']['set'] ?></b></p>
</section>
</div>
</header>
<div class="content">
<div class="padded-content">
<div class="synch-block bio-personality">
<div class="column portrait-column">
<section class="portrait">
<figure>
<img class="photo" src="<?php echo $cdnURL; ?>/moshlings/img/<?php echo $slug ?>.png">
</figure>
</section>
</div>
<div class="column">
<section class="bio">
<header>
<h2><?php echo $moshlings_json[$slug]['moshlingjournal']['species'] ?></h2>
</header>
<div class="content"><?php echo $moshlings_json[$slug]['moshlingjournal']['biography'] ?></div>
</section>
<section class="personality">
<div class="content">
<h2>Personality:</h2>
<p>Likes: <?php echo $moshlings_json[$slug]['moshlingjournal']['likes'] ?> Dislikes: <?php echo $moshlings_json[$slug]['moshlingjournal']['dislikes'] ?></p>
</div>
</section>
</div>
</div>
<div class="synch-block codes-habitat">
<?php if($moshlings_json[$slug]['catchType'] == 'seed') { ?>
<div class="column codes-column">
<section class="codes">
<p>Code to catch <?php echo $moshlings_json[$slug]['name'] ?></p>
<?php
foreach($zoo_json['moshlingSets'] as $zoodata1) {
foreach($zoodata1['moshlings'] as $zoo) {
if($zoo['srcId'] == $slug) {
if($zoo['catchType'] == 'seed') {
$result = '';
foreach($zoo['moshlingRequirements'] as $k => $seed) {
foreach ($seeds_json as $key => $s) {
if($s['asset'] == $seed['path']) {
$seedId = $key;
}
}
$seedPlot = $k+1;
$result .= '<img class="seed seed-'. $seedPlot .'" src="'. $cdnURL. '/moshlings/seeds/'. $seedId .'.webp" alt="'. $seed['name'].'">';
}
}
}
}
}
?>
<?php echo $result; ?>
</section>
</div>
<div class="column">
<section class="habitat">
<div class="description">
<div class="content-wrapper"><?php echo $moshlings_json[$slug]['moshlingjournal']['habitat'] ?></div>
</div>
</section>
</div>
<?php } else { ?>
<div class="column codes-column">
<section class="codes non-discoverable">
<p>NON DISCOVERABLE</p>
</section>
</div>
<?php 
}
?>
<div class="clearfix"></div>
</div>
<div class="synch-block dyn-comps">
</div>
</div>
</div>
<footer class="bottom"> 
<nav class="main">
<ul>
<li class="random">
<a href="?id=<?php echo array_rand($moshlings_json); ?>">Random</a>
</li>
<li class="home">
<a href="../">Home</a>
</li>
</ul>
</nav>
</footer>
</div>
</div>
</div>
<footer class="page-footer">
<a id="moshimonsters-link" target="_blank" title="Moshi Online" href="https://moshionline.net">Moshi Online</a>
</footer>
</body>
</html>