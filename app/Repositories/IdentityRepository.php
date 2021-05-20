<?php
namespace App\Repositories;

use App\Repositories\Commons\Tools;
use App\Models\User;
use App\Repositories\Commons\PasswordHash;
use App\Repositories\Interfaces\IIdentityRepository;
use Carbon\Carbon;
use Illuminate\Support\Str;

class IdentityRepository implements IIdentityRepository
{
    public function signin(string $username, string $password) : ?array
    {
        $user = User::where('user_login', $username)->first();
        $data = null;
        
        $wp_hasher = new PasswordHash(8, false);
        if ($user!=null && $wp_hasher->CheckPassword($password,$user->user_pass)) {
            $user->api_token = Str::random(100);
            $user->api_token_expiration = Carbon::now()->addHours(12);
            $user->save();
            
            $menu = [];
            //Tools::getMenu($user->role->name);

            $data = [
                'token' => $user->api_token,
                'expiration' => $user->api_token_expiration,
                'user' => $user->user_nicename,
                'menu' => $menu
            ];
            
        }
        return $data;
    }
}
