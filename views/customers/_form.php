<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customers_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_points')->textInput() ?>

    <?= $form->field($model, 'customers_affiliate_points')->textInput() ?>

    <?= $form->field($model, 'affiliate_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_avatars')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_credit')->textInput() ?>

    <?= $form->field($model, 'customers_dob')->textInput() ?>

    <?= $form->field($model, 'customers_email_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_default_address_id')->textInput() ?>

    <?= $form->field($model, 'customers_telephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_newsletter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_paypal_payerid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_paypal_ec')->textInput() ?>

    <?= $form->field($model, 'customers_ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_locked')->textInput() ?>

    <?= $form->field($model, 'customers_paypal_payerids')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_is_registerd')->textInput() ?>

    <?= $form->field($model, 'customers_to_affiliate_status')->textInput() ?>

    <?= $form->field($model, 'affiliate_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_affiliate_level')->textInput() ?>

    <?= $form->field($model, 'super_affiliate_rate')->textInput() ?>

    <?= $form->field($model, 'customers_confirm_email')->textInput() ?>

    <?= $form->field($model, 'affiliate_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'send_affiliate_group_mail')->textInput() ?>

    <?= $form->field($model, 'affiliate_site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'affiliate_blog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'affiliate_referral_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'affiliate_remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apply_affiliater_date')->textInput() ?>

    <?= $form->field($model, 'apply_affiliater_success_date')->textInput() ?>

    <?= $form->field($model, 'is_dropship')->textInput() ?>

    <?= $form->field($model, 'dropshipper_level')->textInput() ?>

    <?= $form->field($model, 'is_wholesale')->textInput() ?>

    <?= $form->field($model, 'wholesale_level')->textInput() ?>

    <?= $form->field($model, 'auto_register')->textInput() ?>

    <?= $form->field($model, 'assign_admin_id')->textInput() ?>

    <?= $form->field($model, 'fb_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'countries')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pp_billing_agreement_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'privileged')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
