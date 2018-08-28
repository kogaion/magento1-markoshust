<?php


class Fifth_Database_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function storesAction()
    {
        $storesCollection = Mage::getResourceModel("core/store_collection");
        foreach ($storesCollection as $store) {
            var_dump(get_class($store));
            var_dump($store->getData());
            var_dump($store->getRootCategoryId());
            $category = Mage::getModel("catalog/category")->load($store->getRootCategoryId());
            var_dump($category->getData());
        }
    }

    public function categoriesAction()
    {
        $categories = Mage::getResourceModel("catalog/category_collection")
            ->addFieldToFilter("level", 1) // filter
            ->addAttributeToSelect("name") // load extra fields for EAV entities for which we do joins
        ;

        foreach ($categories as $category) {
            var_dump($category->getId() . ', ' . $category->getName());
            $childrenIds = explode(",", $category->getChildren());
            foreach ($childrenIds as $childId) {
                $childCategory = Mage::getModel("catalog/category")
                    ->load($childId);
                Zend_Debug::dump($childCategory->getData());
            }
        }
    }
}