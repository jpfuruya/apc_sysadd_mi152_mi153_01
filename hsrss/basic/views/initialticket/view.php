<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Initialticket */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Initial Ticket', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="initialticket-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'ini_subject',
            'ini_status',
            'ini_priority',
            'ini_date',
            'ini_limit',
            'ROOM_id',
            'receptionist',
            'ticket_type_id',
        ],
    ]) ?>

</div>
