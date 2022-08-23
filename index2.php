<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snaks</title>
</head>
<body>
//* 1
<?php
        $basketaMatches = [
            [
                "firstTeam" => "milano",
                "secondTeam" => "roma",
                "homeScore"=> 22,
                "otherTeamScore" => 35
            ],
            [
                "firstTeam" => "lakers",
                "secondTeam" => "bulls",
                "homeScore"=> 52,
                "otherTeamScore" => 75
            ],
            [
                "firstTeam" => "cleavelands",
                "secondTeam" => "astro",
                "homeScore"=> 27,
                "otherTeamScore" => 85
            ],
            [
                "firstTeam" => "molise",
                "secondTeam" => "bulls",
                "homeScore"=> 2,
                "otherTeamScore" => 150
            ],
        ];
    ?>
<?php for ($i=0; $i < ; $i++) { 
    
    
}?>

//* 2
<?php 
    $name= $_GET["name"];
    $mail= $_GET["mail"];
    $age= $_GET["age"];

    if (str_len($name)>3){
        if (strpos($mail, '@')!=false && strpos($mail, '.')!=false) {
            echo "puoi entrare"
        }
    }
?>

    <!-- usare strpos -->
 // *4   
    <?php 
    $numbers=[];
    for ($i=0; $i < 15 ; $i++) { 
        $numbers[]= rand(0, 20);
        echo $numbers[$i]. ' ';
    };
?>//*

<h1>snak 5</h1>
<?php 
    $text='ciao sono luca. ho 24 anni. sono di roma.';
    $new[]=(explode('.', $text));
    var_dump($new)
   
?>