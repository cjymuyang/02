<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
	/**
	 *@content 后台页面 
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-2
	 */
	public function index()
	{
		return $this->fetch();
	}

	/**
	 *@content 后台页面--左侧菜单 
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-2
	 */
	public function public_left()
	{
		return $this->fetch();
	}


	/**
	 *@content 后台页面--头部 
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-2
	 */
	public function public_header()
	{
		return $this->fetch();
	}


	/**
	 *@content 后台页面 
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-2
	 */
	public function wenzhang_xinwen()
	{
		return $this->fetch();
	}


	/**
	 *@content 后台页面 ---品牌管理
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-3
	 */
	public function huodong_guanli()
	{
		return $this->fetch();
	}


	/**
	 *@content 后台页面 ---最新资讯
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-3
	 */
	public function xiangce_guanli()
	{
		return $this->fetch();
	}

	/**
	 *@content 后台页面 ---联系我们
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-3
	 */
	public function tupian_pc_index()
	{
		return $this->fetch();
	}

	/**
	 *@content 后台页面 ---品牌管理
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-3
	 */
	public function zixun_team()
	{
		return $this->fetch();
	}


	/**
	 *@content 后台页面 ---管理员列表
	 *@return  mixed
	 *@author  童立京
	 *@time    2018-8-3
	 */
	public function muban_guanli()
	{
		return $this->fetch();
	}
}
?>