<?php

namespace App\Http\Controllers;

use App\Models\Patners;
use App\Models\Post;
use App\Models\Project;
use App\Models\Testimoni;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function show()
    {

        // seo
        SEOMeta::setTitle(config("app.title"));
        SEOMeta::setDescription(config("app.desc"));
        SEOMeta::setCanonical(config("app.canonical"));
        SEOMeta::addKeyword(['website alfianizzah', 'alfianizzah profile', 'alfianizzah website', "alfianizzah"]);

        OpenGraph::setDescription(config("app.desc"));
        OpenGraph::setTitle(config("app.title"));
        OpenGraph::setUrl(config("app.canonical"));
        OpenGraph::addProperty('type', 'Website portfolio');
        OpenGraph::addImage("https://alfianizzahaja.my.id/assets/img/alfianizzah3.png");
        OpenGraph::addProperty('locale', 'id-ID');

        TwitterCard::setTitle(config("app.title"));
        TwitterCard::setSite('@alfianizzah');

        JsonLd::setTitle(config("app.title"));
        JsonLd::setDescription(config("app.desc"));
        JsonLd::addImage("https://alfianizzahaja.my.id/assets/img/alfianizzah3.png");


        // minified
        // SEOTools::setTitle(config("app.title"));
        // SEOTools::setDescription(config("app.desc"));
        // SEOTools::opengraph()->setUrl(config("app.canonical"));
        // SEOTools::setCanonical(config("app.title"));
        // SEOTools::opengraph()->addProperty('type', 'Website Portfolio');
        // SEOTools::twitter()->setSite('@alfianizzah');
        // SEOTools::jsonLd()->addImage("https://alfianizzahaja.my.id/assets/img/alfianizzah3.png");

        $testimoni = Testimoni::get();
        $latest = Post::limit(1)->latest()->first();
        $posts = Post::limit(3)->get();
        $project = Project::get();
        $patners = Patners::get();
        return view('page.home', compact("testimoni", "posts", "latest", "patners", "project"));
    }
    public function experience()
    {
        SEOMeta::setTitle(config("app.title"));
        SEOMeta::setDescription(config("app.desc"));
        SEOMeta::setCanonical(config("app.canonical"));
        SEOMeta::addKeyword(['website alfianizzah', 'alfianizzah profile', 'alfianizzah website', "alfianizzah"]);

        OpenGraph::setDescription(config("app.desc"));
        OpenGraph::setTitle(config("app.title"));
        OpenGraph::setUrl(config("app.canonical"));
        OpenGraph::addProperty('type', 'Website portfolio');
        OpenGraph::addImage("https://alfianizzahaja.my.id/assets/img/alfianizzah3.png");
        OpenGraph::addProperty('locale', 'id-ID');

        TwitterCard::setTitle(config("app.title"));
        TwitterCard::setSite('@alfianizzah');

        JsonLd::setTitle(config("app.title"));
        JsonLd::setDescription(config("app.desc"));
        JsonLd::setType('Website Porfolio');

        JsonLd::addImage("https://alfianizzahaja.my.id/assets/img/alfianizzah3.png");



        return view("page.my-experience");
    }
}
