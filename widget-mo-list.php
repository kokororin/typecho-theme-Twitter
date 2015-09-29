<?php
     if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
 <?php while($this->next()): ?>
          <table class="tweet">  
<tr class="tweet-header ">
        <td class="avatar" rowspan="3">
    <a href="<?php $this->options->siteUrl()?>">
      <img alt="" src="<?php echo get_author_info('avatar')?>" />
    </a>
  </td>

      <td class="user-info">
  <a href="<?php $this->options->siteUrl()?>">
    <strong class="fullname"><?php echo get_author_info('name')?></strong>
    <div class="username">
      <span>@</span><?php echo get_author_info('short_name')?>
    </div>
    
  </a>
</td>


  <td class="timestamp">
    <a href="<?php $this->permalink() ?>"><?php $this->date('m月d日'); ?></a>
  </td>

</tr>
<tr class="tweet-container">
  <td colspan="2" class="tweet-content">
    <div class="tweet-text">
      <div class="dir-ltr" dir="ltr"><a href="<?php $this->permalink() ?>" class="twitter_external_link dir-ltr tco-link has-expanded-path"><?php $this->title() ?></a>
</div>
    </div>


  </td>
</tr>

  <tr>
    <td colspan="2" class="meta-and-actions">
 
      <span class="tweet-actions">
        <a href="<?php $this->permalink() ?>" class="first">
            <span class="imgsprite_tweet_reply_gif"   title="Reply"></span>

        </a>

        <a href="javascript:;" class="favorite">
              <span class="imgsprite_tweet_fav_gif"   title="Favorite"></span>

        </a>
      </span>


    </td>
  </tr>

</table>
<?php endwhile; ?>    