<?php /* Smarty version Smarty-3.1.15, created on 2017-09-19 14:29:00
         compiled from "E:\phpstudy\WWW\jgx_admin\uploads\include\template\panel\sites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:851459bfabb4c7b934-32389606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325a8c57d75a147633a6ffb0f53794b2e0f6f78a' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\template\\panel\\sites.tpl',
      1 => 1505802537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '851459bfabb4c7b934-32389606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59bfabb4cc5cc2_12585262',
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'operator_url' => 0,
    'area_options' => 0,
    '_GET' => 0,
    'lists' => 0,
    'list' => 0,
    'page_no' => 0,
    'page_html' => 0,
    'osadmin_action_confirm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfabb4cc5cc2_12585262')) {function content_59bfabb4cc5cc2_12585262($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>



<div class="btn-toolbar" style="margin-bottom:2px;">
    
    <?php if (in_array('/panel/sites_add.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
    <div style="float:left;margin-right:10px;padding-top:10px">
        <a href="sites_add.php" class="btn btn-primary"><i class="icon-plus"></i> 站点</a>
    </div>
    <?php }?>

	<form class="form_search"  action="" method="GET" style="margin-bottom:0px">
		<div style="float:left;margin-right:5px;margin-top:10px;">
			<?php echo smarty_function_html_options(array('name'=>'area_id','id'=>"DropDownTimezone",'style'=>"width:200px;",'class'=>"input-xlarge",'options'=>$_smarty_tpl->tpl_vars['area_options']->value,'selected'=>$_smarty_tpl->tpl_vars['_GET']->value['area_id']),$_smarty_tpl);?>

		</div>

		<div style="float:left;margin-right:5px;margin-top:10px;">
			<input type="text" name="addr" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['addr'];?>
" style="width:150px;" class="selectName" placeholder="查询所有站点请留空" >
			<input type="hidden" name="search" value="1" > 
		</div>
		<div class="btn-toolbar" style="padding-top:10px;padding-bottom:0px;margin-bottom:0px;">
			<button type="submit" class="btn btn-primary">检索</button>
		</div>
		<div style="clear:both;"></div>
	</form>
	
</div>

<div class="block">
    <a href="#page-stats" class="block-heading" data-toggle="collapse">站点列表</a>
    <div id="page-stats" class="block-body collapse in">
           <table class="table table-striped">
          <thead>
            <tr>
				<th>#</th>
				<th>站点名称</th>
				<th>所属区域名称</th>
				<th>站点描述</th>
				<th style="width:80px">操作</th>
            </tr>
          </thead>
          <tbody>							  
            <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>				 
				<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value['area_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value['description'];?>
</td>
				<td>
					<?php if (in_array('/panel/sites_modify.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
					<a href="sites_modify.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" title= "修改" ><i class="icon-pencil"></i></a>
					&nbsp;
					<?php }?>
						
					<?php if (in_array('/panel/sites_modify.php',$_smarty_tpl->tpl_vars['operator_url']->value)) {?>
					<a data-toggle="modal" href="#myModal" title= "删除" ><i class="icon-remove" href="sites_del.php?page_no=<?php echo $_smarty_tpl->tpl_vars['page_no']->value;?>
&method=del&id=<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" ></i></a>
					<?php }?>
				</td>
				</tr>
			<?php } ?>
          </tbody>
        </table> 
		<!-- START 分页模板 -->
		
		<?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>

			
		<!--- END -->
    </div>
</div>

<!-- 操作的确认层，相当于javascript:confirm函数-->
<?php echo $_smarty_tpl->tpl_vars['osadmin_action_confirm']->value;?>


<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
