<?php /* Smarty version Smarty-3.1.16, created on 2013-12-29 14:10:08
         compiled from "vendor/smarty/templates/private/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117665295952bec28419aae4-20017142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bbf0039e5d8fb1be9d71c6f70c902d0d347568a' => 
    array (
      0 => 'vendor/smarty/templates/private/table.tpl',
      1 => 1388322607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117665295952bec28419aae4-20017142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52bec28419d438_79683180',
  'variables' => 
  array (
    'properties' => 0,
    'property' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bec28419d438_79683180')) {function content_52bec28419d438_79683180($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-md-12 property-table table table-bordered table-striped">
			<table>
				<thead>
					<tr>
						<td>ID</td>
						<td>Address Line 1</td>
						<td>County</td>
						<td>Image</td>
						<td>House Type</td>
						<td>Price</td>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['property_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['address_line_1'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['county_name'];?>
</td>
							<td><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['property']->value['image_name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['property']->value['image_name'];?>
" width="150px"></td>
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['house_type'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['monetary_value'];?>
</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>	
	</div> <!-- Close row -->
</div>	<!-- Close container -->
<?php }} ?>
