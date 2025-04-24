<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     @group DeleteNote
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
                    ->clickLink(link: 'Notes') //Melakukan klik Notes di dashboard
                    ->assertPathIs(path: '/notes') //memasuki halaman notes
                    ->press(button: 'Delete') //Melakukan klik delete untuk menghapus notes
                    ->assertPathIs(path: '/notes'); //Untuk path kembali ke halaman notes 

        });
    }
}