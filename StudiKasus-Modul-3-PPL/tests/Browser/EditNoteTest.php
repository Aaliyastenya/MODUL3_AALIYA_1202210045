<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     @group EditNote
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
                    ->clickLink(link: 'Edit') //Melakukan klik Edit di halaman note
                    ->type(field: 'title', value: 'Praktikum PPL MODUL 3 - Edit') //Melakukan edit pada tittle note
                    ->type(field: 'description', value: 'Saya sedang mengerjakan modul 3 - Edit') //Melakukan edit deskripsi note
                    ->press(button: 'UPDATE') //Melakukan klik Update untuk mengupdate notes
                    ->assertPathIs(path: '/notes'); //Untuk kembali pada halaman notes dan terlihat update yang sudah dilakukan

        });
    }
}