<?php

namespace App\Console\Commands;

use App\Helpers\ImageHelper;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class CreateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:create {name} {description} {price} {image}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new product';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Create Product
        Product::create([
            'name' => $this->argument('name'),
            'description' => $this->argument('description'),
            'price' => $this->argument('price'),
            'image' => ImageHelper::upload($this->argument('image'))
        ]);

        $this->info('Product created successfully!');
    }
}
