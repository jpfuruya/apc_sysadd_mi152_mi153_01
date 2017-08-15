<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InitialticketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="initialticket-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ini_subject') ?>

    <?= $form->field($model, 'ini_status') ?>

    <?= $form->field($model, 'ini_priority') ?>

    <?= $form->field($model, 'ini_date') ?>

    <?php // echo $form->field($model, 'ini_limit') ?>

    <?php // echo $form->field($model, 'ROOM_id') ?>

    <?php // echo $form->field($model, 'receptionist') ?>

    <?php // echo $form->field($model, 'ticket_type_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
