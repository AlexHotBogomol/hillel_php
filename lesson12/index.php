<?php
    $host = '127.0.0.1';
    $db   = 'clients_db';
    $user = 'clients_adm';
    $pass = '111111';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    //Вставка нескольких клиентов в бд
    $data = [
        ['Sasha', 'Zakablukov', 'Zakablukov@gmail.com', '770capital', 1, 22],
        ['Petya', 'Pyatochkin', 'Petya@i.ua', 'SuperFirma', 0, 30],
        ['Masha', 'Shmotkina', 'Masha@yahoo.com', 'SuperFirma', 1, 25],
        ['Marina', 'Oskolkova', 'OskolcMar@gmail.com', 'ProstoSuperFirma', 1, 22]
    ];


    // $stmt = $pdo->prepare("INSERT INTO clients (first_name, last_name, email, company_name, is_active, age) VALUES (?,?,?,?,?,?)");

    // foreach ($data as $row)
    // {
    //     $stmt->execute($row);
    // }


    //Список всех клиентов

    $stmt = $pdo->query("SELECT * FROM clients");

    while ($row = $stmt->fetch())
    {
        echo $row['first_name'] . ' ' . $row['last_name'] . "<br>";
    }

    //Список клиентов который активны (поле is_active)

    $stmt = $pdo->query("SELECT * FROM clients WHERE is_active=1");

    while ($row = $stmt->fetch())
    {
        echo $row['first_name'] . ' ' . $row['last_name'] . "<br>";
    }


    //Список клиентов возраст которых больше или равно 30

    $stmt = $pdo->query("SELECT * FROM clients WHERE age>=30");

    while ($row = $stmt->fetch())
    {
        echo $row['first_name'] . ' ' . $row['last_name'] . "<br>";
    }

    //Список клиентов имя которых начинается на В (Вася, Владимир)

    $stmt = $pdo->query("SELECT * FROM clients WHERE first_name LIKE 'В%'");

    while ($row = $stmt->fetch())
    {
        echo $row['first_name'] . ' ' . $row['last_name'] . "<br>";
    }

    // Сколько клиентов у вас в базе всего

    $stmt = $pdo->query("SELECT COUNT(id) FROM clients");
    echo $stmt->fetch()["COUNT(id)"] . "<br>";
   
    //Самого старого (по возрасту клиента)

    $stmt = $pdo->query("SELECT MAX(age) FROM clients");
    echo $stmt->fetch()["MAX(age)"] . "<br>";

    //Сколько у вас активных клиентов
    $stmt = $pdo->query("SELECT COUNT(id) FROM clients WHERE is_active=1");
    echo $stmt->fetch()["COUNT(id)"] . "<br>";  

    //Получить и отсортировать всех клиентов по возрасту
    $stmt = $pdo->query("SELECT * FROM clients ORDER BY age ASC");
    while ($row = $stmt->fetch())
    {
        echo $row['first_name'] . ' ' . $row['last_name'] . "<br>";
    }

    //Получить и отсортировать всех клиентов по имени
    $stmt = $pdo->query("SELECT * FROM clients ORDER BY first_name ASC");
     while ($row = $stmt->fetch())
    {
        echo $row['first_name'] . ' ' . $row['last_name'] . "<br>";
    }
    
    //Посчтить сколько у вас активных клиентов старше 25.
    $stmt = $pdo->query("SELECT COUNT(id) FROM clients WHERE is_active=1 AND age>25");
    echo $stmt->fetch()["COUNT(id)"] . "<br>";  
  
    //Изменить возраст на 45 для клиента номер 2
    $stmt = $pdo->query("UPDATE clients SET age=45 WHERE id=2");

    //Изменит имя клиенту с номером 1
    $stmt = $pdo->query("UPDATE clients SET first_name='Vova' WHERE id=1");
    
    //Деактивировать клиента номер 3 (подсказка - см. поле is_active)
    $stmt = $pdo->query("UPDATE clients SET is_active=0 WHERE id=3");
  
    //Удалить всех не активных клиентов
    $stmt = $pdo->query("DELETE FROM clients WHERE is_active=0");
      
    //Удалить всех созданных вами клиентов
    $stmt = $pdo->query("DELETE FROM clients");
  
    

