<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $khachHangs = DB::table('khach_hangs')->orderBy('id', 'desc')->get();
        return view("KhachHangs.index", compact("khachHangs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("khachHangs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $result =  DB::insert("INSERT into khach_hangs(khach_hangs.name, khach_hangs.password, phone, khach_hangs.email) values(?,?,?,?)",[
            $request->get("KhachHang_name"), $request->get("KhachHang_password"), $request->get("KhachHang_phone"),$request->get("KhachHang_email") 
        ]);
        if($result > 0){
            $message = "success";
            $type = "success";
        }
        else{
            $message = "error";
            $type = "danger";
        }
        return redirect()->route("khachHangs.index")->with('message', $message)->with('type', $type);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $khachHang = DB::table('khach_hangs')->find($id);
        return view("khachHangs.edit", compact("khachHang"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $result =  DB::update("UPDATE khach_hangs SET khach_hangs.name = ? , khach_hangs.password = ? , phone = ?, khach_hangs.email = ? , updated_at = ? WHERE id = ?",[
            $request->get("khachHang_name"), $request->get("khachHang_password"), $request->get("khachHang_phone"),$request->get("khachHang_email"), Carbon::now(), $id
        ]);
        if($result > 0){
            $message = "success";
            $type = "success";
        }
        else{
            $message = "error";
            $type = "danger";
        }
        return redirect()->route("khachHangs.index")->with('message', $message)->with('type', $type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
