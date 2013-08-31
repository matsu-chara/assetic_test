<?php
require '../vendor/autoload.php';

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;

$js = new AssetCollection(array(
    new GlobAsset('js/*')
));

header('Content-Type: text/javascript');
echo $js->dump();
