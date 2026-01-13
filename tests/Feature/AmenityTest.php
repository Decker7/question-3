<?php

namespace Tests\Feature;

use App\Models\Amenity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AmenityTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_amenities_list()
    {
        $response = $this->get('/amenities');

        $response->assertStatus(200);
        $response->assertSee('Senarai Ameniti');
    }

    public function test_can_create_amenity()
    {
        $response = $this->post('/amenities', [
            'code' => '01',
            'abbreviation' => 'Air',
            'description' => 'Air',
        ]);

        $response->assertRedirect('/amenities');
        $this->assertDatabaseHas('amenities', ['code' => '01']);
    }

    public function test_can_update_amenity()
    {
        $amenity = Amenity::create([
            'code' => '01',
            'abbreviation' => 'Air',
            'description' => 'Air',
        ]);

        $response = $this->put("/amenities/{$amenity->id}", [
            'code' => '01',
            'abbreviation' => 'AR',
            'description' => 'Updated Air',
        ]);

        $response->assertRedirect('/amenities');
        $this->assertDatabaseHas('amenities', ['abbreviation' => 'AR']);
    }

    public function test_can_delete_amenity()
    {
        $amenity = Amenity::create([
            'code' => '01',
            'abbreviation' => 'Air',
            'description' => 'Air',
        ]);

        $response = $this->delete("/amenities/{$amenity->id}");

        $response->assertRedirect('/amenities');
        $this->assertDatabaseMissing('amenities', ['id' => $amenity->id]);
    }
}
