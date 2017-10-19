<?php
return array (
  1 => 
  array (
    'config' => 
    array (
      'num' => '',
      'style' => '',
    ),
    'list' => 
    array (
      0 => 
      array (
        'did' => '7',
        'title' => '服务部内部SVN使用说明',
        'tag' => 'svn',
        'summary' => '服务部SVN存放的文件概览：1.已交接项目2.服务部内部文件3',
        'image' => 'style/default/recommend_l.jpg',
        'time' => '05-18 15:29',
        'displayorder' => '0',
        'type' => '2',
        'shorttitle' => '服务部内部SVN使用说明...',
        'rawtitle' => '服务部内部SVN使用说明',
        'simage' => 'style/default/s_f_recommend_l.jpg',
      ),
      1 => 
      array (
        'did' => '8',
        'title' => '使用yum快速部署Oracle安装环境(11g)',
        'tag' => 'oracle安装',
        'summary' => '基于Linux安装过Oracle的 童鞋们都应该清楚,安装Or',
        'image' => 'style/default/recommend_l.jpg',
        'time' => '05-18 15:29',
        'displayorder' => '0',
        'type' => '2',
        'shorttitle' => '使用yum快速部署Orac...',
        'rawtitle' => '使用yum快速部署Oracle安装环境(11g)',
        'simage' => 'style/default/s_f_recommend_l.jpg',
      ),
      2 => 
      array (
        'did' => '16',
        'title' => '部署四大平台sql语句',
        'tag' => '',
        'summary' => 'select * from dba_users;CREATE',
        'image' => 'style/default/recommend_l.jpg',
        'time' => '05-18 15:28',
        'displayorder' => '0',
        'type' => '2',
        'shorttitle' => '部署四大平台sql语句...',
        'rawtitle' => '部署四大平台sql语句',
        'simage' => 'style/default/s_f_recommend_l.jpg',
      ),
    ),
  ),
  2 => 
  array (
    'config' => 
    array (
      'style' => '',
    ),
    'list' => 
    array (
      0 => 
      array (
        'did' => '6',
        'title' => 'Linux轮询检测Tomcat项目可用性',
        'tag' => '',
        'summary' => '撰写者：陈雷撰写日期：2017年1月4日撰写目的：应用此脚本在关键时刻使用，如四川旅游学院的UIA项目为老版本，其中有不定期假死的BUG，那么就可以使用此脚本轮询',
        'image' => 'style/default/recommend.jpg',
        'time' => '03-07 15:03',
        'displayorder' => '0',
        'type' => '3',
        'shorttitle' => 'Linux轮询检测Tomc...',
        'rawtitle' => 'Linux轮询检测Tomcat项目可用性',
        'simage' => 'style/default/s_f_recommend.jpg',
      ),
    ),
    'fistwonderdoc' => 
    array (
      'did' => '11',
      'title' => 'Oracle11g用EXP不能导出空表的解决方案',
      'tag' => 'oracle,oracle备份,exp备份',
      'summary' => '11G中有个新特性，当表无数据时，不分配segment，以节省空间解决方法：1、insert一行，再rollback就产生segment了。该方法是在在空表中插入',
      'image' => 'style/default/recommend.jpg',
      'time' => '03-07 15:03',
      'displayorder' => '0',
      'type' => '3',
      'shorttitle' => 'Oracle11g用EXP...',
      'rawtitle' => 'Oracle11g用EXP不能导出空表的解决方案',
      'simage' => 'style/default/s_f_recommend.jpg',
    ),
  ),
  6 => 
  array (
    'config' => 
    array (
      'num' => '',
      'style' => '',
    ),
    'doclist' => 
    array (
      0 => 
      array (
        'did' => '11',
        'cid' => '0',
        'letter' => 'O',
        'title' => 'Oracle11g用EXP不能导出空表的解决方案',
        'tag' => 'oracle备份',
        'summary' => 'Oracle11g用EXP不能导出空表的解决方案',
        'content' => '<p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">11G中有个新特性，当表无数据时，不分配segment，以节省空间</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">解决方法：</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;"><strong>1、insert一行，再rollback就产生segment了。</strong></p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">该方法是在在空表中插入数据，再删除，则产生segment。导出时则可导出空表。</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;"><strong>2、设置deferred_segment_creation 参数</strong></p><p style="margin-top: 0px; background-color: rgb(254, 254, 255); color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;"><strong><font face="Calibri">show parameter deferred_segment_creation&nbsp;<br /><br />NAME TYPE VALUE&nbsp;<br />------------------------------------ ----------- ------------------------------&nbsp;<br />deferred_segment_creation boolean TRUE&nbsp;<br />SQL&gt; alter system set deferred_segment_creation=false;&nbsp;<br /><br /></font><span style="font-family: 宋体;">系统已更改。</span><font face="Calibri"><br /><br />SQL&gt; show parameter deferred_segment_creation&nbsp;<br /><br />NAME TYPE VALUE&nbsp;<br />------------------------------------ ----------- ------------------------------&nbsp;<br />deferred_segment_creation boolean FALSE</font></strong></p><p style="margin-top: 0px; background-color: rgb(254, 254, 255); color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;"></p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">该参数值默认是TRUE，当改为FALSE时，无论是空表还是非空表，都分配segment。</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">需注意的是：该值设置后对以前导入的空表不产生作用，仍不能导出，只能对后面新增的表产生作用。如需导出之前的空表，只能用第一种方法。</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;"><br /></p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">先查询一下当前用户下的所有空表</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;"><b><span style="background-color: inherit; color: red; font-size: 12pt;"><font face="Calibri" style="background-color: inherit;">select table_name from user_tables where NUM_ROWS=0;</font></span></b><br /></p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;"><b>【现发现有部分表明明记录数为0却搜不出来】</b><br /></p><p style="margin-top: 0px; color: rgb(51, 51, 51); font-family: 微软雅黑, Tahoma, Verdana, 宋体; font-size: 15px;">在命令行执行以下存储过程以更新统计</p><p style="margin-top: 0px; color: rgb(51, 51, 51); font-family: 微软雅黑, Tahoma, Verdana, 宋体; font-size: 15px;">EXEC dbms_stats.gather_schema_stats(ownname=&gt;\'own username（单引号里面替换为用户名）\');</p><p style="margin-top: 0px; color: rgb(51, 51, 51); font-family: 微软雅黑, Tahoma, Verdana, 宋体; font-size: 15px;">EXEC dbms_stats.gather_schema_stats(ownname=&gt;\'yx_cdxg\');<br /></p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">用以下这句查找空表</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;"><strong>select \'alter table \'||table_name||\' allocate extent;\' from user_tables where num_rows=0</strong></p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;"><br /></p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">把查询结果导出，执行导出的语句</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">\'ALTERTABLE\'||TABLE_NAME||\'ALLOCATEEXTENT;\'<br />-----------------------------------------------------------<br />alter table AQ$_AQ$_MEM_MC_H allocate extent;<br />alter table AQ$_AQ$_MEM_MC_G allocate extent;<br />alter table AQ$_AQ$_MEM_MC_I allocate extent;<br />alter table AQ$_AQ_PROP_TABLE_T allocate extent;<br />alter table AQ$_AQ_PROP_TABLE_H allocate extent;<br />alter table AQ$_AQ_PROP_TABLE_G allocate extent;<br />alter table AQ$_AQ_PROP_TABLE_I allocate extent;<br />alter table AQ$_KUPC$DATAPUMP_QUETAB_T allocate extent;<br />alter table AQ$_KUPC$DATAPUMP_QUETAB_H allocate extent;<br />alter table AQ$_KUPC$DATAPUMP_QUETAB_G allocate extent;<br />alter table AQ$_KUPC$DATAPUMP_QUETAB_I allocate extent;</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">\'ALTERTABLE\'||TABLE_NAME||\'ALLOCATEEXTENT;\'<br />-----------------------------------------------------------<br />alter table AQ$_SYS$SERVICE_METRICS_TAB_T allocate extent;<br />alter table AQ$_SYS$SERVICE_METRICS_TAB_H allocate extent;<br />alter table AQ$_SYS$SERVICE_METRICS_TAB_G allocate extent;<br />alter table AQ$_SYS$SERVICE_METRICS_TAB_I allocate extent;</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">然后再执行</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">exp 用户名/密码@数据库名 file=/home/oracle/exp.dmp log=/home/oracle/exp_smsrun.log</p><p style="margin-top: 0px; color: rgb(85, 85, 85); font-family: 宋体, &quot;Arial Narrow&quot;, arial, serif;">成功！</p>',
        'author' => 'chenlei',
        'authorid' => '6',
        'time' => '03-07 14:41',
        'lastedit' => '07-21 17:54',
        'lasteditor' => 'admin',
        'lasteditorid' => '1',
        'views' => '11',
        'edits' => '2',
        'editions' => '2',
        'visible' => '1',
        'locked' => '0',
        'iscreate' => false,
        'rawtitle' => 'Oracle11g用EXP不能导出空表的解决方案',
        'shorttitle' => 'Oracle11g用EXP不能导出...',
        'category' => NULL,
        'img' => '',
      ),
      1 => 
      array (
        'did' => '7',
        'cid' => '0',
        'letter' => 'f',
        'title' => '服务部内部SVN使用说明',
        'tag' => 'svn',
        'summary' => '服务部SVN存放的文件概览：1.已交接项目2.服务部内部文件3.软件工具包1. 安装过程：(软件下载地址：http://192.168.0.254:8080/svn/packages/SVN)&amp;nbsp',
        'content' => '<p style="margin-top: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;">服务部SVN存放的文件概览：</p><p style="margin-top: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;">1.已交接项目</p><p style="margin-top: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;">2.服务部内部文件</p><p style="margin-top: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;">3.软件工具包</p><p style="margin-top: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;">1. 安装过程：(软件下载地址：http://192.168.1.253:8080/svn/packages/SVN)</p><div style="margin: 0px; padding: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;">&nbsp; &nbsp; &nbsp; 按图1、2安装（分别是客户端、中文补丁包），下一步下一步就行了，记得安装完后重启的电脑</div><div style="margin: 0px; padding: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;">2.更改语言：</div><div style="margin: 0px; padding: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;"><span style="font-size: 10.5pt; line-height: 1.5; background-color: window;">&nbsp; &nbsp;在桌面空白处右键选择TortoiseSVN---设置---语言-选择中文，完后关闭软件即可生效。</span></div><div style="margin: 0px; padding: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;">3.访问地址：</div><div style="margin: 0px; padding: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;"><span style="font-size: 10.5pt; line-height: 1.5; background-color: window;">&nbsp; &nbsp; &nbsp;方式一：</span></div><div style="margin: 0px; padding: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;">&nbsp; &nbsp; &nbsp;<a target="_blank" href="http://192.168.0.254:8080/svn/items" class="" style="color: rgb(2, 104, 205); text-decoration: none; font-family: &quot;&quot;; font-size: 10.5pt; line-height: 1.5; background-color: window;">http://192.168.1.253:8080/svn/items</a><span style="font-family: &quot;&quot;; font-size: 10.5pt; line-height: 1.5; background-color: window;">&nbsp; &nbsp; &nbsp;</span><span style="font-size: 10.5pt; line-height: 1.5; background-color: window;">&nbsp; &nbsp;实施部交付过来的项目资料</span></div><div style="margin: 0px; padding: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;"><span style="font-family: &quot;&quot;; font-size: 10.5pt; line-height: 1.5; background-color: window;">&nbsp; &nbsp;&nbsp;</span><span style="font-size: 10.5pt; line-height: 1.5; background-color: window;">&nbsp;</span><a target="_blank" href="http://192.168.0.254:8080/svn/items" class="" style="color: rgb(2, 104, 205); text-decoration: none; font-size: 10.5pt; font-family: &quot;&quot;; line-height: 1.5; background-color: window;">http://192.168.1.253:</a><a target="_blank" href="http://192.168.0.254:8080/svn/packages" style="color: rgb(2, 104, 205); text-decoration: none; font-family: &quot;&quot;; font-size: 10.5pt; line-height: 1.5; background-color: window;">8080/svn/packages</a><span style="font-family: &quot;&quot;; font-size: 10.5pt; line-height: 1.5; background-color: window;">&nbsp;&nbsp;</span><span style="font-size: 10.5pt; line-height: 1.5; background-color: window;">平台测试包、工作需要用到的各种软件包<br /></span></div><div style="margin: 0px; padding: 0px; font-family: verdana, SimSun, Arial, Helvetica, sans-serif;"><span style="font-size: 10.5pt; line-height: 1.5; background-color: window;">&nbsp; &nbsp;&nbsp;</span><a target="_blank" href="http://192.168.0.254:8080/svn/items" class="" style="color: rgb(2, 104, 205); text-decoration: none; font-size: 10.5pt; font-family: &quot;&quot;; line-height: 1.5; background-color: window;">http://192.168.1.253:</a><a target="_blank" href="http://192.168.0.254:8080/svn/packages" style="color: rgb(2, 104, 205); text-decoration: none; font-family: &quot;&quot;; font-size: 10.5pt; line-height: 1.5; background-color: window;">8080/svn/</a>documents &nbsp;本部门技术文档、客户资料等等</div>',
        'author' => 'chenlei',
        'authorid' => '6',
        'time' => '03-07 14:16',
        'lastedit' => '07-21 13:37',
        'lasteditor' => 'admin',
        'lasteditorid' => '1',
        'views' => '5',
        'edits' => '1',
        'editions' => '1',
        'visible' => '1',
        'locked' => '0',
        'iscreate' => false,
        'rawtitle' => '服务部内部SVN使用说明',
        'shorttitle' => '服务部内部SVN使用说明...',
        'category' => NULL,
        'img' => '',
      ),
      2 => 
      array (
        'did' => '19',
        'cid' => '0',
        'letter' => '',
        'title' => 'DCI报错：当读共享文件时发生错误(继续加载)的处理办法',
        'tag' => 'DCI;',
        'summary' => 'DCI平台报错：当读共享文件时发生错误/继续加载/的解决办法',
        'content' => '<p>日期：2017年7月13日</p><p>作者：陈雷</p><p>我们平常用DCI设计器（3.X版本以上），偶尔会遇到报错信息如<font color="#ff0000">当读共享文件时发生错误/继续加载/（如下图），</font>出现这个报错的原因是DCI一直没有解决的BUG，在新版本V3.4.2还未发现这个问题。处理办法是删除系统</p><div class="img img_c" style="width:300px;" id="wrap-img-0"><a title="DCI报错" href="uploads/201707/1499993659WxhHMfJ7.png" target="_blank"><img title="DCI报错" alt="DCI报错" src="uploads/201707/1499993659WxhHMfJ7_s.png" id="img-0" /></a></div><div class="img img_c" style="width:300px;" id="wrap-img-0"><br /><strong>DCI报错</strong></div><div class="img img_c" style="width:300px;" id="wrap-img-1"><a title="删除图中目录" href="uploads/201707/1499993733dw6Y9T5u.png" target="_blank"><img title="删除图中目录" alt="删除图中目录" src="uploads/201707/1499993733dw6Y9T5u_s.png" id="img-1" /></a><strong>删除图中目录</strong></div><p><br /></p><p>注：3.0一下的DCI版本如2.5是没有共享功能，所以不会出现此问题。</p>',
        'author' => 'chenlei',
        'authorid' => '6',
        'time' => '07-13 14:50',
        'lastedit' => '07-21 13:33',
        'lasteditor' => 'chenlei',
        'lasteditorid' => '6',
        'views' => '4',
        'edits' => '0',
        'editions' => '0',
        'visible' => '1',
        'locked' => '0',
        'iscreate' => false,
        'rawtitle' => 'DCI报错：当读共享文件时发生错误(继续加载)的处理办法',
        'shorttitle' => 'DCI报错：当读共享文件时发生错误...',
        'category' => NULL,
        'img' => 'uploads/201707/1499993659WxhHMfJ7_s.png',
      ),
      3 => 
      array (
        'did' => '20',
        'cid' => '0',
        'letter' => 'j',
        'title' => '教务处角色导出EXCLE数据的字段修改',
        'tag' => '',
        'summary' => '教务处角色导出EXCLE数据的字段修改',
        'content' => '<p>作者：陈雷</p><p>日期：2017年7月21日</p><p>问题场景：成都师范学院--迎新系统--教务处角色导出EXCLE数据的字段修改（教务处当前导出的数据没有考生类型的字段，学校老师要求增加该数据）</p><p>解决办法：<span style="color: rgb(61, 69, 76); font-family: &quot;helvetica neue&quot;, helvetica, arial, sans-serif;">修改迎新系统视图(view_jwc_export),添加需要导出的字段(增加select查询字段即可)，如下是未修改的视图：</span></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">create or replace view view_jwc_export as</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">select xs.stuid as 学号,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.xm) as 姓名,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.xbmc) as 性别,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.mzmc) as 民族,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.zzmmmc) as 政治面貌,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.csny) as 出生日期,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.sfzh) as 身份证号,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.ksh) as 考生号,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.zxmc) as 毕业中学,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.cj) as 成绩,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.yycj) as 英语成绩,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.cc) as 层次,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.xymc) as 院系,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.zymc) as 录取专业名称,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.jwzymc) as 教务专业名称,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.zyfxmc) as 专业方向名称,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.zyfxm) as 专业方向码,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.zydm) as 专业代码,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.bjmc) as 班级名称,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.bjdm) as 行政码代码,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.zynf) as 年级,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.xz) as 学制,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.lxdh) as 联系电话,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.jtdz) as 家庭地址,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.yzbm) as 邮政编码,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">case when(max(xs.extend_5) = 1) then \'是\' else \'否\' end &nbsp;as 是否在校,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">case when(max(xs.extend_4) = 0) then \'否\' else \'是\' end &nbsp;as 是否注册,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.kslbmc) as 考生类别,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.klmc) as 科类,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.extend_10) as 免师服务地,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">case when (max(decode(st.stepid,31054,st.stepstatus,0)) = 3) then \'是\' else \'否\' end as 系院是否报到, --提交档案</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">case when (max(decode(st.stepid,31055,st.stepstatus,0)) = 3) then \'是\' else \'否\' end as 是否缴费, --是否缴费</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">max(xs.bz) as 备注</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">from (select a.id,a.stuid, a.xm, a.xbmc, a.mzmc, a.zzmmmc, a.csny, &nbsp;a.sfzh, a.ksh, a.zxmc, a.cj,a.yycj,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">&nbsp; a.cc, a.xymc, a.zymc, c.jwzymc, c.zyfxmc, c.zyfxm, c.zydm, &nbsp;b.bjmc, b.bjdm, c.zynf,</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">&nbsp; b.xz, &nbsp;a.lxdh, a.jtdz, a.yzbm, a.extend_5, a.extend_4,a.extend_10, a.kslbmc, a.klmc, u.userid,a.bz，</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">&nbsp; from yx_student a, yx_bj b,yx_zy c,ut_users u</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">&nbsp; where a.bjid = b.id(+) and b.zyid = c.id(+) and to_char(a.stuid) = u.loginid(+)) xs,lx_studentstepstatus st</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">&nbsp;where xs.userid = st.extuserid(+)</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">&nbsp;group by xs.xbmc,xs.zymc,xs.stuid,xs.id</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">&nbsp;order by xs.id</font></p><p><font color="#3d454c" face="helvetica neue, helvetica, arial, sans-serif">;</font></p><p><br /></p><p><br /></p><p>------------------------------------------------------------------华丽分割线-----------------------------------------------------------------------------------</p><p><br /></p><p>以下是修改后的视图，修改处已经用红色字体标明：</p><p>create or replace view view_jwc_export as</p><p>select xs.stuid as 学号,</p><p>max(xs.xm) as 姓名,</p><p>max(xs.xbmc) as 性别,</p><p>max(xs.mzmc) as 民族,</p><p>max(xs.zzmmmc) as 政治面貌,</p><p>max(xs.csny) as 出生日期,</p><p>max(xs.sfzh) as 身份证号,</p><p>max(xs.ksh) as 考生号,</p><p>max(xs.zxmc) as 毕业中学,</p><p>max(xs.cj) as 成绩,</p><p>max(xs.yycj) as 英语成绩,</p><p>max(xs.cc) as 层次,</p><p>max(xs.xymc) as 院系,</p><p>max(xs.zymc) as 录取专业名称,</p><p>max(xs.jwzymc) as 教务专业名称,</p><p>max(xs.zyfxmc) as 专业方向名称,</p><p>max(xs.zyfxm) as 专业方向码,</p><p>max(xs.zydm) as 专业代码,</p><p>max(xs.bjmc) as 班级名称,</p><p><font color="#ff0000">max(xs.LQFSMC) as 录取方式,</font></p><p>max(xs.KSZT) as 考生状态,</p><p>max(xs.bjdm) as 行政码代码,</p><p>max(xs.zynf) as 年级,</p><p>max(xs.xz) as 学制,</p><p>max(xs.lxdh) as 联系电话,</p><p>max(xs.jtdz) as 家庭地址,</p><p>max(xs.yzbm) as 邮政编码,</p><p>case when(max(xs.extend_5) = 1) then \'是\' else \'否\' end &nbsp;as 是否在校,</p><p>case when(max(xs.extend_4) = 0) then \'否\' else \'是\' end &nbsp;as 是否注册,</p><p><font color="#ff0000">max(xs.kslbmc) as 考生类别,</font></p><p><font color="#ff0000">max(xs.KSLXMC) as 考生类型,</font></p><p>max(xs.klmc) as 科类,</p><p>max(xs.extend_10) as 免师服务地,</p><p>case when (max(decode(st.stepid,31054,st.stepstatus,0)) = 3) then \'是\' else \'否\' end as 系院是否报到, --提交档案</p><p>case when (max(decode(st.stepid,31055,st.stepstatus,0)) = 3) then \'是\' else \'否\' end as 是否缴费, --是否缴费</p><p>max(xs.bz) as 备注</p><p>from (select a.id,a.stuid, a.xm, a.xbmc, a.mzmc, a.zzmmmc, a.csny, &nbsp;a.sfzh, a.ksh, a.zxmc, a.cj,a.yycj,</p><p>&nbsp; a.cc, a.xymc, a.zymc, c.jwzymc, c.zyfxmc, c.zyfxm, c.zydm, &nbsp;b.bjmc, b.bjdm, c.zynf,</p><p>&nbsp; b.xz, &nbsp;a.lxdh, a.jtdz, a.yzbm, a.extend_5, a.extend_4,a.extend_10, a.kslbmc, a.klmc, u.userid,a.bz,<font color="#ff0000">a.LQFSMC,a.KSZT,a.KSLXMC</font></p><p>&nbsp; from yx_student a, yx_bj b,yx_zy c,ut_users u</p><p>&nbsp; where a.bjid = b.id(+) and b.zyid = c.id(+) and to_char(a.stuid) = u.loginid(+)) xs,lx_studentstepstatus st</p><p>&nbsp;where xs.userid = st.extuserid(+)</p><p>&nbsp;group by xs.xbmc,xs.zymc,xs.stuid,xs.id</p><p>&nbsp;order by xs.id;</p><div><br /></div>',
        'author' => 'chenlei',
        'authorid' => '6',
        'time' => '07-21 13:32',
        'lastedit' => '07-21 13:32',
        'lasteditor' => 'chenlei',
        'lasteditorid' => '6',
        'views' => '2',
        'edits' => '0',
        'editions' => '0',
        'visible' => '1',
        'locked' => '0',
        'iscreate' => true,
        'rawtitle' => '教务处角色导出EXCLE数据的字段修改',
        'shorttitle' => '教务处角色导出EXCLE数据的字段...',
        'category' => NULL,
        'img' => '',
      ),
      4 => 
      array (
        'did' => '18',
        'cid' => '0',
        'letter' => 's',
        'title' => '升级Linux OpenSSH版本',
        'tag' => 'ssh',
        'summary' => '升级openssh',
        'content' => '<p>撰写人：陈雷</p><p>撰写日期：2017年7月7日</p><p>前言：公司客户的项目服务器被扫描出openssh工具有漏洞，需要进行升级，以下是升级过程：</p><p>1.检测之前安装的包（openssl和openssh同时更新）</p><p># rpm -qa | egrep openssl openssh</p><p>openssl-0.9.8e-12.el5_4.6<br />openssh-4.3p2-41.el5<br />openssh-server-4.3p2-41.el5<br />openssh-clients-4.3p2-41.el5<br />openssh-askpass-4.3p2-41.el5</p><p>2.卸载openssh的rpm安装包（备注：此处未卸载ssl安装包）；</p><p>#rpm -e `rpm -qa | grep openssh`</p><p>3.源码安装openssh(最新版openssh下载地址：)</p><p>#tar xzvf openssh-6.0p1.tar.gz</p><p>#cd&nbsp; openssh-6.0p1</p><p>#./configure --prefix=/usr/local/openssh --sysconfdir=/etc/ssh --with-pam --with-ssl-dir=/usr/local/openssl --with-md5-passwords --mandir=/usr/share/man --with-zlib=/usr/local/zlib</p><p># make &amp;&amp; make install</p><p>4.修改相关配置文件</p><p># cd&nbsp; openssh-6.0p1</p><p># cp -p /contrib/redhat/sshd.init /etc/init.d/sshd（备注：此处contrib路径为解压后的安装包路径，比如：/tmp/openssh-6.0p1/contrib/redhat)</p><p># chmod u+x /etc/init.d/sshd （赋予可执行权限）</p><p># chkconfig --add sshd （设为开机启动服务）</p><p>#cp /usr/src/openssh5.9p1/sshd_config&nbsp; /etc/ssh/sshd_config（注：此步骤为拷贝旧版本ssh配置文件覆盖现有配置，如果新版本存在此配置文件，可跳过此步）</p><p># cp /usr/local/openssh/sbin/sshd&nbsp; /usr/sbin/sshd （拷贝可执行程序到PATH路径）</p><p>5.启动服务</p><p># service sshd start&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -----------断开连接!!!</p><p>Starting sshd:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [&nbsp; OK&nbsp; ]</p>',
        'author' => 'chenlei',
        'authorid' => '6',
        'time' => '07-07 09:52',
        'lastedit' => '07-07 09:52',
        'lasteditor' => 'chenlei',
        'lasteditorid' => '6',
        'views' => '12',
        'edits' => '0',
        'editions' => '0',
        'visible' => '1',
        'locked' => '0',
        'iscreate' => true,
        'rawtitle' => '升级Linux OpenSSH版本',
        'shorttitle' => '升级Linux OpenSSH版本',
        'category' => NULL,
        'img' => '',
      ),
      5 => 
      array (
        'did' => '17',
        'cid' => '0',
        'letter' => 'C',
        'title' => 'CentOS 6.X 安装 EPEL 源',
        'tag' => 'epel',
        'summary' => 'CentOS 6.X 自带的软件源可选的并不多，有时候要找到一个偏门一些的软件，用命令一搜怎么都没有源，考虑到使用软件源配合 yum 命令安装可以自动安装依赖，所以加一个新的软件源迫在眉睫。
	&amp;nb',
        'content' => '<p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">CentOS 6.X 自带的软件源可选的并不多，有时候要找到一个偏门一些的软件，用命令一搜怎么都没有源，考虑到使用软件源配合 yum 命令安装可以自动安装依赖，所以加一个新的软件源迫在眉睫。</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	考虑到同根性，如果安装第三方的源，最好找 Fedora 或者是 Red Hat 系的软件源，比如说 EPEL（Extra Packages for Enterprise Linux）这个源就非常不错，加上本身就是 Fedora 维护的，兼容性比较高，如果要求没有那么高的话，完全可以使用在生产环境中。</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	下面介绍下如何添加 EPEL 源：</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	首先我们确定系统版本，打开终端先提权至超级用户。</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><blockquote style="padding-left: 10px; max-width: 100%; border-left: 3px solid rgb(219, 219, 219); color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;"><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; box-sizing: border-box; clear: both; min-height: 1em; white-space: pre-wrap; font-size: 1em; line-height: 1.6; word-wrap: break-word !important; outline: none !important;">
		cat /etc/redhat-release</p></blockquote><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	如果显示的是 CentOS release 6.X (Final)，好下面跟着做。</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	使用下面的命令安装 EPEL 源：</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><blockquote style="padding-left: 10px; max-width: 100%; border-left: 3px solid rgb(219, 219, 219); color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;"><p style="margin-top: 0px; margin-bottom: 1.1em; max-width: 100%; box-sizing: border-box; clear: both; min-height: 1em; white-space: pre-wrap; font-size: 1em; line-height: 1.6; word-wrap: break-word !important; outline: none !important;">
		wget http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; box-sizing: border-box; clear: both; min-height: 1em; white-space: pre-wrap; font-size: 1em; line-height: 1.6; word-wrap: break-word !important; outline: none !important;">
		rpm -Uvh epel-release-6-8.noarch.rpm</p></blockquote><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	这时候如果没错的话，会出现下面这一段：</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	「Cannot retrieve metalink for repository: epel. Please verify its path and try again」</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	这就需要修改 epel.repo 文件，输入以下命令：</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><blockquote style="padding-left: 10px; max-width: 100%; border-left: 3px solid rgb(219, 219, 219); color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;"><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; box-sizing: border-box; clear: both; min-height: 1em; white-space: pre-wrap; font-size: 1em; line-height: 1.6; word-wrap: break-word !important; outline: none !important;">
		vi /etc/yum.repos.d/epel.repo</p></blockquote><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	不少人对 vi 编辑器不是很熟悉，简单说一下怎么改，需要修改的是 [epel] 下的 baseurl 前的 # 号去掉，mirrorlist 前添加 # 号</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	具体编辑器操作：首先将光标移动到 baseurl 的 b 上，然后键盘敲「i」，删掉 #，移动到下一行，在 mirrorlist 前敲入 #，最后敲键盘的「ESC」退出编辑模式， 最后键盘输入「wq」保存并退出 vi 编辑器。</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	然后再运行</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><blockquote style="padding-left: 10px; max-width: 100%; border-left: 3px solid rgb(219, 219, 219); color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;"><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; box-sizing: border-box; clear: both; min-height: 1em; white-space: pre-wrap; font-size: 1em; line-height: 1.6; word-wrap: break-word !important; outline: none !important;">
		yum makecache</p></blockquote><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	这时候就不会报错了，源也可以正常使用。要是不确定的话，你可以敲入</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><blockquote style="padding-left: 10px; max-width: 100%; border-left: 3px solid rgb(219, 219, 219); color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;"><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; box-sizing: border-box; clear: both; min-height: 1em; white-space: pre-wrap; font-size: 1em; line-height: 1.6; word-wrap: break-word !important; outline: none !important;">
		yum repolist</p></blockquote><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; max-width: 100%; clear: both; min-height: 1em; white-space: pre-wrap; color: rgb(62, 62, 62); font-family: &quot;Helvetica Neue&quot;, Helvetica, &quot;Hiragino Sans GB&quot;, &quot;Microsoft YaHei&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px; box-sizing: border-box !important; word-wrap: break-word !important;">
	验证源已经被正常安装。</p>',
        'author' => 'chenlei',
        'authorid' => '6',
        'time' => '05-21 15:46',
        'lastedit' => '05-21 15:46',
        'lasteditor' => 'chenlei',
        'lasteditorid' => '6',
        'views' => '1',
        'edits' => '0',
        'editions' => '0',
        'visible' => '1',
        'locked' => '0',
        'iscreate' => true,
        'rawtitle' => 'CentOS 6.X 安装 EPEL 源',
        'shorttitle' => 'CentOS 6.X 安装 EPE...',
        'category' => NULL,
        'img' => '',
      ),
    ),
  ),
  10 => 
  array (
    'config' => 
    array (
      'style' => '',
    ),
    'hottag' => 
    array (
    ),
  ),
  9 => 
  array (
    'config' => 
    array (
      'style' => '',
    ),
    'list' => 
    array (
    ),
  ),
  5 => 
  array (
    'config' => 
    array (
      'style' => '',
    ),
    'list' => 
    array (
    ),
  ),
  17 => 
  array (
    'config' => 
    array (
      'style' => '',
    ),
    0 => '',
  ),
  3 => 
  array (
    'config' => '',
    'data' => 
    array (
      'checkcode' => '3',
      'name_min_length' => '3',
      'name_max_length' => '15',
      'passport' => false,
      'loginTip2' => '用户名长度最少3位，最多15位!',
    ),
  ),
  7 => 
  array (
    'config' => 
    array (
      'num' => '',
    ),
    'list' => 
    array (
    ),
  ),
  8 => 
  array (
    'config' => 
    array (
      'num' => '',
    ),
    'list' => 
    array (
    ),
  ),
  4 => 
  array (
    'config' => 
    array (
      'style' => '',
    ),
    'list' => 
    array (
      1500630550 => '<a href=\'index.php?user-space-1\' class=\'red\'>admin</a>对词条<a href="index.php?doc-view-11" target="_blank">Oracle11g用EXP不能导出空表的解决方案</a>进行了编辑，将使更多人因此受益。',
      1488868913 => '<a href=\'index.php?user-space-1\' class=\'red\'>admin</a>对词条<a href="index.php?doc-view-11" target="_blank">Oracle11g用EXP不能导出空表的解决方案</a>进行了编辑，将使更多人因此受益。',
      1488867396 => '<a href=\'index.php?user-space-1\' class=\'red\'>admin</a>对词条<a href="index.php?doc-view-7" target="_blank">服务部内部SVN使用说明</a>进行了编辑，将使更多人因此受益。',
      1488805921 => '<a href=\'index.php?user-space-6\' class=\'red\'>chenlei</a>刚刚加入了售后知识库',
      1488805894 => '<a href=\'index.php?user-space-5\' class=\'red\'>yanglin</a>刚刚加入了售后知识库',
      1488805877 => '<a href=\'index.php?user-space-4\' class=\'red\'>lijian</a>刚刚加入了售后知识库',
      1488788283 => '<a href=\'index.php?user-space-1\' class=\'red\'>admin</a>刚刚加入了售后知识库',
    ),
  ),
  16 => 
  array (
    'config' => 
    array (
      'style' => '',
    ),
    'links' => 
    array (
      0 => 
      array (
        'id' => '3',
        'name' => '康赛BBS',
        'url' => 'http://bbs.comsys.net.cn',
        'logo' => '',
        'description' => '康赛BBS',
        'displayorder' => '0',
      ),
      1 => 
      array (
        'id' => '2',
        'name' => '在线服务中心',
        'url' => 'http://service.comsys.net.cn:8188',
        'logo' => '',
        'description' => '在线服务中心',
        'displayorder' => '0',
      ),
      2 => 
      array (
        'id' => '1',
        'name' => '康赛官网',
        'url' => 'http://www.comsys.net.cn',
        'logo' => '',
        'description' => 'https://web.jingoal.com/#/task?_k=o44str',
        'displayorder' => '0',
      ),
    ),
  ),
);
?>