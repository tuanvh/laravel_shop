<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function simplehtmldom_1_5\file_get_html;
use Sunra\PhpSimple\HtmlDomParser;

class WebsiteCrawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command to crawler the news';

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
     * @return mixed
     */
    public function handle()
    {

        $html = HtmlDomParser::file_get_html('https://viblo.asia', null, null, 0);
        dd($html->find('.post-feed h3 a', 0));
        //foreach ($html->find('img') as $element) {
        //    echo $element->src . '<br>';
        //}
    }
}
