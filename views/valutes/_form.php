<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Valutes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valutes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_code')->textInput() ?>

    <?= $form->field($model, 'char_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_value')->textInput() ?>

    <?= $form->field($model, 'new_value')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'updated_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
