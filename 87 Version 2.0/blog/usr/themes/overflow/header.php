<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    本主题由雨落泪尽移植至typecho，overflow原作者享有一切权利，雨落泪尽保留overflow在typecho平台的一切权利！
-->
<html>
	<head>
		<title><?php if($this->_currentPage>1) echo '第'.$this->_currentPage.'页 | '; ?><?php $this->archiveTitle(array(
    'category'  =>  _t('分类 %s 下的文章'),
    'search'    =>  _t('包含关键字 %s 的文章'),
    'tag'       =>  _t('标签 %s 下的文章'),
    'author'    =>  _t('%s 发布的文章')
  ), '', ' | '); ?><?php $this->options->title(); ?></title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="<?php $this->options->themeUrl('assets/js/ie/html5shiv.js'); ?>"></script><![endif]-->
		<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>"/>
        <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/aos.css'); ?>"/>
        <!--[if lte IE 8]><link rel="<?php $this->options->themeUrl('stylesheet" href="assets/css/ie8.css'); ?>" /><![endif]-->
	</head>
    
    <!-- Header -->
			<section id="header">


			<header>
					<div aos="fade-down"><h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1></div>
                  <div aos="fade-down"><p><?php $this->options->description() ?></p></br></div>          		
            </header>
  

             <footer>
                 <ul class="icons"  aos="flip-right" aos-offset="0">
                    <li><a href="<?php $this->options->siteUrl(); ?>">首页</a><li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li>
                    .<a href="<?php $pages->permalink(); ?>" class="archive"><?php $pages->title(); ?></a>
                    </li>
                    <?php endwhile; ?>
                </ul>	
            </footer>
		</section>