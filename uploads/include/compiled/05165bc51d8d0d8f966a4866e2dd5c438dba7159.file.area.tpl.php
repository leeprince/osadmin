<?php /* Smarty version Smarty-3.1.15, created on 2017-09-19 09:45:08
         compiled from "E:\phpstudy\WWW\jgx_admin\uploads\include\template\panel\area.tpl" */ ?>
<?php /*%%SmartyHeaderCode:660959c076a4b16d78-96925095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05165bc51d8d0d8f966a4866e2dd5c438dba7159' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\template\\panel\\area.tpl',
      1 => 1505273969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '660959c076a4b16d78-96925095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'area_name' => 0,
    'lists' => 0,
    'list' => 0,
    'area_options' => 0,
    'myselect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59c076a4b39ff3_44583345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c076a4b39ff3_44583345')) {function content_59c076a4b39ff3_44583345($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['area_name']->value;?>
 - 区域内站点列表</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="">
				 <table class="table table-striped">
              <thead>
                <tr>
					<th><input type="checkbox" id="checkAll" >全选</th>
					<th>#</th>
					<th>投放站点</th>
					<th>投放备注</th>
                </tr>
              </thead>
              <tbody>							  
                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
					 
					<tr>
						<td><input type="checkbox" name="list_ids[]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
" ></td>
						<td><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['list']->value['addr'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['list']->value['description'];?>
</td>
					</tr>
				<?php } ?>
              </tbody>
            </table> 
		
			<label>选择区域</label>
				<?php echo smarty_function_html_options(array('name'=>'area_id','id'=>"DropDownTimezone",'class'=>"input-xlarge",'options'=>$_smarty_tpl->tpl_vars['area_options']->value,'selected'=>$_smarty_tpl->tpl_vars['myselect']->value),$_smarty_tpl);?>

				<div class="btn-toolbar">
					<button type="submit" class="btn btn-primary"><strong>修改站点所属区域</strong></button>
				</div>
			</form>
        </div>
    </div>

<script type="text/javascript">
$("#checkAll").click(function(){
     if($(this).attr("checked")){
		$("input[name='list_ids[]']").attr("checked",$(this).attr("checked"));
	 }else{
		$("input[name='list_ids[]']").attr("checked",false);
	 }
});
</script>

<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
