<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;

class NewsHeadline extends Model
{
    /*
    |---------------------------------------------
    | SHOW NEWS HEADLINES
    |---------------------------------------------
    */
    public function displayNewsHeadlines(){
    	$endpoint = env("NEWS_ENDPOINT");
    	$api_key  = env("NEWS_API_KEY");

    	$country  = "ng";
    	$category = "business";

    	$uri = $endpoint."?country=".$country."&category=".$category."&apiKey=".$api_key;

    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $uri);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($ch, CURLOPT_TIMEOUT, 200);
    	$res = curl_exec($ch);

    	$data = json_decode($res, true);

    	if(count($data) > 0){
           $news_box = [];
           foreach ($data['articles'] as $el) {
               if($el['title'] !== null && $el['description'] !== null && $el['urlToImage'] !== null && $el['author'] !== null){
                   $title          = str_replace("'", "", $el['title']);
                   $description    = str_replace('"', '', $el['description']);

                   $dl = [
                       "title"         => $title,
                       "description"   => $description,
                       "urlToImage"    => $el['urlToImage'],
                       "author"        => $el['author']
                   ];

                   array_push($news_box, $dl);
               }
           }
       }else{
           $news_box = [];
       }

       // return json response.
       return $news_box;
    }
}
