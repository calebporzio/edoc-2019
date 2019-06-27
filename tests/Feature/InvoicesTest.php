<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class InvoicesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_see_invoices()
    {
        DB::table('invoices')->insert([
            'title' => 'Foo',
            'amount' => 100,
        ]);

        $this->get('/invoice')->assertSee('Foo');
    }
}
