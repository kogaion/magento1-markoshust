<?php


class Training_Animal_Block_Adminhtml_Animal_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _construct()
    {
        $this->setId("training.animal.list");
        $this->setDefaultSort("id");
        $this->setUseAjax(true);

        parent::_construct();
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel("training/animal_collection");
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $this->addColumn('id', [
            'header' => $this->__('ID'),
            'index' => 'animal_id',
            'align' => 'right',
            'width' => '50px'
        ]);

        $this->addColumn('name', [
            'header' => $this->__('Name'),
            'index' => 'name',
            'column_css_class' => 'name',
        ]);

        $this->addColumn('type', [
            'header' => $this->__('Type'),
            'index' => 'type',

        ]);

        $this->addColumn('edible', [
            'header' => $this->__('Edible'),
            'index' => 'edible',
            'type' => 'options',
            'options' => Mage::getModel("training/entity_attribute_source_maybe")->getOptionArray(),
        ]);

        $this->addColumn('action', [
            'header' => $this->__('Action'),
            'type' => 'action',
            'getter' => 'getId',
            'actions' => [
                [
                    "caption" => $this->__("Edit"),
                    "url" => ["base" => "*/*/edit"],
                    "field" => "id",
                ]
            ],
            "filter" => false,
            "sortable" => false,
        ]);

        return parent::_prepareColumns();
    }

    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current' => true));
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}