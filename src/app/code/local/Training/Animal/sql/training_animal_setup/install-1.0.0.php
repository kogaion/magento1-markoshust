<?php

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;

$installer->startSetup();
$installer->run("

    create table animal_entity_flat(
    
      `animal_id` integer unsigned not null auto_increment primary key,
      `name` varchar(255) not null default '',
      `type` varchar(255) not null default '',
      `edible` tinyint(1) unsigned default 1,
      `comment` text default null, 
      `updated_at` datetime,
      `created_at` datetime 
    
    ) engine=innodb comment='the animals' default charset=utf8 default collate=utf8_general_ci;
    

");
$installer->endSetup();

