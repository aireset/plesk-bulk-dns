<?php

class IndexController
{
    public function handleRequest()
    {
        $action = $_GET['action'] ?? 'index';
        
        switch ($action) {
            case 'edit_mass_dns':
                $this->editMassDns();
                break;
            case 'edit_mass_values':
                $this->editMassValues();
                break;
            default:
                echo "Ação não especificada.";
                break;
        }
    }

    private function editMassDns()
    {
        include dirname(__DIR__) . '/views/scripts/edit_mass_dns.phtml';
    }

    private function editMassValues()
    {
        include dirname(__DIR__) . '/views/scripts/edit_mass_values.phtml';
    }
}
