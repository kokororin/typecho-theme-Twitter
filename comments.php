<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
	exit;
}
?>

<?php function threadedComments($comments, $options) {

	?>

<?php if (!is_mobile()): ?>
<li class="js-simple-tweet" id="<?php $comments->theId()?>">
  <div class="simple-tweet tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable descendant with-user-actions
    ">
      <div class="entities-media-container js-media-container">

    <div class="content">

      <div class="stream-item-header">
        <a class="account-group js-account-group js-action-profile js-user-profile-link js-nav" href="<?php $comments->url()?>">
          <img class="avatar js-action-profile-avatar" src="<?php echo get_avatar($comments->mail, '60')?>" alt="">
          <strong class="fullname js-action-profile-name show-popup-with-id"><?php $comments->author();?></strong>

        </a>
        <small class="time">
        <a href="<?php $comments->permalink();?>" class="tweet-timestamp js-permalink js-nav js-tooltip" title="<?php $comments->date('Y-m-d H:i');?>"><span class="_timestamp js-short-timestamp js-relative-timestamp"><?php $comments->date('Y-m-d H:i');?></span><span class="u-hiddenVisually" data-aria-label-part="last"><?php $comments->date('Y-m-d H:i');?></span></a>
        </small>

      </div>

      <p class="TweetTextSize  js-tweet-text tweet-text"><a href="<?php $comments->permalink();?>" class="twitter-atreply pretty-link js-nav" dir="ltr"><s>@</s><b><?php get_comment_at($comments->coid)?></b></a> <?php get_filtered_comment($comments->coid)?></p>
    <div class="stream-item-footer clearfix">

      <a class="details with-icn js-details" href="<?php $comments->permalink()?>">
        <span class="details-icon js-icon-container"></span>
        <b>

        </b>
      </a>


      <span class="ProfileTweet-action--reply u-hiddenVisually"></span>
      <span class="ProfileTweet-action--retweet u-hiddenVisually">

        <span class="ProfileTweet-actionCount" aria-hidden="true" data-tweet-stat-count="0">
          <span class="ProfileTweet-actionCountForAria">0 转推</span>
        </span>
      </span>
      <span class="ProfileTweet-action--favorite u-hiddenVisually">
        <span class="ProfileTweet-actionCount" aria-hidden="true" data-tweet-stat-count="0">
          <span class="ProfileTweet-actionCountForAria">0 收藏</span>
        </span>
      </span>
      <div role="group" aria-label="发推行为" class="ProfileTweet-actionList u-cf js-actions">
                    <div class="ProfileTweet-action ProfileTweet-action--retweet js-toggleState js-toggleRt">
                     <button class="ProfileTweet-actionButton  js-actionButton js-actionRetweet js-tooltip post-reply" title="转推" data-modal="ProfileTweet-retweet" type="button" data-id="<?php $comments->theId()?>" data-coid="<?php $comments->coid()?>"> <span class="Icon Icon--reply"></span> <span class="u-hiddenVisually">转推</span> <span class="ProfileTweet-actionCount"> <span class="ProfileTweet-actionCountForPresentation" aria-hidden="true"></span> </span> </button>
                    </div>


                    <div class="ProfileTweet-action ProfileTweet-action--more js-more-ProfileTweet-actions">
                     <div class="dropdown">
                      <button class="ProfileTweet-actionButton u-textUserColorHover dropdown-toggle js-tooltip js-dropdown-toggle action-more" type="button" title="更多" aria-haspopup="true"> <span class="Icon Icon--dots"></span> <span class="u-hiddenVisually">更多</span> </button>
                      <div class="dropdown-menu">
                       <div class="dropdown-caret">
                        <div class="caret-outer"></div>
                        <div class="caret-inner"></div>
                       </div>
                       <ul data-title="<?php $comments->title()?>" data-url="<?php $comments->permalink()?>">
                        <li class="embed-link add-fav"> <button type="button" class="dropdown-link">添加到收藏夹</button> </li>
                        <li class="embed-link share-weibo"> <button type="button" class="dropdown-link">分享到新浪微博</button> </li>
                       </ul>
                      </div>
                     </div>
                    </div>
                   </div>
    </div>
    <div class="expanded-content js-tweet-details-dropdown">
    </div>
  </div>
</div>
</li>
 <?php $comments->threadedComments($options);?>
<?php else: ?>

  <table class="tweet" id="<?php $comments->theId()?>">
<tr class="tweet-header">
        <td class="avatar"  rowspan="3">
    <a href="<?php $comments->url()?>">
      <img alt="" src="<?php echo get_avatar($comments->mail, '60')?>" />
    </a>
  </td>

      <td class="user-info">
  <a href="<?php $comments->url()?>">
    <strong class="fullname"><?php $comments->author(false)?></strong>


  </a>
</td>


  <td class="timestamp">
    <?php $comments->date('m-d');?>
  </td>

</tr>
<tr class="tweet-container">
  <td colspan="2" class="tweet-content">
    <div class="tweet-text">
      <div class="dir-ltr" dir="ltr">  <a href="<?php $comments->permalink();?>" class="twitter-atreply dir-ltr" dir="ltr">@<?php get_comment_at($comments->coid)?></a> <?php get_filtered_comment($comments->coid)?>
</div>
    </div>


  </td>
</tr>

  <tr>
    <td colspan="2" class="meta-and-actions">
      <span class="tweet-actions">
        <a href="javascript:;" class="first post-reply" data-id="<?php $comments->theId()?>" data-coid="<?php $comments->coid()?>">
            <span class="imgsprite_tweet_reply_gif" title="Reply"></span>

        </a>

      </span>


    </td>
  </tr>

</table>
<?php $comments->threadedComments($options);?>
<?php endif;?>
<?php }?>


    <?php $this->comments()->to($comments);?>

    <?php if (!is_mobile()): ?>
    <?php if ($this->allow('comment')): ?>
    <div id="<?php $this->respondId();?>" class="respond">
    <div class="inline-reply-tweetbox swift">
              <div class="cancel-comment-reply" style="display:none;">
        <?php $comments->cancelReply();?>
        </div>
