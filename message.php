<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 19 : intval($cid);
if(isset($action) and $action=='add')
{
$posttime = GetMkTime(time());
$a1 = htmlspecialchars($a1);
$a2 = htmlspecialchars($a2);
$a3 = htmlspecialchars($a3);
$a4 = htmlspecialchars($a4);
$a5 = htmlspecialchars($a5);
$sql = "INSERT INTO `#@__youjiang` (a1, a2, a3, a4, a5,shijian) VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$posttime')";
					if($dosql->ExecNoneQuery($sql))
					{
						ShowMsg('网站留言提交成功，工作人员会在3个工作日内与您电话确认！','index.php');
						exit();
					}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $cfg_webname; ?> - <?php echo GetCatName($cid); ?></title>
<meta name="keywords" content="北京中仑工业微生物研究所">
<meta name="description" content="北京中仑工业微生物研究所">

<link href="<?php echo $cfg_webpath; ?>/templates/default/css/basic.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $cfg_webpath; ?>/templates/default/css/login.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $cfg_webpath; ?>/templates/default/js/all.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $cfg_webpath; ?>/templates/default/js/member.js"></script>
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
<?php 
	require_once('head.php');
?>
<?php 
	require_once('left.php');
?>
    <div class="page-r"> 
		<div class="page-r-t clearfix">
        	<span>建议留言</span>
        </div>

    	<div class="page-r-c">
        	<div class="login-box">
        	
            	<div class="login-box-l" style="border:0;width:100%">
                	<form method="post" action="" onSubmit="return checkform()">
                	<ul class="form">
                        <li>
                            <span class="f">姓名<font style="color:#f00">*</font></span>
                            <input type="text" id="companyId" name="a1" class="need">
                            <samp>请输入姓名</samp>
                        </li>
                        <li>
                            <span class="f">电话<font style="color:#f00">*</font></span>
                            <input type="text" id="contactName" name="a2" class="need">
                            <samp>请输入电话</samp>
                        </li>
                        <li>
                            <span class="f">单位<font style="color:#f00">*</font></span>
                            <input type="text" id="email" name="a3" class="need">
                            <samp>请输入单位</samp>
                        </li>
                        <li>
                            <span class="f">邮箱<font style="color:#f00">*</font></span>
                            <input type="text" id="number" name="a4" class="need">
                            <samp>请输入邮箱</samp>
                        </li>
                        
                        <li>
                            <span class="f">留言信息<font style="color:#f00">*</font></span>
                            <textarea class="need" name="a5"></textarea>
                            <samp>请输入留言信息</samp>
                            <div class="clear"></div>
                        </li>
                        
                        
                        <li>
                        	<input type="hidden" name="canshu" id="action" value="2" />
                        	<input type="hidden" name="action" id="action" value="add" />
                            <span class="f">&nbsp;</span>
                            <button type="submit">提交留言</button>
                        </li>
                	</ul>
                    </form>
                </div>
        	
            	
            </div>
        </div>
    
    </div>
    
    <div class="clear"></div>
    
</div>

<?php 
	require_once('footer.php');
?>