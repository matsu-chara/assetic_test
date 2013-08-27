<?php
require '../vendor/autoload.php';

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;

$css = new AssetCollection(array(
    new GlobAsset('css/*'),
));

header('Content-Type: text/css');
echo $css->dump();
