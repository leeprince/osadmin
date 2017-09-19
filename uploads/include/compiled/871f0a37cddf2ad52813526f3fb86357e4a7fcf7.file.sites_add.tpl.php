<?php /* Smarty version Smarty-3.1.15, created on 2017-09-19 11:09:51
         compiled from "E:\phpstudy\WWW\jgx_admin\uploads\include\template\panel\sites_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1728159c08a7fc89235-34588833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '871f0a37cddf2ad52813526f3fb86357e4a7fcf7' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\template\\panel\\sites_add.tpl',
      1 => 1505287112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1728159c08a7fc89235-34588833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    '_POST' => 0,
    'area_options' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59c08a7fc9ea06_95622932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c08a7fc9ea06_95622932')) {function content_59c08a7fc9ea06_95622932($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>


<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请添加站点资料</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="" autocomplete="off">
				
				<label>站点名称</label>
				<input type="text" name="addr" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['addr'];?>
" class="input-xlarge" required='true' autofocus="true" >
				<label>所属区域名称</label>
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['area_options']->value,'selected'=>$_smarty_tpl->tpl_vars['site']->value['area_id'],'name'=>'area_id'),$_smarty_tpl);?>

				<label>站点描述</label>
				<textarea name="description" rows="3" class="input-xlarge"><?php echo $_smarty_tpl->tpl_vars['_POST']->value['description'];?>
</textarea>
			<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				<div class="btn-group"></div>
			</div>
			</form>
        </div>
    </div>
</div>	
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
