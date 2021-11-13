<?php

namespace app\models\forms;

use app\models\User;
use Yii;
use yii\base\Model;

/**
 *
 */
class RegisterForm extends Model
{
    public $email;
    public $fullName;
    public $password;
    public $password_repeat;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['password_repeat', 'fullName', 'password', 'email'], 'required'],
            // Регулярное выражение для обработки латинницы и кириллицы, три слова через пробел (слово содержит хотя бы 1 символ), без цифр
            ['email', 'email'],
            ['email','emailUnique'],
        ];
    }

    /**
     *
     */
    public function emailUnique($attribute, $params, $validator)
    {
        $user = User::find()->where(['email'=>$this->email])->one();
        if ($user) {
            $this->addError($attribute, "Данный $attribute уже зарегистрирован");
        }
    }


    /**
     * Получение плейсхолдера по конкретному аттрибуту
     *
     * @param string $attribute
     * @return string
     */
    public function getAttributePlaceholder($attribute)
    {
        $placeholders = $this->attributePlaceholders();
        return isset($placeholders[$attribute]) ? $placeholders[$attribute] : $this->generateAttributeLabel($attribute);
    }

    /**
     * Массив плейсхолдеров для полей формы
     *
     */
    public function attributePlaceholders()
    {
        return [
            'fullName' => 'ФИО',
            'email' => Yii::t('app','Укажите ваш Email'),
            'password' => Yii::t('app','Укажите пароль для входа'),
            'password_repeat' => 'Повторите пароль'
        ];
    }

    public function attributeLabels()
    {
        return [
            'fullName' => Yii::t('app','ФИО'),
            'email' => Yii::t('app','Email'),
            'password' => Yii::t('app','Пароль'),
            'password_repeat' => Yii::t('app','Повтор пароля'),
        ];
    }

}
