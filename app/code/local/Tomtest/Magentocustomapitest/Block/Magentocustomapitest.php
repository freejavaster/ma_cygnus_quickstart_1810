<?php
	class Tomtest_Magentocustomapitest_Block_Magentocustomapitest extends Mage_Core_Block_Template
{
public function _prepareLayout()
{
$this->getLayout()->getBlock(‘breadcrumbs’)
->addCrumb(‘home’,
array(‘label’=>Mage::helper(‘catalogsearch’)->__(‘Home’),
‘title’=>Mage::helper(‘catalogsearch’)->__(‘Go to Home Page’),
‘link’=>Mage::getBaseUrl())
)
->addCrumb(‘customer’,
array(‘label’=>Mage::helper(‘customer’)->__(‘Foo’))
);
return parent::_prepareLayout();
}
public function myMessage(){
return “I am Tomtest, This is Toms module.”;
}
}
?>