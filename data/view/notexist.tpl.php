<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<section class="wrap clearfix">
<div class="l group1 resoult_list">
	<div class="columns cre_search">
	<form name="createform" method="post" action="index.php?doc-create">
	<?php echo csrf_field(); ?>
	<dl class="ul_l_s">
		<dd class="create">
			<p class="f20"><i class="ico-warnn"></i>本站尚未收录词条“<a href="index.php?doc-create" class="clink" ><?php echo $title?></a>”，欢迎您来创建：)</p>
		<?php if($search_tip_switch=='1' ) { ?>另外，您可以参考互动百科的：
		<a href="http://www.baike.com/wiki/<?php echo $title?>" target="_blank" class="clink"><?php echo $title?></a>
		<?php } ?>
		<p>
		<input name="title" type="hidden" value="<?php echo $title?>"/>
		<input name="create" type="submit" value="创建词条" class="btn_inp blue"/></p>
		</dd>
	</dl>
	</form>
	</div> 

	<?php if(!empty($list)) { ?>
	<p class="resoult_total f18">以下是本站搜索结果</p>
	<?php foreach((array)$list as $key=>$doc) {?>
	<dl class="col-dl">
	<dt><a href="index.php?doc-view-<?php echo $doc['did']?>" class="clink f20"><?php echo $doc['title']?></a></dt>
	<dd class="gray9"><p><span>摘要:</span><?php echo $doc['summary']?><a class="clink" href="index.php?doc-view-<?php echo $doc['did']?>" class="block">[阅读全文]</a></p></dd>
	</dl>
	<?php }?>
	<dl class="col-dl">
		<dd><a class="clink" href="index.php?search-fulltext-title-<?php echo urlencode($title)?>--all-0--time-desc-1-1">查看更多搜索结果</a></dd>
	</dl>
	<?php } ?>
</div>

<aside class="r group2">
	<div class="bor-ccc ad">
	<p class="a-c m-t10 col-p" >
	更多详情，尽在<a href="http://www.baike.com/wiki/<?php echo urlencode($searchtext)?>" target="_blank">互动百科</a><br/>
	更多详情，尽在<a href="http://www.google.com.hk/search?hl=zh-CN&newwindow=1&q=<?php echo urlencode($searchtext)?>&aq=f" target="_blank">谷歌搜索</a>
	</p>
	</div>
</aside>
</section>
<?php include $this->gettpl('footer');?>