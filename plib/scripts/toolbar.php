<?php

use Plesk\Components\Toolbar;
use pm_View_List_Simple;


$toolbar = Toolbar::getInstance();

$toolbar->addButton([
    'text' => 'Editar Valores e TTL',
    'url' => pm_Context::getActionUrl('plesk-bulk-dns', 'edit_mass_values'),
    'place' => pm_View_List_Simple::PLACE_TOOLBAR,
    'class' => 'btn',
]);

$toolbar->addButton([
    'text' => 'Edição Completa em Massa',
    'url' => pm_Context::getActionUrl('plesk-bulk-dns', 'edit_mass_dns'),
    'place' => pm_View_List_Simple::PLACE_TOOLBAR,
    'class' => 'btn',
]);
