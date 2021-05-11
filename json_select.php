<?php
    include "polacz.php";
    $users = [];
    if ($sql = $baza->prepare( "SELECT Age, FirstName, LastName FROM users")) {
            $sql->execute();
            $sql->bind_result($age, $firstName, $secondName);
            while ($sql->fetch()) {
                array_push($users, (object)[
                    'age' => $age,
                    'firstName' => $firstName,
                    'secondName' => $secondName
                ]);
            }
            $sql->close();
    }
    $baza->close();
    echo json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>