<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<div class="wrap hd_map"> <a href="<?php echo WIKI_URL?>"><?php echo $setting['site_name']?></a>&gt;&gt;<a href="index.php?category"> 百科分类 </a>
<?php foreach((array)$category['navigation'] as $key=>$navigation) {?>&gt;&gt; 
<?php if($key<count($category['navigation'])-1) { ?><a href="index.php?category-view-<?php echo $navigation['cid']?>"> <?php echo $navigation['name']?> </a><?php } else { ?> <?php echo $navigation['name']?> <?php } ?>
<?php }?>
</div>
<section class="wrap clearfix">
<div class="r group1 bor-ccc cate_show">
	<h2 class="col-h2">
		<span class="r f14 gray9">该分类下有<?php echo $count?>个词条 <a href="index.php?doc-create-<?php echo $category['cid']?>" target="_blank" class="clink">创建该分类下的词条</a></span>
	"<?php echo $category['name']?>" 分类下的词条
	</h2>
	<?php if(count($list)>0) { ?>
	<?php foreach((array)$list as $key=>$doc) {?>
	<dl class="col-dl">
		<dt class="h2"><a class="clink f20" href="index.php?doc-view-<?php echo $doc['did']?>" ><?php echo $doc['title']?></a></dt>
		<dd class="gray9">
			<span class="r">编辑:<?php echo $doc['edits']?>次 |  浏览:<?php echo $doc['views']?>次</span>
			词条创建者:<a class="clink" href="index.php?user-space-<?php echo $doc['authorid']?>" ><?php echo $doc['author']?></a> &nbsp; &nbsp; 创建时间:<?php echo $doc['time']?></dd>
		<dd class="gray">标签: <?php foreach((array)$doc['tag'] as $key=>$tag) {?> <a class="clink" href="index.php?search-tag-<?php echo $tag?>" ><?php echo $tag?></a> <?php }?></dd>
		<dd class="gray">
		<p>摘要: <?php echo $doc['summary']?><a href="index.php?doc-view-<?php echo $doc['did']?>" class="clink">[阅读全文:]</a></p>
		</dd>
	</dl>
	<?php }?>
	<?php } ?>
	<div id="fenye" class="a-c"><?php echo $departstr?></div>
</div>
<aside class="l group2">
	<div class="bor-ccc category">
	<h2 class="col-h2"><?php echo $category['name']?></h2>
	<?php foreach((array)$subcategory as $key=>$parent) {?>
	<dl class="f14">
		<dt><a class="clink f18" href="index.php?category-view-<?php echo $parent['parent']['cid']?>" ><?php echo $parent['parent']['name']?></a></dt>
		<?php foreach((array)$parent['child'] as $value=>$child) {?>
		<dd><a href="index.php?category-view-<?php echo $child['cid']?>" ><?php echo $child['name']?></a></dd>
		<?php }?>
	</dl>
	<?php }?>
	</div>
</aside>
</section>
<?php include $this->gettpl('footer');?>