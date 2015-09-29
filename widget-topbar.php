<?php
     if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<div class="topbar js-topbar"> 
    <div class="ProfilePage-editingOverlay"></div> 
    <div class="global-nav" data-section-term="top_nav"> 
     <div class="global-nav-inner"> 
      <div class="container"> 
       <h1 class="Icon Icon--bird bird-topbar-etched" style="display: inline-block; width: 24px; height: 21px;"> <span class="visuallyhidden">Twitter</span> </h1>
       <div class="pushstate-spinner"></div> 
       <div role="navigation" style="display: inline-block;">
        <ul class="nav js-global-actions" id="global-actions">
         <li id="global-nav-home" class="home <?php if($this->is('index')): ?>active<?php endif;?>" data-global-action="home"> <a class="js-nav js-tooltip js-dynamic-tooltip" data-placement="bottom" href="<?php $this->options->siteUrl(); ?>" >  <span class="text">主页</span> </a> </li>
          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li class="dm-nav <?php if($this->is('page', $pages->slug)): ?>active<?php endif;?>"> <a class="js-nav js-tooltip js-dynamic-tooltip" href="<?php $pages->permalink(); ?>"> <span class="text"><?php $pages->title(); ?></span> </a> </li>
                    <?php endwhile; ?>
        </ul> 
       </div> 
       <div class="pull-right" style="display: inline-block;">
        <div role="search"> 
         <form class="t1-form form-search js-search-form" action="./" id="global-nav-search"> 
          <input class="search-input" type="text" id="search-query" placeholder="搜索" name="s" autocomplete="off" spellcheck="false" /> 
          <span class="search-icon js-search-action"> <button type="submit" class="Icon Icon--search nav-search" tabindex="-1"> <span class="visuallyhidden">搜索</span> </button> </span>          
         </form> 
        </div> 
        <ul class="nav right-actions">
         <li role="complementary" aria-labelledby="global-new-tweet-button" class="topbar-tweet-btn"> <button id="global-new-tweet-button" type="button" data-href="<?php $this->options->siteUrl(); ?>admin" class="js-global-new-tweet js-tooltip btn primary-btn tweet-btn js-dynamic-tooltip"> <span class="Icon Icon--tweet Icon--large"></span> <span class="text">发推</span> </button> </li>
        </ul>
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 