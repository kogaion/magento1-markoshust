<?php

/** @var Mage_Catalog_Model_Resource_Setup $installer */
$installer = Mage::getResourceModel("catalog/setup", "default_setup");

$installer->startSetup();
$data = [
    'label' => 'Script generated ms option',
    'type' => 'varchar',
    'input' => 'multiselect',
    'required' => 0,
    'user_defined' => 1,
    'group' => 'Price',
    'option' => [
        'order' => ['one' => 1, 'two' => 2, 'three' => 5],
        'value' => [
            'one' => [0 => 'Some Label One', 2 => 'Alt One'],
            'two' => [0 => 'Some Label Two', 2 => 'Alt Two'],
            'three' => [0 => 'Some Label Three', 2 => 'Alt Three'],
        ],
    ],

];
$installer->addAttribute("catalog_product", "attribute installed", $data);
$installer->endSetup();
