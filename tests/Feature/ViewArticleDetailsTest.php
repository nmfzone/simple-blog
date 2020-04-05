<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewArticleDetailsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_can_view_the_article_details()
    {
        // prepare
        $article = factory(Article::class)->create();

        // execute
        $response = $this->get("/articles/{$article->id_artikel}");

        // asserts
        $response->assertOk();
        $response->assertSee($article->judul);
        $response->assertSee($article->isi);
        $response->assertSee($article->tanggal_dibuat->format('d M Y h:i'));
    }
}
