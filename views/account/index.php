<?php

use app\models\Application;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\LinkPager;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */


?>
<div class="application-index">

    <h2>Создание заявки</h2>

    <p>
        <?= Html::a('Записаться на приём', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'layout' => "{summary} \n {items} \n {pager}",
        'itemView' => 'item',
        'pager' => [
        'class' => LinkPager::class
        ]
    ]) ?>

    <?php Pjax::end(); ?>

</div>
