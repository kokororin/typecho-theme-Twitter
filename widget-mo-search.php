<?php
     if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
    <div class="search-fields">
    <div class="title">
      搜索内容
    </div>
    <form action="./" class="search-input" method="get">
    <table>
      <tr>
        <td class="value" id="search"><div><input id="q" name="s" type="text" value=""/></div></td>
        <td class="button">
          <input type="image" src="<?php $this->options->themeUrl('assets/img/magnifying_glass.gif'); ?>" alt="搜索"/>
        </td>
      </tr>
    </table>
    </form>
</div>