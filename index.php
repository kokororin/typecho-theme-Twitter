<?php
/**
 * 这是 Twitter主题
 * 
 * @package Typecho Twitter Theme 
 * @author Kokororin
 * @version beta
 * @link https://return.moe
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<?php if(!is_mobile()):?>
 <body class="three-col logged-in asian zh-cn user-style-sora_yakami enhanced-mini-profile ProfilePage ProfilePage--withBlockedWarning supports-drag-and-drop">

  <div id="doc" class="route-profile"> 
   <?php $this->need('widget-topbar.php');?>
   <div id="page-outer"> 
    <div id="page-container" class="AppContent"> 
     <div class="ProfilePage-editingOverlay"></div> 
     <div class="ProfilePage-testForEditingCss"></div> 
     <div class="ProfileCanopy ProfileCanopy--withNav ProfileCanopy--large"> 
      <div class="ProfileCanopy-inner"> 
       <div class="ProfileCanopy-header u-bgUserColor" style="margin-top: 0px;"> 
        <div class="ProfileCanopy-headerBg"> 
         <img alt="" src="<?php $this->options->themeUrl('assets/img/lovelive.jpg'); ?>" style="transform: none;" /> 
        </div> 
        
        <div class="AppContainer"> 
         <div class="ProfileCanopy-avatar"> 
          <div class="ProfileAvatar"> 

           <a class="ProfileAvatar-container u-block js-tooltip profile-picture media-thumbnail" href="<?php echo get_avatar(get_author_info('mail'),240)?>" target="_blank"> <img class="ProfileAvatar-image" src="<?php echo get_avatar(get_author_info('mail'),240)?>"/> </a> 
          </div> 

         </div> 
         <div class="ProfileCanopy-headerPromptAnchor"></div> 
        </div> 
       </div> 
       <div class="ProfileCanopy-navBar"> 
        <div class="ProfilePage-editingOverlay"></div> 
        <div class="AppContainer"> 
         <div class="Grid Grid--withGutter"> 
          <div class="Grid-cell u-size1of3 u-lg-size1of4"> 
           <div class="ProfileCanopy-card" role="presentation" aria-hidden="true"> 
            <div class="ProfileCardMini"> 
             <div class="ProfileCardMini-details"> 
              <div class="ProfileNameTruncated"> 
               <div class="u-textTruncate u-inlineBlock"> 
                <a class="ProfileNameTruncated-link u-textInheritColor js-nav js-action-profile-name" href="" tabindex="-1"> <?php echo get_author_info('name')?> </a> 
               </div> 
              </div> 
              <div class="ProfileCardMini-screenname"> 
               <a href="<?php $this->options->siteUrl(); ?>" class="ProfileCardMini-screennameLink u-linkComplex js-nav u-dir" dir="ltr" tabindex="-1">@<span class="u-linkComplex-target"><?php get_short_name?></span></a> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="Grid-cell u-size2of3 u-lg-size3of4"> 
           <div class="ProfileCanopy-nav"> 
            <div class="ProfileNav" role="navigation" data-user-id="2831181662"> 
             <ul class="ProfileNav-list"> 
              <li class="ProfileNav-item ProfileNav-item--tweets"> <a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav"> <span class="ProfileNav-label">文章</span> <span class="ProfileNav-value" data-is-compact="false"><?php get_count('article')?></span> </a> </li>
              <li class="ProfileNav-item ProfileNav-item--following"> <a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" href="javascript:;"> <span class="ProfileNav-label">评论</span> <span class="ProfileNav-value"><?php get_count('comments')?></span> </a> </li>
              <li class="ProfileNav-item ProfileNav-item--followers"> <a class="ProfileNav-stat ProfileNav-stat--link u-borderUserColor u-textCenter js-tooltip js-nav u-textUserColor" href="javascript:;"> <span class="ProfileNav-label">标签</span> <span class="ProfileNav-value"><?php get_count('tags')?></span> </a> </li>

              
             </ul> 
            </div> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="AppContainer"> 
      <div class="AppContent-main content-main u-cf" role="main" aria-labelledby="content-main-heading"> 
       <div class="Grid Grid--withGutter"> 
        <div class="Grid-cell u-size1of3 u-lg-size1of4"> 
         <div class="Grid Grid--withGutter"> 
          <div class="Grid-cell"> 
           <div class="ProfileSidebar ProfileSidebar--withLeftAlignment"> 
            <div class="ProfileHeaderCard"> 
             <h1 class="ProfileHeaderCard-name"> <a href="<?php $this->options->siteUrl(); ?>" class="ProfileHeaderCard-nameLink u-textInheritColor js-nav
"><?php echo get_author_info('name')?></a> </h1> 
             <h2 class="ProfileHeaderCard-screenname u-inlineBlock u-dir" dir="ltr"> <a class="ProfileHeaderCard-screennameLink u-linkComplex js-nav" href="<?php $this->options->siteUrl(); ?>">@<span class="u-linkComplex-target"><?php echo get_author_info('short_name')?></span></a> </h2> 
             <p class="ProfileHeaderCard-bio u-dir" dir="ltr"><?php $this->options->description()?></p> 
             <div class="ProfileHeaderCard-location"> 
              <span class="Icon Icon--geo Icon--medium"></span> 
              <span class="ProfileHeaderCard-locationText u-dir" dir="ltr"> <a href="javascript:;"><?php echo get_author_info('city')?></a> </span> 
             </div> 
             <div class="ProfileHeaderCard-url  u-hidden"> 
              <span class="Icon Icon--url Icon--medium"></span> 
              <span class="ProfileHeaderCard-urlText u-dir" dir="ltr"> </span> 
             </div> 
             <div class="ProfileMessagingActions"> 
              <div class="ProfileMessagingActions-actionsContainer"> 
              </div> 
             </div> 
             <div class="ProfileHeaderCard-url ">
               <span class="Icon Icon--url Icon--medium"></span>
               <span class="ProfileHeaderCard-urlText u-dir" dir="ltr"><a class="u-textUserColor" target="_blank" rel="me nofollow" href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->siteUrl(); ?>"><?php $this->options->siteUrl(); ?></a></span></div>
               <div class="ProfileHeaderCard-joinDate">
        <span class="Icon Icon--clock Icon--small"></span>
        <span class="ProfileHeaderCard-joinDateText js-tooltip u-dir" dir="ltr" >创建于2014年10月</span>
      </div>

            </div> 
   <div class="ProfileUserList ProfileUserList--socialProof">
  <div class="ProfileUserList-heading">
    <div class="ProfileUserList-title">
      <span class="Icon Icon--person Icon--medium u-alignBottom"></span>
      <span class="ProfileUserList-listName">
 <a href="javascript:;" class="ProfileUserList-permalink u-textUserColor js-nav">最近评论者</a></span>
    </div>
  </div>
    <ul class="ProfileUserList-facepile u-cf">      
     <?php get_visitor()?>
  </ul>
</div>
          
           </div> 
          </div> 
         </div> 
        </div> 
        <div class="Grid-cell u-size2of3 u-lg-size3of4"> 
         <div class="Grid Grid--withGutter"> 
          <div class="Grid-cell"> 
           <div class="js-profileClusterFollow"></div> 
          </div> 
          <div class="Grid-cell
                    u-lg-size2of3
              " data-test-selector="ProfileTimeline"> 
           <div class="ProfileHeading"> 
            <div class="ProfileHeading-spacer"></div> 
            <div class="ProfileHeading-content
      "> 
             <ul class="ProfileHeading-toggle"> 
              <li class="ProfileHeading-toggleItem is-active
              " data-element-term="tweets_toggle"> 文章 </li> 
             </ul> 
            </div> 
           </div> 

           <div id="timeline"> 
            <div class="stream-container " data-max-position="603736219789467649"> 
             <div class="stream-item js-new-items-bar-container"> 
             </div> 
             <div class="stream profile-stream"> 
              <?php $this->need('widget-list.php')?>
              
               <?php $this->need('widget-pagination.php')?>
              
              
              <ol class="hidden-replies-container"></ol> 
             </div> 
            </div> 
           
           </div> 
           <div id="scroll-bump-dialog" class="ScrollBumpDialog modal-container"> 
            <div class="close-modal-background-target"></div> 
            <div class="modal draggable"> 
             <div class="modal-content clearfix"> 
              <button type="button" class="modal-btn modal-close js-close"> <span class="Icon Icon--close Icon--medium"> <span class="visuallyhidden">关闭</span> </span> </button> 
              <div class="modal-header"> 
               <h3 class="modal-title"> 你关注了 </h3> 
              </div> 
              <div class="modal-body"> 
               <div class="loading"> 
                <span class="spinner-bigger"></span> 
               </div> 
               <ol class="ScrollBumpDialog-usersList clearfix js-users-list"></ol> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="Grid-cell u-size1of3"> 
           <div class="Grid Grid--withGutter"> 
            <div class="Grid-cell"> 
             <div class="ProfileSidebar ProfileSidebar--withRightAlignment"> 
              <div class="MoveableModule"> 
               <div class="SidebarCommonModules"> 

                <?php $this->need('widget-tags.php')?> 
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
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 

   
   
    </div> 
   </div> 
  </div> 
 <?php else:?>
 <body class="images nojs users-page users-show-page">
    <div id="container">
      
       <?php $this->need('widget-mo-topbar.php')?>
      
      <div id="main_content">
        
      <div class="profile">
        <table class="profile-details">
  <tr>
      <td class="avatar">
        <img alt="夜神空桜" src="<?php echo get_author_info('avatar')?>" />
      </td>
      <td class="user-info">
        <div class="fullname"><?php echo get_author_info('name')?>
        </div>
        <div class="username">
          <span>@</span>
          <span class="screen-name"><?php echo get_author_info('short_name')?></span>
        </div>
        <div class="location"><?php echo get_author_info('city')?></div>
      </td>
  </tr>
  <tr>
    <td class="details" colspan="2">
      <div class="bio">
        <div class="dir-ltr" dir="ltr">
        <?php $this->options->description()?>
        </div>
      </div>
      <div class="url">
        <div class="dir-ltr">
          <a href="" data-url="" class="twitter-timeline-link activeLink dir-ltr tco-link"
              dir="ltr" rel="nofollow" target="_blank"></a>
        </div>
      </div>
    </td>
  </tr>
</table>

        <table class="profile-stats">
  <tr>
    <td class="stat">
      <div class="statnum"><?php get_count('article')?></div>
      <div class="statlabel">文章数</div>
    </td>
    <td class="stat">
          <div class="statnum"><?php get_count('comments')?></div>
          <div class="statlabel">评论数</div>
    </td>
    <td class="stat stat-last">
          <div class="statnum"><?php get_count('tags')?></div>
          <div class="statlabel">标签数</div>
    </td>
  </tr>
</table>
      </div>
      <div class="timeline">
        <table class="titlebar">
          <td>文章</td>    
        </table>
          
<?php $this->need('widget-mo-list.php')?>     

          <div class="w-button-more">
            <?php $this->pageNav('<', '>','3','...',array('itemTag' =>  '')); ?>
          </div>
      </div>


      </div>
      <div id="footer">
 <?php $this->need('widget-mo-search.php')?>


    <div class="view-actions"><a href="#top">返回顶端</a></div>
</div>

    </div>
    

  <?php endif;?>
  <?php $this->need('footer.php');?>
