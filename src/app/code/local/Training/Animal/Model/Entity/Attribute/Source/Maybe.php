<?php


class Training_Animal_Model_Entity_Attribute_Source_Maybe extends Mage_Eav_Model_Entity_Attribute_Source_Boolean
{
    public function getAllOptions()
    {
        if (empty($this->_options)) {
            $this->_options = [
                [
                    "label" => Mage::helper("training_animal")->__("Maybe"),
                    "value" => 2,
                ],
                [
                    "label" => Mage::helper("training_animal")->__("Yes"),
                    "value" => 1,
                ],
                [
                    "label" => Mage::helper("training_animal")->__("No"),
                    "value" => 0,
                ],
            ];
        }

        return $this->_options;
    }
}