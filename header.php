<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if(!is_mobile()):?>
<!DOCTYPE html>
<!--[if IE 8]><html class="lt-ie10 ie8" lang="zh-cn"><![endif]-->
<!--[if IE 9]><html class="lt-ie10 ie9" lang="zh-cn"><![endif]-->
<!--[if gt IE 9]><!-->
<html>
 <!--<![endif]-->
<?php else:?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.1//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php endif;?>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <?php if(is_mobile()):?>
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <?php endif;?>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
     <?php if(is_mobile()):?>
     <link href="<?php $this->options->themeUrl('assets/css/mobile.css'); ?>?ver=beta" inline="false" media="screen" rel="stylesheet" type="text/css" />
     <?php else:?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>?ver=20150619">
     <?php endif;?>
     <link rel="shortcut icon" href="<?php $this->options->siteUrl()?>favicon.ico">
    <?php $this->header(); ?>
</head>