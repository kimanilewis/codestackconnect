<?php
include 'DynamicMenuController.php';

class mySampleMenu extends DynamicMenuController {
    private $merchantServices;
    private $merchantFunctions;
    private $customerStats;
    
    
    public function construct() {
        parent::__construct();
        $this->merchantServices = "1. Create invoice\n2. Search invoice\n3. Update invoice\n4. Reject payment\n5. Transaction statistics";
        $this->merchantFunctions= NEW merchantFunctions($this->_msisdn);
        $this->customerStats = $this->merchantFunctions->init();
        
    }
    function startPage (){
            
    
}
}
$MerchantMenu = new MpesaMerchantMenu;
echo $MerchantMenu->navigate
();
