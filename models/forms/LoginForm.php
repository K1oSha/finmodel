<?php

namespace app\models\forms;

use app\models\User;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $email;
    public $password;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password'], 'required'],
            [['email'], 'email'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || $user->password != hash('sha256', $this->password)) {
                $this->password = '';
                $this->addError($attribute, Yii::t('app', 'Email или пароль введен неверно'));
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser());
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        return User::findOne(['email' => $this->email]);
    }

    public function attributePlaceholders()
    {
        return [
            'email' => Yii::t('app','Укажите ваш Email'),
            'password' => Yii::t('app','Укажите ваш пароль'),
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' =>  Yii::t('app','Пароль'),
        ];
    }
}