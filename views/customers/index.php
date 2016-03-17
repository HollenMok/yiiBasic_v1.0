<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'customers_id',
            'customers_gender',
            'customers_nickname',
            'customers_firstname',
            'customers_lastname',
            // 'customers_points',
            // 'customers_affiliate_points',
            // 'affiliate_amount',
            // 'customers_avatars',
            // 'customers_credit',
            // 'customers_dob',
            // 'customers_email_address:email',
            // 'customers_default_address_id',
            // 'customers_telephone',
            // 'customers_fax',
            // 'customers_password',
            // 'customers_newsletter',
            // 'customers_paypal_payerid',
            // 'customers_paypal_ec',
            // 'customers_ip_address',
            // 'customers_locked',
            // 'customers_paypal_payerids',
            // 'customers_is_registerd',
            // 'customers_to_affiliate_status',
            // 'affiliate_code',
            // 'customers_affiliate_level',
            // 'super_affiliate_rate',
            // 'customers_confirm_email:email',
            // 'affiliate_email:email',
            // 'send_affiliate_group_mail',
            // 'affiliate_site',
            // 'affiliate_blog',
            // 'affiliate_referral_place',
            // 'affiliate_remarks:ntext',
            // 'apply_affiliater_date',
            // 'apply_affiliater_success_date',
            // 'is_dropship',
            // 'dropshipper_level',
            // 'is_wholesale',
            // 'wholesale_level',
            // 'auto_register',
            // 'assign_admin_id',
            // 'fb_id',
            // 'twitter_id',
            // 'countries',
            // 'pp_billing_agreement_id',
            // 'privileged',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
