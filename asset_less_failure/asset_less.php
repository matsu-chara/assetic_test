<?php
require '../vendor/autoload.php';

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Filter\LessFilter;

$nodebin = 'C:\Program Files\nodejs\node.exe';
$nodepaths = array('C:\Users\Matsubayashi\AppData\Roaming\npm\node_modules');

$css = new AssetCollection(array(
    new FileAsset('css/a.less', array(new LessFilter($nodebin, $nodepaths))),
    new FileAsset('css/b.css'),
));

// header('Content-Type: text/css');
echo $css->dump();
