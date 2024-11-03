<?php

use Plesk\Components\Toolbar;
use pm_View_List_Simple;

$toolbar = Toolbar::getInstance();
$toolbar->addButton([
    'text' => 'Editar em Massa',
    'url' => pm_Context::getActionUrl('plesk-bulk-dns', 'edit'),
    'place' => pm_View_List_Simple::PLACE_TOOLBAR,
    'context' => 'dns-list',
    'class' => 'btn',
]);

?>
