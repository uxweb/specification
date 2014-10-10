<?php  namespace Uxweb\Specification;

use Uxweb\Specification\Contracts\Specification;
use Uxweb\Specification\Contracts\SpecificationCandidate;

class AndSpecification extends CompositeSpecification {

    private $firstSpec;

    private $otherSpec;

    /**
     * @param Specification $firstSpec
     * @param Specification $otherSpec
     */
    function __construct(Specification $firstSpec, Specification $otherSpec)
    {
        $this->firstSpec = $firstSpec;
        $this->otherSpec = $otherSpec;
    }

    /**
     * @param SpecificationCandidate $candidate
     * @return bool
     */
    public function isSatisfiedBy(SpecificationCandidate $candidate)
    {
        return $this->firstSpec->isSatisfiedBy($candidate) && $this->otherSpec->isSatisfiedBy($candidate);
    }
}