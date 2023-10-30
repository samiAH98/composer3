<?php

require 'vendor/autoload.php';

use \CowSay\Cow;
 
$talk = new Cow ('Hello, Farm');
$talk->setTongue('U');

echo $talk;


?>