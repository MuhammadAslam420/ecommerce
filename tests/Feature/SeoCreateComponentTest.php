<?php

use App\Http\Livewire\Admin\Seo\CreateComponent;
use Livewire\Livewire;
use Tests\TestCase;

class YourComponentTest extends TestCase
{
    /** @test */
    public function it_can_add_seo()
    {
        Livewire::test(CreateComponent::class)
            ->set('page_name', 'example-page')
            ->set('title', 'Example Title')
            ->set('type', 'example-type')
            ->set('url', 'http://example.com')
            ->set('description', 'Example Description')
            ->call('addSeo')
            ->assertSee('New SEO has been added successfully!')
            ->assertEmitted('alert', ['success', 'New SEO has been added successfully!'])
            ->assertEmpty(CreateComponent::where('page_name', 'example-page')->get()); // Assert that the record is not saved to the database
    }
}