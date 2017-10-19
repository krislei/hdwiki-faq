<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php if(isset($ajax) ) { ?>
<?php ob_end_clean();?>
<?php ob_start();?>
<?php @header("Expires: -1");?>
<?php @header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);?>
<?php @header("Pragma: no-cache");?>
<?php @header("Content-type: application/xml; charset=$charset");?>
<?php echo '<?xml version="1.0" encoding="'.$charset.'"?>';?>
<root><![CDATA[<?php echo $message?>]]></root>
<?php } else { ?>
<?php include $this->gettpl('header');?>
<section class="wrap">
<div class="columns success">
 	<dl>
 	<dt class="f20 fn"><i class="ico-warnn"></i>提示信息</dt>
 	<dd><?php echo $message?></dd>
 	<?php if($redirect == 'BACK') { ?>
	<dd><a href="javascript:void(0);" class="clink" onclick="history.back();return false;">点击这里返回</a></dd>
	<?php } elseif($redirect) { ?>
	<dd>页面将在3秒后自动跳转到下一页，<a class="clink" href="<?php echo $redirect?>" >立即跳转</a></dd>
	<script type="text/javascript">
	function redirect(url, time) {
		setTimeout("window.location='" + url + "'", time * 1000);
	}
	redirect('<?php echo $redirect?>', 3);
	</script>
	<?php } ?>
 	</dl>
</div>
</section>
<?php include $this->gettpl('footer');?>
<?php } ?>