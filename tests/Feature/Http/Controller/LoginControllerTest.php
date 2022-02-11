<?php

namespace Tests\Feature\Http\Controller;

use Tests\TestCase;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class LoginControllerTest extends TestCase
{
    use DatabaseTransactions;
    public function testLoginSucces()
    {
        Session::start();
        User::create([
            'name' => 'name',
            'email' => 'email@gmail.com',
            'password' => 'password'
        ]);
        $response = $this->call('POST', '/login', array(
            '_token' => csrf_token(),
            'email' => 'laivanvan2000s@gmail.com',
            'password' => 'a18052000'
        ));
        // dd($response);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }

    public function testLoginIncorrect()
    {
        Session::start();
        User::create([
            'name' => 'name',
            'email' => 'email@gmail.com',
            'password' => 'password'
        ]);
        $response = $this->call('POST', '/login', array(
            '_token' => csrf_token(),
            'email' => 'email1@gmail.com',
            'password' => 'password'
        ));
        // dd($response);
        $response->assertStatus(302);
        $response->assertRedirect('/');

        $response = $this->call('POST', '/login', array(
            '_token' => csrf_token(),
            'email' => 'email1@gmail.com',
            'password' => 'password'
        ));
        $response->assertStatus(302);
        $response->assertRedirect('/');
    }


    public function testLogin()
    {
        Session::start();
        User::create([
            'name' => 'name',
            'email' => 'email@gmail.com',
            'password' => 'password'
        ]);
        $response = $this->call('POST', '/login', [
            '_token' => csrf_token(),
            'name' => 'name',
            'email' => 'email@gmail.com',
            'password' => 'password'
        ]);
        // dd($response);
        $response->assertStatus(302);
    }
}
?>