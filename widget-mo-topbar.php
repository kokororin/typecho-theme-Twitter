<?php
     if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
 <div id="brand_bar">
  <table id="top">
    <tr>
      <td class="left">
        <a href="<?php $this->options->siteUrl()?>" class="brandmark">
              <span class="imgsprite_larry_28px_gif" height="28"  title="Twitter"></span>

          
        </a>
      </td>
      <td class="right">
            <img alt="|" class="divider" height="28" src="<?php $this->options->themeUrl('assets/img/brandbar_divider.gif'); ?>" />
          <a class="search" href="#search">
                <span class="imgsprite_search_28px_gif" height="28"  title="搜索"></span>

            
          </a>
      </td>
    </tr>
  </table>
</div>

  <table id="global_nav" class="images">
  <tr>
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
         <?php while($pages->next()): ?>
          <td><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></td>

        <?php endwhile; ?>
  
  </tr>
</table>