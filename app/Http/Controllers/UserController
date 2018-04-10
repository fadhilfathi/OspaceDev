<?php
namespace App\Http\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Requesst;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

Class UserController extends Controller{
    public function stores(Request $request){
        $result = DB::insert("insert into user_ospace(email, name, phone, id_category, password) values(?, ?, ?, ?, ?),[$request->input('emailstudent'),$request->input('namestudent'),$requesst->input('phonestudent'), 'student', $request->input('passwordstudent')");
        return view('');
    }
    public function storeo(Requesst $request){
        $result = DB::insert("insert into user_ospace(email, name, phone, id_category, password) values(?, ?, ?, ?, ?),[$request->input('emailorganization'), $request->input('nameorganization'),$request->input('phoneorganization'), 'organization', $request->input('passwordorganization')]");
        return view('');
    }
}