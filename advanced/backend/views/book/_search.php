<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\BookSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'udk1') ?>

    <?= $form->field($model, 'udk2') ?>

    <?= $form->field($model, 'udk3') ?>

    <?= $form->field($model, 'avtor') ?>

    <?php // echo $form->field($model, 'io') ?>

    <?php // echo $form->field($model, 'avtor2') ?>

    <?php // echo $form->field($model, 'io2') ?>

    <?php // echo $form->field($model, 'nazva') ?>

    <?php // echo $form->field($model, 'tip') ?>

    <?php // echo $form->field($model, 'izdat') ?>

    <?php // echo $form->field($model, 'god') ?>

    <?php // echo $form->field($model, 'str') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
