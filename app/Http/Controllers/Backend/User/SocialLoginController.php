<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class SocialLoginController extends Controller
{
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(){
        try {
            $user = Socialite::driver('google')->user();

            $email_check = User::where('email', $user->email)->count();

            $user_id = User::where('provider_id', $user->id)->first();
            if($user_id){
                Auth::login($user_id);
            }
            else if($email_check !==0){
                return redirect('login')->with('login_error','Already entry this email !');
            }
            else{
                $user_table = new User();
                $first_name = explode(' ', $user->getName(), 2)[0];
                $last_name = explode(' ', $user->getName(), 2)[1];
                if ($last_name==null){
                    $last_name ==" ";
                }
                $user_table->first_name = $first_name;
                $user_table->last_name =$last_name;
                $user_table->name = $user->getName();
                $user_table->provider_id = $user->getId();
                $user_table->email = $user->getEmail();
                $user_table->image = $user->getAvatar();
                $user_table->save();
                $this->createTeam($user_table);
                Auth::login($user_table, true);
            }
            return redirect('/');

        }catch (\Exception $e){
            return redirect('/login')->with('error',$e->getMessage());
        }

    }

 public function facebookRedirect(){

        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback(){

        $user = Socialite::driver('facebook')->user();

        $user_id = User::where('provider_id', $user->id)->first();
        if($user_id){
            Auth::login($user_id);
        }else{
            $user_table = new User();
            $first_name = explode(' ', $user->getName(), 2)[0];
            $last_name = explode(' ', $user->getName(), 2)[1];
            if ($last_name==null){
                $last_name ==" ";
            }
            $user_table->first_name = $first_name;
            $user_table->last_name =$last_name;
            $user_table->name = $user->getName();
            $user_table->provider_id = $user->getId();
            $user_table->email = $user->getEmail();
            $user_table->image = $user->getAvatar();
            $user_table->password =encrypt('12345678');
            $user_table->save();
            $this->createTeam($user_table);
            Auth::login($user_table, true);
        }
        return redirect('/user/dashboard');
    }


    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }

}
