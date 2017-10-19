<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo WIKI_CHARSET?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
<title><?php echo $navtitle?> <?php echo $setting['site_name']?> <?php echo $setting['seo_title']?> - Powered by HDWiki!</title>
<link  rel="stylesheet" type="text/css" href="<?php echo WIKI_URL?>/style/default/editor.css" media="all" />
<link href="<?php echo WIKI_URL?>/js/jqeditor/skins/skin_base.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE]>
<script src="js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="./js/jquery.js"></script>
</head>
<body>
<header id="nav-top" class="wrap">
	<ul class="l">
		<li><a href="<?php echo WIKI_URL?>" target="_blank">首页</a></li>
		<?php if(count($channellist)!=0) { ?>
		<?php foreach((array)$channellist as $channel) {?>
		<li><a href="<?php echo $channel['url']?>" target="_blank"><?php echo $channel['name']?></a></li>
		<?php } ?>
		<?php } ?>		
		<li><a href="index.php?category" target="_blank">百科分类</a></li>
		<li><a href="index.php?list" target="_blank">排行榜</a></li>
		
	</ul>
	<ul class="r loginbar" id="top_usernav">
            <?php if($user['groupid']=='1') { ?>
            <li name="login"><a href="index.php?user-login">登录</a></li>
            <li name="register" class="bor_no"><a href="index.php?user-register">注册</a></li>
            <?php } else { ?>
            <li class="hover-menu" title="欢迎你，"><a href="index.php?user-space-<?php echo $user['uid']?>"><?php echo $user['username']?></a>
                <?php if($user['password']!='') { ?>
                <p>
                    <a href="index.php?user-profile">个人管理</a>
                    <?php if($adminlogin ) { ?><a href="index.php?admin_main">系统设置</a>
                    <?php } ?>
                    <a href="index.php?user-logout<?php echo $referer?>">退出</a>
                </p>
                <?php } ?>
            </li>
            <?php if($user['password']!='') { ?>
            <li><a href="<?php if($newpms[3]) { ?>
index.php?pms-box-inbox-system
<?php } else { ?>
index.php?pms
<?php } ?>" id="header-pms" class="h-msg">
	<?php if($newpms[0]) { ?>
		<i><?php echo $newpms[0]?></i>
	<?php } ?>
	消息</a></li>
            <?php } else { ?>
            <li><a href="index.php?user-login">待激活</a></li>
            <li class="bor_no"><a href="index.php?user-logout<?php echo $referer?>">退出</a></li>
            <?php } ?>
            <?php } ?>
            <li class="bor_no help"><a href="index.php?doc-innerlink-<?php echo urlencode('帮助')?>">帮助</a></li>
	</ul>
</header>

<form name="edit_doc" id="hdwiki_editor" class="jqeditor" method="post" enctype="multipart/form-data" action="<?php if($page_action == 'create') { ?>index.php?doc-create<?php } elseif($page_action == 'edit') { ?>index.php?doc-edit<?php } else { ?>index.php?doc-editsection<?php } ?>" name='editor' onsubmit="return check();">
	<input type="hidden" name='did' id='did' value="<?php echo $doc['did']?>" />
	<input type="hidden" name='section_id' value="<?php echo $doc['section_id']?>" />
	<input type="hidden" name='create_submit' value="1" />
	<input type="hidden" name='title' id='title' value="<?php echo $doc['title']?>" />
	<input type="hidden" name="category" value="<?php echo $doc['cid']?>"/>
    <?php echo csrf_field(); ?>
    
<div class="instrument">
	<div style="height:36px;margin:2px 0;">
		<div class="jqe-toolbar"></div>
	</div>
</div>
<section class="wrap">
<div id="editoring" class="editor_left size">
<a href="index.php?doc-view-<?php echo $doc['did']?>" target="_blank"><?php echo $doc['title']?></a> &nbsp; <em>您正在编辑</em>
</div>

<div id="summary" class="hd-box editor_left">
	<h2>摘要</h2>
	<div>
	<!--	<textarea rows="3" class="size" name='summary'><?php echo html_entity_decode($doc['summary']);?></textarea>-->
		<textarea rows="3" class="size" name='summary'><?php echo $doc['summary']?></textarea>
	</div>
</div>
<div id="text" class="hd-box editor_left">
	<h2>正文</h2>
	<textarea id="content" name="content" style="width:98%;height:400px;visibility:hidden;display:none;">
	<?php echo $doc['content']?>
	</textarea>
	<div class="jqe-content"></div>
