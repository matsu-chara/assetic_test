<?php
require '../vendor/autoload.php';

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Filter\CoffeeScriptFilter;

$coffeebin = 'C:\Users\Matsubayashi\AppData\Roaming\npm\coffee';

$js = new AssetCollection(array(
    new FileAsset('js/a.coffee', array(new CoffeeScriptFilter($coffeebin))),
    new FileAsset('js/b.js'),
));

header('Content-Type: text/javascript');
echo $js->dump();
