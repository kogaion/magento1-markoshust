<?php


class Training_Animal_Block_Adminhtml_Animal_Edit_Tab_General extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $form->setHtmlIdPrefix("general");

        $fieldset = $form->addFieldset("general_form", [
            "legend" => $this->__("General Setup")
        ]);

        if ($animal = Mage::registry("current_animal")) {
            $fieldset->addField("entity_id", "label", [
                "label" => $this->__("Entity ID: %s", $animal->getId()),
            ]);
        }

        // for EAV Entities
        //$this->_setFieldset($attributes, $fieldset, $exclude);

        $fieldset->addField("name", "text", [
            "label" => $this->__("Name"),
            "class" => "required-entry",
            "required" => true,
            "name" => "name",
        ]);

        $fieldset->addField("type", "text", [
            "label" => $this->__("Animal Type"),
            "class" => "required-entry",
            "required" => true,
            "name" => "type",
        ]);

        $fieldset->addField("edible", "select", [
            "label" => $this->__("Is Edible"),
            "class" => "required-entry",
            "required" => true,
            "name" => "edible",
            "values" => Mage::getModel("training/entity_attribute_source_maybe")->getOptionArray(),
        ]);

        $form->addValues($this->_getFormData());
        $this->setForm($form);

        return parent::_prepareForm();
    }
}