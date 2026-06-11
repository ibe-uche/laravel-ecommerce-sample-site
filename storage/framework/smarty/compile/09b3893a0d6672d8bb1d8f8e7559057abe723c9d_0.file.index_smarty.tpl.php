<?php
/* Smarty version 4.5.6, created on 2026-06-11 10:13:58
  from '/home/ibeawuchi/Documents/ecommerce/resources/views/products/index_smarty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a2a8a66444a41_85292263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09b3893a0d6672d8bb1d8f8e7559057abe723c9d' => 
    array (
      0 => '/home/ibeawuchi/Documents/ecommerce/resources/views/products/index_smarty.tpl',
      1 => 1781172284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a2a8a66444a41_85292263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ibeawuchi/Documents/ecommerce/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/home/ibeawuchi/Documents/ecommerce/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | ShopEasy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">ShopEasy</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

        <h2 class="mb-4">Products</h2>

        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">

                        <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
">

                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="text-decoration-none">
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

                                </a>
                            </h5>

                            <p class="card-text">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->description,80);?>

                            </p>

                            <p class="fw-bold">
                                ₦<?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['product']->value->price,0);?>

                            </p>

                            <form method="POST" action="/cart/add/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                                <input type="hidden" name="_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">
                                <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    </div>

    <footer class="bg-light text-center py-3 mt-5">
        <small>© ShopEasy</small>
    </footer>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
