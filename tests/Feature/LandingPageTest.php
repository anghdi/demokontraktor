<?php

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('landing page presents the contractor offer and available services', function () {
    Service::factory()->create(['name' => 'Renovasi Menyeluruh', 'sort_order' => 1]);

    $this->get('/')
        ->assertOk()
        ->assertSee('Bangunan baik')
        ->assertSee('Renovasi Menyeluruh')
        ->assertSeeLivewire('project-gallery');
});
