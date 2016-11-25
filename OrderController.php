<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //预添加订单操作
	public function add(Request $request){
		//接收用户传参
		$uid = $request->input('uid');
		$cid = $request->input('cid');
		$num = $request->input('num');
		$date = date('Y-m-d H-i-s');
		
		//查询购物车操作
		$shopcar = DB::table('shopcar')->where('cid','=',$cid)->first();
		
		//添加到数据库
		$order= DB::table('order')
				->insertGetId(['uid'=>$uid,'gid'=>$shopcar['gid'],'onum'=>$shopcar['num'],'otime'=>$date]);
		
		if($order){
			return redirect('/fillOrder?order='.$order);
		}else{
			return '插入失败,请稍后重置!';
		}
	}
	
	//填写收货地址并结算
	public function address(Request $request){
		//接受请求传参
		$oid = $request->input('order');
		
		//查询用户订单操作
		$order = DB::table('order')
			->join('goods','order.gid','=','goods.gid')
			->join('address','order.uid','=','address.uid')
			->where('order.oid','=',$oid)
			->first();
		if($order){
			return view('Home/shop/fillOrder',['order'=>$order]);
		}else{
			//return '查询异常';
		}
		
	}
	
	//更改收获地址操作
	public function update(Request $request){
		$uid = $request->input('uid');
		$uname = $request->input('unames');
		$utel = $request->input('utels');
		$uaddress = $request->input('uaddresss');
		$uemail = $request->input('uemails');
		//接受表单传参	
		//更新数据操作
		$result = DB::table('address')
				->where('uid','=',$uid)
				->update(['name'=>$uname,'utel'=>$utel,'address'=>$uaddress,'uemail'=>$uemail]);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
		
		//新增收货地址操作
		public function 
	}
}
