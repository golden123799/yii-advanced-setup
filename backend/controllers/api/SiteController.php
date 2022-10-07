<?php

namespace backend\controllers\api;

use Yii;
use yii\rest\ActiveController;

class SiteController extends ActiveController
{
    public $modelClass = 'common\models\User';

    public function actionIndex()
    {
        return ["testing hello world"];
    }
}
