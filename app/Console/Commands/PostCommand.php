<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
class PostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new post';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $post = new Post();
        $post->save();
    }
}
