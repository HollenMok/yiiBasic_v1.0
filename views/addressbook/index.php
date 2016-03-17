<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AddressbookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Addressbooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addressbook-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Addressbook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'address_book_id',
            'customers_id',
            'entry_gender',
            'entry_company',
            'entry_firstname',
            // 'entry_lastname',
            // 'entry_street_address',
            // 'entry_street_address2',
            // 'entry_suburb',
            // 'entry_postcode',
            // 'entry_city',
            // 'entry_state',
            // 'entry_country_id',
            // 'entry_zone_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
