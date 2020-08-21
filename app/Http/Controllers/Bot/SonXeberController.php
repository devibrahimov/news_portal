<?php

namespace App\Http\Controllers\Bot;

use DiDom\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Bot\BotfunctionsController as BotFunctions;

class SonXeberController extends Controller
{
    //site de olan kategoriyalari getirir
    public function getCategories( $url ='https://sonxeber.az')
    {


        $document = new Document($url, true);

        try {

            $cats = $document->find('#ulcats > li > a ');
            $link =[] ;
           foreach ($cats as $key => $cat)
           {
               $link[] = $cat->getAttribute('href');


           }
            return $link;
        }catch (\Exception $exception) {
            dump($exception);
        } //end try chache


    }



    public function getNews($url= 'https://sonxeber.az/sou-biznes-xeberleri/'){


        $document = new Document( $url, true,'UTF-8');

        try {
            $posts = $document->find("#prodwrap > div");
            $news =[] ;
            foreach ($posts as $k => $post) {
                $link = $post->first("a");
                $href = $link->getAttribute("href");
                $date = $post->first("span");
                $news[ (new BotfunctionsController)->changedate($date->text()) ] =  $href ;
               // dump("Xeber tarixi  ". (new BotfunctionsController)->changedate($date->text())." --- linki => " . $href );
            }
            return $news ;
        }catch (\Exception $exception)
        {
            dump($exception);
        }
    }//listingCategoyLinks





    public function getCategoryNews()
    {
        $site = 'https://sonxeber.az';
        $cats = $this->getCategories() ;
        $a =[];
        foreach ($cats as $c)
          $a[] =   $this->getNews($site.$c);

        print_r($a);
    }






    public function newspage($url = 'https://sonxeber.az/178649/bakida-kisi-kecmis-arvadini-ve-qayinanasini-oldurdu-dehsetli-qetlin-teferruati-video'){



    }




}//end class
