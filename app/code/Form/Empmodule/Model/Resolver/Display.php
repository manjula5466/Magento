<?php
declare(strict_types=1);
namespace Form\Empmodule\Model\Resolver;


use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Customer\Model\GroupFactory;

class Display implements ResolverInterface{

    protected $_group;
    public function __construct(
        GroupFactory $group
    )
    { 
        $this->_group=$group;
    }
public function resolve(

        Field $field,
        $content,
        ResolveInfo $info,
        array $value =null,
        array $args = null
)
{
    try{
        $stores =[
            'customer_group_code'=>$args['input']['Groupname'],
            'tax_class_id'=>3 
        ];
          $groupdata=$this->_group->create();
          $groupdata->setData($stores);
          $groupdata->save();

        return[
            "GroupId"=>$args['input']['GroupId']
             "GroupName"=>$args['input']['GroupName']

        ];
    }
    //return $data_info;
}
    catch(\throwable $th)
    {

    
    $th=>getMessage();


}        
    
}
?>
    