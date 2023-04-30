<?php
require_once 'sna.php';

$stmt = $pdo->query('SELECT * FROM users');

echo '<table>';
echo '<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jabatan</th></tr>';

while ($row = $stmt->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['ID'] . '</td>';
    echo '<td>' . $row['Nama'] . '</td>';
    echo '<td>' . $row['Alamat'] . '</td>';
    echo '<td>' . $row['Jabatan'] . '</td>';
    echo '</tr>';
}

echo '</table>';