<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snaks</title>
</head>
<body>
 
<h1>snak 1</h1>
<?php
    $basketMatches = [
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

<?php for ($i=0; $i < count($basketMatches) ; $i++) { ?> 
        <h2>
            <?php
                echo $basketMatches[$i]['firstTeam']."-".$basketMatches[$i]['secondTeam']."|".
                $basketMatches[$i]['homeScore']."-".$basketMatches[$i]['otherTeamScore'];
            ?>
        </h2>
<?php } ?>

<h1>snack 2</h1>

<?php
    $access=false;
    $name= $_GET["name"];
    $mail= $_GET["mail"];
    $age= $_GET["age"];
    echo $name.'  '.$mail.'  '.$age;
    if (strlen($name)>3){
        if (strpos($mail, '@')!=false && strpos($mail, '.')!=false) {
            if (is_numeric($age)) {
                $access=true;
            }
        }
    }
?>
<h2>accesso: 
    <?php if ($access){
            echo 'acconsentito';
        }
        else
        echo 'negato';
    ?>
</h2>

<h1>snak 4</h1>
<?php 
    $numbers=[];
    while( count($numbers)<15 ){
        $newNumber = rand(1, 100);
        if (!in_array($newNumber, $numbers)){
          $numbers[]=$newNumber;
        }
    }
    for ($i=0; $i < 15 ; $i++) { 
        echo $numbers[$i].' '; 
    }

?>


<h1>snak 5</h1>
<?php 
    $text='ciao sono luca. ho 24 anni. sono di roma.';
    $new =(explode('.', $text));
    var_dump($new);
?>

<?php 


?>


<h1>snak 7</h1>
<?php 

$alunni=[
    [
        'nome'=>'Stefano',
        'cognome'=>'bho',
        'voto'=>[
            10,
            6,
            8,
            7,
        ]
    ],
    [
        'nome'=>'Giacomo',
        'cognome'=>'bho',
        'voto'=>[
            5,
            10,
            8,
            7
        ]
    ],
    [
        'nome'=>'Lucia',
        'cognome'=>'bho',
        'voto'=>[
            4,
            2,
            6,
            7
        ]
    ],
    [
        'nome'=>'Paolo',
        'cognome'=>'bho',
        'voto'=>[
            10,
            10,
            8,
            7,
            5
        ]
    ],
]
?>



<?php for ($i=0; $i < count($alunni); $i++){  
    $somma=0; ?>
    
    <p> <?php echo $alunni[$i]['nome']. ' ' .$alunni[$i]['cognome']; ?> </p>  
    
    <?php for ($a=0; $a < count($alunni[$i]['voto']); $a++) { 
       $somma= $somma+ $alunni[$i]['voto'][$a];
    } ?>
    <?php echo 'la media dei voti è:'.' '. $somma/count($alunni[$i]['voto']) ?>
<?php } ?>


</body>
</html>