<?php

namespace app\controllers;

use Yii;
use app\models\Produto;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProdutoController implements the CRUD actions for Produto model.
 */
class ProdutoController extends ActiveController
{
    public $modelClass = 'app\models\Produto';
}
