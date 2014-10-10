<?php  namespace Uxweb\Specification;

use Uxweb\Specification\Contracts\Specification;
use Uxweb\Specification\Contracts\SpecificationCandidate;

class OrSpecification extends CompositeSpecification {

    private $first;

    private $other;

    /**
     * @param Specification $first
     * @param Specification $other
     */
    function __construct(Specification $first, Specification $other)
    {
        $this->first = $first;
        $this->other = $other;
    }

    /**
     * @param SpecificationCandidate $candidate
     * @return bool|mixed
     */
    public function isSatisfiedBy(SpecificationCandidate $candidate)
    {
        return $this->first->isSatisfiedBy($candidate) || $this->other->isSatisfiedBy($candidate);
    }

}