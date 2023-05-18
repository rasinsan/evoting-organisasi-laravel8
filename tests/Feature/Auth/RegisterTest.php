<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_render_page()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_submit_data()
    {
        $response = $this->post('/register', [
            'nim' => '10107000',
            'nama' => 'Test User',
            'password' => 'testpass123',
            'prodi' => 'Sistem Informasi',
            'tahun' => '2020',
            'email' => 'test@gmail.com'.rand(0, 9999),
            'email_verified' => '1'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/register');
    }
}
