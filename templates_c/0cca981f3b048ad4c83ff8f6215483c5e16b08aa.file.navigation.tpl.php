<?php /* Smarty version Smarty-3.1.16, created on 2013-12-28 12:32:45
         compiled from "vendor/smarty/templates/public/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77036466052beb6dd3228d4-22817713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cca981f3b048ad4c83ff8f6215483c5e16b08aa' => 
    array (
      0 => 'vendor/smarty/templates/public/navigation.tpl',
      1 => 1388180688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77036466052beb6dd3228d4-22817713',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52beb6dd326560_29424919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52beb6dd326560_29424919')) {function content_52beb6dd326560_29424919($_smarty_tpl) {?>       <!--[if lt IE 7]>
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
          <a class="navbar-brand" href="#">A Place on the Run</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="dropdown">
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
            </li>
          </ul>

          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" placeholder="Username" for="username" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" for="username" name="password" id="password" class="form-control">
            </div>
            <input type="submit" class="btn btn-success" value="Login">
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div><?php }} ?>
