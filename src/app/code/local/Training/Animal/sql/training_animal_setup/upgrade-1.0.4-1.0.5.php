<?php

/** @var Mage_Catalog_Model_Resource_Eav_Mysql4_Setup $installer */
$installer = Mage::getResourceModel("catalog/setup", "default_setup");

$installer->updateAttribute(
    "catalog_product",
    "attribute installed",
    "frontend_model",
    "training/entity_attribute_frontend_list"
);

$installer->updateAttribute(
    "catalog_product",
    "attribute installed",
    "is_html_allowed_on_front",
    1
);

$installer->endSetup();