<?php

namespace App\Http\Controllers\Backend\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate(Request $request){

        $this->validate($request,[
            'first_name'=>'required|max:255',
            'last_name'=>'required|max:255',
        ]);

            $user = User::Find($request->id);

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
        $user->provider_id           = $request->provider_id;
        $user->user_type             = $request->user_type;

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
            return back()->with('success','Profile updated successfully');
        }else{
            return back()->with('error','Something is wrong!!');
        }
    }

}
