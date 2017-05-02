<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php

function printRecursive($model, $attribute, $source, $parent_attr, $children_attr)
{
    $classname = \yii\helpers\StringHelper::basename(get_class($model));

    echo '<ul>';
    foreach ($source as $item) 
    {
        $selected = '';
        if (is_array($model->{$attribute})){
            if (in_array($item->id, $model->{$attribute})){
                $selected = 'checked';
            }
        }

        if ($item->{$parent_attr} === null) {
            ?>
            <li>
                <input
                    type="checkbox"
                    class="cbx-indeterminate"
                    name="<?= $classname.'['.$attribute.'][]' ?>"
                    id="checkbox-<?= $item->id ?>"
                    value="<?= $item->id ?>"
                    <?= $selected ?>
                >
                <label for="checkbox-<?= $item->id ?>"><?= $item->title ?></label>

            <?php
            if ($item->{$children_attr}) {
                printRecursive($model, $attribute, $item->{$children_attr}, $parent_attr, $children_attr);
            }
            ?>
            </li>
        <?php
        } else {
            ?>
            <li>
                <input
                    type="checkbox"
                    class="cbx-indeterminate"
                    name="<?= $classname.'['.$attribute.'][]' ?>"
                    id="checkbox-<?= $item->id ?>"
                    value="<?= $item->id ?>"
                    <?= $selected ?>
                >
                <label for="checkbox-<?= $item->id ?>"><?= $item->title ?></label>
            </li>
        <?php
        }
    }
    echo '</ul>';
}
?>


<div class="indeterminate-checkbox-list">
    <?= printRecursive($model, $attribute, $source, $parent, $children) ?>
</div>



