<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Valutes */

$this->title = 'Create Valutes';
$this->params['breadcrumbs'][] = ['label' => 'Valutes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valutes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
