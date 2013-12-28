<?php /* Smarty version Smarty-3.1.16, created on 2013-12-28 18:57:38
         compiled from "vendor/smarty/templates/private/addPropertyForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95028860752bf069cbf3784-15490988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e93f93c3f4d819fdb3dd1c43c7830c1f682780a' => 
    array (
      0 => 'vendor/smarty/templates/private/addPropertyForm.tpl',
      1 => 1388253450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95028860752bf069cbf3784-15490988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52bf069cbf61f0_29000111',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bf069cbf61f0_29000111')) {function content_52bf069cbf61f0_29000111($_smarty_tpl) {?><div class="container">
  <div class="row"> 
     <div class="add-property-form col-md-offset-2 col-md-8">
      <form role="form" method="post" action="addProperty.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="address_line_1">Property Address line 1</label>
          <input type="text" class="form-control" name="address_line_1" id="address_line_1" placeholder="Address Line 1">
        </div>

        <div class="form-group">
          <label for="address_line_2">Property Address line 2</label>
          <input type="text" class="form-control" name="address_line_2" id="address_line_2" placeholder="Address Line 2">
        </div>

        <div class="form-group">
          <label for="county_name">County</label>
          <select name="county_name"class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="property_image">Photo</label>
          <input type="file" name="property_image" id="property_image">
          <p class="help-block">Upload a photo of the property.</p>
        </div>

        <div class="form-group">
          <label for="house_type">House Type</label>
          <select name="house_type" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
        <input name="form-submit" type="submit" class="btn btn-default">Submit</input>
        </div>
      </form>
    </div>
  </div>
</div> <!-- Close container -->    <?php }} ?>
