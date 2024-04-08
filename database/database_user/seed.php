


<?php

// Seed tables
echo 'Seeding Jiri table'.PHP_EOL;
$jiri = [];
$insert_jiri_in_jiris_table_sql = 'INSERT INTO jiri (name, email, mdp) VALUES (:name, :email, :mdp)';
$insert_jiri_in_jiris_table_stmt = $db->prepare($insert_jiri_in_jiris_table_sql);
foreach ($jiri as $jiri) {
    $insert_jiri_in_jiris_table_stmt->bindValue('name', $jiri['name']);
    $insert_jiri_in_jiris_table_stmt->bindValue('starting_at', $jiri['starting_at']);
    $insert_jiri_in_jiris_table_stmt->bindValue('email', $jiri['email']);
    $insert_jiri_in_jiris_table_stmt->bindValue('mdp', $jiri['mdp']);
    $insert_jiri_in_jiris_table_stmt->execute();
}
$count_jiris = count($jiri);
echo "Jiri table seeded with {$count_jiris} jiris".PHP_EOL;