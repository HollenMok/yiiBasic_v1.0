<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Customers</h1>
<ul>
<?php foreach ($customers as $customer):?>
 <li>
    <?=Html::encode("{$customer->customers_id}({$customer->customers_email_address})")?>:
    <?= $customer->customers_firstname?>
 </li>
<?php endforeach;?>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>

