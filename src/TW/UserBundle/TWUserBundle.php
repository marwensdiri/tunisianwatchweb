<?php

namespace TW\UserBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TWUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
