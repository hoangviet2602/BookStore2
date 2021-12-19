<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class NXBController extends Controller
{   
    public function auth_login_admin() {
        $admin_id = Session::get('id'); 
        if($admin_id){ 
            
        }else{ 
            return Redirect::to('admin')->send(); 
        } 
    }

    public function show_all_NXB() {
        $this->auth_login_admin();
        $listNXB = DB::table('nxb')->get();
        return view('admin.AllNxb')->with('list_nxb', $listNXB);
    }

    public function show_form_add_NXB() {
        $this->auth_login_admin();
        return view('admin.AddNxb');
    }

    public function add_NXB(Request $request) {
        $this->auth_login_admin();
        $nxbName = $request->nxb_name;
        if($nxbName) {
            $dataNxb = array();
            $dataNxb['nxb'] = $nxbName;
            DB::table('nxb')->insert($dataNxb);
            Session::put('message', 'Đã thêm nxb thành công');
            return Redirect::to('all_nxb');
        }
        return view('admin.add_nxb');
    }

    public function delete_NXB($id) {
        $this->auth_login_admin();
        DB::table('nxb')->where('nxbid', $id)->delete();
        Session::put('message', 'Đã thêm nxb thành công');
        return Redirect::to('all_nxb');
    }

    public function update_NXB() {

    }
}