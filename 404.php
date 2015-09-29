<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="en-us">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/error.css'); ?>">
  </head>
  <body>
    <div class="topbar js-topbar">
      <div class="global-nav" data-section-term="top_nav">
        <div class="global-nav-inner">
          <div class="container">
            <ul class="nav js-global-actions">
              <li class="home">
                <a class="nav-logo-link" href="<?php $this->options->siteUrl(); ?>"><img class="bird" src="<?php $this->options->themeUrl('assets/img/logo23x19.png'); ?>" alt="Twitter"></a>
              </li>
            </ul>
            <div class="pull-right">
              <ul class="nav secondary-nav">
                <li><a href="<?php $this->options->siteUrl(); ?>" id="homeLink">Home &rarr;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blue-sky">
      <div class="body-content">

          <h1>抱歉，您请求的页面不存在！</h1>
          <p>你可以搜索或者 <a href="<?php $this->options->siteUrl(); ?>">回到首页</a>.</p>
          <form class="search-404" action="./" method="get">
            <input id="search_q" name="s" type="text" aria-label="Search query" placeholder="Search something">
            <input class="btn" id="search_submit" type="submit" value="Search">
          </form>

        <div class="footer">         

         <?php $this->need('widget-footer.php')?>
        </div>
      </div>
    </div>
  </body>
</html>

