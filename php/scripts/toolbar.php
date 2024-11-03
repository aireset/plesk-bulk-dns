<?php

use Plesk\Components\Toolbar;
use pm_View_List_Simple;

$toolbar = Toolbar::getInstance();

// Botão para edição em massa de valores e TTL
$toolbar->addButton([
    'text' => 'Editar Valores e TTL',
    'url' => pm_Context::getActionUrl('plesk-bulk-dns', 'edit_mass_values'),
    'place' => pm_View_List_Simple::PLACE_TOOLBAR,
    'context' => 'dns-list',
    'class' => 'btn',
]);

// Botão para edição completa (Nome, Tipo, Conteúdo e TTL)
$toolbar->addButton([
    'text' => 'Edição Completa em Massa',
    'url' => pm_Context::getActionUrl('plesk-bulk-dns', 'edit_mass_dns'),
    'place' => pm_View_List_Simple::PLACE_TOOLBAR,
    'context' => 'dns-list',
    'class' => 'btn',
]);