<!DOCTYPE html>
<meta charset="utf-8">
<title>Moshi Online | Moshlings</title>
<meta content="#3a8102" name="theme-color"/>
<meta name="keywords" content="moshi, moshi monsters, remake, rewritten, community, moshy, kids, game, online, virtual world, safe, friendly, free">
<meta name="description" content="Moshi Monsters Online is a free, virtual world based on the original Moshi Monsters. Make friends, play games and puzzles to earn Rox, level up your Monster, and grow flowers in the garden to attract and collect ultra-rare Moshlings!">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Arvo&family=Boogaloo&family=Karla:wght@400;700&family=Luckiest+Guy&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $cdnURL; ?>/moshlings/css/style.min.css?v=2">
<link rel="shortcut icon" href="<?php echo $cdnURL; ?>/moshlings/images/favicon.webp" type="image/x-icon">
<?php include_once('../includes/gtag.php');  ?>
</head>
<body class="MindCandyMoshlingsBundle_homepage">
<header class="header">    
<h1><a href="https://moshionline.net/moshlings" class="logo">Moshlings!</a></h1>
<div class="world-intro">
<div id="flash-intro"></div>
</div>
</header>
<div class="main123">
<aside>
<section id="moshi-sign">
<a href="https://moshionline.net" title="Moshi Online" target="_blank">Moshi Online</a>
</section>
<section class="monthly-moshling">
</section>
</aside>
<div class="moshlings-container">
<div class="moshilink-wrapper" style>
<a class="moshilink" target="_blank" title="Download the Moshi Online App!" href="https://moshionline.net"><span>Download the Moshi Online App!</span></a>
</div>
<div class="moshlings-wrapper">
<section class="moshlings">
<ul>
<?php 
foreach($moshlings_json as $key => $moshling) {
?>
<li><a class="moshling" href="?id=<?php echo $key ?>" title="Go to <?php echo $moshling['name'] ?> Info Page"><div class><h2><?php echo $moshling['name'] ?></h2><span class="moshling-id" style="color: #c44545;"><?php echo $moshling['rank'] ?></span><img src="<?php echo $cdnURL; ?>/moshlings/thumbnails/<?php echo $key ?>.png" width="20px" alt="<?php echo $moshling['name'] ?>"></div></a></li>   
<?php
}
?>                                        
<li><div class="moshling-soon"></div></li>
</ul>
</section>
</div>
</div>
</div>
</div>
</body>
</html>