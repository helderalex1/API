<?php

namespace app\controllers;

use Yii;
use app\models\Utilizador;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;

/**
 * UtilizadorController implements the CRUD actions for Utilizador model.
 */
class UtilizadorController extends ActiveController
{
    public $modelClass = 'app\models\Utilizador';
    public function actionEstado()
    {
        $climodel = new $this->modelClass;
        $rec = $climodel::find()->where("Status=".'10')->all();
        if($rec)
            return Json::encode($rec);
        return ['null'];
    }
}
