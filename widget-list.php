<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<ol class="stream-items js-navigable-stream" id="stream-items-id"> 
          <?php while($this->next()): ?>
          <li class="js-stream-item stream-item stream-item expanding-stream-item
">                 
          <div class="tweet original-tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable js-original-tweet has-cards has-native-media with-media-forward auto-expanded media-forward with-user-actions"> 
                 <div class="context"> 
                  <div class="tweet-context with-icn"> </div> 
                 </div> 
                 <div class="content"> 
                  <div class="stream-item-header"> 
                   <a class="account-group js-account-group js-action-profile js-user-profile-link js-nav" href="/ruanyf"> <img class="avatar js-action-profile-avatar" src="<?php echo get_author_info('avatar')?>" alt="" /> <strong class="fullname js-action-profile-name show-popup-with-id"><?php $this->author()?></strong> </a> 
                   <small class="time"> <a href="javascript:;" class="tweet-timestamp js-permalink js-nav js-tooltip" title="<?php $this->date('F j, Y'); ?>"><span class="_timestamp js-short-timestamp"><?php $this->date('F j, Y'); ?></span></a> </small>
                   <small class="time"> <?php $this->category(','); ?> </small>
               </div> 

                  <p class="TweetTextSize TweetTextSize--26px js-tweet-text tweet-text" data-href="<?php $this->permalink() ?>"><?php $this->title() ?></p>

                  <p class="TweetTextSize TweetTextSize--16px js-tweet-text tweet-text" data-href="<?php $this->permalink() ?>"><?php $this->excerpt('280','...');?></p> 
                  <?php if(get_post_img($this->cid) != null):?>
                  <div class="cards-media-container js-media-container">
                   <div class="cards-base cards-multimedia" data-element-context="platform_photo_card"> 
                    <a class="media media-thumbnail twitter-timeline-link media-forward is-preview " href="<?php $this->permalink() ?>"> 
                     <div class=" is-preview"> 
                      <img src="<?php echo get_post_img($this->cid)?>" width="100%" alt="嵌入图像的永久链接" style="margin-top: -43px;" />
                     </div> </a> 
                    <div class="cards-content"> 
                     <div class="byline"> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
              <?php endif;?>
                  <div class="stream-item-footer"> 
                  
                   <div role="group" aria-label="发推行为" class="ProfileTweet-actionList u-cf js-actions"> 
                    <div class="ProfileTweet-action ProfileTweet-action--retweet js-toggleState js-toggleRt"> 
                     <button class="ProfileTweet-actionButton  js-actionButton js-actionRetweet js-tooltip" title="转推" data-modal="ProfileTweet-retweet" type="button"> <span class="Icon Icon--reply"></span> <span class="u-hiddenVisually">转推</span> <span class="ProfileTweet-actionCount"> <span class="ProfileTweet-actionCountForPresentation" aria-hidden="true"><?php $this->commentsNum('0', '1', '%d'); ?></span> </span> </button>
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
                 </div> 
                </div> </li> 
        <?php endwhile; ?>
              </ol> 