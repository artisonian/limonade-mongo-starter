<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title><?php echo $site_title; ?></title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
<link rel="stylesheet" href="<?php echo public_url_for("css/base.css"); ?>" type="text/css" media="screen" />
</head>
<body>
  <header>
    <h1><?php echo $site_title; ?></h1>
  </header>
  <?php echo $content; ?>
  <footer>
    <p><a href="http://www.limonade-php.net/">Limonade</a>, <a href="http://www.mongodb.org/">MongoDB</a>, <a href="http://jquery.com">jQuery</a> powered.</p>
  </footer>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</body>
</html>