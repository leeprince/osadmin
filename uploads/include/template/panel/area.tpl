<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->
<{$osadmin_action_alert}>
    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab"><{$area_name}> - 区域内站点列表</a></li>
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
                <{foreach $lists as $list}>
					 
					<tr>
						<td><input type="checkbox" name="list_ids[]" value="<{$list.id}>" ></td>
						<td><{$list.id}></td>
						<td><{$list.addr}></td>
						<td><{$list.description}></td>
					</tr>
				<{/foreach}>
              </tbody>
            </table> 
		
			<label>选择区域</label>
				<{html_options name=area_id id="DropDownTimezone" class="input-xlarge" options=$area_options selected=$myselect}>
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
<{include file="footer.tpl" }>