<?php


class Forth_Blocks_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $blockHtml = $layout->createBlock("forth_blocks/hello_world")->toHtml();
        $this->getResponse()->setBody($blockHtml);
    }
}