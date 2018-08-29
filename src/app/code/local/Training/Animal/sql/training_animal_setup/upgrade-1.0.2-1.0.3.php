<?php

/** @var Mage_Catalog_Model_Resource_Eav_Mysql4_Setup $installer */
$installer = Mage::getResourceModel("catalog/setup", "default_setup");

$installer->updateAttribute(
    "catalog_product",
    "attribute installed",
    "backend_model",
    "eav/entity_attribute_backend_array"
);



$installer->endSetup();