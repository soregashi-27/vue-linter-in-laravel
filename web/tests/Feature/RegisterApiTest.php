<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class RegisterApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   public function should_新しいユーザーを作成して返却する()
   {
       $data = [
           'name' => 'vuesplash user',
           'email' => 'dummy@email.com',
           'password' => 'test 1234',
           'password_confirmation' => 'test1234'
       ];

       $response = $this->json('POST', route('register'), $data);

       $user = User::first();
       $this->assertEquals($data['name'], $user->name);

       $response
            ->asserStatus(201)
            ->assertJson(['name' => $user->name]);
   }
}