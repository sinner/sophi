<?php

namespace Sophi\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SophiUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
