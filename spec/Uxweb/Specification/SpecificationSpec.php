<?php

namespace spec\Uxweb\Specification;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpecificationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Uxweb\Specification\Specification');
    }
}
