<?php  namespace Uxweb\Specification;

use Uxweb\Specification\Contracts\Specification;
use Uxweb\Specification\Contracts\SpecificationCandidate;

class NotSpecification extends CompositeSpecification {

    private $one;

    /**
     * @param Specification $one
     */
    function __construct(Specification $one)
    {
        $this->one = $one;
    }

    /**
     * @param SpecificationCandidate $candidate
     * @return bool
     */
    public function isSatisfiedBy(SpecificationCandidate $candidate)
    {
        return ! $this->one->isSatisfiedBy($candidate);
    }
}