<?php /* Smarty version Smarty-3.1.15, created on 2017-09-18 19:23:16
         compiled from "E:\phpstudy\WWW\jgx_admin\uploads\include\template\panel\areas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:839759bfaca44c5bd7-40568967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8281e5e68d9ab50e4af10604b38100b9daa7558' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\template\\panel\\areas.tpl',
      1 => 1505716975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '839759bfaca44c5bd7-40568967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'operator_url' => 0,
    'areas' => 0,
    'area' => 0,
    'osadmin_action_confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59bfaca44f0b57_36146273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfaca44f0b57_36146273')) {function content_59bfaca44f0b57_36146273($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>


<?php if (in_array('/panel/area_add.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
<div class="btn-toolbar">
	<a href="area_add.php" class="btn btn-primary"><i class="icon-plus"></i> 区域</a>
</div>
<?php }?>

<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">区域列表</a>
	<div id="page-stats" class="block-body collapse in">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>#</th>
				<th>区域名称</th>
				<th width="80px">操作</th>
			</tr>
			</thead>
			<tbody>	

			<?php  $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['area']->key => $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->_loop = true;
?>
				 
				<tr>
 
				<td><?php echo $_smarty_tpl->tpl_vars['area']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['area']->value['name'];?>
</td>
				<td>
					<?php if (in_array('/panel/area.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
					<a href="area.php?id=<?php echo $_smarty_tpl->tpl_vars['area']->value['id'];?>
" title= "成员列表" ><i class="icon-list-alt"></i></a>
					&nbsp;
					<?php }?>

					<?php if (in_array('/panel/area_modify.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
					<a href="area_modify.php?id=<?php echo $_smarty_tpl->tpl_vars['area']->value['id'];?>
" title= "修改" ><i class="icon-pencil"></i></a>
					&nbsp;
					<?php }?>

					<?php if (in_array('/panel/area_del.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
					<a data-toggle="modal" href="#myModal"  title= "删除" ><i class="icon-remove" href="area_del.php?method=del&id=<?php echo $_smarty_tpl->tpl_vars['area']->value['id'];?>
#myModal" data-toggle="modal" ></i></a>
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