<form class="t1-form tweet-form" method="post" action="<?php $this->commentUrl()?>" id="comment-form">
   <?php if ($this->user->hasLogin()): ?>
    <img class="inline-reply-user-image avatar size32" src="<?php echo get_author_info('avatar')?>" alt="">
  <?php else: ?>
   <img class="inline-reply-user-image avatar size32" src="<?php echo get_avatar($this->remember('mail', true), 120);?>" alt="">
   <?php endif;?>
  <span class="inline-reply-caret">
    <span class="caret-inner"></span>
  </span>

  <div class="tweet-content">
    <?php if (!$this->user->hasLogin()): ?>
    <div class="author-info" <?php if ($this->remember('author', true) != '' && $this->remember('mail', true) != ''): ?>style="display: none;"<?php endif;?>>
    <p class=""><input class="input-style" type="text" name="author" id="author" class="text" placeholder="称呼" value="<?php $this->remember('author');?>" required /></p>
    <p class="input-row"><input class="input-style" type="email" name="mail" id="mail" class="text" placeholder="邮件" value="<?php $this->remember('mail');?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif;?> /></p>
    <p class="input-row"><input class="input-style" type="url" name="url" id="url" class="text" placeholder="<?php _e('http://');?>" value="<?php $this->remember('url');?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif;?> /></p>
    </div>
  <?php endif;?>
    <p class="<?php if ($this->remember('author', true) != '' && $this->remember('mail', true) != ''): else:?>input-row<?php endif;?>"><textarea class="tweet-box reply-textarea" name="text" id="textarea" placeholder="点击头像即可设置资料m(_ _)mm(_ _)m"></textarea></p>

  </div>

  <div class="toolbar js-toolbar" role="toolbar">

    <div class="tweet-button">
      <button class="btn primary-btn tweet-action tweet-btn js-tweet-btn reply-submit" type="submit">
  <span class="button-text tweeting-text">
    <span class="Icon Icon--tweet"></span>
    发表
  </span>
</button>
    </div>
  </div>
</form>
</div></div>
<?php endif;?>
    <?php if ($comments->have()): ?>
    <div class="replies-to  permalink-inner permalink-replies">
         <div class="tweets-wrapper">
         <div id="descendants">
<div class="stream-container">
<div class="stream permalink-stream">

<ol class="stream-items js-navigable-stream" id="stream-items-id">

<?php $comments->listComments(array('before' => '', 'after' => ''));?>

</ol>

<div class="stream-footer">
               <div class="timeline-end has-items">
                <div class="stream-end">
                 <div class="stream-end-inner ">
                  <?php $comments->pageNav('<', '>', '3', '...', array('itemTag' => ''));?>
                 </div>
                </div>
                <div class="stream-loading">
                 <div class="stream-end-inner">
                 </div>
                </div>
               </div>
              </div>
<ol class="hidden-replies-container"></ol>
</div>
</div>
</div>
</div>
</div>
 <?php endif;?>
<?php else: ?>

  <?php if ($this->allow('comment')): ?>
    <div id="<?php $this->respondId();?>" class="respond" >
        <div class="cancel-comment-reply" style="display:none;">
        <?php $comments->cancelReply();?>
        </div>


    <form method="post" action="<?php $this->commentUrl()?>" id="comment-form">
    <table>
      <?php if (!$this->user->hasLogin()): ?>
      <tr>
        <td><div class="input-container"><input type="text" name="author" id="author" class="text" placeholder="称呼" value="<?php $this->remember('author');?>" required /></div></td>     
      </tr>
      <tr colspan="3">
         <td><div class="input-container"><input type="email" name="mail" id="mail" class="text" placeholder="邮件" value="<?php $this->remember('mail');?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif;?> /></div></td>
      </tr>
      <tr colspan="3">
         <td><div class="input-container"><input type="text" name="url" id="url" class="text" placeholder="<?php _e('http://');?>" value="<?php $this->remember('url');?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif;?> /></div></td>
      </tr>
    <?php endif;?>
        <tr>
        <td colspan="3"><div class="input-container"><textarea class="tweetbox reply-textarea" name="text" id="textarea" placeholder="说点什么吧"></textarea></div></td>
      </tr>

    </table>
    <table class="main-tweet-actions four">
  <tr>
    <td class="action">
      <a href="javascript:;" id="mo-reply">
          <span class="imgsprite_detail_reply_gif"  title="Reply"></span>
      </a>
    </td>
  </tr>
</table>
    </form>




    </div>
    <?php endif;?>
  <?php if ($comments->have()): ?>
  <div class="timeline replies">
<?php $comments->listComments(array('before' => '', 'after' => ''));?>
  </div>
  <div class="w-button-more">
  <?php $comments->pageNav('<', '>', '3', '...', array('itemTag' => ''));?>
</div>
  <?php endif;?>


<?php endif;?>