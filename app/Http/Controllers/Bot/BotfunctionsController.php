<?php

namespace App\Http\Controllers\Bot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BotfunctionsController extends Controller
{

    public function changedate($date){


        $changeto =array(
            ' '=> '.',
            'yanvar'=>'1','YANVAR'=>'1','Yanvar'=>'1',
            'fevral'=>'2','FEVRAL'=>'2','Fevral'=>'2',
            'mart'=>'3','MART'=>'3','Mart'=>'3',
            'aprel'=>'4','APREL'=>'4','Aprel'=>'4',
            'may'=>'5','MAY'=>'5','May'=>'5',
            'iyun'=>'6','İyun'=>'6','İYUN'=>'6','IYUN'=>'6','Iyun'=>'6',
            'iyul'=>'7','İyul'=>'7','İYUL'=>'7','IYUL'=>'7','Iyul'=>'7',
            'avqust'=>'8','Avqust'=>'8','AVQUST'=>'8',
            'sentyabr'=>'9','Sentyabr'=>'9','SENTYABR'=>'9',
            'oktyabr'=>'10','Oktyabr'=>'10','OKTYABR'=>'10',
            'noyabr'=>'11','Noyabr'=>'11','NOYABR'=>'11',
            'dekabr'=>'12','dekabr'=>'12','DEKABR'=>'12',
        );
        return strtr($date ,$changeto );
    }

}
