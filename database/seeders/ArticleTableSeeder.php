<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Stream\Stream;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $spaceFlightData = array();
        $spaceFlightData = Http::withoutVerifying()->get('https://api.spaceflightnewsapi.net/v3/articles')->json();

        foreach($spaceFlightData as $arData)
        {
            $obArticle = new Article;
            $obArticle->id = $arData['id'];
            $obArticle->featured = $arData['featured'];
            $obArticle->title = $arData['title'];
            $obArticle->url = $arData['url'];
            $obArticle->imageUrl = $arData['imageUrl'];
            $obArticle->newsSite = $arData['newsSite'];
            $obArticle->summary = $arData['summary'];
            $obArticle->publishedAt = $arData['publishedAt'];
            $obArticle->updatedAt = $arData['updatedAt'];
            $obArticle->launches = json_encode($arData['launches']);
            $obArticle->events = json_encode($arData['events']);
            $obArticle->save();
        }

    }
}
