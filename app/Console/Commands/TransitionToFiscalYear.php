<?php

namespace App\Console\Commands;

use App\Models\FiscalYear;
use Illuminate\Console\Command;

class TransitionToFiscalYear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:transition-to-fiscal-year';

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
        $currentYear = getCurrentFiscalYear();

        $newStartYear = $currentYear->end_year + 1;
        $newEndYear = $newStartYear + 1;

        FiscalYear::create([
            'start_year' => $newStartYear,
            'end_year' => $newEndYear,
            'name' => $newStartYear . '-' . $newEndYear,
        ]);

        $this->info("Transitioned to fiscal year $newStartYear-$newEndYear");
    }
}
