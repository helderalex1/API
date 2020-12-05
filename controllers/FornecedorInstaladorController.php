<?php

namespace app\controllers;

use Yii;
use app\models\FornecedorInstalador;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FornecedorInstaladorController implements the CRUD actions for FornecedorInstalador model.
 */
class FornecedorInstaladorController extends ActiveController
{
    public $modelClass = 'app\models\fornecedorinstalador';

    public function actionForn($id){
        $query = new \yii\db\Query;
        $rows = ($query
            ->select('u.*')
            ->from('user u')
            ->leftJoin('fornecedor_instalador fi','fi.fornecedor_id = u.id')
            ->innerJoin('user u1','u1.id =fi.instalador_id ')
            ->where('u.id='.$id))
            ->createCommand();
        $queryResult = $rows->query();
        return $queryResult;
    }
}
