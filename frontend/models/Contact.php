<?php

namespace frontend\models;

use Yii;
use yii\bootstrap\ActiveForm;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $textArea
 */
class Contact extends \yii\db\ActiveRecord
{
    public $name;
    public $email;
    public $textArea;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'textArea'], 'required', 'trim'],
            [['textArea'], 'string'],
            [['name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'textArea' => 'Text Area',
        ];
    }

    public function writeContact($model)
    {
        $form = new ActiveForm();
        $form->name = $this->name;
        $form->email = $this->email;
        $form->textArea = $this->textArea;
        $form->save();

    }

}
