<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tickettype */

$this->title = 'Create Ticket Type';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Type', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tickettype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
