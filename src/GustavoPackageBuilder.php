<?php

namespace GustavoViniciusDeMorais\GustavoPackageBuilder;

use GustavoViniciusDeMorais\GustavoPackageBuilder\Actions\GustavoPackageBuilderAction;

class GustavoPackageBuilder
{

    public function check()
    {
        $action = new GustavoPackageBuilderAction();
        return $action->execute();
    }
}
