<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('enviar', function() {

  $users = App\User::all();

    foreach ($users as $user) {
      # code...
      Mail::send('emails', ['user'=>$user], function($message) use ($user){
            $message->from('correovalido', 'nombrevalido');
            $message->to($user->email,$user->name)->subject('Hola '.$user->name.' estoy empezando a usar SENDGRID');
    });
    }


      return "Se ha enviado el email 2";
});
