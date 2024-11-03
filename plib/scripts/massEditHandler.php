<?php

use Plesk\DnsRecord;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recordIds = $_POST['record_ids'];
    $newContent = $_POST['content'] ?? [];
    $newTtl = $_POST['ttl'] ?? [];

    foreach ($recordIds as $type => $ids) {
        $content = $newContent[$type] ?? null;
        $ttl = $newTtl[$type] ?? null;

        foreach ($ids as $recordId) {
            $dnsRecord = DnsRecord::getById($recordId);
            if ($dnsRecord && $dnsRecord->getType() === $type) {
                if ($content) $dnsRecord->setContent($content);
                if ($ttl) $dnsRecord->setTtl($ttl);
                $dnsRecord->save();
            }
        }
    }

    echo "Valores e TTLs atualizados com sucesso!";
}
