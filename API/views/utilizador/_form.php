<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Utilizador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="utilizador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_categoria')->textInput() ?>

    <?= $form->field($model, 'Id_funcao')->textInput() ?>

    <?= $form->field($model, 'Estado')->textInput() ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nome_empresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pass')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telemovel')->textInput() ?>

    <?= $form->field($model, 'Imagem')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
