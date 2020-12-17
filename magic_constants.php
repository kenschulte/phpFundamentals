<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Constants</title>
</head>
<body>
<?php
////////////////////////////////////////////////////////////
    echo "__LINE__: " . __LINE__ . "<br/>";
    echo "__FILE__: " . __FILE__ . "<br/>";
    echo "__DIR__: " . __DIR__ . "<br/>";
    echo "__FUNCTION__: " . __FUNCTION__ . "<br/>";
    echo "__CLASS__: " . __CLASS__ . "<br/>";
    echo "__TRAIT__: " . __TRAIT__ . "<br/>";
    echo "__METHOD__: " . __METHOD__ . "<br/>";
    echo "__NAMESPACE__: " . __NAMESPACE__ . "<br/>";
////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////
    echo (defined('__DIR__') ? '__DIR__ is defined' : '__DIR__ is NOT defined' . PHP_EOL);
    echo "<hr/>";
    echo (defined('__FILE__') ? '__FILE__ is defined' : '__FILE__ is NOT defined' . PHP_EOL);
    echo "<hr/>";
    echo (defined('PHP_VERSION') ? 'PHP_VERSION is defined' : 'PHP_VERSION is NOT defined') . PHP_EOL;
    echo "<hr/>";
    echo 'PHP Version: ' . PHP_VERSION . PHP_EOL; 
    echo "<hr/>";
////////////////////////////////////////////////////////////

    echo "BEGIN TRAIT" . "<br/>";
    trait PeanutButter 
    {
        function traitName() {echo __TRAIT__;}
    }
    
    trait PeanutButterAndJelly 
    {
        use PeanutButter;
    }
    
    class Test 
    {
        use PeanutButterAndJelly;
    }
    
    (new Test)->traitName(); //PeanutButter
    echo  "<br/>" . "END TRAIT" . "<br/>";
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
echo "<hr/>";
    phpinfo();
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////


?>
</body>
</html>