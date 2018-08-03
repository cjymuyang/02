<?php
namespace app\admin\model;
use think\Model;
use think\Db;
/**
* 创建model类
*/
class Zixun extends Model
{
	/**
	*  定义查询全部方法
	*/
	public function selects()
	{
		return Db::table('zixun')->select();
	}
	/**
	*  定义添加方法
	*/
	public function inserts($data)
	{
		return Db::table('zixun')->insert($data);
	}
	/**
	*  定义修改方法
	*/
	public function updates($id,$data)
	{
		return Db::table('zixun')->where("id =$id")->update($data);
	}
	/**
	*  定义删除方法
	*/
	public function deletes($id)
	{
		return Db::table('zixun')->where("id = $id")->delete();
	}
	/**
	*  定义查询单条方法
	*/
	public function finds($id)
	{
		return Db::table('zixun')->where("id =$id ")->select();
	}
	

}
?>