<?php

namespace app\controllers;

use phpDocumentor\Reflection\Types\True_;
use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
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



    public function actionLogin($username, $password){
        $climodel = new $this->modelClass;

        $user = $climodel::find()->where(["username"=>$username])->one();

       if(!$user){
            return json_encode("username ou password invalida");
        }else if($user->status == 0 ){
           return json_encode("Voce foi bloqueado");
       }else if($user->status == 9  ){
           return json_encode("A espera da aprovacao dos admins");
       }else if($user->status == 10  ){
           $hash = $user->password_hash;
           if(Yii::$app->getSecurity()->validatePassword($password, $hash) == true  ){
                return json_encode(["id"=>$user->id,"nome"=>$user->nome, "nome_empresa"=>$user->nome_empresa,"telemovel"=>$user->telemovel,
                    "email"=>$user->email,"imagem"=>$user->imagem,"categoria_id"=>$user->categoria_id, "auth_key"=>$user->auth_key]);
            }else{
               return json_encode("username ou password invalida");
           }
        }

    }
}