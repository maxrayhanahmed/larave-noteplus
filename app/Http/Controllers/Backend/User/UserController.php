<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminList(){
        $admins = User::where('user_type', 'admin')->get();
        return view('backend.user.admin_manage',compact('admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function userRegisterForm(){
        return view('backend.user.add');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function userStore(Request $request){
         $this->validate($request,[
             'first_name'=>'required|max:255',
             'last_name'=>'required|max:255',
             'email'=>'required|unique:users',
             'password' => 'confirmed|min:6'
         ]);

         if(isset($request->image)){
             $image=$request->file('image');
             $originalName = $image->getClientOriginalName();
             $div			=explode('.',$originalName);
             $f_ext			=strtolower(end($div));
             $imageName = time().'.'.$f_ext;
             $imagePath = 'backend/images/users/';
             $image->move($imagePath,$imageName);
             $imageUrl  = $imagePath.$imageName;

         }else{
             $imageUrl  = null;
         }
             $user = User::create([
                 'first_name' => $request['first_name'],
                 'last_name' => $request['last_name'],
                 'image' =>$imageUrl,
                 'name' => $request['first_name'].' '.$request['last_name'],
                 'password' => Hash::make($request['password']),
                 'email' => $request['email'],

                 'provider_id' => $request['provider_id'],
                 'user_type' => $request['user_type'],
                 'street_address_1' => $request['street_address_1'],
                 'street_address_2' => $request['street_address_2'],
                 'company_name' => $request['company_name'],
                 'country' => $request['country'],
                 'mobile_no' => $request['mobile_no'],
                 'alt_mobile_no' => $request['alt_mobile_no'],
                 'pin_code' => $request['pin_code'],
                 'city' => $request['city'],
                 'facebook_url' => $request['facebook_url'],
                 'twitter_url' => $request['twitter_url'],
                 'instagram_url' => $request['instagram_url'],
                 'linkedin_url' => $request['linkedin_url'],
             ]);


         if ($user){
             return back()->with('success','User added successfully');
         }

     }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userList(){
        $users = User::where('user_type', 'user')->get();
        return view('backend.user.manage',compact('users'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function UserEdit($id){
        $front_user = User::find($id);
        return view('backend.user.edit',compact('front_user'));
    }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profileEdit(){
        return view('backend.user.profileEdit');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function userUpdate(Request $request){
        $this->validate($request,[
            'first_name'=>'required|max:255',
            'last_name'=>'required|max:255',
            'email'=>'required|unique:profiles,email,'.$request->id,
            'password' => 'confirmed|min:6'
        ]);

            if(isset($request->profile_id)){
                $user = User::Find($request->profile_id);
            }else{
                $user = User::Find($request->id);
            }


        if(isset($request->image)){

            $old_image = $user->image;
            if(file_exists($old_image)){
                unlink($old_image);
            }

            $image=$request->file('image');
            $originalName = $image->getClientOriginalName();
            $div			=explode('.',$originalName);
            $f_ext			=strtolower(end($div));
            $imageName = time().'.'.$f_ext;
            $imagePath = 'backend/images/users/';
            $image->move($imagePath,$imageName);
            $imageUrl  = $imagePath.$imageName;
            $user->image  =   $imageUrl;

        }

        $user->first_name            = $request->first_name;
        $user->last_name             = $request->last_name;
        $user->name                  = $request->first_name.' '.$request->last_name;
        $user->password              = Hash::make($request->password);
        $user->email                 = $request->email;
        $user->provider_id                 = $request->provider_id;
        $user->user_type                 = $request->user_type;

        $user->street_address_1      = $request->street_address_1;
        $user->street_address_2      = $request->street_address_2;
        $user->company_name          = $request->company_name;
        $user->country               = $request->country;
        $user->mobile_no             = $request->mobile_no;
        $user->alt_mobile_no         = $request->alt_mobile_no;
        $user->pin_code              = $request->pin_code;
        $user->city                  = $request->city;
        $user->facebook_url          = $request->facebook_url;
        $user->twitter_url           = $request->twitter_url;
        $user->instagram_url         = $request->instagram_url;
        $user->linkedin_url          = $request->linkedin_url;
        $success = $user->save();
        if ($success){
            return back()->with('success','User updated successfully');
        }else{
            return back()->with('error','Something is wrong!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userDelete($id){
        $user = User::find($id);
        $success = $user->delete();
        $old_img = $user->image;
        if(file_exists($old_img)){
            unlink($old_img);
        }
        if ($success){
            return back()->with('success','User deleted successfully');
        }else{
            return back()->with('error','Something is wrong !!');
        }
    }

}
