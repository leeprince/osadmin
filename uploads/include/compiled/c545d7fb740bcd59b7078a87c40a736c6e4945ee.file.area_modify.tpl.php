<?php /* Smarty version Smarty-3.1.15, created on 2017-09-18 19:23:19
         compiled from "E:\phpstudy\WWW\jgx_admin\uploads\include\template\panel\area_modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2837759bfaca7700c11-52890610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c545d7fb740bcd59b7078a87c40a736c6e4945ee' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\template\\panel\\area_modify.tpl',
      1 => 1505211101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2837759bfaca7700c11-52890610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59bfaca7710619_61601624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfaca7710619_61601624')) {function content_59bfaca7710619_61601624($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请填写区域资料</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="">
				<label>区域名称</label>
				<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="input-xlarge" required="true" autofocus="true" >
				<div class="btn-toolbar">
					<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				</div>
			</form>
        </div>
    </div>
</div>

<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
