<?php /* Smarty version Smarty-3.1.16, created on 2013-12-30 00:17:18
         compiled from "vendor/smarty/templates/private/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190875320852beb6e0b8b2f0-61248774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c204c7cebeff4b03769185b2b06b26c88297de2' => 
    array (
      0 => 'vendor/smarty/templates/private/navigation.tpl',
      1 => 1388359037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190875320852beb6e0b8b2f0-61248774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52beb6e0b8e1d0_59252321',
  'variables' => 
  array (
    'activeHome' => 0,
    'activeView' => 0,
    'activeAddProperty' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52beb6e0b8e1d0_59252321')) {function content_52beb6e0b8e1d0_59252321($_smarty_tpl) {?>       <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="admin.php">A Place on the Run</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo $_smarty_tpl->tpl_vars['activeHome']->value;?>
"><a href="admin.php">Home</a></li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['activeView']->value;?>
"><a href="view.php">View</a></li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['activeAddProperty']->value;?>
"><a href="addProperty.php">Add Property</a></li>
 <!--            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>

          <form class="navbar-form navbar-right" action="logout.php" method="post">
            

            <input type="submit" class="btn btn-success" value="Logout">
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div><?php }} ?>
