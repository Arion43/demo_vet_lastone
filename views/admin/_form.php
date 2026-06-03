<?php

use app\models\PayType;
use app\models\PetType;
use app\models\ServisType;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Application $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-form">

    <h2>Ваши данные</h2>

    <?php $form = ActiveForm::begin(); ?>


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


    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
