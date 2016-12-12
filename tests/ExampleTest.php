<?php

use Carbon\Carbon;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    use DatabaseMigrations;

    public function testExpiredRsvp()
    {
        $expired_rsvp_date = Carbon::now()->subYear()->format('d/m/Y H:i');
        config(['wedding.rsvp_cutoff' => $expired_rsvp_date]);
        $this->json('POST', '/rsvp', ['name' => 'Sally'])
             ->seeJson([
                'success' => false,
                'errors' => 'RSVPs are now closed.'
             ]);
    }

    public function testInvalidRsvp()
    {
        $rsvp_date = Carbon::now()->addYear()->format('d/m/Y H:i');
        config(['wedding.rsvp_cutoff' => $rsvp_date]);

        $this->json('POST', '/rsvp', ['count' => null, 'names' => null, 'answer' => null, 'email' => null])
             ->seeJson([
                'success' => false,
                'errors' => [
                    'answer' => ['The answer field is required.'],
                    'count' => ['The count field is required.'],
                    'email' => ['The email field is required.'],
                    'names' => ['The names field is required.']
                ]
             ]);
    }

    public function testValidRsvp()
    {
        $rsvp_date = Carbon::now()->addYear()->format('d/m/Y H:i');
        config(['wedding.rsvp_cutoff' => $rsvp_date]);

        $this->json('POST', '/rsvp', ['count' => '1', 'names' => 'test user', 'answer' => 1, 'email' => 'test@email.com'])
             ->seeJson([
                'success' => true
             ]);

        $this->seeInDatabase('rsvps', ['count' => '1', 'names' => 'test user', 'answer' => 1, 'email' => 'test@email.com']);

    }
}
