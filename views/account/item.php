<?php

use app\models\Status;
use yii\helpers\Html;
?>
<div class="card">
  <h5 class="card-header"><?= 'Заявка №' . $model->id . ' от ' . Yii::$app->formatter->asDateTime($model->created_at, 'php: H:i:s d.m.Y'); ?></h5>
  <div class="card-body">
    <h5 class="card-title"><strong>Статус: </strong><?= $model->status->title ?></h5>
    <p class="card-text"><strong>Тип питомца: </strong><?= $model->petType->title ?></p>
    <p class="card-text"><strong>Тип услуги: </strong><?= $model->servisType->title ?></p>
    <p class="card-text"><strong>Тип оплаты: </strong><?= $model->payType->title ?></p>
    <div>
      <?php if ($model->feedback): ?>
        <b>Отзыв: </b><?= $model->feedback->title ?>
      <?php endif ?>
    </div>
    <div class='my-1'>

      <?= $model->status_id === Status::getAliasStatusedId('done') && !$model->feedback
        ? Html::a('Оставить отзыв', ['feedback', 'id' => $model->id], ['class' => 'btn btn-outline-primary'])
        : '' ?>


      <?= Html::a('Подробнее', ['view', 'id' => $model->id], ['class' => 'btn btn-outline-primary']) ?> 
    </div>
  </div>
</div>