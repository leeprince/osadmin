<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>


<div class="btn-toolbar" style="margin-bottom:2px;">
    
    <{if in_array('/panel/sites_add.php', $operator_url)}>
    <div style="float:left;margin-right:10px;padding-top:10px">
        <a href="sites_add.php" class="btn btn-primary"><i class="icon-plus"></i> 站点</a>
    </div>
    <{/if}>

	<form class="form_search"  action="" method="GET" style="margin-bottom:0px">
		<div style="float:left;margin-right:5px;margin-top:10px;">
			<{html_options name=area_id id="DropDownTimezone" style="width:200px;" class="input-xlarge" options=$area_options selected=$_GET.area_id}>
		</div>

		<div style="float:left;margin-right:5px;margin-top:10px;">
			<input type="text" name="addr" value="<{$_GET.addr}>" style="width:150px;" class="selectName" placeholder="查询所有站点请留空" >
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
            <{foreach $lists as $list}>				 
				<tr>
				<td><{$list.id}></td>
				<td><{$list.addr}></td>
				<td><{$list.area_name}></td>
				<td><{$list.description}></td>
				<td>
					<{if in_array('/panel/sites_modify.php', $operator_url ) }>
					<a href="sites_modify.php?id=<{$list.id}>" title= "修改" ><i class="icon-pencil"></i></a>
					&nbsp;
					<{/if}>
						
					<{if in_array('/panel/sites_modify.php', $operator_url ) }>
					<a data-toggle="modal" href="#myModal" title= "删除" ><i class="icon-remove" href="sites_del.php?page_no=<{$page_no}>&method=del&id=<{$list.id}>" ></i></a>
					<{/if}>
				</td>
				</tr>
			<{/foreach}>
          </tbody>
        </table> 
		<!-- START 分页模板 -->
		
		<{$page_html}>
			
		<!--- END -->
    </div>
</div>

<!-- 操作的确认层，相当于javascript:confirm函数-->
<{$osadmin_action_confirm}>

<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<{include file="footer.tpl" }>