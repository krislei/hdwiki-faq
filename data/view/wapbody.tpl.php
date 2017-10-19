<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<body ontouchstart>
<div class="wrap">
    <header class="hd-top">
        <h2 class="logo"><a href="<?php echo WIKI_URL?>"><img src="style/default/logo.gif" alt=""></a></h2>
        <a href="javascirpt:void(0);" onclick="document.querySelector('.pop-search').style.display='block';" class="btn-sear"></a>
    </header>
    <nav class="site-nav">
        <p>
            <?php if(!empty($channellist[2])) { ?>
            <?php foreach((array)$channellist[2] as $channel) {?>
            <a href="<?php echo $channel['url']?>" class=""><?php echo $channel['name']?></a>
            <?php } ?>
            <?php } ?>

            <?php foreach((array)$pluginlist as $plugin) {?>
            <?php if($plugin['type']) { ?>
            <a href="index.php?plugin-<?php echo $plugin['identifier']?>"><?php echo $plugin['name']?></a>
            <?php } ?>
            <?php } ?>
        </p>
	</nav>
    <script>
		$(".site-nav a[href*=category]").remove();
		
        $(function(){

            var navUrls = $('.site-nav p a');
            var nowUrl = window.location.href;
            var start_num = ('http://' + window.location.host).length;
            if (nowUrl.slice(-1) == '/') {
                nowUrl = nowUrl.substr(0, nowUrl.length-1);
            }

            nowUrl = nowUrl.substr(start_num, nowUrl.length);
            navUrls.each(function(i, item) {
                var tempUrl = $(item).attr('href');
                if (tempUrl.slice(-1) == '/') {
                    tempUrl = tempUrl.substr(0, tempUrl.length-1);
                }

                tempUrl = tempUrl.substr(start_num, tempUrl.length);
                if ('' == nowUrl) {
                    navUrls.eq(0).addClass('current');
                    return false;
                }

                if (nowUrl == tempUrl) {
                    $(item).addClass('current');
                    return false;
                }
                if(tempUrl){
                    if (nowUrl.indexOf('?list') != -1 && tempUrl.indexOf('?list') != -1)  {
                        $(item).addClass('current');
                        return false;
                    } else if (tempUrl.indexOf(nowUrl) != -1) {
                        $(item).addClass('current');
                        return false;
                    }

                }
            });
        });
    </script>