<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     @group Regist
     */

    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //Untuk masuk pada halaman utama root
                    ->clickLink(link: 'Register') //Melakukan klik register
                    ->assertPathIs(path: '/register')//Path untuk masuk pada halaman register
                    ->type(field: 'name', value: 'Aaliya') //Untuk memberikan inputan nama
                    ->type(field: 'email', value: 'aaliya@gmail.com') //Untuk memberikan inputan alamat email
                    ->type(field: 'password', value: '1202210045') //Untuk memberikan inputan password
                    ->type(field: 'password_confirmation', value: '1202210045') //Untuk mengkonfirmasi inputan password
                    ->press(button: 'REGISTER') //Melakukan klik register
                    ->assertPathIs(path: '/dashboard'); //Path untuk masuk pada halaman dashboard


        });
    }
}