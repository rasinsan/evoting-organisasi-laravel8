<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

// Model
use App\Models\User;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_render_page()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_submit_data_sucess(){
        // Buat fake user
        $user = User::factory()->create();

        // Simulasi Login
        $response = $this->post('/login', [
            'nim' => $user->nim,
            'password' => 'password'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/dashboard');
    }

    public function test_submit_data_password_salah(){
        // Buat fake user
        $user = User::factory()->create();

        // Simulasi Login
        $response = $this->post('/login', [
            'nim' => $user->nim,
            'password' => 'passwordx'
        ]);

        $this->assertGuest();
    }
}
