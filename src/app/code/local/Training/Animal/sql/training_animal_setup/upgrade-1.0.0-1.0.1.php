<?php

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;

$installer->startSetup();
$installer->run("

    alter table `{$installer->getTable("training/animal")}` 
    add column `training` tinyint unsigned not null default 0 after `edible`
    
");
$installer->endSetup();