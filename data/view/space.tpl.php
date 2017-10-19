<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<div class="wrap hd_map">
	<a href="<?php echo WIKI_URL?>"><?php echo $setting['site_name']?></a> &gt;&gt;<?php echo $spaceuser['username']?>
	<?php if($type==1 ) { ?>编辑的词条
	<?php } elseif($type==2) { ?>收藏的词条
	<?php } else { ?>创建的词条<?php } ?> 
</div>
<section class="wrap clearfix">
<div class="r group1 bor-ccc qh gr">
	<div class="resoult_total f18">
		<a class="<?php if(!$type) { ?>hover<?php } ?>" href="index.php?user-space-<?php echo $spaceuser['uid']?>-0">创建的词条</a>
		<a class="<?php if($type==1) { ?>hover<?php } ?>" href="index.php?user-space-<?php echo $spaceuser['uid']?>-1">编辑的词条</a>
		<a class="<?php if($type==2) { ?>hover<?php } ?>" href="index.php?user-space-<?php echo $spaceuser['uid']?>-2">收藏的词条</a>
	</div>

	<?php if($doclist) { ?>
	<?php foreach((array)$doclist as $doc) {?>
	<dl class="col-dl">
		<dt><a href="index.php?doc-view-<?php echo $doc['did']?>" class="clink f20" ><?php echo $doc['title']?></a></dt>
		<dd class="gray9">
			<span class="r">编辑:<label><?php echo $doc['edits']?>次</label> | 浏览:<label><?php echo $doc['views']?>次</label>
		<?php if((2 == $type && $uid == $doc['fuid'])) { ?><a class="clink" href="index.php?user-removefavorite-<?php echo $doc['fid']?>" >[删除此条收藏]</a><?php } ?></span>
			词条创建者:<a class="clink" href="index.php?user-space-<?php echo $doc['authorid']?>"><?php echo $doc['author']?></a> &nbsp; &nbsp; 创建时间:<label><?php echo $doc['time']?></label></dd>
		<dd class="gray">标签: 
		<?php if($doc['tag']) { ?>
			<?php foreach((array)$doc['tag'] as $tag) {?>
			<a href="index.php?search-tag-<?php echo $tag?>" class="clink" ><?php echo $tag?></a>
			<?php } ?>
		<?php } ?>
		</dd>
		<dd class="gray"><p>摘要: <?php echo $doc['summary']?><a href="index.php?doc-view-<?php echo $doc['did']?>" class="clink" >[阅读全文]</a></p></dd>
	</dl>
	<?php } ?>
	<?php } else { ?>
	<p class="m-t20 a-c"><i class="ico-warnn"></i><?php if($type==1) { ?>暂无编辑过词条!<?php } elseif($type==2) { ?>暂无收藏词条！<?php } else { ?>暂无创建过词条!<?php } ?></p>
	<?php } ?>
 	<div id="fenye" class="a-c"><?php echo $departstr?></div>
</div>

<aside class="l group2">
	<div class="bor-ccc gr_info">
		<dl class="col-dl">
		<dd class="l"><a href="index.php?user-space-<?php echo $spaceuser['uid']?>" class="a-img2"><img src="<?php if($spaceuser['image']) { ?><?php echo $spaceuser['image']?><?php } else { ?>style/default/user.jpg<?php } ?>"/></a></dd>
		<dd class="f20"><?php echo $spaceuser['username']?></dd>
		<dd class="gray9"><span class="r"><img alt="金币" src="style/default/jb.gif" class="sign"/><?php echo $spaceuser['credit1']?></span>
		<font color="<?php echo $spaceuser['color']?>"><?php echo $spaceuser['grouptitle']?></font></dd>
		<dd><a onclick="return Message.box('<?php echo $spaceuser['username']?>')" href="#" class="s-msg clink r">发消息</a>
		<?php for($i=0; $i<$spaceuser['editorstar'][3]; $i++) {?><img src="style/default/star_level3.gif"/><?php } ?><?php for($i=0; $i<$spaceuser['editorstar'][2]; $i++) {?><img src="style/default/star_level2.gif"/><?php } ?><?php for($i=0; $i<$spaceuser['editorstar'][1]; $i++) {?><img src="style/default/star_level1.gif"/><?php } ?>
		</dd>
		<dd class="row2 gray9 f12">用户经验:<?php echo $spaceuser['credit2']?></dd>	
		<dd class="row2 gray9 f12">人气指数:<?php echo $spaceuser['views']?></dd>
		<dd class="row2 gray9 f12">创建词条:<?php echo $spaceuser['creates']?></dd>
		<dd class="row2 gray9 f12">编辑:<?php echo $spaceuser['edits']?></dd>
		<dd class="gray9 f12">注册时间:<?php echo $spaceuser['regtime']?></dd>
		<dd class="gray9 f12">个人介绍:<?php echo $spaceuser['signature']?></dd>
		</dl>
	</div>
</aside>
</section>
<?php include $this->gettpl('footer');?>