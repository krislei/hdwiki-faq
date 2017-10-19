<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
    <nav class="column bot-navi" id="footer1">
        <p class="body">
            <?php if(!empty($channellist[1])) { ?>
                <?php foreach((array)$channellist[1] as $channel) {?>
                    <a href="<?php echo $channel['url']?>"><?php echo $channel['name']?></a>
                <?php } ?>
            <?php } ?>
            <?php if(!empty($channellist[3])) { ?>
                <?php foreach((array)$channellist[3] as $channel) {?>
                    <a href="<?php echo $channel['url']?>"><?php echo $channel['name']?></a>
                <?php } ?>
            <?php } ?>

            <?php foreach((array)$pluginlist as $plugin) {?>
                <?php if($plugin['type']) { ?>
                    <a href="index.php?plugin-<?php echo $plugin['identifier']?>"><?php echo $plugin['name']?></a>
                <?php } ?>
            <?php } ?>
        </p>
    </nav>
    <footer class="footer"  id="footer2">
        <p>Powered by HDwiki6.0 &copy; 2017 HDwiki Licensed</p>
    </footer>
</div>
<div class="pop-search" style="display:none;">
    <form class="search-form" method="post" action="index.php?search-kw" id="search-form">
        <label><i class="btn-sear" id="sear_search"></i><input name="searchtext" id="keyword_search" type="text" value="<?php if(isset($searchtext)) { ?><?php echo $searchtext?><?php } ?>"><i class="cleartxt"></i></label>
        <button onclick="document.querySelector('.pop-search').style.display='none';return false;">取消</button>
    </form>
    <?php if(isset($indexcache['hotdocs'])) { ?>
   <!-- <div class="column">
        <div class="body">
            <h3>热门搜索：</h3>
            <p class="doc-list">
                &lt;!&ndash;<?php foreach((array)$indexcache['hotdocs'] as $key=>$hotdoc) {?>&ndash;&gt;
                &lt;!&ndash;<?php if($key < 4) { ?>&ndash;&gt;
                <a class="gray6" href="index.php?doc-view-<?php echo $hotdoc['did']?>"><?php echo $hotdoc['title']?></a>
                &lt;!&ndash;<?php } ?>&ndash;&gt;
                &lt;!&ndash;<?php }?>&ndash;&gt;
            </p>
        </div>
    </div>-->
    <?php } ?>
</div>

<script>
    $('#sear_search').click(function(){
        var obj = $('input[name=searchtext]');
        var flag = check_access(obj);
        if(flag){
            $('#search-form').submit();
        }else{
            alert('请输入正常格式的词条名称！');
            return false;
        }
    })
    function check_access(obj){
        var min_array = ['cast', 'exec','show ','show/*','alter ','alter/*','create ','create/*','insert ','insert/*', 'select ','select/*','delete ','delete/*','update ', 'update/*','drop ','drop/*','truncate ','truncate/*','replace ','replace/*','union ','union/*','execute', 'from', 'declare', 'varchar', 'script', 'iframe', ';', '0x', '<', '>', '\\', '%27', '%22', '(', ')'];
        var coun = min_array.length;
        var input_value = obj.val();
        if(input_value){
            for(var i = 0;i<coun;i++) {
                if (input_value.indexOf(min_array[i]) > -1) {
                    obj.val('');
                    return false;
                }
            }
            return true;
        }else{
            return false;
        }
    }
    $('.cleartxt').click(function(){
        var obj = $('.cleartxt').prev();
        $(obj).val('');
    })
    $("#keyword_search").keydown(function(evt){
        var evt = window.event?window.event:evt;
        if(evt.keyCode ==13){
            $("#sear_search").trigger("click");
        }
    });
</script>
</body>
</html>