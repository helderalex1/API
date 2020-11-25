<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Utilizadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utilizador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utilizador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Id_categoria',
            'Id_funcao',
            'Estado',
            'Nome',
            //'Nome_empresa',
            //'Email:email',
            //'Pass',
            //'Telemovel',
            //'Imagem',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
