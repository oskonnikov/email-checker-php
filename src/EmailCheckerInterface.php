<?php

namespace Oskonnikov\EmailCheckerPHP;

interface EmailCheckerInterface {

    /**
     * To verify an email address exist.
     */
    public function check($email);
}
