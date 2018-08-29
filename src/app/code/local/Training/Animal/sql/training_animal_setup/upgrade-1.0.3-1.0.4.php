<?php

/** @var Mage_Catalog_Model_Resource_Eav_Mysql4_Setup $installer */
$installer = Mage::getResourceModel("catalog/setup", "default_setup");

$installer->updateAttribute(
    "catalog_product",
    "attribute installed",
    "is_visible_on_front",
    1
);

$installer->endSetup();