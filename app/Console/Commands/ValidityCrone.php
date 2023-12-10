<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class ValidityCrone extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:validity-crone';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $current_time = now();

        $new_time = $current_time->addHours(1);

        Product::where('status', '<=', $new_time)->update(['status' => 'inactive']);
        $this->info('Status successfully Change!');
    }
}
