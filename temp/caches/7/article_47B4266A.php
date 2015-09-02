<?php exit;?>a:3:{s:8:"template";a:7:{i:0;s:61:"D:/DedeAMPZ/WebRoot/shop/themes/ecmoban_meilishuo/article.dwt";i:1;s:73:"D:/DedeAMPZ/WebRoot/shop/themes/ecmoban_meilishuo/library/page_header.lbi";i:2;s:69:"D:/DedeAMPZ/WebRoot/shop/themes/ecmoban_meilishuo/library/ur_here.lbi";i:3;s:71:"D:/DedeAMPZ/WebRoot/shop/themes/ecmoban_meilishuo/library/left_help.lbi";i:4;s:69:"D:/DedeAMPZ/WebRoot/shop/themes/ecmoban_meilishuo/library/history.lbi";i:5;s:70:"D:/DedeAMPZ/WebRoot/shop/themes/ecmoban_meilishuo/library/comments.lbi";i:6;s:73:"D:/DedeAMPZ/WebRoot/shop/themes/ecmoban_meilishuo/library/page_footer.lbi";}s:7:"expires";i:1441166029;s:8:"maketime";i:1441162429;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>3G知识普及_站内快讯_lingganheziShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_meilishuo/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<link href="themes/ecmoban_suning/qq/images/qq.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
 
<div class="top_nav">
	<script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>
    <div class="block">     
    
        <ul class="top_bav_l">
        <li class="top_sc">
           <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a>
</li>
			<!--
            <li>关注我们：</li>
            <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);">
            <a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a> 
            <div id=DisSub_1 class="top_nav_box  top_weibo"> 
            <a href="#" target="_blank" title="新浪微博" class="top_weibo"></a>
            </div> 
            </li> 
            <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);">
            <a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a> 
            <div id="DisSub_2" class="weixinBox" style="display: none;"> 
		
            <img src="themes/ecmoban_meilishuo/images/weixin.png" style="width:150px; height:190px;  background:#0000CC" width="150" height="190"> 
            </div>
            --> 
            </li>
        </ul>
    
        <div class="header_r">
        
        <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>        <font id="ECS_MEMBERZONE" >554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
     
                                        <a href="user.php" >我的账户</a>
                                         |
                                                   <a href="pick_out.php" >选购中心</a>
                                         |
                                                   <a href="tag_cloud.php" >标签云</a>
                                         |
                                                   <a href="quotation.php" >报价单</a>
                                                    
        </div>
    </div>
</div>
<div class=" block header_bg" style="margin-bottom: 0px;">
  <div class="clear_f"></div>
  <div class="header_top logo_wrap"> <a class="logo_new" href="index.php"><img src="themes/ecmoban_meilishuo/images/logo.gif" /></a>
    <div class="ser_n">
      <form id="searchForm" class="searchBox" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
        <div class="search-table"> <span class="cur" data-type="1">宝贝</span> <em class="arrow"></em> </div>
        <span class="ipt1"><em class="i_search"></em>
        <input name="keywords" type="text" id="keyword" value="" class="searchKey" />
        </span> <span class="ipt2">
        <input type="submit"  name="imageField" class="fm_hd_btm_shbx_bttn" value="搜 索">
        </span>
      </form>
      <div class="clear_f"></div>
      <ul class="searchType none_f">
      </ul>
    </div>
    <ul class="cart_info">
      <li id="ECS_CARTINFO"><span class="carts_num none_f">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</span> <em class="i_cart">&nbsp;</em><a href="flow.php">查看购物车</a></li>
      <li><a href="user.php" target="_blank"><em class="i_order">&nbsp;</em>我的订单</a></li>
    </ul>
  </div>
</div>
<div style="clear:both"></div>
 
<div class="menu_box clearfix"> 
<div class="block"> 
<div class="menu">
  <a href="index.php" class="cur">首页<span></span></a>
    <a href="category.php?id=21"  >
女装 <span></span>
</a>
 
   <a href="category.php?id=132"  >
男装 <span></span>
</a>
 
   <a href="category.php?id=170"  >
裤子 <span></span>
</a>
 
   <a href="brand.php"  >
