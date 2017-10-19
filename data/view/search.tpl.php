<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<form id="form1" class="wrap clearfix" name="searchform" action="index.php?search-kw" method="post">
<div class="columns adv_search">
	<h2 class="col-h2">搜索</h2>
<ul>
<li><span>关键字：</span><input name="searchtext" type="text" value="<?php if(!empty($keyword)) { ?><?php echo $keyword?><?php } ?>"/></li>
<li><span>作者：</span><input name="author" type="text" /></li>
<li><span>搜索方式：</span>
	<label><input name="searchtype" type="radio" value="title" <?php if(!empty($searchtype) && $searchtype=='title' ) { ?>checked="checked"<?php } ?> />标题</label>
	<label><input name="searchtype" type="radio" value="content" <?php if(!empty($searchtype) && $searchtype=='content') { ?>checked="checked"<?php } ?> />全文</label>
	<label><input name="searchtype" type="radio" value="tag" <?php if(!empty($searchtype) && $searchtype=='tag') { ?>checked="checked"<?php } ?> />标签</label>
</li>
<li><span>搜索时间：</span>
				<select name="timelimited">
					<option value="0">全部时间</option>
					<option value="86400">1天</option>
					<option value="172800">2天</option>
					<option value="432000">1周</option>
					<option value="1296000">1个月</option>
					<option value="5184000">3个月</option>
					<option value="8640000">6个月</option>
					<option value="31536000">1年</option>
				</select>
				
				<label><input name="withinbefore" value="within" type="radio" <?php if((!empty($withinbefore) && $withinbefore=='within' )|| !empty($searchtype)) { ?>checked="checked"<?php } ?> />以内</label>
				<label><input name="withinbefore" value="before" type="radio" <?php if(!empty($withinbefore) && $withinbefore=='before') { ?>checked="checked"<?php } ?>/>以前</label>
</li>
<li><span>排序方式：</span><select name="ordertype">
							<option value="time">发布时间</option>
							<option value="comments">评论次数</option>
							<option value="views">浏览次数</option>
						</select>
						<label><input name="ascdesc" type="radio" value="asc" <?php if(!empty($ascdesc) && $ascdesc=='asc') { ?>checked="checked"<?php } ?> />以升序排列</label>
						<label><input name="ascdesc" type="radio" value="desc" <?php if(!empty($ascdesc) && $ascdesc=='desc') { ?>checked="checked"<?php } ?> />以降序排列</label>
</li>
<li><span>搜索范围：</span>
				<select name="categoryid[]" size="10"  multiple="multiple">
					<option selected="" value="all">搜索所有的分类</option>
					<?php echo $categorytree?>
				</select>
</li>
<li><input name="full" type="submit" value="搜索" class="btn_inp blue" /></li>
</ul>
</div>
</form>
<?php include $this->gettpl('footer');?>