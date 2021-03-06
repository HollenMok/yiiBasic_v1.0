<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Addressbook */

$this->title = 'Update Addressbook: ' . ' ' . $model->address_book_id;
$this->params['breadcrumbs'][] = ['label' => 'Addressbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->address_book_id, 'url' => ['view', 'id' => $model->address_book_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="addressbook-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
