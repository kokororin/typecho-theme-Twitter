<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<?php if(!is_mobile()):?>
<body class="three-col logged-in user-style-sora_yakami asian zh-cn supports-drag-and-drop" data-fouc-class-names="swift-loading" dir="ltr" style="background-position: 0% 46px;">
  
  <div id="doc" class="route-permalink">
    <?php $this->need('widget-topbar.php');?>
<div id="page-outer">
<div id="page-container" class="AppContent wrapper wrapper-permalink">
<div class="permalink-container">
<div role="main" class="permalink light-inline-actions  stream-uncapped has-replies">

<div class="permalink-inner permalink-tweet-container">

<div class="expansion-container js-expansion-container" style="height: auto;">
  <div class="tweet permalink-tweet js-actionable-user js-actionable-tweet js-original-tweet            has-cards  has-native-media    with-social-proof               with-non-tweet-action-follow-button          logged-in       is-loaded opened-tweet">

<div class="content clearfix">
  <div class="permalink-header">
    
    
   
    <a class="account-group js-account-group js-action-profile js-user-profile-link js-nav" href="<?php $this->permalink() ?>">
      <img class="avatar js-action-profile-avatar" src="<?php echo get_author_info('avatar')?>" alt="">
      <strong class="fullname js-action-profile-name show-popup-with-id"><?php $this->title() ?></strong>
      <span>‏</span><span class="username js-action-profile-name"><s>@</s><b><?php echo get_author_info('short_name')?></b></span>
      
    </a>
    
   
  </div>
</div>
<div id="post-content">
<?php $this->content(); ?></div>



<div class="stream-item-footer">
 
  <div role="group" aria-label="发推行为" class="ProfileTweet-actionList u-cf js-actions"> 
                    <div class="ProfileTweet-action ProfileTweet-action--retweet js-toggleState js-toggleRt"> 
                     <button class="ProfileTweet-actionButton  js-actionButton js-actionRetweet js-tooltip" title="转推" data-modal="ProfileTweet-retweet" type="button"> <span class="Icon Icon--reply"></span> <span class="u-hiddenVisually">转推</span> <span class="ProfileTweet-actionCount"> <span class="ProfileTweet-actionCountForPresentation" aria-hidden="true"></span> </span> </button>
                    </div> 

                    
                    <div class="ProfileTweet-action ProfileTweet-action--more js-more-ProfileTweet-actions"> 
                     <div class="dropdown"> 
                      <button class="ProfileTweet-actionButton u-textUserColorHover dropdown-toggle js-tooltip js-dropdown-toggle action-more" type="button" title="更多" aria-haspopup="true"> <span class="Icon Icon--dots"></span> <span class="u-hiddenVisually">更多</span> </button> 
                      <div class="dropdown-menu"> 
                       <div class="dropdown-caret"> 
                        <div class="caret-outer"></div> 
                        <div class="caret-inner"></div> 
                       </div> 
                       <ul data-title="<?php $this->title() ?>" data-url="<?php $this->permalink() ?>"> 
                        <li class="embed-link add-fav"> <button type="button" class="dropdown-link">添加到收藏夹</button> </li> 
                        <li class="embed-link share-weibo"> <button type="button" class="dropdown-link">分享到新浪微博</button> </li> 
                       </ul> 
                      </div> 
                     </div> 
                    </div> 
                   </div> 
</div>
<div class="permalink-footer">
  
  
  <div class="js-tweet-details-fixer tweet-details-fixer">
    <div class="js-machine-translated-tweet-container"></div>
    <div class="js-tweet-stats-container tweet-stats-container ">
      <ul class="stats" aria-label="转推并收藏：">
        <li class="js-stat-count js-stat-retweets stat-count" aria-hidden="true">
          <a tabindex="0" role="button" class="request-retweeted-popup">
          评论数 <strong><?php get_commenters($this->cid,'comments_count')?></strong>      </a>
        </li>
        <li class="js-stat-count js-stat-favorites stat-count" aria-hidden="true">
          <a tabindex="0" role="button" class="request-favorited-popup">
          评论人 <strong><?php get_commenters($this->cid,'commenter_count')?></strong>       </a>
        </li>
        <li class="avatar-row js-face-pile-container">

          <?php get_commenters($this->cid)?>
          
        </li>
      </ul>
    </div>
    <div class="client-and-actions">
      <span class="metadata">
        <span><?php $this->date('F j, Y'); ?></span>
      </span>
    </div>
  </div>
</div>
</div></div></div>


  <!--comments-->
  <?php $this->need('comments.php');?>
</div>

<div class="permalink-footer">
<div class="Footer module roaming-module Footer--slim">
<div class="flex-module">
<div class="flex-module-inner js-items-container">
 <?php $this->need('widget-footer.php')?>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

</div>
<?php else:?>

  <body class="images nojs tweets-page tweets-show-page">
    <div id="container">
      
       <?php $this->need('widget-mo-topbar.php')?>
      
      <div id="main_content">
            <div class="timeline inreplytos">
    </div>
    <div id="main-content" class="tweet-detail">
      <div class="main-tweet-container"> 
        <table class="main-tweet">
            <tr>
                  <td class="avatar" >
    <a href="<?php $this->options->siteUrl()?>">
      <img alt="" src="<?php echo get_author_info('avatar')?>" />
    </a>
  </td>

                <td class="user-info">
  <div class="fullname">

    <a href="<?php $this->options->siteUrl()?>">
      <strong><?php echo get_author_info('name')?></strong>
    </a>

  </div>

  <a href="<?php $this->options->siteUrl()?>">
    <span class="username">
      <span>@</span><?php echo get_author_info('short_name')?>
    </span>
  </a>
</td>

                <td class="follow-button-container">
    
</td>

            </tr>
          <tr>
            <td class="tweet-content" colspan="3">
              <div class="tweet-text">
                <div class="dir-ltr" dir="ltr"><h1><?php $this->title()?></h1>
                  <?php $this->content()?>
                </div>
              </div>

                <div class="metadata">
                  <?php $this->date('F j, Y'); ?>
                </div>
            </td>
          </tr>
          <tr>
            <td class="optional-section" colspan="3">
              <table class="tweet-stats ">
  <tr>
    <td class="stat">
      <span class="nb">
        <span class="statnum"><?php get_commenters($this->cid,'comments_count')?></span>
        <span class="statlabel">评论</span>
      </span>
    </td>
  </tr>
</table>

            </td>
          </tr>
          <tr class='last-section'>
            
          </tr>
        </table>
      </div>
    </div>    
        
<?php $this->need('comments.php')?>      


      </div>
      <div id="footer">
     <?php $this->need('widget-mo-search.php')?>


    <div class="view-actions"><a href="#top">返回顶端</a></div>
</div>

    </div>


<?php endif;?>

<?php $this->need('footer.php');?>