<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 17/07/2018
 * Time: 11:44
 */

class First_Module_Model_Catalog_Product extends Mage_Catalog_Model_Product
{
    public function getName()
    {
        return strtoupper(parent::getName());
    }
}