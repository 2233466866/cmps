<!DOCTYPE html>
<html lang="zh-cmn-hans">
<head>
    <meta charset="UTF-8">
    <title><?php $this -> archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('含关键词 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); $this -> options -> title(); ?></title>
<?php if($this -> options -> favicon): ?>
    <link rel="icon" href="<?php $this -> options -> favicon() ?>" sizes="192x192"/>
<?php else: ?>
    <link rel="icon" href="<?php $this -> options -> themeUrl('static/img/icon.png'); ?>" sizes="192x192"/>
<?php endif; ?>
    <link href="<?php $this -> options -> themeUrl('static/kico.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php $this -> options -> themeUrl('static/fantasy.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="/usr/themes/fantasy/static/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
    <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
<?php if($this -> options -> background): ?>
    <style>body{ background: url(<?php $this -> options -> background() ?>) center/cover fixed }</style>
<?php endif; ?>
<?php if($this -> options -> custom_css): ?>
    <style><?php $this -> options -> custom_css() ?></style>
<?php endif; ?>
    <script>
    (function () {
        var bp = document.createElement('script');
        var protocol = window.location.protocol.split(':')[0];
        if (protocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        } else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
    </script>
</head>
<body>
<aside>
    <nav class="side-nav">
        <a href="<?php $this -> options -> siteUrl() ?>">博客首页</a>
        <?php $this -> widget('Widget_Contents_Page_List') -> parse('<a href="{permalink}">{title}</a>');/*自定单页*/?>
        <a href="javascript:void 0;" class="search-btn">文章搜索</a>
        <?php if($this -> user -> hasLogin()): ?>
        <a href="<?php $this -> options -> adminUrl() ?>">进入后台</a>
        <?php endif; ?>
    </nav>
    <div class="side-window">
        <div class="side-wrap">
            <form class="search-form" method="post">
                <input type="text" name="s" placeholder="搜索什么？">
            </form>
            <div class="side-category color-bar">
                <?php $this -> widget('Widget_Metas_Category_List') -> parse('<a href="{permalink}">{name}</a>'); ?>
            </div>
        </div>
    </div>
</aside>
<header>
    <div class="toggle"></div>
    <div class="wrap min">
        <h1 class="headline" style="user-select:none;">
            <span><?php $this->options->title() ?></span>
        </h1>
<?php if ($this->options->home_social): ?>
        <div class="head-social">
<?php $this->options->home_social() ?>
        </div>
<?php endif; ?>
    </div>
</header>
