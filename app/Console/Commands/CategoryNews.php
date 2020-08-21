<?php

namespace App\Console\Commands;

use App\Http\Controllers\Bot\SonXeberController;
use DiDom\Document;
use DiDom\Element;
use Illuminate\Console\Command;

class CategoryNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bu komanda son xeberleri getirir';

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
     * @return void
     */
    public function handle()
    {

       $controller = new SonXeberController();
          return  $controller->getNews();
    }
}
