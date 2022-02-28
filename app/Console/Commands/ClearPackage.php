<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class ClearPackage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:package';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear cache all package';

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
     * @return int
     */
    public function handle()
    {
        // 1. Detele bootstrap/cache
        $files = File::allFiles(base_path("bootstrap/cache"));
        foreach ($files as $file) {
            $fileName = $file->getFilename();
            unlink(base_path("bootstrap/cache/$fileName"));
        }

        // 2. Clear Cache
        Artisan::call('cache:clear');
        // echo "Clear cache successfully";

        // 3. Clear View
        Artisan::call('view:clear');
        // echo "Clear view successfully";

        // 4. Clear Logs
        $files = File::allFiles(base_path("storage/logs"));
        foreach ($files as $file) {
            $fileName = $file->getFilename();
            unlink(base_path("storage/logs/$fileName"));
        }

        // 5. Clear Session
        session()->flush();
        return $this->info('Clear cache all package successfully');
    }
}
