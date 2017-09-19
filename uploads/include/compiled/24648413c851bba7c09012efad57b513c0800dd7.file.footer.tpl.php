<?php /* Smarty version Smarty-3.1.15, created on 2017-09-19 14:28:34
         compiled from "E:\phpstudy\WWW\jgx_admin\uploads\include\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1581059bfabb4d797e7-59512403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24648413c851bba7c09012efad57b513c0800dd7' => 
    array (
      0 => 'E:\\phpstudy\\WWW\\jgx_admin\\uploads\\include\\template\\footer.tpl',
      1 => 1505802512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1581059bfabb4d797e7-59512403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59bfabb4d7d663_46461536',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfabb4d7d663_46461536')) {function content_59bfabb4d7d663_46461536($_smarty_tpl) {?>					<footer>
                        <hr>
                        <p class="pull-right"><?php echo @constant('FOOTER_NAME');?>
 - <?php echo @constant('VERSION_NUMBER');?>
</p>
                        <p></p>
                    </footer>
				</div>
			</div>
		</div>
    <script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/bootstrap/js/bootstrap.js"></script>

<!-- 捷径的提示 -->

		<script type="text/javascript">	
			alertDismiss("alert-success", 3);
			alertDismiss("alert-info", 10);

			listenShortCut("icon-plus");
			listenShortCut("icon-minus");

			doSidebar();
		</script>
	</body>
</html>
<?php }} ?>
