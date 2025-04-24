<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     @group ViewNote
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
                    ->assertPathIs(path: '/notes') //Untuk masuk pada halaman notes
                    ->clickLink(link: 'Praktikum PPL MODUL 3 - Edit') //klik note dengan tittle yang dibuat di halaman notes
                    ->assertPathIs(path: '/note/1'); //Untuk masuk pada halaman notes yang di buat

        });
    }
}