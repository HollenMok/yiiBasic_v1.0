<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Addressbook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="addressbook-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customers_id')->textInput() ?>

    <?= $form->field($model, 'entry_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_street_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_street_address2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_suburb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_postcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entry_country_id')->textInput() ?>

    <?= $form->field($model, 'entry_zone_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
