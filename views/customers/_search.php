<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'customers_id') ?>

    <?= $form->field($model, 'customers_gender') ?>

    <?= $form->field($model, 'customers_nickname') ?>

    <?= $form->field($model, 'customers_firstname') ?>

    <?= $form->field($model, 'customers_lastname') ?>

    <?php // echo $form->field($model, 'customers_points') ?>

    <?php // echo $form->field($model, 'customers_affiliate_points') ?>

    <?php // echo $form->field($model, 'affiliate_amount') ?>

    <?php // echo $form->field($model, 'customers_avatars') ?>

    <?php // echo $form->field($model, 'customers_credit') ?>

    <?php // echo $form->field($model, 'customers_dob') ?>

    <?php // echo $form->field($model, 'customers_email_address') ?>

    <?php // echo $form->field($model, 'customers_default_address_id') ?>

    <?php // echo $form->field($model, 'customers_telephone') ?>

    <?php // echo $form->field($model, 'customers_fax') ?>

    <?php // echo $form->field($model, 'customers_password') ?>

    <?php // echo $form->field($model, 'customers_newsletter') ?>

    <?php // echo $form->field($model, 'customers_paypal_payerid') ?>

    <?php // echo $form->field($model, 'customers_paypal_ec') ?>

    <?php // echo $form->field($model, 'customers_ip_address') ?>

    <?php // echo $form->field($model, 'customers_locked') ?>

    <?php // echo $form->field($model, 'customers_paypal_payerids') ?>

    <?php // echo $form->field($model, 'customers_is_registerd') ?>

    <?php // echo $form->field($model, 'customers_to_affiliate_status') ?>

    <?php // echo $form->field($model, 'affiliate_code') ?>

    <?php // echo $form->field($model, 'customers_affiliate_level') ?>

    <?php // echo $form->field($model, 'super_affiliate_rate') ?>

    <?php // echo $form->field($model, 'customers_confirm_email') ?>

    <?php // echo $form->field($model, 'affiliate_email') ?>

    <?php // echo $form->field($model, 'send_affiliate_group_mail') ?>

    <?php // echo $form->field($model, 'affiliate_site') ?>

    <?php // echo $form->field($model, 'affiliate_blog') ?>

    <?php // echo $form->field($model, 'affiliate_referral_place') ?>

    <?php // echo $form->field($model, 'affiliate_remarks') ?>

    <?php // echo $form->field($model, 'apply_affiliater_date') ?>

    <?php // echo $form->field($model, 'apply_affiliater_success_date') ?>

    <?php // echo $form->field($model, 'is_dropship') ?>

    <?php // echo $form->field($model, 'dropshipper_level') ?>

    <?php // echo $form->field($model, 'is_wholesale') ?>

    <?php // echo $form->field($model, 'wholesale_level') ?>

    <?php // echo $form->field($model, 'auto_register') ?>

    <?php // echo $form->field($model, 'assign_admin_id') ?>

    <?php // echo $form->field($model, 'fb_id') ?>

    <?php // echo $form->field($model, 'twitter_id') ?>

    <?php // echo $form->field($model, 'countries') ?>

    <?php // echo $form->field($model, 'pp_billing_agreement_id') ?>

    <?php // echo $form->field($model, 'privileged') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
