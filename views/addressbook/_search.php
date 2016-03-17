<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AddressbookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="addressbook-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'address_book_id') ?>

    <?= $form->field($model, 'customers_id') ?>

    <?= $form->field($model, 'entry_gender') ?>

    <?= $form->field($model, 'entry_company') ?>

    <?= $form->field($model, 'entry_firstname') ?>

    <?php // echo $form->field($model, 'entry_lastname') ?>

    <?php // echo $form->field($model, 'entry_street_address') ?>

    <?php // echo $form->field($model, 'entry_street_address2') ?>

    <?php // echo $form->field($model, 'entry_suburb') ?>

    <?php // echo $form->field($model, 'entry_postcode') ?>

    <?php // echo $form->field($model, 'entry_city') ?>

    <?php // echo $form->field($model, 'entry_state') ?>

    <?php // echo $form->field($model, 'entry_country_id') ?>

    <?php // echo $form->field($model, 'entry_zone_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