品牌专区 <span></span>
</a>
 
   <a href="group_buy.php"  >
团购 <span></span>
</a>
 
 </div> 
</div>
</div>
 
 
 
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="article_cat.php?id=12">站内快讯</a> <code>&gt;</code> 3G知识普及 
</div>
</div>
<div class="blank"></div><div class="block clearfix">
  
  <div class="AreaL">
   <div class="left_help clearfix">
<dl>
  <dt> <img src="themes/ecmoban_meilishuo/images/left_help_biao.gif"> <a href='article_cat.php?id=5' title="新手上路 ">新手上路 </a></dt>
    <dd><a href="article.php?id=9" title="售后流程">售后流程</a></dd>
    <dd><a href="article.php?id=10" title="购物流程">购物流程</a></dd>
    <dd><a href="article.php?id=11" title="订购方式">订购方式</a></dd>
  </dl>
<dl>
  <dt> <img src="themes/ecmoban_meilishuo/images/left_help_biao.gif"> <a href='article_cat.php?id=6' title="手机常识 ">手机常识 </a></dt>
    <dd><a href="article.php?id=12" title="如何分辨原装电池">如何分辨原装电池</a></dd>
    <dd><a href="article.php?id=13" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
    <dd><a href="article.php?id=14" title="如何享受全国联保">如何享受全国联保</a></dd>
  </dl>
<dl>
  <dt> <img src="themes/ecmoban_meilishuo/images/left_help_biao.gif"> <a href='article_cat.php?id=7' title="配送与支付 ">配送与支付 </a></dt>
    <dd><a href="article.php?id=15" title="货到付款区域">货到付款区域</a></dd>
    <dd><a href="article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a></dd>
    <dd><a href="article.php?id=17" title="支付方式说明">支付方式说明</a></dd>
  </dl>
<dl>
  <dt> <img src="themes/ecmoban_meilishuo/images/left_help_biao.gif"> <a href='article_cat.php?id=10' title="会员中心">会员中心</a></dt>
    <dd><a href="article.php?id=18" title="资金管理">资金管理</a></dd>
    <dd><a href="article.php?id=19" title="我的收藏">我的收藏</a></dd>
    <dd><a href="article.php?id=20" title="我的订单">我的订单</a></dd>
  </dl>
<dl>
  <dt> <img src="themes/ecmoban_meilishuo/images/left_help_biao.gif"> <a href='article_cat.php?id=8' title="服务保证 ">服务保证 </a></dt>
    <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
    <dd><a href="article.php?id=22" title="售后服务保证 ">售后服务保证</a></dd>
    <dd><a href="article.php?id=23" title="产品质量保证 ">产品质量保证</a></dd>
  </dl>
<dl>
  <dt> <img src="themes/ecmoban_meilishuo/images/left_help_biao.gif"> <a href='article_cat.php?id=9' title="联系我们 ">联系我们 </a></dt>
    <dd><a href="article.php?id=24" title="网站故障报告">网站故障报告</a></dd>
    <dd><a href="article.php?id=25" title="选机咨询 ">选机咨询</a></dd>
    <dd><a href="article.php?id=26" title="投诉与建议 ">投诉与建议</a></dd>
  </dl>
  </div>
<div class="blank"></div>
    
    <div class="box" id='history_div'> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div style="  background-color:#fff; padding:20px 15px;">
         <div class="tc" style="padding:8px;">
         <font class="f5 f6" style="font-size:18px; ">3G知识普及</font><br /><font class="f3">lingganheziShop / 2009-05-18</font>
         </div>
                   <p>
