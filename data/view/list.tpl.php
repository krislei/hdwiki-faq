<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<div class="wrap hd_map">
	<a href="<?php echo WIKI_URL?>"><?php echo $setting['site_name']?></a> &gt;&gt;
	<?php if($type=='focus') { ?>推荐词条
	<?php } elseif($type=='hot') { ?>热门词条
	<?php } elseif($type=='champion') { ?>精彩词条
	<?php } elseif($type=='recentupdate') { ?>最近更新
	<?php } elseif($type=='popularity') { ?>人气指数
	<?php } elseif($type=='weekuserlist') { ?>上周贡献榜
	<?php } elseif($type=='allcredit') { ?>总贡献榜
	<?php } else { ?>按字母顺序浏览--<?php if(!empty($letter)) { ?><?php echo $letter?><?php } ?>
	<?php } ?>
</div>

<section class="wrap clearfix">
<div class="group1 r bor-ccc bang_main">
	<h2 class="col-h2">
			<?php if($type=='focus') { ?>推荐词条
			<?php } elseif($type=='hot') { ?>热门词条
			<?php } elseif($type=='champion') { ?>精彩词条
			<?php } elseif($type=='recentupdate') { ?>最近更新
			<?php } elseif($type=='popularity') { ?>人气指数
			<?php } elseif($type=='weekuserlist') { ?>上周贡献榜
			<?php } elseif($type=='allcredit') { ?>总贡献榜
			<?php } else { ?>按字母顺序浏览--<?php if(!empty($letter)) { ?><?php echo $letter?><?php } ?>
		<?php } ?>
	</h2>
	<?php if($type=='focus' ||$type=='hotdoc' || $type=='recentdoc' ||$type=='recentupdate' ||$type=='hot' ||$type=='champion' ) { ?>
		<a class="more" href="index.php?list-rss-recentchange"  id="rss" >RSS</a>
	<?php } ?>
	<dl class="col-dl">
	<dt class="gray9">
		<span class="title">
			<?php if($type=='popularity' ||$type=='allcredit' || $type=='weekuserlist') { ?>用户名<?php } else { ?>词条名称<?php } ?>
		</span> 
		<?php if($type=='focus') { ?>推荐时间
		  <?php } elseif($type=='hot') { ?>推荐时间
		  <?php } elseif($type=='champion') { ?>推荐时间
		  <?php } elseif($type=='recentupdate') { ?>更新时间
		  <?php } elseif($type=='popularity') { ?>浏览次数
		  <?php } elseif($type=='weekuserlist') { ?>上周经验
		  <?php } elseif($type=='allcredit') { ?>总经验
		  <?php } ?>&nbsp;
	</dt>
	
	<?php foreach((array)$list as $key=>$data) {?>
		<?php if($type=='popularity') { ?>
			<dd><span class="title"><a href="index.php?user-space-<?php echo $data['uid']?>"><?php echo $data['username']?></a></span><?php echo $data['views']?></dd>
			<?php } elseif($type=='allcredit' || $type=='weekuserlist') { ?>
			<dd><span class="title"><a href="index.php?user-space-<?php echo $data['uid']?>"><?php echo $data['username']?></a></span><?php echo $data['credit']?></dd>		
			<?php } else { ?>
			<dd><span class="title"><a href="index.php?doc-view-<?php echo $data['did']?>"><?php echo $data['title']?></a></span><?php if($type=='hotdoc') { ?><?php echo $data['edits']?><?php } else { ?><?php echo $data['time']?><?php } ?></dd>
		<?php } ?>
	<?php }?>
		
	</dl>
	<div id="fenye" class="a-c"><?php echo $departstr?></div>
</div>

<aside class="l group2">
	<div class="bor-ccc sidebar">
	<ul>
		<li <?php if($type=='hot') { ?>class="on"<?php } ?>><a href="index.php?list-focus-2">热门词条</a></li>
		<li <?php if($type=='champion') { ?>class="on"<?php } ?>><a href="index.php?list-focus-3">精彩词条</a></li>
		<li <?php if($type=='focus') { ?>class="on"<?php } ?>><a href="index.php?list-focus-1">推荐词条</a></li>
		<li <?php if($type=='recentupdate') { ?>class="on"<?php } ?>><a href="index.php?list-recentchange">最近更新</a></li>
		<li <?php if($type=='weekuserlist') { ?>class="on"<?php } ?>><a href="index.php?list-weekuserlist">上周贡献榜</a></li>
		<li <?php if($type=='allcredit') { ?>class="on"<?php } ?>><a href="index.php?list-allcredit">总贡献榜</a></li>
		<li <?php if($type=='popularity') { ?>class="on"<?php } ?>><a href="index.php?list-popularity">人气指数</a></li>
	</ul>
	</div>
    <div id="block_left"></div>
<div class="columns azmsx">
<h2 class="col-h2">按字母顺序浏览</h2>
<ul class="col-ul clearfix">
	<li><a href="index.php?list-letter-A">A</a></li>
	<li><a href="index.php?list-letter-B">B</a></li>
	<li><a href="index.php?list-letter-C">C</a></li>
	<li><a href="index.php?list-letter-D">D</a></li>
	<li><a href="index.php?list-letter-E">E</a></li>
	<li><a href="index.php?list-letter-F">F</a></li>
	<li><a href="index.php?list-letter-G">G</a></li>
	<li><a href="index.php?list-letter-H">H</a></li>
	<li><a href="index.php?list-letter-I">I</a></li>
	<li><a href="index.php?list-letter-J">J</a></li>
	<li><a href="index.php?list-letter-K">K</a></li>
	<li><a href="index.php?list-letter-L">L</a></li>
	<li><a href="index.php?list-letter-M">M</a></li>
	<li><a href="index.php?list-letter-N">N</a></li>
	<li><a href="index.php?list-letter-O">O</a></li>
	<li><a href="index.php?list-letter-P">P</a></li>
	<li><a href="index.php?list-letter-Q">Q</a></li>
	<li><a href="index.php?list-letter-R">R</a></li>
	<li><a href="index.php?list-letter-S">S</a></li>
	<li><a href="index.php?list-letter-T">T</a></li>
	<li><a href="index.php?list-letter-U">U</a></li>
	<li><a href="index.php?list-letter-V">V</a></li>
	<li><a href="index.php?list-letter-W">W</a></li>
	<li><a href="index.php?list-letter-X">X</a></li>
	<li><a href="index.php?list-letter-Y">Y</a></li>
	<li><a href="index.php?list-letter-Z">Z</a></li>
	<li><a href="index.php?list-letter-0">0</a></li>
	<li><a href="index.php?list-letter-1">1</a></li>
	<li><a href="index.php?list-letter-2">2</a></li>
	<li><a href="index.php?list-letter-3">3</a></li>
	<li><a href="index.php?list-letter-4">4</a></li>
	<li><a href="index.php?list-letter-5">5</a></li>
	<li><a href="index.php?list-letter-6">6</a></li>
	<li><a href="index.php?list-letter-7">7</a></li>
	<li><a href="index.php?list-letter-8">8</a></li>
	<li><a href="index.php?list-letter-9">9</a></li>
	<li><a href="index.php?list-letter-*" >其他</a></li>
</ul>
</div>
</aside>
</section>
<?php include $this->gettpl('footer');?>