<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class DeleteCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:delete {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a category';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $categoryId = $this->argument('id');

        $category = Category::find($categoryId);

        if (!$category) {
            $this->error('Category not found!');
            return;
        }

        $category->delete();

        $this->info('Category deleted successfully!');
    }
}
