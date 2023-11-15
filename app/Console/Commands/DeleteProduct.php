<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class DeleteProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:delete {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a product';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $productId = $this->argument('id');

        $product = Product::find($productId);

        if (!$product) {
            $this->error('Product not found!');
            return;
        }

        $product->delete();

        $this->info('Product deleted successfully!');
    }
}
