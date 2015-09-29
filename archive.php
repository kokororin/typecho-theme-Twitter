<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<?php if(!is_mobile()):?>
 <body class="three-col logged-in user-style-sora_yakami ms-windows asian zh-cn AdaptiveSearchPage AdaptiveDefaultPage supports-drag-and-drop" data-fouc-class-names="swift-loading" dir="ltr">
  <div id="doc" class=""> 
   <?php $this->need('widget-topbar.php');?>
   <div id="page-outer"> 
    <div id="page-container" class="AppContent wrapper wrapper-search"> 
     <div class="AppContainer"> 
      <div class="AdaptiveSearchTitle u-bgUserColor"> 
       <h1 class="AdaptiveSearchTitle-title" dir="ltr"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1> 
      </div> 

      <div class="AppContent-main u-cf" role="main" aria-labelledby="content-main-heading"> 
       <div class="Grid Grid--withGutter"> 
        <!-- Column 1 --> 
        <div class="Grid-cell u-size1of4"> 
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
        <!-- Column 1 --> 
        <!-- Column 2, 3, 4 --> 
        <div class="Grid-cell u-size3of4"> 
         <div class="Grid Grid--withGutter"> 
          <div class="Grid-cell u-size2of3"> 
           <div id="timeline" class="content-main AdaptiveSearchTimeline" role="main"> 
            <div class="stream-container"> 
              <?php if (!$this->have()): ?>
             <div class="stream-item js-new-items-bar-container new-tweets-bar-visible" style="display: block;">
              <div class="new-tweets-bar js-new-tweets-bar">
                0 条结果
              </div>
             </div> 
           <?php else:?>
             <div class="stream search-stream"> 
              <?php $this->need('widget-list.php')?>
              
              <?php $this->need('widget-pagination.php')?> 
              <ol class="hidden-replies-container"></ol> 
             </div> 
           <?php endif;?>
            </div> 
           </div> 
          </div> 
         </div> 
        </div> 
        <!-- Column 2, 3, 4 --> 
       </div> 
      </div> 
     </div> 

    </div> 
   </div> 

  </div> 


 <?php else:?>
<body class="images nojs searches-page searches-show-page">
    <div id="container">
      
        <?php $this->need('widget-mo-topbar.php')?>
      
      <div id="main_content">
        
<div class="searches">
    <div class="searches-header">
      <table>
      <tr>
        <td>
          <span class="label"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?> </span>
        </td>

        <td class="r">
            
        </td>
      </tr>
      </table>
    </div>



    <div class="timeline">
      <?php $this->need('widget-mo-list.php')?>   

    </div>
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

