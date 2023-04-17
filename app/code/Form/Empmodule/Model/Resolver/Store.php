<?php
declare(strict_types=1);
namespace Form\Empmodule\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Store implements ResolverInterface
{
     /**
      * @inheritdoc
      */
     public function resolve(
        Field $field,
        $content,
        ResolveInfo $info,
        array $value =null,
        array $args = null  
){ 
    $stores = [
       [ 
           'FirstName' => "Pavithra",
           'LastName' => "M",
           'Email'=>'pavi12@gmail.com',
           'Telephone'=>'6783789563',
           'City' => 'Bangalore',
           'State'=>'Karnataka',
           'Country'=>'India'
            
       ],
       [
        
        'FirstName' => "Shakila",
        'LastName' => "R",
        'Email'=>'shakila45@gmail.com',
        'Telephone'=>'7896567456',
        'City' => 'Chennai',
        'State'=>'Tamilnadu',
        'Country'=>'India'
        
       ]
    ];
    return [
        'total_count'=>count($stores),
        'items'=>$stores      
    ];
  } 
}
?>