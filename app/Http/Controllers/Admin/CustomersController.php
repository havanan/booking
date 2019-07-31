<?php

namespace App\Http\Controllers\Admin;

use App\Model\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::all();
        return view('admin.customers.index',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if ($password != $password_confirmation){
            $status = 'error';
            $message = 'Xác thực mật khẩu không đúng, vui lòng nhập lại';
            return back()->with($status,$message);
        }
        $input = $request->only('name','username','email','phone','address','status');
        $input['slug'] = Str::slug($input['name']);
        $input['password'] = bcrypt($password);

        $creat = Customer::create($input);
        if ($creat){
            $status = 'success';
            $message = 'Tạo thành công';
            return redirect()->route('admin.customer.index')->with($status,$message);
        }else{
            $status = 'error';
            $message = 'Tạo thất bại';
            return back()->with($status,$message);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->only('name','username','email','phone','address','status');
        $input['slug'] = Str::slug($input['name']);
        $update = Customer::where('id',$id)->update($input);
        if ($update){
            $status = 'success';
            $message = 'Sửa thành công';
            return redirect()->route('admin.customer.index')->with($status,$message);
        }else{
            $status = 'error';
            $message = 'Sửa thất bại';
            return back()->with($status,$message);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Customer::find($id);
        if (isset($info['id'])){

            if ($info->delete()){
                $status = 'success';
                $message = 'Xóa thành công';
            }else{
                $status = 'error';
                $message = 'Xóa thất bại';
            }

        }else{
            $status = 'error';
            $message = 'Không có thông tin';
        }
        return back()->with($status,$message);

    }
    public function pwDefault($id){

    }
}