</div>
<div id="tags" class="hd-box editor_left">
	<h2>标签</h2>
	<div>
	<input type="text" class="inp_txt" size="60" name='tags' value="<?php echo $doc['tag']?>" /> <br /><span class="gray">[多个标签使用分号"; ；"或空格隔开]</span>
	</div>
</div>
	<script>
		$('input[name=tags]').blur(function(){
			var obj = $('input[name=tags]');
			var flag = check_access(obj);
			console.log(flag);
			if(!flag){
				alert('请输入正常格式的词条标签！');
				return false;
			}
		})
		function check_access(obj){
			var min_array = ['cast', 'exec','show ','show/*','alter ','alter/*','create ','create/*','insert ','insert/*', 'select ','select/*','delete ','delete/*','update ', 'update/*','drop ','drop/*','truncate ','truncate/*','replace ','replace/*','union ','union/*','execute', 'from', 'declare', 'varchar', 'script', 'iframe', ';', '0x', '<', '>', '\\', '%27', '%22', '(', ')'];
			var coun = min_array.length;
			var input_value = obj.val();
			for(var i = 0;i<coun;i++) {
				if (input_value.indexOf(min_array[i]) > -1) {
					obj.val('');
					return false;
				}
			}
			return true;
		}


	</script>
<?php if($setting['base_isreferences'] !== '0' ) { ?>
<div id="reference" class="hd-box editor_left">
	<h2>参考资料</h2>
	<dl class="f8" id="0" style="display:none;">
		<dt><strong name="order">[0]</strong><span></span></dt>
		<dd name="url"></dd>
		<dd name="edit">
			<a href="javascript:;" onclick="docReference.edit(this);return false;">编辑</a> 
			| <a name="remove" href="javascript:;" onclick="docReference.remove(this);return false;">删除</a>
		</dd>
	</dl>
	<?php foreach((array)$referencelist as $i=>$ref) {?>
	<dl class="f8" id="<?php echo $ref['id']?>">
		<dt><strong name="order">[<?php echo ($i+1)?>]</strong><span><?php echo $ref['name']?></span></dt>
		<dd name="url"><?php echo $ref['url']?></dd>
		<dd name="edit">
			<a href="javascript:;" onclick="docReference.edit(this);return false;">编辑</a> 
			| <a name="remove" href="javascript:;" onclick="docReference.remove(this);return false;">删除</a>
		</dd>
	</dl>
	<?php }?>
	
	<dl id="edit_reference" style="display:none">
		<dt class="mar-bottom-10"><strong>名称:</strong>
			<input id="editrefrencename" type="text" class="inp_txt" size="60"/>
			<span class="red" id="refrencenamespan"></span>
		</dt>
		<dd class="size black mar-bottom-10"><strong>网址:</strong>
			<input id="editrefrenceurl" type="text" class="inp_txt" size="60"/>
			<span class="red" id="refrenceurlspan"></span>
		</dd>
		
		<dd name="verifycode" class="size black mar-bottom-10" style="display:none"><strong>验证码:</strong>
			<input name="code" id="editrefrencecode" type="text" class="inp_txt" size="10" maxlength="4"/>
			<span name="img" style="display:none"><img id="verifycode2" src="./js/hdeditor/skins/spacer.gif"/> <a href="javascript:docReference.updateVerifyCode();">看不清图片</a></span>
			<span name="tip"></span>
			<span class="red" id="refrencecodespan"></span>
		</dd>
		
		<dd>
			<a id="save_1" class="btn_inp blue" href="javascript:;" onclick="docReference.save();return false;">保存</a>
			<span id="save_0" class="btn_inp disabled" style="display:none">保存</span>
			<a href="javascript:;" class="btn_inp" onclick="docReference.reset();return false;">重置</a>
		</dd>
	</dl>
</div>
<?php } ?>
<?php if($page_action != 'create') { ?>
<div id="reason" class="hd-box editor_left">
	<h2>修改原因<span class="red">[必填]</span></h2>
	<div>
	<label><input type="checkbox" value="全文编辑" name="editreason[]"/>全文编辑</label>
	<label><input type="checkbox" value="新增内容" name="editreason[]"/>新增内容</label>
	<label><input type="checkbox" value="修正错误" name="editreason[]"/>修正错误</label>
	<label><input type="checkbox" value="新增图片" name="editreason[]"/>新增图片</label>
	<label><input type="checkbox" value="设置目录" name="editreason[]"/>设置目录</label>
	<label><input type="checkbox" value="增加内链" name="editreason[]"/>增加内链</label>
	<label><input type="checkbox" value="调整页面" name="editreason[]"/>调整页面</label>
	<br /><br />其他原因<br />
	<textarea rows="2" name="editreason[]" id="editreason" class="inp_txt"></textarea>
	</div>
</div>
<?php } ?>

