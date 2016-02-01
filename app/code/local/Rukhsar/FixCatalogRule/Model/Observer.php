<?php
class Rukhsar_FixCatalogRule_Model_Observer extends Mage_CatalogRule_Model_Observer
{
    /**
     * Daily update catalog price rule by cron
     * Update include interval 3 days - current day - 1 days before + 1 days after
     * This method is called from cron process, cron is working in UTC time and
     * we should generate data for interval -1 day ... +1 day
     *
     * @param   Varien_Event_Observer $observer
     *
     * @return  Mage_CatalogRule_Model_Observer
     */
    public function dailyCatalogUpdate($observer)
    {
        /** @var $resource Mage_CatalogRule_Model_Resource_Rule */
		/*
        $resource = Mage::getResourceSingleton('catalogrule/rule');
        $resource->applyAllRules();
		*/

		Mage::getModel('catalogrule/rule')->applyAll();
		Mage::getModel('catalogrule/flag')->loadSelf()
			->setState(0)
			->save();

        return $this;
    }
}
