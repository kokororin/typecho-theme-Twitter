<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="Trends module trends"> 
                 <div class="trends-inner">
                  <div class="flex-module trends-container "> 
                   <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
                   <div class="flex-module-header"> 
                    <h3><span class="trend-location js-trend-location">标签云</span></h3> 
                   </div> 
                   <div class="flex-module-inner"> 
                    <ul class="trend-items js-trends"> 
                     <?php if($tags->have()): ?>
                     <?php while ($tags->next()): ?>
                     <li class="trend-item js-trend-item" > <a class="js-nav trend-name" dir="ltr" href="<?php $tags->permalink();?>" data-query-source="trend_click"><?php $tags->name(); ?></a> </li> 
                     <?php endwhile; ?>
                     <?php endif; ?>
                     
                    </ul> 
                   </div> 
                  </div>
                 </div> 
                </div>