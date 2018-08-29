<?php

class Training_Animal_Model_Entity_Attribute_Frontend_List extends Mage_Eav_Model_Entity_Attribute_Frontend_Abstract
{
    public function getValue(Varien_Object $object)
    {
        if ($this->getConfigField("input") == "multiselect") {

            $valueId = $object->getData($this->getAttribute()->getAttributeCode());
            $value = $this->getOption($valueId);

            if (is_array($value)) {
                $output = "
                    <ul>
                        <li>
                        " . implode("</li><li>", $value) . "
                        </li>
                    </ul>
                ";
                return $output;
            }

            return $value;
        }

        return parent::getValue($object);
    }
}