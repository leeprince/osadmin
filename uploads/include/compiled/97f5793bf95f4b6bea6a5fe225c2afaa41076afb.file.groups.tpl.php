<?php /* Smarty version Smarty-3.1.15, created on 2017-09-19 09:44:43
         compiled from "E:\phpstudy\WWW\jgx_admin\uploads\include\template\panel\groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1006459c0768b97ed60-30080998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f5793bf95f4b6bea6a5fe225c2afaa41076afb' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\template\\panel\\groups.tpl',
      1 => 1505718221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1006459c0768b97ed60-30080998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'operator_url' => 0,
    'groups' => 0,
    'group' => 0,
    'osadmin_action_confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59c0768b9fbd80_72422079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c0768b9fbd80_72422079')) {function content_59c0768b9fbd80_72422079($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>


<?php if (in_array('/panel/group_add.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
<div class="btn-toolbar">
	<a href="group_add.php" class="btn btn-primary"><i class="icon-plus"></i> 账号组</a>
</div>
<?php }?>

<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">账号组列表</a>
	<div id="page-stats" class="block-body collapse in">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>#</th>
				<th>账号组名</th>
				<th>所有者</th>
				<th>描述</th>
				<th width="80px">操作</th>
			</tr>
			</thead>
			<tbody>							  
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
				 
				<tr>
 
				<td><?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['group']->value['owner_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['group']->value['group_desc'];?>
</td>
				<td>
				<?php if (in_array('/panel/group.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
				<a href="group.php?group_id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" title= "成员列表" ><i class="icon-list-alt"></i></a>
				&nbsp;
				<?php }?>

				<?php if (in_array('/panel/group_modify.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
				<a href="group_modify.php?group_id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" title= "修改" ><i class="icon-pencil"></i></a>
				&nbsp;
				<?php }?>
				
				<?php if (in_array('/panel/groups.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['group']->value['group_id']!=1) {?>
					<a data-toggle="modal" href="#myModal"  title= "删除" ><i class="icon-remove" href="groups.php?method=del&group_id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
#myModal" data-toggle="modal" ></i></a>
					<?php }?>
				<?php }?>
				
				</td>
				</tr>
			<?php } ?>
		  </tbody>
		</table>  
	</div>
</div>

<!-- 操作的确认层，相当于javascript:confirm函数 -->
<?php echo $_smarty_tpl->tpl_vars['osadmin_action_confirm']->value;?>

	
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
