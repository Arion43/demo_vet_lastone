<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Application $model */

$this->title = 'Заявка №' . $model->id . ' от ' . Yii::$app->formatter->asDateTime($model->created_at, 'php: H:i:s d.m.Y');

\yii\web\YiiAsset::register($this);
?>
<div class="application-view">

    <h2><?= Html::encode($this->title) ?></h2>


    <p>
        <?= Html::a('Назад', ['/admin'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'id',
            'user_id',
            'created_at',
            [
                'attribute' => 'pet_type_id',
                'value' => $model->petType->title,
            ],
            [
                'attribute' => 'servis_type_id',
                'value' => $model->servisType->title,
            ],
            'date',
            'time',
            [
                'attribute' => 'pay_type_id',
                'value' => $model->payType->title,
            ],
            [
                'attribute' => 'status_id',
                'value' => $model->status->title,
            ],
        ],
    ]) ?>

</div>
