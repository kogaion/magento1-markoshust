<?php
/**
 * Created by PhpStorm.
 * User: lucian.toza
 * Date: 20/07/2018
 * Time: 12:05
 */

require_once 'Mage' . DS . 'Catalog' . DS . 'controllers' . DS . 'CategoryController.php';
class Second_Module_Catalog_CategoryController extends Mage_Catalog_CategoryController
{
    public function viewAction()
    {
        echo('rewrite the view action');

        return parent::viewAction();
    }
}