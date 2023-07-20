<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Models\LoginDetail;
use Illuminate\Support\Facades\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Browser;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user=$event->user;
        $user->last_login = Carbon::now();
        $user->save();
        $user_id=$user->id;
        $ip_address=$this->getIp();
        $user_agent=Request::server('HTTP_USER_AGENT');
        $login_time=Carbon::now();
        LoginDetail::insert([
            'user_id' => $user_id,
            'ip_address' => $ip_address,
            'user_agent' => $user_agent,
            'login_time' => $login_time,
            'browser' => Browser::browserName(),
            'platform' => Browser::platformName(),
            'device' => Browser::deviceFamily(),
        ]);
    }
    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }
}
