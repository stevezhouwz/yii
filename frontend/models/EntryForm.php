<?php
/**
 * Created by PhpStorm.
 * User: zhou
 * Date: 2019/1/14
 * Time: 14:44
 */

namespace frontend\models;

use yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email','email']
        ];
    }

}