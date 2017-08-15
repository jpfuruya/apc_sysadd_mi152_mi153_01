<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FinalizedticketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Final Ticket';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="finalizedticket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Final Ticket', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fin_closedtime',
            'initial_ticket_id',
            'dept_staff',
            'supervisor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
