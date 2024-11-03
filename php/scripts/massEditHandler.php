<?php

require_once 'vendor/autoload.php';

use Plesk\Domain;
use Plesk\DnsRecord;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $names = $_POST['name'];
    $types = $_POST['type'];
    $contents = $_POST['content'];
    $ttls = $_POST['ttl'];

    foreach ($names as $index => $name) {
        $dnsRecord = new DnsRecord();
        $dnsRecord->setName($name);
        $dnsRecord->setType($types[$index]);
        $dnsRecord->setContent($contents[$index]);
        $dnsRecord->setTtl($ttls[$index]);
        // Salvar o registro atualizado no Plesk
        $dnsRecord->save();
    }

    echo "Registros DNS atualizados com sucesso!";
}
?>
