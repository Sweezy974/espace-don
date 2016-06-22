<?php

namespace Donation\DonationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DonationBundle extends Bundle
{
     public function getParent()
    {
        return 'FOSUserBundle';
    }
}
