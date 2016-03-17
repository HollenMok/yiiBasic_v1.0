<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Addressbook */

$this->title = $model->address_book_id;
$this->params['breadcrumbs'][] = ['label' => 'Addressbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addressbook-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->address_book_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->address_book_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'address_book_id',
            'customers_id',
            'entry_gender',
            'entry_company',
            'entry_firstname',
            'entry_lastname',
            'entry_street_address',
            'entry_street_address2',
            'entry_suburb',
            'entry_postcode',
            'entry_city',
            'entry_state',
            'entry_country_id',
            'entry_zone_id',
        ],
    ]) ?>

</div>
