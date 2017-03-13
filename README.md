# yii2-indeterminate-checkbox-list
Yii2 implementation of this demo: https://css-tricks.com/examples/IndeterminateCheckboxes/

# Installation
Add `"walkboy/yii2-indeterminate-checkbox-list": "dev-master"` to composer.json and run `composer update`

# Usage
```
<?= \walkboy\IndeterminateCheckboxList\IndeterminateCheckboxList::widget([
    'model' => $model,
    'attribute' => 'categories_array',
    'source' => Work::find()->orderBy('title')->where('parent_id IS NULL')->orderBy('parent_id')->all(),
    'parent_attribute_name' => 'parent_id',
    'children_attribute_name' => 'children',
]) ?>
```
