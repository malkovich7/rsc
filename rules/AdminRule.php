<?php

namespace app\rules;

use yii\rbac\Rule;
use mdm\admin\models\Assignment;

class AdminRule extends Rule
{
    public $name = 'isAdmin';
    const ASSIGNED = 'assigned';
    const ROLE = 'role';
    const ADMIN = 'Administrator';

    public function execute($user, $item, $params)
    {
	$auth = new Assignment($user);
	$items = $auth->getItems();
	var_dump($items);
	foreach($items as $key => $val)
	    if($key === self::ASSIGNED)
	        foreach($val as $k => $v)
		    if($k === self::ADMIN  && $v === self::ROLE)
		    	return true;
    }
}
