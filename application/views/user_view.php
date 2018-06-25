<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>User View</title>
</head>
<body>

    <h1>
    
    <?php

        // echo $results;
    
        foreach($results as $object)
        {
            echo $object->id        . "<br/>";
            echo $object->username  . "<br/>";
            echo $object->password  . "<br/>";
        }

    ?>  

    </h1>  

</body>
</html>