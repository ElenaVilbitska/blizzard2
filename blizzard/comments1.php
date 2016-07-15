<?php
/**
 * Created by PhpStorm.
 * User: ADAM
 * Date: 11.06.2016
 * Time: 10:13
 */
function GetStringEmploument($emploument){
    return $emploument?'work': 'don\'t work';
}

function GetRealValue ($array, $key){
    /*if (inset($array[$key]) ) {
        return $array{$key};
    }
    else {
        return '-';
    }*/
    return inset($array[$key]) ? $array{$key} : '-' ;
}


const USER_RIGHT = 'right of fine live';
$name = array(
    'George' => array(
        'age' => 42,
        'emploument' => true,
        'salary' => 10000,
        'hobby' => <<<HOBBY
рыбалка
охота
HOBBY
    ,
        'expiri' => 5,),
    'Ivan' => array('age' => 22,'emploument' => true, 'salary' => 1000, 'hobby' => "Books" , 'expiri' => 2,),
    'Maria' => array('age' => 18,'emploument' => flase, 'salary' => 20000, 'hobby' => "Movies" , 'expiri' => 1,),
    'Ruslan' => array('age' => 40,'emploument' => true, 'salary' => 7500, 'hobby' => "Bike" , 'expiri' => 9,),
    'Olena' => array('age' => 42,'emploument' => false, 'salary' => 3000, 'hobby' => "Boys" , 'expiri' => 17,),
    );
//$age = [42,22,18,];
//$sumEmpl = $isEmploument = [true,false,true,];

/*for ($i = 0; $i<5; $i++) {
    echo "Man name is <b>{$name[$i]}</b>, he'r  age = {$age[$i]} USER_RIGHT {$isEmploument[$i]} <br>".PHP_EOL;
    $ageSum += $age[$i];
    $sumEmpl = $isEmploument[$i] || $sumEmpl;
}*/
?>
<table border="1 solid">
    <thead>
        <tr> <td>Name</td> <td>Age</td> <td>Emploument</td> <td>Salary</td> <td>Hobby</td> <td>Expirience</td></tr>
    </thead>
    <tbody>
    <?php

    foreach ($name as $key => $value) {

        ?>
        <tr>
            <td><?=$key?></td>
            <td><?=$value['age']?></td>
            <td><?=GetStringEmploument($value['emploument'])?></td>
            <td><?=$value['salary']?></td>
            <td><?=GetRealValue($value ['ex'])?></td>
            <td><?=$key?></td>
            <td><?=$key?></td>
        </tr>
    </tbody>
    </table>
    <!--echo "Man name is <b>{$key}</b>, he'r  age = {$value['age']} USER_RIGHT {$value['emploument']}, he's salary = {$value['salary']}, he's hobby {$value['hobby']}, he's exirience={$value['expiri']}  <br>".PHP_EOL;-->
<?php
    $ageSum += $value['age'];
    $sumEmpl = $value['emploument'] || $sumEmpl;
}

echo "<br> Summary age's = $ageSum"

?>