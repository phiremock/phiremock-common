<?php

namespace Mcustiel\Phiremock\Domain\Conditions\Body;

use Mcustiel\Phiremock\Domain\Conditions\Matcher;
use Mcustiel\Phiremock\Domain\Conditions\StringValue;

class BodyIsEqualTo extends BodyCondition
{
    public function __construct(StringValue $string)
    {
        parent::__construct(Matcher::equalTo(), $string);
    }
}
