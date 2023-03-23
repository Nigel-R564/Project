<form method="POST">
    titel:
    <input type="text" name="titelInput">
    tweet:
    <input type="text" name="tweetInput">

    <input type="submit" name="submit">
</form>
<?php
include_once "databaseConnectie.php";

global $dbConnectie;

if(isset($_POST["submit"])){
    $query = $dbConnectie->prepare(
        "INSERT INTO tweets (titel, inhoud)
                    VALUES (:placeholderTitel, :phInhoud);");
    $query->execute([
        "placeholderTitel" => $_POST["titelInput"],
        "phInhoud" => $_POST["tweetInput"]
    ]);
}

$voorbereideQuery = $dbConnectie->prepare("SELECT * FROM tweets;");
$voorbereideQuery->execute([]);
$data = $voorbereideQuery->fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);
foreach ($data as $item){
    echo $item["titel"] . "<br>";
    echo $item["inhoud"] . "<br><br>";
}

//andere code
//het invoegen in db


