<?php require_once('/include/config.inc.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $cfg_webname; ?> - 会员注册</title>
<meta name="keywords" content="北京中仑工业微生物研究所">
<meta name="description" content="北京中仑工业微生物研究所">

<link href="<?php echo $cfg_webpath; ?>/templates/default/css/basic.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $cfg_webpath; ?>/templates/default/css/login.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/all.js" type="text/javascript"></script>
</head>
<script type="text/javascript">
//加入收藏
function AddFavorite(){
	if(document.all){
		try{
			window.external.addFavorite(window.location.href,document.title);
		}catch(e){
			alert("加入收藏失败，请使用Ctrl+D进行添加！");
		}
	}else if(window.sidebar){
		window.sidebar.addPanel(document.title, window.location.href, "");
	}else{
		alert("加入收藏失败，请使用Ctrl+D进行添加！");
	}
}
</script>
<body>
<div class="top">
	<div class="wrap clearfix">
    	<div class="top-a pull-right">
        	<a href="#">设为首页</a>
        	<a href="#" onclick="AddFavorite();">加入收藏</a>
        	<a href="#">帮助中心</a>
		</div>
		欢迎访问北京中仑工业微生物研究所
	</div>
</div>

<div class="head">
	<div class="wrap"></div>
</div>

<div class="white-bg">
	<div class="menu clearfix">
    	<ul>
    		<?php echo GetNav();?>
    	</ul>
    </div>
    
    <div class="position">您现在的位置:首页 > 注册会员</div>
    
    <div class="page-l">
    	<div class="page-l-box">
    		<div class="page-l-t">新闻资讯</div>
    		<div class="page-l-c">
            	<a href="#">通知公告</a>
				<a href="#">新闻资讯</a>
				<a href="#">政策法规</a>
            </div>
    	</div>
        
        <div class="index-box mt10" style="width:100%; margin-left:0px">
        	<div class="index-box-wrap">
        		<div class="index-box-t clearfix">
                    <a href="#" class="more2"></a>
                    <span>联系我们</span>
                </div>
                <div class="index-box-c">
                    中国国际药品微生物控制与检测高峰论坛<br>
                    
                        电话：010-56271519<br>
                        邮箱：cnidmf@126.com<br>
                        网址：<a href="http://www.cnIDMF.com" target="_blank">www.cnIDMF.com</a>
                    
                    
            
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-r"> 
		<div class="page-r-t clearfix">
        	<span>会员注册</span>
        </div>

    	<div class="page-r-c">
        	<div class="login-box">
        		<div class="login-box-t">
                	<h1>会员注册</h1>
                	<div class="login-step">
                		<i>1</i><span>填写信息</span>
                		<i>2</i><span>管理员审核</span>
                        <i>3</i><span>注册成功</span>
                	</div>
                </div>
        	
            	<div class="login-box-l">
                	<form method="post" action="?a=reg" onsubmit="return CheckReg();" onSubmit="return checkform()">
                	<ul class="form">
                        <li>
                            <span class="f">用户名<font style="color:#f00">*</font></span>
                            <input type="text" name="username" id="username" class="need">
                            <samp>请输入用户名</samp>
                        </li>
                        <li>
                            <span class="f">昵称<font style="color:#f00">*</font></span>
                            <input type="text" id="useName" class="need">
                            <samp>请输入昵称</samp>
                        </li>
                        <li>
                            <span class="f">邮箱<font style="color:#f00">*</font></span>
                            <input type="text" name="email" id="email" class="need">
                            <samp>请输入邮箱</samp>
                        </li>
                        <li>
                            <span class="f">单位名称<font style="color:#f00">*</font></span>
                            <input type="text" id="company" class="need">
                            <samp>请输入单位名称</samp>
                        </li>
                        <li>
                            <span class="f">部门<font style="color:#f00">*</font></span>
                            <input type="text" id="depart" class="need">
                            <samp>请输入部门</samp>
                        </li>
                        <li>
                            <span class="f">职务<font style="color:#f00">*</font></span>
                            <input type="text" id="office" class="need">
                            <samp>请输入职务</samp>
                        </li>
                        <li>
                            <span class="f">手机号码<font style="color:#f00">*</font></span>
                            <input type="text" id="phone" class="need">
                            <samp>请输入手机号码</samp>
                        </li>
                        <li>
                            <span class="f">密码<font style="color:#f00">*</font></span>
                            <input type="password" name="password" id="password" id="psd" class="need"> 
                            <samp>请输入密码</samp>
                        </li>
                        <li>
                            <span class="f">确认密码<font style="color:#f00">*</font></span>
                            <input type="password"  name="repassword" id="repassword" id="psd-c" class="need">
                            <samp class="psw">两次密码不一致</samp>
                        </li>
                         <li>
                            <span class="f">验证码<font style="color:#f00">*</font></span>
                            <input type="text" name="validate" id="validate" class="input" maxlength="4" />
						<span><img id="ckstr" src="data/captcha/ckstr.php" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></span><br />
                        </li>
                        <li>
                            <span class="f">&nbsp;</span>
                            <button type="submit">提交注册</button>
                        </li>
                	</ul>
                    </form>
                </div>
        	
            	<div class="login-box-r">
            		已经有账号？<br>
                    请直接登录<br>
            		<a href="?c=login" class="a-btn">登录</a>
            	</div>
            
            </div>
        </div>
    
    </div>
    
    <div class="clear"></div>
    
</div>

<?php require_once(dirname(__FILE__).'/footer.php'); ?>
