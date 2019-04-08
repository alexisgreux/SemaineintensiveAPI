<?php

$title = 'Gestionnaire de paiement';


/**
 * Exemple of POST method
 */

if(!empty($_POST))
{
    // enter the data from your POST here
    $data = [
        // for a text :
        'data1' => trim($_POST['input1']),
        'data2' => trim($_POST['input2']),

        // for a time (care your form!)
        'data3' => strtotime($_POST['date'])
        // // for a int
        // 'data3' => (int)$_POST['input3'],
    ];

    // to include in your database
    $prepare = $pdo->prepare('
        INSERT INTO
            expenses (name, amount, date)
        VALUES
            (:data1, :data2, :data3)
    ');
    $prepare->execute($data);
    // you can add more execute here
}
if(!empty($_GET['deleteId']))
{
    $prepare = $pdo->prepare('
        DELETE FROM
            expenses
        WHERE
            id = :id
    ');

    $prepare->bindValue('id', $_GET['deleteId']);

    $prepare->execute();
}

// to query some data
$query = $pdo->query('SELECT * FROM expenses');
$returnedData = $query->fetchAll();


include '../views/pages/home.php';