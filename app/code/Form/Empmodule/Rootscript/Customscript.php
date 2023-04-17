<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
ini_set('memory_limit','5G');
error_reporting(E_ALL);

use Magento\Framework\App\Bootstrap;
require realpath(__DIR__).'/../app/bootstrap.php';
$bootstrap = Bootstrap::create(BP,$_SERVER);
$objectManager=$bootstrap->getobjectManager();

$filename='/var/www/html/magento2/custom_script.csv';
$header=['ID', 'SKU','NAME','DESCRIPTION'];
$header=array_combine($header,$header);
$file=fopen($filename,"w");
fputcsv($file,$header);
$sku_id="Books10001";
$product=$objectManager->create('\Magento\Catalog\Model\ProductRepository')->get($sku_id);
$data=[
    'id'=>$product->getId(),
    'sku'=>$product->getSku(),
    'name'=>$product->getName(),
    'description'=>$product->getDescription()
];
fputcsv($file,$data);
fclose($file);
?>
