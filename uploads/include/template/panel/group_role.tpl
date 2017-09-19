<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>
<select name="group_id" onchange="javascript:location.replace('group_role.php?group_id='+this.options[this.selectedIndex].value)" style="margin:5px 0px 0px">
	<{html_options options=$group_option_list selected=$group_id}>
</select>
<form method="post" action="">
<{foreach $role_list as $role}>
		<div class="block">
			<a href="#page-stats_<{$role.module_id}>" class="block-heading" data-toggle="collapse"><{$role.module_name}></a>
			<div id="page-stats_<{$role.module_id}>" class="block-body collapse in">

			<table border="1">
				<{foreach $role.menu_info as $menu}>

				<tr>
					<td style="width=150px;text-align:right">
						<{$menu.name}>    :
					</td>
					<td>
						<{html_checkboxes name="menu_ids"  options=$menu.menu_chirld checked=$group_role separator="&nbsp;&nbsp;" labels="1"}>
					</td>
				</tr>

				<{/foreach}>
			</table>
								
			</div>
		</div>
<{/foreach}>											
	<div>
		<button class="btn btn-primary">更新</button>
	</div>
</form>

<{include file="footer.tpl" }>