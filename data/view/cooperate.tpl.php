<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<div class="hd_map wrap">
		<a href="<?php echo WIKI_URL?>"><?php echo $setting['site_name']?></a> &gt;&gt; <a href="index.php?doc-cooperate">待完善词条</a></div>
<section class="wrap clearfix">
<div class="l group1 bor-ccc dwsct">	
	<ul class="col-ul clearfix">
	<?php foreach((array)$coopdoc as $cooperatedoc) {?>
	<li><a href="index.php?doc-innerlink-<?php echo rawurlencode(string::hiconv($cooperatedoc['title'], 'utf-8'))?>" target="_blank" title="<?php echo $cooperatedoc['title']?>"><?php echo $cooperatedoc['title']?></a></li>
	<?php } ?>
	</ul>
</div>
<div class="r group2">
<div class="bor-ccc">
<h2 class="col-h2">待完善词条</h2>
<p class="col-p">完善词条内容、图片、参考资料等 使词条更丰富更具价值。</p>
<p class="col-p">更多人因为您的参与而受益匪浅。</p>
<p class="col-p">完善词条会得到更多经验提升您的 专业等级</p>
</div>
<div id="block_right"></div>
</div>
</section>
<?php include $this->gettpl('footer');?>

