<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     @group Note
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
                    ->clickLink(link: 'Notes') //Melakukan klik Menu Notes di dashboard
                    ->assertPathIs(path: '/notes') //Untuk masuk pada halaman note
                    ->clickLink(link: 'Create Note') //Melakukan klik create note
                    ->assertPathIs(path: '/create-note') //Untuk masuk pada halaman pembuatan note
                    ->type(field: 'title', value: 'Praktikum PPL MODUL 3') //Untuk menginputkan tittle note
                    ->type(field: 'description', value: 'Saya sedang mengerjakan modul 3') //Untuk menginputkan deskripsi note
                    ->press(button: 'CREATE') //Melakukan klik create untuk mengsubmit notes yang telah terbuat
                    ->assertPathIs(path: '/notes'); //Untuk path kembali ke halaman path note dan akan ada update notes yang terbuat
        });
    }
}