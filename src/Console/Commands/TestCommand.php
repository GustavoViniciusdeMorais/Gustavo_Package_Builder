<?php

namespace GustavoViniciusDeMorais\GustavoPackageBuilder\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:test {param}';

    public function handle()
    {
        print_r(json_encode(['asdfasfasdf']));echo "\n\n";exit;
    }
}
