<?php /* Smarty version Smarty-3.1.16, created on 2013-12-29 18:59:30
         compiled from "vendor/smarty/templates/private/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117665295952bec28419aae4-20017142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bbf0039e5d8fb1be9d71c6f70c902d0d347568a' => 
    array (
      0 => 'vendor/smarty/templates/private/table.tpl',
      1 => 1388339969,
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
		<div class="col-md-12">
			<h1>Current Properties</h1>
			<p>You can update or delete the following properties using the buttons below, or <a href="addProperty.php">add a new property.</a></p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 property-table table table-bordered table-striped">
			<table>
				<thead>
					<tr>
						<td>ID</td>
						<td>Address ID</td>
						<td>Address</td>
						<td>Town</td>
						<td>County</td>
						<td>Image</td>
						<td>House Type</td>
						<td>Price</td>
						<td>Update</td>
						<td>Delete</td>
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
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['address_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['address_line_1'];?>
 <br /> <?php echo $_smarty_tpl->tpl_vars['property']->value['address_line_2'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['town'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['county_name'];?>
</td>
							<td><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['property']->value['image_name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['property']->value['image_name'];?>
" width="150px"></td>
							<td><?php echo $_smarty_tpl->tpl_vars['property']->value['house_type'];?>
</td>
							<td>EUR <?php echo $_smarty_tpl->tpl_vars['property']->value['monetary_value'];?>
</td>
							<td>
								<form role="form" method="post" action="updateProperty.php" enctype="multipart/form-data">
									<input type="hidden" name="property_id" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['property_id'];?>
">
									<input type="hidden" name="address_id" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['address_id'];?>
">
									<input name="form-submit" type="submit" value="Update" class="btn btn-warning"></input>
								</form>
							</td>
							<td>
								<form role="form" method="post" action="deleteProperty.php" enctype="multipart/form-data">
									<input type="hidden" name="property_id" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['property_id'];?>
">
									<input type="hidden" name="address_id" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['address_id'];?>
">
									<input name="form-submit" type="submit" value="Delete" class="btn btn-danger"></input>
								</form>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>	
	</div> <!-- Close row -->
</div>	<!-- Close container -->
<?php }} ?>
