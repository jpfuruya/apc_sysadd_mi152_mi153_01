<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Finalizedticket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="finalizedticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fin_closedtime')->textInput() ?>

    <?= $form->field($model, 'initial_ticket_id')->textInput() ?>

    <?= $form->field($model, 'dept_staff')->textInput() ?>

    <?= $form->field($model, 'supervisor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
