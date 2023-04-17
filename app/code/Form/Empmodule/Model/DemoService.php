<?php
namespace Form\Empmodule\Model;

class DemoService implements \Form\Empmodule\Api\DemoInterface
{
    /**
     * Get name
     * 
     * @return string
     */
   public function getProfile()
   {
     return [[
      'firstname'=> 'manjula',
     'lastname' => 'n',
     'email'=> 'emb-manjnag@embitel.com',
     'telephone'=> '9008672662',
     'address'=>'bangalore'
   ],
    [ 'firstname'=> 'pavi',
      'lastname'=> 'm',
      'email'=> 'pavi98@gmail.com',
      'telephone'=> '9987678593', 
      'address'=> 'bangalore'
  ]
];
   
  }
}
?>