<?php

namespace app\models;

use yii\base\Model;


class SendForm extends Model
{
    public $number;
    public $message;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['number', 'message'], 'required']
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

}