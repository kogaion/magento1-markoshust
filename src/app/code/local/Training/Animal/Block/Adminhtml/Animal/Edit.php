<?php


class Training_Animal_Block_Adminhtml_Animal_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    protected function _construct()
    {
        parent::_construct();

        $this->_objectId = "id";
        $this->_blockGroup = "training_animal";
        $this->_controller = "adminhtml_animal";
        $this->_mode = "edit";
    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $this->_updateButton("save", "label", $this->__("Save Animal"));
        $this->_updateButton("delete", "label", $this->__("Eat Animal"));

        $this->_addButton("save_and_continue", [
            "label" => $this->__("Save and continue edit"),
            "onclick" => "saveAndContinueEdit()",
            "class" => "save"
        ], 100);

        $this->_formScripts[] = "
            function saveAndContinueEdit() {
                editForm.submit($('edit_form').action + 'back/edit/id/');
            }
        ";

        return $this;
    }

    public function getHeaderText()
    {
        $model = Mage::registry("current_animal");
        if ($model && $model->getId()) {
            return $this->__("Edit animal %s", $this->escapeHtml($model->getName()));
        }
        return $this->__("Add new animal");
    }
}