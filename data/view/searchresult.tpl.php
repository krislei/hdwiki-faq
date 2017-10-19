<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<section class="wrap clearfix">
<?php if(1==$cloudsearch) { ?>
<div class="columns resoult_list">

	<?php if($synonym) { ?>
	<div class="cre_search">
	"<span><?php echo $synonym['srctitle']?></span>"是"<span class="red"><?php echo $synonym['desttitle']?></span>"的同义词。<a class="link_blue m-lr8" href="index.php?doc-innerlink-<?php echo $synonym['linktitle']?>">点击此处</a>查看全部详细内容！
	</div>
	<?php } else { ?>
	<?php if($docnoexit) { ?>
	<div class="cre_search">
	<form name="createform" method="post" action="index.php?doc-create">
		<dl class="ul_l_s">
			<dd class="create">本站尚未收录词条“<span style="color:red;"><strong><?php echo $title?></strong></span>”，欢迎您来创建：)
				<input name="title" type="hidden" value="<?php echo $title?>"/>
				<input name="create" type="submit" value="创建词条" class="btn_inp v-m"/>
				<br />
				<?php if($search_tip_switch=='1' ) { ?>
				另外，您可以参考互动百科的： <a href="http://www.baike.com/wiki/<?php echo $title?>" target="_blank"><?php echo $title?></a>
				<?php } ?>
			</dd>
		</dl>
	</form>
	</div>
	<?php } ?>
	<?php } ?>
	<div>
		<iframe id="frame_content"  name="frame_content" src='<?php echo $iframesrc?>' style="width:100%;height:1200px;" scrolling='no'   frameborder="0" ></iframe>
	</div>
</div>
<?php } else { ?>
<aside class="r group2">
	<div class="columns ad">
		<p class="a-c m-t10 col-p" > 更多详情，尽在<a href="http://www.baike.com/wiki/<?php echo urlencode($searchtext)?>?hf=hdwiki_so_www" target="_blank">互动百科</a><br/>
			更多详情，尽在<a href="http://www.google.cn/search?hl=zh-CN&newwindow=1&q=<?php echo urlencode($searchtext)?>&aq=f" target="_blank">谷歌搜索</a> </p>
	</div>
</aside>
<div class="l group1 azmsx columns"><h2 class="col-h2 block bold">按字母顺序浏览:</h2><ul class="col-ul"><li><a href="index.php?list-letter-A" >A</a></li><li><a href="index.php?list-letter-B" >B</a></li><li><a href="index.php?list-letter-C" >C</a></li><li><a href="index.php?list-letter-D" >D</a></li><li><a href="index.php?list-letter-E" >E</a></li><li><a href="index.php?list-letter-F" >F</a></li><li><a href="index.php?list-letter-G" >G</a></li><li><a href="index.php?list-letter-H" >H</a></li><li><a href="index.php?list-letter-I" >I</a></li><li><a href="index.php?list-letter-J" >J</a></li> <li><a href="index.php?list-letter-K" >K</a></li><li><a href="index.php?list-letter-L" >L</a></li><li><a href="index.php?list-letter-M" >M</a> </li><li><a href="index.php?list-letter-N" >N</a></li><li><a href="index.php?list-letter-O" >O</a></li><li><a href="index.php?list-letter-P" >P</a></li> <li><a href="index.php?list-letter-Q" >Q</a></li><li><a href="index.php?list-letter-R" >R</a></li><li><a href="index.php?list-letter-S" >S</a></li><li><a href="index.php?list-letter-T" >T</a></li><li><a href="index.php?list-letter-U" >U</a></li><li><a href="index.php?list-letter-V" >V</a></li><li><a href="index.php?list-letter-W" >W</a></li><li><a href="index.php?list-letter-X" >X</a></li><li><a href="index.php?list-letter-Y" >Y</a></li><li><a href="index.php?list-letter-Z" >Z</a></li><li><a href="index.php?list-letter-0" >0</a></li><li><a href="index.php?list-letter-1" >1</a></li><li><a href="index.php?list-letter-2" >2</a></li><li><a href="index.php?list-letter-3" >3</a></li><li><a href="index.php?list-letter-4" >4</a></li><li><a href="index.php?list-letter-5" >5</a> </li><li><a href="index.php?list-letter-6" >6</a></li><li><a href="index.php?list-letter-7" >7</a> </li><li><a href="index.php?list-letter-8" >8</a></li><li><a href="index.php?list-letter-9" >9</a></li> <li><a href="index.php?list-letter-*" >其他</a></li></ul> </div>
<div class="c-b"></div>
<div class="columns">
	<?php if(0==$cloudsearch) { ?>
	<p class="a-r resoult_total gray9"> 搜索“<span class="cblue"><?php echo $searchtext?></span>”找到相关内容<em class="cblue"><?php echo $count?></em>篇，用时<?php echo $runtime?>秒 &nbsp;&nbsp;&nbsp;&nbsp;</p>
	<?php } ?>
	<?php if($synonym) { ?>
	<div class="cre_search">
	"<span><?php echo $synonym['srctitle']?></span>"是"<span class="red"><?php echo $synonym['desttitle']?></span>"的同义词。<a class="link_blue m-lr8" href="index.php?doc-innerlink-<?php echo $synonym['linktitle']?>">点击此处</a>查看全部详细内容！
	</div>
	<?php } else { ?>
	<?php if($docnoexit) { ?>
	<div class="cre_search">
	<form name="createform" method="post" action="index.php?doc-create">
		<?php echo csrf_field(); ?>
		<dl class="col-dl">
			<dd class="create">
				<p class="f20"><i class="ico-warnn"></i>本站尚未收录词条“<span class="cblue"><?php echo $title?></span>”，欢迎您来创建：)</p>
				<?php if($search_tip_switch=='1' ) { ?>
				另外，您可以参考互动百科的： <a href="http://www.baike.com/wiki/<?php echo $title?>" target="_blank" class="clink"><?php echo $title?></a>
				<?php } ?>
				<p>
				<input name="title" type="hidden" value="<?php echo $title?>"/>
				<input name="create" type="submit" value="创建词条" class="btn_inp blue"/></p>
			</dd>
		</dl>
	</form>
	</div>
	<?php } ?>
	<?php } ?>
