<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

  //panggil request untuk fungsi pencarian
  public function index(Request $request){
   if($request->has('search')){
     $data_user= \App\Users::where('name','LIKE','%'.$request->search.'%');
   }
   else{
    $data_user=\App\Users::all(); 
   }
    
    
    return view('user',['data_user'=>$data_user]);
  }


  public function create(Request $request){
      \App\Users::create($request->all());
      return redirect('user')->with('sukses','data berhasil di input');
  }

  public function edit($id)
  {
    $users = \App\Users::find($id);
    return view('edit', ['users'=>$users]);
  }

  public function update(Request $request, $id){
    $users = \App\Users::find($id);
    $users ->update($request->all());
    return redirect('user')->with('sukses','Data berhasil di update');
  }


  public function delete($id){
    $users=\App\Users::find($id);
    $users->delete($users);
    return redirect ('user')->with('sukses','data berhasil dihapus');
  }
}
