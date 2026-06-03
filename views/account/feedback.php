<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Feedback $model */
/** @var ActiveForm $form */
?>
<div class="account-feedback">

    <h3>Оставьте отзыв об услуге</h3>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-outline-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- account-feedback -->
