<?php


class Training_Animal_Block_Adminhtml_Animal_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form([
            "id" => 'edit_form',
            "action" => $this->getUrl("*/*/save", [
                "id" => $this->getRequest()->getParam("id"),
            ]),
            "method" => "post",
            "encType" => "multipart/form-data",
        ]);
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}