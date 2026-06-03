<?php

use app\models\PayType;
use app\models\PetType;
use app\models\ServisType;
use app\models\Status;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ApplicationSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'pet_type_id')->dropDownList(
        PetType::getPetType(), ['prompt' => 'Выберите вашего питомца']
    ) ?>

    <?= $form->field($model, 'servis_type_id')->dropDownList(
        ServisType::getServisType(), ['prompt' => 'Выберите тип услуги']
    ) ?>

    <?= $form->field($model, 'date')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'time')->textInput(['type' => 'time']) ?>

    <?= $form->field($model, 'pay_type_id')->dropDownList(
        PayType::getPayType(), ['prompt' => 'Выберите тип оплаты']
    ) ?>

    <?= $form->field($model, 'status_id')->dropDownList(
        Status::getStatus(), ['prompt' => 'Выберите статус заявки']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Сброс', ['/admin'], ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