</div>
	<?php if(empty($list)) { ?>
	<?php } else { ?>
<div class="columns resoult_list">
	<div class="resoult_total f18">
		<a href="index.php?search-kw-<?php echo $keyword?>">词条</a><a href="index.php?search-tag-<?php echo $keyword?>">搜标签</a>
	</div>
	<?php foreach((array)$list as $key=>$doc) {?>
	<dl class="col-dl">
		<dt><a href="index.php?doc-view-<?php echo $doc['did']?>" class="clink f20" target="_blank"><?php echo $doc['title']?></a></dt>
		<dd class="gray9">
			<span class="r">编辑:<?php echo $doc['edits']?>次 | 浏览:<?php echo $doc['views']?>次</span>
			词条创建者:<a href="index.php?user-space-<?php echo $doc['authorid']?>" class="clink" target="_blank"><?php echo $doc['author']?></a> &nbsp; &nbsp; 
			创建时间:<?php echo $doc['time']?> 
		</dd>
		<dd class="gray"><span>标签:</span>
			<?php foreach((array)$doc['tag'] as $key=>$tag) {?>
			<a class="clink" href="index.php?search-tag-<?php echo rawurlencode($tag);?>" target="_self"><?php echo $tag?></a>
			<?php }?>
		</dd>
		<dd class="gray">
			<p><span>摘要:</span><?php echo $doc['summary']?><a class="clink" href="index.php?doc-view-<?php echo $doc['did']?>" >[阅读全文] </a></p>
		</dd>
	</dl>
	<?php }?>
	<div id="fenye" class="m-t10 a-r"><?php echo $departstr?></div>
</div>
	<?php } ?>
<?php } ?>
</section>
<?php include $this->gettpl('footer');?> 