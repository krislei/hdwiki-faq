<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('admin_header');?>
<script type="text/javascript">
function clearcache(){
	window.location="index.php?admin_setting-removecache";
}
function checkcachedata(){
	/*
	var cachedata=/^[0-9]\d*?$/;
	if(!cachedata.test(document.cacheset.<?php echo $cache['variable']?>_value.value))
	{
		alert("index_cache_time填写的不是数字!");
		cacheset.index_cache_time.focus();
		return false;
	}
	*/
	document.cacheset.action="index.php?admin_setting-renewcache";
	document.cacheset.submit();
}
</script>
<p class="map">全局：基本设置</p>
<p class="sec_nav">基本设置：<a href="index.php?admin_channel"> <span>频道管理</span></a> <a href="index.php?admin_setting-cache" class="on"> <span>缓存设置</span></a> <a href="index.php?admin_setting-seo" ><span>SEO设置</span></a> <a href="index.php?admin_setting-code" ><span>验证码</span></a> <a href="index.php?admin_setting-time" ><span>时间设置</span></a> <a href="index.php?admin_setting-cookie" ><span>COOKIE设置</span></a> <a href="index.php?admin_setting-credit" ><span>经验金币设置</span></a> <a href="index.php?admin_setting-logo" ><span>LOGO设置</span></a></p>
<h3 class="col-h3">缓存设置</h3>
<form name="cacheset"  method="post">
	<table class="table">
		<tr>
			<td width="100px;"><span>缓存名称</span></td>
			<td width="100px;"><span>缓存描述</span></td>
			<td><span>缓存时间(秒)</span></td>
		</tr>
		<!-- <?php if($cachelist=="") { ?> -->
		<tr>
			<td colspan="3">暂无缓存设置</td>
		</tr>
		<!-- <?php } ?> -->
		<!-- <?php if($cachelist!="") { ?> -->
		<!-- <?php foreach((array)$cachelist as $cache) {?> -->
		<tr>
			<td><?php echo $cache['cache_name']?><input type="hidden" name="<?php echo $cache?>[]" value = "<?php echo $cache['variable']?>" /></td>
			<td><?php echo $cache['describ']?></td>
			<td><input class="inp_txt" name="<?php echo $cache['variable']?>_value" type="text" value="<?php echo $cache['value']?>" maxlength="5" /></td>
		</tr>
		<!-- <?php } ?> -->
		<tr>
			<td colspan="3">
				<input class="inp_btn"  type="button" name="cachesetsubmit" value="保存设置" onclick="checkcachedata();"/>&nbsp;&nbsp;
				<input class="inp_btn"  type="button" name="cacheclear" value="清空缓存" onclick="clearcache();"/>
			</td>
		</tr>
		<!-- <?php } ?> -->
	</table>
</form>
<?php include $this->gettpl('admin_footer');?>