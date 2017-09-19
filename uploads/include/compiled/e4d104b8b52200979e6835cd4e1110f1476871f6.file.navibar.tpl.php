<?php /* Smarty version Smarty-3.1.15, created on 2017-09-18 19:19:16
         compiled from "E:\phpstudy\WWW\jgx_admin\uploads\include\template\navibar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2198259bfabb4d044d2-27023002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d104b8b52200979e6835cd4e1110f1476871f6' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\template\\navibar.tpl',
      1 => 1505121711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2198259bfabb4d044d2-27023002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarStatus' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59bfabb4d13ed9_31247876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfabb4d13ed9_31247876')) {function content_59bfabb4d13ed9_31247876($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sidebarStatus']->value=='yes') {?> 
<body id="body" class="body">
<?php } else { ?>
<body id="body" class="body-fullscreen">
<?php }?>
<!--<![endif]-->

<div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
					<?php if ($_smarty_tpl->tpl_vars['sidebarStatus']->value=='yes') {?>
						<li class="doSidebarClz"><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">
						关闭侧栏<i class="icon-step-backward"></i>
						</a></li>
					<?php } else { ?>
						<li class="doSidebarClz"><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">
						打开侧栏<i class="icon-step-forward"></i>
						</a></li>
					<?php }?>
					 
					<?php if ($_smarty_tpl->tpl_vars['user_info']->value['setting']) {?>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>设置<i class="icon-caret-down"></i>
						</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo @constant('ADMIN_URL');?>
/panel/setting.php">系统设置</a></li>
                        </ul>
                    </li>
					<?php }?>
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_name'];?>

                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo @constant('ADMIN_URL');?>
/panel/profile.php">我的账号</a></li>
                            <li><a tabindex="-1" href="<?php echo @constant('ADMIN_URL');?>
/panel/logout.php">退出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="<?php echo @constant('ADMIN_URL');?>
/panel/index.php"><span class="first"></span> <span class="second"><?php echo @constant('COMPANY_NAME');?>
</span></a>
        </div>
</div><?php }} ?>
