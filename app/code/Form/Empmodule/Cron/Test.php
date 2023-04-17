<?php
   
 namespace Form\Empmodule\Cron;

    class Test
    {

       public function execute()
       {
         
        $current_date = date("dMY_his");
         $name_of_file='customer_'.$current_date.'.csv';

         $header_data=array(
            'FirstName'=>'Pavithra',
            'LastName'=>'M',
            'Emailid'=>'pavi98@gmail.com',
            'Telephone'=>'9008774773',
         );
          
         file_put_contents('/var/www/html/magento2/var/export/'.$name_of_file,$header_data);
       }

    }
    ?>
