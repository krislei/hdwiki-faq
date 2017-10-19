<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<section class="wrap m-t20 clearfix">
	<aside class="l group2">
		<div class="bor-ccc sidebar">
			<ul>
				<li class="<?php if($type==2) { ?>on<?php } ?>"><a href="index.php?pic-piclist-2">最新图片</a></li>
				<li class="<?php if($type==3) { ?>on<?php } ?>"><a href="index.php?pic-piclist-3">点击排行</a></li>
				<li class="<?php if($type==1) { ?>on<?php } ?>"><a href="index.php?pic-piclist">精选图片</a></li>
			</ul>
		</div>
		<div id="block_left"></div>
	</aside>
<div class="r group1 bor-ccc">
<ul class="tpbk_img_list j-zhong gray9 clearfix">
<?php if($piclist) { ?>
	<?php foreach((array)$piclist as $key=>$data) {?>
	<li>
	<label>
	<a href="index.php?pic-view-<?php echo $data['id']?>-<?php echo $data['did']?>" target="_blank" class="a-img1"><img src="<?php echo $data['attachment']?>" alt="<?php echo $data['description']?>" name="图片百科" /></a>
	</label>
	<a href="index.php?doc-view-<?php echo $data['did']?>" target="_blank" title="<?php echo $data['description']?>" class="a-c"><?php echo $data['subdescription']?></a>
	<p class="a-c m-lr8"><?php echo $data['sizeinfo']?></p>
	</li>
	<?php }?>
<?php } else { ?>
no pictures
<?php } ?>

</ul>
<div class="c-b"></div>
 <div id="fenye" class="m-t10 m-r8 a-r"> 
 <?php echo $departstr?>
</div>
</div>
</section>
<?php include $this->gettpl('footer');?>
