<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TickettypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tickettypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tickettype-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tickettype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
