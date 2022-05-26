<?php 
    include '../debug/ChromePhp.php';
    
    try {
        // Connect to Database
        $dbhandle = new PDO('sqlite:../../db/test1.db', 'user', 'password', array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ));

        // Gets extra information from the Database
        $sql = 'SELECT * FROM OtherInformation;';
        $stmt = $dbhandle->query($sql);
        $result = null;
        $i = 0;

        while ($data = $stmt->fetch()) {
            $result[$i]['controlType'] = $data['controlType'];
            $result[$i]['title'] = $data['title'];
            $result[$i]['subTitle'] = $data['subTitle'];

            $i++;
        }
    } catch (PDOException $e) {
        echo $e->getMessage() . "\n";
    }

    //Return as JSON
    $dbhandle = NULL;
    echo json_encode($result);
