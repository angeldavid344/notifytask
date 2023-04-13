<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'PostCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new task';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $post = new Post();
        // $post->save();
        $text = "[" . date("Y-m-d H:i:s") . "]: hola mundo";
        Storage::append("archivo.txt", $text);
    }
}
