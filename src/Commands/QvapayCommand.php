<?php

namespace Qvapay/sdk\Qvapay\Commands;

use Illuminate\Console\Command;

class QvapayCommand extends Command
{
    public $signature = 'sdk';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
