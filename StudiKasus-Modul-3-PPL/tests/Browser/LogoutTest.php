<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     @group Logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //Untuk masuk pada halaman utama root
                    ->clickLink(link: 'Log in') //Melakukan klik Login
                    ->assertPathIs(path: '/login') //Untuk masuk ke halaman login
                    ->type(field: 'email', value: 'aaliya@gmail.com') //Untuk memasukkan inputan email yang sudah terdaftar
                    ->type(field: 'password', value: '1202210045') //Untuk memasukkan inputan password
                    ->press(button: 'LOG IN') //Melakukan klik login//klil log in
                    ->assertPathIs(path: '/dashboard') //Untuk masuk ke halaman dashboard
                    ->press(button: 'Aaliya') //Melakukan klik profil Aaliya di bagian atas
                    ->clickLink(link: 'Log Out') //Melakukan klik Log Out
                    ->assertPathIs(path: '/'); //Akun telah terlogout
        });
    }
}