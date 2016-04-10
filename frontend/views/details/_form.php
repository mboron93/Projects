<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\order_detail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_order')->textInput() ?>

    <?= $form->field($model, 'id_dania')->textInput() ?>

    <?= $form->field($model, 'porcja')->textInput() ?>

    <?= $form->field($model, 'ilosc')->textInput() ?>

    <?= $form->field($model, 'cena')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ulica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'miasto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
