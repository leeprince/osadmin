<?php /* Smarty version Smarty-3.1.15, created on 2017-09-19 13:08:57
         compiled from "E:\phpstudy\WWW\jgx_admin\uploads\include\template\panel\modules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:399359c0a6692d3a26-03965269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '490a371d178d8a77fb598fbed8d78b2872e5616a' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\template\\panel\\modules.tpl',
      1 => 1505718641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399359c0a6692d3a26-03965269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'operator_url' => 0,
    'modules' => 0,
    'module' => 0,
    'osadmin_action_confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59c0a669312226_38407959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c0a669312226_38407959')) {function content_59c0a669312226_38407959($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>


<?php if (in_array('/panel/module_add.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
<div class="btn-toolbar">
	<a href="module_add.php" class="btn btn-primary"><i class="icon-plus"></i> 模块</a>
</div>
<?php }?>

<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">模块列表</a>
	<div id="page-stats" class="block-body collapse in">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>#</th>
				<th>模块名</th>
				<th>模块链接</th>
				<th>排序</th>
				<th>是否在线</th>
				<th>描述</th>
				<th>图标</th>
				<th width="80px">操作</th>
			</tr>
			</thead>
			<tbody>							  
			<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				 
				<tr>
				 
				<td><?php echo $_smarty_tpl->tpl_vars['module']->value['module_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['module']->value['module_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['module']->value['module_url'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['module']->value['module_sort'];?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['module']->value['online']) {?>
						在线
					<?php } else { ?>
						已下线
					<?php }?>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['module']->value['module_desc'];?>
</td>
				<td><i class="<?php echo $_smarty_tpl->tpl_vars['module']->value['module_icon'];?>
"></i></td>
				<td>
				<?php if (in_array('/panel/module.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
				<a href="module.php?module_id=<?php echo $_smarty_tpl->tpl_vars['module']->value['module_id'];?>
" title= "菜单链接列表" ><i class="icon-list-alt"></i></a>
				&nbsp;
				<?php }?>

				<?php if (in_array('/panel/module_modify.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
				<a href="module_modify.php?module_id=<?php echo $_smarty_tpl->tpl_vars['module']->value['module_id'];?>
" title= "修改" ><i class="icon-pencil"></i></a>
				&nbsp;
				<?php }?>

				<?php if (in_array('/panel/modules.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['module']->value['module_id']!=1) {?>
					<a data-toggle="modal" href="#myModal"  title= "删除" ><i class="icon-remove" href="modules.php?method=del&module_id=<?php echo $_smarty_tpl->tpl_vars['module']->value['module_id'];?>
"></i></a>
					<?php }?>
				<?php }?>

				</td>
				</tr>
			<?php } ?>
		  </tbody>
		</table>  
	</div>
</div>

<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $_smarty_tpl->tpl_vars['osadmin_action_confirm']->value;?>

	
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
