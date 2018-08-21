<?php


class Forth_Blocks_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $blockHtml = $layout
            ->createBlock("forth_blocks/hello_world")
            ->toHtml();

        $this->getResponse()->setBody($blockHtml);
    }

    public function templateAction()
    {
        $layout = $this->getLayout();
        $block = $layout
            ->createBlock("core/template")
            ->setTemplate("forth_blocks/some/random.phtml") // the function applies to Mage_Core_Block_Template children
        ;

        var_dump($block->getTemplateFile());
        $this->getResponse()->setBody($block->toHtml());
    }
}