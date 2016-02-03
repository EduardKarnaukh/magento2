<?php

namespace Sophiasstyle\All\Controller\Index;

class GetConfigs extends \Magento\Framework\App\Action\Action {

    protected $scopeConfig;


    public function execute()
    {
        $this->scopeConfig = $this->_objectManager->create('Magento\Framework\App\Config\ScopeConfigInterface');
        if ($this->scopeConfig->getValue('sophiasstyle/general/enable')) {
            echo $this->scopeConfig->getValue('sophiasstyle/general/sophia_text');
        } else {
            echo 'Sophiasstyle extension is disabled';
        }
        return;
    }

}