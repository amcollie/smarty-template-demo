<?php

declare(strict_types=1);

require_once dirname(__DIR__) . "/vendor/autoload.php";

$smarty = new Smarty();
$smarty->setTemplateDir(dirname(__DIR__) . "/views");
$smarty->setCompileDir(dirname(__DIR__). "/storage/views_c");
$smarty->setConfigDir(dirname(__DIR__). "/configs");
$smarty->setCacheDir(dirname(__DIR__) . "/storage/cache");

$smarty->assign([ 
    'name' => 'Michael Jones',
    'foods' => [
        'curry chicken',
        'pea and rice',
        'coleslaw',
        'plantains'
    ]
]);

$smarty->display('index.tpl');