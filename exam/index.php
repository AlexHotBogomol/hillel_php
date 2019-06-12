<?php

    require_once("StringCalculator.php");
    require_once("Changer.php");
    require_once("AgeCalculator.php");
    require_once("ArrayConverter.php");
    require_once("Robots.php");
    require_once("RobotsBuilder.php");


    echo "<h6>Task1</h6>";
    var_dump(StringCalculator::calculateWords("Лето, наступило у нас лето"));

    echo "<h6>Task2</h6>";
    $array = [1, 2, 3, 4, 5];
    var_dump(Changer::accumulate($array));

    echo "<h6>Task3</h6>";
    echo 'Mercury: ' . AgeCalculator::calculate_age(315360000, "Merc");
    echo "<br>";
    echo 'Earth: ' .  AgeCalculator::calculate_age(1000000000, "Earth");
    echo "<br>";
    echo 'Earth: ' .  AgeCalculator::calculate_age( 31, "Earth", true);

    echo "<h6>Task4</h6>";
    $array = [1,[2,3,null,4],[null],5];
    var_dump(ArrayConverter::convert_array($array));

    echo "<h6>Task5</h6>";
    $factory = new Factory();
    $robot1 = $factory->create('Civ');
    $robot2 = $factory->create('Mil');

    echo $robot1->name;
    echo "<br>";
    echo $robot2->name;
    echo "<br>";
    $robot2->reboot();
    echo $robot2->name;

    ////Вот тут я был в ступоре почему не работает $robot1->getName(); Подскажите что к чему


    echo "<h6>Task6</h6>";
    $civ_robots_builder = new CivRobotsBuilder;
    $civ_robot1 = $civ_robots_builder->addHead()->getRobot();
    var_dump($civ_robot1);

    $mil_robots_builder = new MilRobotsBuilder;
    $mil_robot1 = $mil_robots_builder->addHead()->addWeapon()->getRobot();
    var_dump($mil_robot1);