<?php
include_once "PDO.php";

function GetOneUserFromId($id)
{
    global $PDO;
    $response = $PDO->query("SELECT * FROM user WHERE id = $id");
    return $response->fetch();
}

function GetAllUsers()
{
    global $PDO;
    $response = $PDO->query("SELECT * FROM user ORDER BY nickname ASC");
    return $response->fetchAll();
}

function GetUserIdFromUserAndPassword($Username, $Password)
{
    global $PDO;
    $query = $PDO->prepare("SELECT * FROM user WHERE nickname = :nickname and password = :password;");
    $result = $query->execute(
        array(
            "nickname" => $Username,
            "password" => $Password
        )
    );

    if ($result == false) {
        return null;
    }

    $user = $query->fetch();
    return $user['id'];
}
