<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Registration;
class Homecontroller extends Controller
{

   public function login(){
      return view('login');
  }
  public function log(){
      $a=[
          'username'=>request('username'),
          'password'=>request('password'),
      ];
      
      if(auth()->attempt($a)){
          $b=auth()->user()->type;
          $id=auth()->user()->id;
          if ($b=='admin user'){
              return redirect()->route('viewuser');
          }
          if($b=='regular user'){
              return redirect()->route('product');
          }
      }
      else{
          return 'invalid loginid';
      }
  }
  public function logout(){
      auth()->logout();
      return redirect()->route('login');

  }
    
public function userregister(){
   return view('userregister');
  }
public function saveuser(){
   User::create([
      'type'=>request('role'),
      'username'=>request('username'),
      'password'=>request('password'),
  ]);
  $user=User::latest()->first();
  $id= $user->id;
  $type= $user->type;
  Registration::create([
      'name'=>request('name'),
      'mobile'=>request('mobile'),
      'email'=>request('email'),
      'role'=>$type,
      'lid'=>$id,
  ]);
  return redirect()->route('login');
}  
   
public function viewuser(){
   $user=Registration::all();
   return view('viewuser',compact('user'));
  }
  public function deleteuser($id){ 
   $user =Registration::find(decrypt($id));
   $user->delete();
     return redirect()->route('viewuser');
}

   public function product(){
    return view('product');
   }
   public function addproduct(){
      return view('addproducts');
     }
   public function saveproduct(){
      if(request()->hasfile('image')){
         $extension=request('image')->extension();
         $filenew=rand().'.'.$extension;
         request('image')->storeAs('image',$filenew);
     }
     else{
         return 'no file exist';
     }
      Product::create([
        'pname'=>request('pname'),
        'price'=>request('price'),
         'image'=> $filenew,
      ]);
      return redirect()->route('viewproduct');
   }  
     public function viewproduct(){
      $product=Product::all();
      return view('viewproducts',compact('product'));
     }
   public function editview($id){
     $data=Product::find(decrypt($id));
      return view('editproducts',compact('data'));
  }
  public function editproduct(){
      $data=Product::find(request('id'));
      $data->Update([
         'pname'=>request('pname'),
         'price'=>request('price'),
       ]);
     return redirect()->route('viewproduct');
  }
  public function deleteproduct($id){ 
      $data = Product::find(decrypt($id));
      $data->delete();
        return redirect()->route('viewproduct');
   }

  
}
