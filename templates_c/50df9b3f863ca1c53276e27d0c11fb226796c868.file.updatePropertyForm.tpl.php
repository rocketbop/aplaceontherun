<?php /* Smarty version Smarty-3.1.16, created on 2013-12-29 23:34:00
         compiled from "vendor/smarty/templates/private/updatePropertyForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133526861452c0640c0fde29-55678511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50df9b3f863ca1c53276e27d0c11fb226796c868' => 
    array (
      0 => 'vendor/smarty/templates/private/updatePropertyForm.tpl',
      1 => 1388356418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133526861452c0640c0fde29-55678511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c0640c124602_06295164',
  'variables' => 
  array (
    'properties' => 0,
    'property' => 0,
    'counties' => 0,
    'county' => 0,
    'houseTypes' => 0,
    'houseType' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c0640c124602_06295164')) {function content_52c0640c124602_06295164($_smarty_tpl) {?><div class="container">
  <?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
    <div class="row">
    <div class="col-md-12">
      <h1>Update Property Details</h1>  
      <h2><?php echo $_smarty_tpl->tpl_vars['property']->value['address_line_1'];?>
</h2>
      <p>Below are the details on record for <?php echo $_smarty_tpl->tpl_vars['property']->value['address_line_1'];?>
. When you finish editing, submit the revised records.</p>
    </div>
   
  </div>
  <div class="row">
    <div class="col-md-12 add-property-form-background">

  <div class="row"> 
     <div class="add-property-form col-md-offset-2 col-md-8">
      <form role="form" method="post" action="updateProperty.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="address_line_1">Property Address line 1*</label>
          <h6>* Required</h6>
          <input type="text" class="form-control" name="address_line_1" id="address_line_1" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['address_line_1'];?>
">
        </div>

        <div class="form-group">
          <label for="address_line_2">Property Address line 2</label>
          <input type="text" class="form-control" name="address_line_2" id="address_line_2" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['address_line_2'];?>
">
        </div>

        <div class="form-group">
          <label for="town">Town*</label>
          <h6>* Required</h6>
          <input type="text" class="form-control" name="town" id="town" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['town'];?>
">
        </div>

        <div class="form-group">
          <label for="county_name">County</label>
          <select name="county_name"class="form-control">
            <?php  $_smarty_tpl->tpl_vars['county'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['county']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['counties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['county']->key => $_smarty_tpl->tpl_vars['county']->value) {
$_smarty_tpl->tpl_vars['county']->_loop = true;
?>
              <option><?php echo $_smarty_tpl->tpl_vars['county']->value['county_name'];?>
</option>
            <?php } ?>
            <option selected="selected"><strong><?php echo $_smarty_tpl->tpl_vars['property']->value['county_name'];?>
</strong></option>  
          </select>
        </div>

        <div class="row">
          <div class="form-group col-md-4">
            <label for="property_image">Photo</label>
            <input type="file" name="property_image" id="property_image">
            <p class="help-block">Upload a photo of the property.</p>
          </div>

          <div class="col-md-6">
            <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['property']->value['image_name'];?>
" width="200px">
          </div> 
        </div>

        <div class="form-group">
          <label for="house_type">House Type</label>
          <select name="house_type" class="form-control">
            <?php  $_smarty_tpl->tpl_vars['houseType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['houseType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['houseTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['houseType']->key => $_smarty_tpl->tpl_vars['houseType']->value) {
$_smarty_tpl->tpl_vars['houseType']->_loop = true;
?>
              <option><?php echo $_smarty_tpl->tpl_vars['houseType']->value['house_type'];?>
</option>
            <?php } ?> 
            <option selected="selected"><?php echo $_smarty_tpl->tpl_vars['property']->value['house_type'];?>
</option> 
          </select>
        </div>

        <div class="form-group">
          <label for="monetary_value">Price*</label>
          <h6>* Required</h6>
          <input type="text" class="form-control" name="monetary_value" id="monetary_value" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['monetary_value'];?>
">
        </div>

        <div class="form-group">
        <input type="hidden" name="property_id" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['property_id'];?>
">
        <input type="hidden" name="address_id" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['address_id'];?>
">
        <input type="hidden" name="newDataForUpdating" value="yes">
        <input name="form-submit" value="Update" type="submit" class="btn btn-success"></input>
        </div>
      </form>
    </div>
  </div>
      </div>
  </div>
     <?php } ?>
</div> <!-- Close container -->    <?php }} ?>
