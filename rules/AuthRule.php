<?php

namespace app\rules;

use yii\rbac\Rule;
use app\models\User;

class AuthRule extends Rule
{
    public $name = 'isAuth';

    public function execute($user, $item, $params)
    {
	$auth = User::findIdentity($user);
	return $auth->getId() === $user;
    }
}
