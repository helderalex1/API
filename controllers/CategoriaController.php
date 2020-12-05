<?php

namespace app\controllers;

use Yii;
use app\models\Categoria;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoriaController implements the CRUD actions for Categoria model.
 */
class CategoriaController extends ActiveController
{
    public $modelClass = 'app\models\Categoria';
}
