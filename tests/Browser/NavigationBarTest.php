<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NavigationBarTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    public function testLocationLinkTakesUserToLocationsIndex()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://hackerpair.test/')
                ->clickLink('Locations')
                ->assertPathIs('/locations');
        });
    }

    public function testEventLinkTakesUserToEventIndexAndComeBack()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://hackerpair.test/')
                ->clickLink('Events')
                ->assertPathIs('/events')
                ->clickLink('HACKERPAIR')
                ->assertPathIs('/');
        });
    }
}
