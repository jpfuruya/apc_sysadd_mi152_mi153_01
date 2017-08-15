<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Room;
use yii\helpers\ArrayHelper; 
use app\models\Employee;
use app\models\Tickettype;
/* @var $this yii\web\View */
/* @var $model app\models\Initialticket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="initialticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ini_subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ini_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ini_priority')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ini_date')->textInput() ?>

    <?= $form->field($model, 'ini_limit')->textInput() ?>

    <?= $form->field($model, 'ROOM_id')->dropDownList(
        ArrayHelper::map(Room::find()->all(),'id','room_no')    , 
    ['prompt'=>'Select Information'] 
    ) ?>

    <?= $form->field($model, 'receptionist')->dropDownList(
    ArrayHelper::map(Employee::find()->all(),'id','emp_name')    , 
    ['prompt'=>'Select Information'] 


    )
     ?>

    <?= $form->field($model, 'ticket_type_id')->dropDownList(
    ArrayHelper::map(Tickettype::find()->all(),'id','type_name')    , 
    ['prompt'=>'Select Information'] 


    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
