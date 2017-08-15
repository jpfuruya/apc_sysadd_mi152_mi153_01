<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Finalizedticket */

$this->title = 'Create Final Ticket';
$this->params['breadcrumbs'][] = ['label' => 'Final Ticket', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="finalizedticket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