<?php if(($doc_verification_edit_code && ($page_action == 'edit'||$page_action == 'editsection' )) || (!empty($doc_verification_create_code) && $page_action == 'create')) { ?>
<div id="doc_verification_code" class="hd-box editor_left">
	<h2>验证码<span class="red">[必填]</span></h2>
	<div>
	<input name="code" type="text" class="inp_txt" size="10" maxlength="4"/>
	<span name="img" style="display:none"><img id="verifycode" src="./js/hdeditor/skins/spacer.gif"/> <a href="javascript:updateverifycode();">看不清图片</a></span>
	<span name="tip"></span>
	</div>
</div>
<?php } ?>

<div class="pushbutton">
	<input name="publishsubmit" class="btn_inp blue" type="submit" value="发布" />
	<input type="button" class="btn_inp" value="退出" onclick="abort();"/>
</div>
</section>
</form>

<div id="editor_right" class="">
<div id="editor_mulu">
	<ul class="editor_mulu_nav"><li class="on" onclick="this.className='on';this.nextSibling.className='';document.getElementById('doc-catalog').style.display='block';document.getElementById('right-prompt').style.display='none';">词条目录</li><li onclick="this.className='on';this.previousSibling.className='';document.getElementById('doc-catalog').style.display='none';document.getElementById('right-prompt').style.display='block';" class="">自动保存</li></ul>
	<div id="doc-catalog" class="catalog" style="display: block;">
		<ul id="catagoryList">
			<li><a href="javascript:void(0)" catalogkey="1" class="bold" title="简介" alt="简介">简介</a></li>
		</ul>
        <br>
        <br>
	</div>
	<div id="right-prompt" class="right-prompt" style="display: none;">
		<ul>
		<?php if($page_action != 'editsection') { ?>
		<li><input name="autosave" type="checkbox" id="autosave" onclick="isAutoSave()" checked="checked"/>自动保存</li>
		<?php } ?>
		<li id='AutoSaveStatus'></li>
		<li id="editor_tip"></li>
		<li class="help"><a href="http://service.baike.com/article-940349.html" target="_blank">了解更多百科编辑技巧</a></li>
		</ul>
		<p><a href="<?php echo WIKI_URL?>" target="_blank"><img src="style/default/logo.gif" width='168px' height='54px'/></a></p>
	</div>
</div>
</div>

<div style="display:none">
<form method="post" id="previewdocform" target="_blank" action="index.php?doc-edit-<?php echo $doc['did']?>">
<textarea name="content"></textarea>
<input name="predoctitle" type="hidden" value="<?php echo $doc['title']?>"/>
</form>
</div>
<style>
.jqe-plugin-HdImage .uploadBoxTop span.last_span {display:none;}
</style>
<script type="text/javascript">
<?php if($filter_external ) { ?>
var g_filterExternal = 1;
<?php } else { ?>
var g_filterExternal = 0;
<?php } ?>
<?php if(($doc_verification_edit_code && ($page_action == 'edit'||$page_action == 'editsection' )) || ($doc_verification_create_code && $page_action == 'create')) { ?>
var g_check_code = "1";
<?php } else { ?>
var g_check_code = "0";
<?php } ?>
var g_page_action = "<?php echo $page_action?>";
var g_logout_editor = "index.php?doc-unseteditlock-<?php echo $doc['did']?>-<?php echo $page_action?>";
var g_docid = "<?php echo $doc['did']?>";
var savetime=<?php echo $savetime?>;
var g_content_md5='';

var g_img_big="<?php echo $g_img_big?>";
var g_img_small="<?php echo $g_img_small?>";
var jqe_static_url = './js/jqeditor';
</script>
<script type="text/javascript" src="./js/jqeditor/jqeditor-hdwiki-2.1.7.min.js"></script>
<script type="text/javascript" src="./js/jqeditor/hdwiki.js"></script>
<script type="text/javascript">
isAutoSave();
</script>
</body>
</html>