<h2>3G知识普及</h2>
<div class="t_msgfont" id="postmessage_8792145"><font color="black">3G，全称为3rd Generation，中文含义就是指第三代数字通信。<br />
</font><br />
<font color="black">　　1995年问世的第一代<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%C4%A3%C4%E2">模拟</span>制式<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%CA%D6%BB%FA">手机</span>（1G）只能进行<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%D3%EF%D2%F4">语音</span>通话；<br />
</font><br />
<font color="black">　　1996到1997年出现的第二代GSM、TDMA等数字制式手机（2G）便增加了接收数据的功能，如接收电子邮件或网页；<br />
</font><br />
<font color="black">　　3G不是2009年诞生的，它是上个世纪的产物，而早在2007年国外就已经产生4G了，而<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%D6%D0%B9%FA">中国</span>也于2008年成功开发出<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%D6%D0%B9%FA">中国</span>4G，其网络传输的速度可达到每秒钟2G，也就相当于下一部电影只要一秒钟。在上世纪90年末的日韩电影如《我的野蛮女友》中，女主角使用的可以让对方看见自己的视频<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%B5%E7%BB%B0">电话</span>，就是属于3G技术的重要运用之一。日韩等国3G的运用是上世纪末期的事。而目前国外有些地区已经试运行3.5G甚至4G网络。<br />
</font><br />
<font color="black">　 </font><font color="black">（以下为误导）2009年问世的第三代（3G）与 前两代的主要区别是在传输声音和数据的速度上的提升，它能够在全球范围内更好地实现无缝漫游，并处理图像、音乐、视频流等多种媒体形式，提供包括网页浏 览、电话会议、电子商务等多种信息服务，同时也要考虑与已有第二代系统的良好兼容性。为了提供这种服务，无线网络必须能够支持不同的数据传输速度，也就是 说在室内、室外和行车的环境中能够分别支持至少2Mbps（兆比特／每秒）、384kbps（千比特／每秒）以及144kbps的传输速度。（此数值根据 网络环境会发生变化)。<br />
</font><br />
<font color="black">　　3G标准，国际电信联盟(ITU)目前一共确定了全球四大3G标准，它们分别是WCDMA、CDMA2000和TD-SCDMA和WiMAX。</font><br />
<br />
<font color="black">3G标准　　国际电信联盟（ITU）在2000年5月确定W-CDMA、CDMA2000、TD-SCDMA以 及WiMAX四大主流无线接口标准，写入3G技术指导性文件《2000年国际移动通讯计划》（简称IMT&mdash;2000）。 CDMA是Code Division Multiple Access (码分多址)的缩写，是第三代移动通信系统的技术基础。第一代移动通信系统采用频分多址(FDMA)的模拟调制方式，这种系统的主要缺点是频谱利用率低， 信令干扰话音业务。第二代移动通信系统主要采用时分多址(TDMA)的数字调制方式，提高了系统容量，并采用独立信道传送信令，使系统性能大大改善，但 TDMA的系统容量仍然有限，越区切换性能仍不完善。CDMA系统以其频率规划简单、系统容量大、频率复用系数高、抗多径能力强、通信质量好、软容量、软 切换等特点显示出巨大的发展潜力。下面分别介绍一下3G的几种标准：<br />
</font><br />
<br />
<font color="black">　　 </font><br />
<font color="black">(1) W-CDMA</font><font color="black"><br />
</font><br />
<br />
<font color="black">　　也称为WCDMA，全称为Wideband CDMA，也称为CDMA Direct Spread，意为宽频分码多重存取，这是基于GSM网发展出来的3G技术规范，是欧洲提出的宽带CDMA技术，它与日本提出的宽带CDMA技术基本相 同，目前正在进一步融合。W-CDMA的支持者主要是以GSM系统为主的欧洲厂商，日本公司也或多或少参与其中，包括欧美的爱立信、阿尔卡特、<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%C5%B5%BB%F9%D1%C7">诺基亚</span>、 朗讯、北电，以及日本的NTT、富士通、夏普等厂商。 该标准提出了GSM(2G)-GPRS-EDGE-WCDMA(3G)的演进策略。这套系统能够架设在现有的GSM网络上，对于系统提供商而言可以较轻易 地过渡，但是GSM系统相当普及的亚洲对这套新技术的接受度预料会相当高。因此W-CDMA具有先天的市场优势。<br />
</font><br />
<br />
<font color="black">　　 </font><br />
<font color="black">(2)CDMA2000</font><font color="black"><br />
</font><br />
<br />
<font color="black">　　CDMA2000是由窄带CDMA(CDMA IS95)技术发展而来的宽带CDMA技术，也称为CDMA Multi-Carrier，它是由美国高通北美公司为主导提出，<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%C4%A6%CD%D0%C2%DE%C0%AD">摩托罗拉</span>、Lucent 和后来加入的韩国三星都有参与，韩国现在成为该标准的主导者。这套系统是从窄频CDMAOne数字标准衍生出来的，可以从原有的CDMAOne结构直接升 级到3G，建设成本低廉。但目前使用CDMA的地区只有日、韩和北美，所以CDMA2000的支持者不如W-CDMA多。不过CDMA2000的研发技术 却是目前各标准中进度最快的，许多3G手机已经率先面世。该标准提出了从CDMA IS95(2G)-CDMA20001x-CDMA20003x(3G)的演进策略。CDMA20001x被称为2.5代移动通信技术。 CDMA20003x与CDMA20001x的主要区别在于应用了多路载波技术，通过采用三载波使带宽提高。目前<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%D6%D0%B9%FA%B5%E7%D0%C5">中国电信</span>正在采用这一方案向3G过渡，并已建成了CDMA IS95网络。<br />
</font><br />
<br />
<font color="black">　　 </font><br />
<font color="black">(3)TD-SCDMA</font><font color="black"><br />
</font><br />
<br />
<font color="black">　　全称为Time Division - Synchronous CDMA(时分<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%CD%AC%B2%BD">同步</span>CDMA)，该标准是由中国大陆独自制定的3G标准，1999年6月29日，中国原邮电部电信科学技术研究院（大唐电信）向ITU提出。该标准将智能无线、<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%CD%AC%B2%BD">同步</span>CDMA和<span class="t_tag" onclick="tagshow(event)" href="http://mbbs.enet.com.cn/tag.php?name=%C8%ED%BC%FE">软件</span>无 线电等当今国际领先技术融于其中，在频谱利用率、对业务支持具有灵活性、频率灵活性及成本等方面的独特优势。另外，由于中国内的庞大的市场，该标准受到各 大主要电信设备厂商的重视，全球一半以上的设备厂商都宣布可以支持TD&mdash;SCDMA标准。 该标准提出不经过2.5代的中间环节，直接向3G过渡，非常适用于GSM系统向3G升级。<br />
</font><br />
<br />
<font color="black">　　 </font><br />
<font color="black">(4)WiMAX</font><font color="black"><br />
</font><br />
<br />
<font color="black">　　WiMAX 的全名是微波存取全球互通(Worldwide Interoperability for Microwave Access)，又称为802&middot;16无线城域网，是又一种为企业和家庭用户提供&ldquo;最后一英里&rdquo;的宽带无线连接方案。将此技术与需要授权或免授权的微波设备 相结合之后，由于成本较低，将扩大宽带无线市场，改善企业与服务供应商的认知度。2007年10月19日，国际电信联盟在日内瓦举行的无线通信全体会议 上，经过多数国家投票通过，WiMAX正式被批准成为继WCDMA、CDMA2000和TD-SCDMA之后的第四个全球3G标准。</font></div>
</p>                           <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #ccc;">
         
                    
                      上一篇:<a href="article.php?id=33" class="f6">三星SGHU308说明书下载</a>
                   </div>
      </div>
    </div>
  </div>
  <div class="blank"></div>
  <div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";s:1:"1";s:2:"id";i:34;}554fcae493e564ee0dc75bdf2ebf94ca</div>
  </div>
  
</div>
<div class="footer">
  <div class="foot_con">
    <div class="f_list service_info">
      <div class="kefu"> <span class="tel_ico"></span>
        <p class="f20_f">4000-021-758</p>
        <p class="f14_f mt4_f">模板堂客服热线</p>
      </div>
      <ol class="business">
        <li>周一至周日：09:00-22:00</li>
      </ol>
    </div>
     
     
        <div  class="f_list">
      <h4>新手上路 </h4>
      <ul>
                <li><a target="_blank" href="article.php?id=9" title="售后流程" >售后流程</a></li>
                <li><a target="_blank" href="article.php?id=10" title="购物流程" >购物流程</a></li>
                <li><a target="_blank" href="article.php?id=11" title="订购方式" >订购方式</a></li>
              </ul>
    </div>
     
     
        <div  class="f_list">
      <h4>手机常识 </h4>
      <ul>
                <li><a target="_blank" href="article.php?id=12" title="如何分辨原装电池" >如何分辨原装电池</a></li>
                <li><a target="_blank" href="article.php?id=13" title="如何分辨水货手机 " >如何分辨水货手机</a></li>
                <li><a target="_blank" href="article.php?id=14" title="如何享受全国联保" >如何享受全国联保</a></li>
              </ul>
    </div>
     
     
     
     
     
     
     
     
     
     
        <div class="f_list">
      <h4>关注我们</h4>
      <ul>
        <li class="sina_attention"> <a href="http://weibo.com/ECMBT/home?topnav=1&wvr=5 " target="_blank"><span class="i_sina">&nbsp;</span>新浪微博</a></li>
        <li><a href="#" target="_blank"><span class="i_qzone">&nbsp;</span>QQ空间</a></li>
        <li><a href="#" target="_blank"><span class="i_tx">&nbsp;</span>腾讯微博</a></li>
      </ul>
    </div>
    <div class="f_list qr-code">
      <h4>微信服务号</h4>
      <img src="themes/ecmoban_meilishuo/images/weixinfuwuhao.png" alt="模板堂服务号二维码"> </div>
    <div class="f_list weixin_code">
      <h4>客户端下载</h4>
      <a class="client_pic" href="#" target="_blank"></a> </div>
    <div class="blank"></div>
     
       
       
      <div class="blank"></div>
    
    <div id="bottomNav" class="rolling" >
    <h4 class="f_links">底部导航：</h4>
      <ul id="link_slide">
      <li>
             
             
            <a href="article.php?id=1" >免责条款</a> 
             
            <a href="article.php?id=2" >隐私保护</a> 
             
            <a href="article.php?id=3" >咨询热点</a> 
             
            <a href="article.php?id=4" >联系我们</a> 
             
            <a href="article.php?id=5" >公司简介</a> 
             
            <a href="wholesale.php" >批发方案</a> 
             
            <a href="myship.php" >配送方式</a> 
             
             
          </li>
          </ul>
    </div>
    
    
    
    
    <div class="text" style="height:1px ; width:1px; overflow:hidden;">  
       
      Tel: 400-000-000 
       
       
       
       
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=123456&amp;Site=lingganheziShop&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:123456:4" height="16" border="0" alt="QQ" /> 123456</a> 
       
       
       
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=234567&amp;Site=lingganheziShop&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:234567:4" height="16" border="0" alt="QQ" /> 234567</a> 
       
       
       
       
      <a href="http://amos1.taobao.com/msg.ww?v=2&uid=123456789&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=123456789&s=2" width="16" height="16" border="0" alt="淘宝旺旺" />123456789</a> 
       
       
       
       
       
       
       
       
       
       
      <br />
    </div>
    <div class="record">   &nbsp; <a href="#" target="_blank">电信与信息服务业务经营许可证100798号</a>&nbsp; <a href="#" target="_blank">企业法人营业执照</a>&nbsp; 京ICP备11031139号&nbsp; 京公网安备110108006045&nbsp;<br>
      客服邮箱：kf@mobantang.com&nbsp;&nbsp;客服电话：4000-021-758&nbsp; 文明办网文明上网举报电话：010-0000000 &nbsp; <a href="#" target="_blank">违法不良信息举报中心</a> </div>
  </div>
  <div class="blank10"></div>
</div>
<div class="blank"></div>
  
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
 
  
  
  
  
  
                <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=123456&amp;Site=lingganheziShop&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:123456:4" height="16" border="0" alt="QQ" /> 123456</a> </li>
                         <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=234567&amp;Site=lingganheziShop&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:234567:4" height="16" border="0" alt="QQ" /> 234567</a> </li>
                              <li><a href="http://amos1.taobao.com/msg.ww?v=2&uid=123456789&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=123456789&s=2" width="16" height="16" border="0" alt="淘宝旺旺" />123456789</a></li>
                                                             
    
  
  
  
  
  
  
  
  
  
  
	      <li> 服务热线: 400-000-000</li>
         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
 
</body>
</html>
