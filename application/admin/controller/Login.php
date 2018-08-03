<?php
namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
	/**
	 *@content 后台登录页面
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-3
	 */
	public function login()
	{
		return $this->fetch('loginb');
	}


	/**
	 *@content 后台页面---修改密码
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-3
	 */
	public function change_psw()
	{
		return $this->fetch();
	}

}

?>