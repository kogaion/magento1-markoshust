<?php


class Training_Animal_Adminhtml_AnimalController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->redir("*/*/list");
    }

    public function listAction()
    {
        $this->_getSession()->setFormData([]);

        $this->_title($this->__("Catalog"))
            ->_title($this->__("Animals"));

        $this->loadLayout();

        $this->_setActiveMenu("catalog/training_animal");
        $this->_addBreadcrumb($this->__("Catalog"), $this->__("Catalog"));
        $this->_addBreadcrumb($this->__("Animals"), $this->__("Animals"));

        $this->renderLayout();
    }

    protected function _isAllowed()
    {
        return parent::_isAllowed()
            && Mage::getSingleton("admin/session")
                ->isAllowed("catalog/training_animal");
    }

    public function gridAction()
    {
        $this->loadLayout()->renderLayout();
    }

    public function newAction()
    {
        $this->_forward("edit");
    }

    public function editAction()
    {
        $model = Mage::getModel("training/animal");
        try {
            Mage::register("current_animal", $model);
        } catch (Exception $e) {

        }

        $id = $this->getRequest()->getParam("id");

        try {

            if ($id) {
                if (!$model->load($id)->getId()) {
                    Mage::throwException($this->__("Animal not found: $id"));
                }
            }

            if ($model->getId()) {
                $pageTitle = $this->__(
                    "Edit %s (%s)",
                    $model->getName(),
                    $model->getType()
                );

            } else {
                $pageTitle = $this->__("New animal");
            }
            $this->_title($this->__("Catalog"))
                ->_title($this->__("Animals"))
                ->_title($pageTitle);

            $this->loadLayout();

            $this->_setActiveMenu("catalog/training_animal");
            $this->_addBreadcrumb($this->__("Catalog"), $this->__("Catalog"));
            $this->_addBreadcrumb($this->__("Animals"), $this->__("Animals"));
            $this->_addBreadcrumb($pageTitle, $pageTitle);

            $data = Mage::getSingleton("adminhtml/session")->getFormData(true);
            if (!empty($data)) {
                $model->addData($data);
            }

            $this->renderLayout();

        } catch (Exception $e) {
            $this->logException($e);
            $this->redir("*/*/list");
        }
    }

    public function saveAction()
    {
        if ($data = $this->getRequest()->getPost()) {
            $this->_getSession()->setFormData($data);
            $model = Mage::getModel("training/animal");
            $id = $this->getRequest()->getParam("id");

            try {
                if ($id) {
                    if (!$model->load($id)->getId()) {
                        Mage::throwException($this->__("Animal not found: $id"));
                    }
                }
                $model->addData($data);
                $model->save();

                $this->_getSession()->addSuccess($this->__("Animal was successfully saved"));
                $this->_getSession()->setFormData(false);

                if ($this->getRequest()->getParam('back')) {
                    $this->redir("*/*/edit", ["id" => $model->getId()]);
                } else {
                    $this->redir("*/*/list");
                }

            } catch (Exception $e) {
                $this->logException($e);
                if ($model && $model->getId()) {
                    $this->redir("*/*/edit", ["id" => $model->getId()]);
                } else {
                    $this->redir("*/*/new", []);
                }
            }
        }

        $this->redir("*/*/list");
    }

    public function deleteAction()
    {
        $model = Mage::getModel("training/animal");
        $id = $this->getRequest()->getParam("id");

        try {

            if ($id) {
                if (!$model->load($id)->getId()) {
                    Mage::throwException($this->__("Animal not found: $id"));
                }

                $name = $model->getName();
                $model->delete();

                $this->_getSession()->addSuccess($this->__("Animal %s (%s) was successfully consumed", $name, $id));

                $this->redir("*/*");
            }
        } catch (Exception $e) {
            $this->logException($e);
            $this->redir("*/*");
        }
    }

    protected function redir($path, $arguments = [])
    {
        parent::_redirect($path, $arguments);
//        exit;
    }

    protected function logException(Exception $e)
    {
        Mage::logException($e);
        $this->_getSession()->addError($e->getMessage());
    }
}