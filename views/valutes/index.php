<?php

use app\models\Valutes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ValutesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Currencies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valutes-index">

    <p>
        <button class="btn btn-success updateCurrenciesInformation">Update information</button>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                    'format' => 'raw',
                    'attribute' => 'old_value',
                    'value' => function ($model) {
                        if ($model->old_value <= $model->new_value) {
                            return "<span style='color: #25af36'>$model->old_value</span>";
                        }

                        return "<span style='color: red'>$model->old_value</span>";
                    }
            ],
            [
                    'format' => 'raw',
                    'attribute' => 'new_value',
                    'value' => function ($model) {
                        if ($model->old_value <= $model->new_value) {
                            return "<span style='color: #25af36'>$model->new_value</span>";
                        }

                        return "<span style='color: red'>$model->new_value</span>";
                    }
            ],
            'char_code',
//            [
//                'class' => ActionColumn::className(),
//                'urlCreator' => function ($action, Valutes $model, $key, $index, $column) {
//                    return Url::toRoute([$action, 'id' => $model->id]);
//                 }
//            ],
        ],
    ]); ?>


</div>
