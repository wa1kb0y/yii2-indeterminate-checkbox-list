<?php
namespace walkboy\IndeterminateCheckboxList;

use yii;

class IndeterminateCheckboxList extends \yii\bootstrap\Widget
{
    public $parent_attribute_name = 'parent';
    public $children_attribute_name = 'children';
    public $model;
    public $attribute;
    public $source;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $view = $this->getView();
        $assets = IndeterminateCheckboxListAsset::register($view);

        $model = $this->model;

        return $this->render('widget', [
            'model' => $model,
            'attribute' => $this->attribute,
            'source' => $this->source,
            'children' => $this->children_attribute_name,
            'parent' => $this->parent_attribute_name,
        ]);
    }
}
