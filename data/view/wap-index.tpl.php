<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('wapheader');?>
<?php include $this->gettpl('wapbody');?>
<section class="column home">
    <h2 class="col-h2">百科图片</h2>
    <a href="index.php?pic-piclist" class="more">更多>></a>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php if(isset($indexcache['piclist'])) { ?>
            <?php $count = count($indexcache['piclist'])?>
            <?php foreach((array)$indexcache['piclist'] as $key=>$picname) {?>
            <div class="swiper-slide picswipe">
                <a href="index.php?pic-view-<?php echo $picname['id']?>-<?php echo $picname['did']?>">
                    <img src="<?php echo $picname['attachment_normal']?>" alt="<?php echo $picname['description']?>" title="<?php echo $picname['description']?>">
                    <figure><?php echo $picname['description']?></figure>
                </a>
                <em class="no"><i><?php echo $key+1;?></i> / <?php echo $count?></em>
            </div>
            <?php }?>
            <?php } ?>
        </div>
    </div>
    <script type="text/javascript">
        var mySwiper = new Swiper('.swiper-container',{
            loop: true,
            autoplay: 5000, //自动切换开启
            speed:2000, //表示切换速度
            onSlideChangeEnd:function(swiper){
               // console.log(swiper.activeIndex);
            }
        });
    </script>
</section>
<section class="column home">
    <h2 class="col-h2">热门词条</h2><!--热门词条-->
    <a href="index.php?list-default-hot" class="more">更多>></a>
    <ul class="ul-row2 txtList clearfix">
        <?php if(isset($indexcache['hotdocs'])) { ?>
        <?php foreach((array)$indexcache['hotdocs'] as $key=>$hotdoc) {?>
        <?php if($key < 4) { ?>
        <li><a href="index.php?doc-view-<?php echo $hotdoc['did']?>"><?php echo $hotdoc['title']?></a></li>
        <?php } ?>
        <?php }?>
        <?php } ?>
    </ul>
</section>
<section class="column home">
    <h2 class="col-h2">精彩词条</h2><!--精彩词条-->
    <a href="index.php?list-default-wond" class="more">更多>></a>
    <ul class="ul-row1">
        <?php if(isset($indexcache['fistwonderdoc'])) { ?>
        <li><a href="index.php?doc-view-<?php echo $indexcache['fistwonderdoc']['did']?>">
            <span class="aimg w150"><img src="<?php echo $indexcache['fistwonderdoc']['image']?>" alt="<?php echo $indexcache['fistwonderdoc']['title']?>"></span>
            <strong class="title"><?php echo $indexcache['fistwonderdoc']['shorttitle']?></strong>
            <span class="summary"><?php echo $indexcache['fistwonderdoc']['summary']?></span>
        </a></li>
        <?php } ?>
        <?php if(isset($indexcache['wonderdocs'])) { ?>
        <?php foreach((array)$indexcache['wonderdocs'] as $key=>$wondoc) {?>
        <?php if($key < 4) { ?>
        <li><a href="index.php?doc-view-<?php echo $wondoc['did']?>"><strong class="title"><?php echo $wondoc['title']?></strong><span class="summary"><?php echo $wondoc['summary']?></span></a></li>
        <?php } ?>
        <?php }?>
        <?php } ?>
    </ul>
</section>
<section class="column home">
    <h2 class="col-h2">推荐词条</h2><!--推荐词条-->
    <a href="index.php?list-default-digg" class="more">更多>></a>
<ul class="ul-row3 clearfix">
        <?php if($indexcache['commenddocs'] ) { ?>
        <?php foreach((array)$indexcache['commenddocs'] as $key=>$fistcomdoc) {?>
        <?php if($key<3) { ?>
        <li><a href="index.php?doc-view-<?php echo $fistcomdoc['did']?>">
                <span class="aimg">
                    <img src="<?php echo $fistcomdoc['image']?>" alt="<?php echo $fistcomdoc['title']?>">
                </span>
            <strong><?php echo $fistcomdoc['shorttitle']?></strong>
        </a></li>
        <?php } ?>
        <?php }?>
        <?php } ?>

    </ul>
    <ul class="ul-row2 txtList clearfix">
        <?php foreach((array)$indexcache['commenddocs'] as $key=>$fistcomdoc) {?>
        <?php if($key>=3 &&  $key < 7) { ?>
        <li><a href="index.php?doc-view-<?php echo $fistcomdoc['did']?>"><?php echo $fistcomdoc['shorttitle']?></a></li>
        <?php } ?>
        <?php }?>
        <!--  <li><a href="">最机关报协硒鼓</a></li>-->
    </ul>
</section>
<?php include $this->gettpl('wapfooter');?>