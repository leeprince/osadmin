<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>

<{if in_array('/panel/area_add.php', $operator_url)}>
<div class="btn-toolbar">
	<a href="area_add.php" class="btn btn-primary"><i class="icon-plus"></i> 区域</a>
</div>
<{/if}>

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

			<{foreach $areas as $area}>
				 
				<tr>
 
				<td><{$area.id}></td>
				<td><{$area.name}></td>
				<td>
					<{if in_array('/panel/area.php', $operator_url)}>
					<a href="area.php?id=<{$area.id}>" title= "成员列表" ><i class="icon-list-alt"></i></a>
					&nbsp;
					<{/if}>

					<{if in_array('/panel/area_modify.php', $operator_url)}>
					<a href="area_modify.php?id=<{$area.id}>" title= "修改" ><i class="icon-pencil"></i></a>
					&nbsp;
					<{/if}>

					<{if in_array('/panel/area_del.php', $operator_url)}>
					<a data-toggle="modal" href="#myModal"  title= "删除" ><i class="icon-remove" href="area_del.php?method=del&id=<{$area.id}>#myModal" data-toggle="modal" ></i></a>
					<{/if}>

				</td>
				</tr>
			<{/foreach}>
			
		  </tbody>
		</table>  
	</div>
</div>

<!-- 操作的确认层，相当于javascript:confirm函数 -->
<{$osadmin_action_confirm}>
	
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<{include file="footer.tpl" }>