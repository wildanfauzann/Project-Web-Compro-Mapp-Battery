<?php
try {
    $db = new PDO('sqlite:database/database.sqlite');
    $rows = $db->query('SELECT id, kode_produk, nama_produk FROM produks ORDER BY id')->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $r) {
        echo $r['id'] . ' | ' . $r['kode_produk'] . ' | ' . $r['nama_produk'] . PHP_EOL;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
