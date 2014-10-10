<?php namespace spec\Uxweb\Specification;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Uxweb\Specification\CompositeSpecification;
use Uxweb\Specification\Contracts\SpecificationCandidate;

class SpecificationSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('spec\Uxweb\Specification\FooSpecification');
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('spec\Uxweb\Specification\FooSpecification');
    }

    function it_passes(FooSpecificationCandidate $candidate)
    {
        $this->isSatisfiedBy($candidate)->shouldReturn(false);
    }
}

class FooSpecification extends CompositeSpecification {

    public function isSatisfiedBy(SpecificationCandidate $fooCandidate)
    {
        return $fooCandidate->getName() == 'Foo';
    }
}

class FooSpecificationCandidate implements SpecificationCandidate {

    protected $name = "Foo";

    public function getName()
    {
        return $this->name;
    }
}