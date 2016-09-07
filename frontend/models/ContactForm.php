<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\Contact;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $textArea;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'trim'],
            ['name', 'required'],
            ['name', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],

            ['textArea', 'trim'],
            ['textArea', 'required'],
            ['textArea', 'string', 'max' => 1000],
        ];
    }

    public function contact()
    {
        if (!$this->validate()) {
            return null;
        }

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->textArea = $this->textArea;

        return $contact->save() ? $contact : null;
    }

}
