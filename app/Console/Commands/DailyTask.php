<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;
use Illuminate\Support\Facades\Http;

class DailyTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily task to populate database with the newest Articles.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $obSpaceFlightData = Http::get('https://api.spaceflightnewsapi.net/v3/articles')->json();

        foreach($obSpaceFlightData as $arData){
            $obArticle = Article::all()->where('id', '=', $arData['id']);
            if(count($obArticle) == 0){
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
}
