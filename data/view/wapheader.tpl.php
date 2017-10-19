<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title><?php echo $navtitle?> <?php echo $setting['site_name']?> <?php echo $setting['seo_title']?> - Powered by HDWiki!</title>
    <?php echo $setting['seo_headers']?>

    <meta name="keywords" content="<?php echo $setting['seo_keywords']?>" />
    <meta name="description" content="<?php echo $setting['seo_description']?>" />
    <meta name="generator" content="HDWiki <?php echo HDWIKI_VERSION?>" />
    <meta name="author" content="HDWiki Team" />
    <meta name="csrf-token" content="<?php echo csrf_token()?>">
    <meta name="copyright" content="2005-2016 baike.com" />
    <?php if(!empty($docrewrite) && $docrewrite=='1') { ?>
    <base href="<?php echo WIKI_URL?>/" />
    <?php } ?>
    <link rel="stylesheet" href="style/default/wap.css">
    <link rel="stylesheet" href="style/default/wapswiper.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/wapswiper.js"></script><!--移动端幻灯js-->
    <!--wapjs加载数据-->
    <script src="js/wap_load_data.js"></script>
</head>
