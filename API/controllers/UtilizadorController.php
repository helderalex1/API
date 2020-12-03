<?php

namespace app\controllers;

use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\filters\auth\QueryParamAuth;
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
    public $modelClass = 'app\models\User';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
        ];
        return $behaviors;
    }

    public function actionTotal ()
    {
        $db = new $this->modelClass;
        $ret = $db::find()->all();
        return ['total' => count($ret)];
    }

    public function actionNome ($id)
    {
        $db = new $this->modelClass;
        $ret = $db::find()->where("id=" . $id)->one();
        if ($ret)
            return ['id' => $id, 'Nome' => $ret->Nome];
        return ['id' => $id, 'Nome' => "null"];
    }

    public function actionEstado()
    {
        $climodel = new $this->modelClass;
        $rec = $climodel::find()->where("Status=".'10')->all();
        if($rec)
            return Json::encode($rec);
        return ['null'];
    }
}
