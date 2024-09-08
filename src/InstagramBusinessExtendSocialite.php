<?php

namespace JanykSteenbeek\SocialiteInstagramBusiness;

use SocialiteProviders\Manager\SocialiteWasCalled;

class InstagramBusinessExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled): void
    {
        $socialiteWasCalled->extendSocialite('instagram-business', Provider::class);
    }
}
