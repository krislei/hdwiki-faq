<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<script type="text/javascript">
var indexlogin = 0;
var loginTip1 = '用户名不能为空!';
var loginTip2 = '<?php echo $loginTip2?>';
var loginTip3 = '用户不存在!';
var name_max_length = <?php echo $name_max_length?>;
var name_min_length = <?php echo $name_min_length?>;
var editPassTip1 = '密码不能为空，最多32位!';
var loginTip4 = '不匹配!';
var checkcode = '<?php echo $checkcode?>';
</script> 
<style>
#advlist_0 {
	display:none;
}
</style>
<section class="wrap clearfix register">
	<div class="reg_main">
	<h2 class="cblue">欢迎登录HDwiki账号</h2>
	<form name="box-login" action="index.php?user-login" method="post" onsubmit="return docheck();">
	<?php echo csrf_field(); ?>
	<ul>
		<li class="inpt-name"><span>用户名：</span>	<input name="username" id="username"  tabindex="3" type="text" class="inp_txt" onblur="check_username()" maxlength="32" placeholder="用户名" /><label id="checkusername"><?php echo $loginTip2?></label></li>
		<li class="inpt-pwd"><span>密码：</span>	<input name="password" id="password"  tabindex="4"  type="password" class="inp_txt" onblur="check_passwd()" maxlength="32" placeholder="密码" /><label id="checkpassword">*字母区分大小写，最多32位。</label></li>
		<?php if($checkcode != "3") { ?>
		<li class="yzm"><span>验证码</span><input name="code" id="code"  tabindex="5" type="text" class="inp_txt" onblur="check_code()" maxlength="4" />
		<label class="yzm-img"><img id="verifycode" src="index.php?user-code" onclick="updateverifycode();" /></label><a class="clink" href="javascript:updateverifycode();">看不清图片</a>
		<label id="checkcode"></label></li>		
		<?php } ?>
		<li class="a-r cblue"><a href="index.php?user-getpass" class="clink" target="_blank">找回密码</a> | <a href="index.php?user-register" target="_blank" class="clink">注册</a></li>
		<li><input name="submit" type="submit" value="登录" class="btn_inp blue" tabindex="6" /></li>
	</ul>
	</form>
	</div>
	<figure class="regpic"><img src="style/default/hdwiki-regpic.png"></figure>
	<dl class="col-dl">
		<dt class="cblue f18">想把自己的知识分享给所有人么？</dt>
		<dd class="gray9">在这里您可以得到其他朋友共享的知识，也可以把你的知识贡献给其他需要帮助的朋友们！</dd>
	</dl>
	<dl class="col-dl">
		<dt class="cblue f18">创建自己的百科词条！</dt>
		<dd class="gray9">这里不仅能让你创建自己想创建的词条，还可以通过编辑更多词条认识和帮助更多的朋友。</dd>
	</dl>
	<dl class="col-dl">
		<dt class="cblue f18">多套风格模板供您选择！</dt>
		<dd class="gray9">提供多套实用模板供您选择。体验视觉盛宴，享受饕餮大餐。</dd>
	</dl>
</section>
<?php include $this->gettpl('footer');?>