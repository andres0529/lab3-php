<?php

require_once 'config.inc.php';

$query = "select * from clubs";
$stmt = $pdo->prepare($query);
$stmt->execute();
$clubs   = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($clubs as $club) {
    echo " 
            <tr>
                <th class='clubIds' scope='row'>" . $club['clubId'] . "</th>
                <td class='clubname'>" . $club['clubName'] . "</td>
                <td class='ground'>" . $club['ground'] . "</td>
                <td> 
                    <button id='" . $club['clubId'] . "' data-name=". $club['clubName']." data-ground=".$club['ground'] ."        type= 'button' class='btn btn-success edit'>Edit</button>
                    <button id='" . $club['clubId'] . "' data-name=". $club['clubName']." data-ground=".$club['ground'] ."        type='button' class='btn btn-danger delete'>Delete</button>
                </td>
            </tr>
        ";
}
