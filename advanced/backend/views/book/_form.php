<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\Book $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'udk1')->textInput() ?>

    <?= $form->field($model, 'avtor')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'io')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'nazva')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'tip')->textInput() ?>

    <?= $form->field($model, 'izdat')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'god')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'str')->textInput() ?>

    <?= $form->field($model, 'udk2')->textInput() ?>

    <?= $form->field($model, 'udk3')->textInput() ?>

    <?= $form->field($model, 'avtor2')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'io2')->textInput(['maxlength' => 2]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
