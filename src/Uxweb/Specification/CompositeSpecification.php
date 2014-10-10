<?php  namespace Uxweb\Specification;

use Uxweb\Specification\Contracts\Specification;
use Uxweb\Specification\Contracts\SpecificationCandidate;

abstract class CompositeSpecification implements Specification {

    /**
     * @param SpecificationCandidate$candidate
     * @return mixed
     */
    public abstract function isSatisfiedBy(SpecificationCandidate $candidate);
//    {
//        return $candidate->satisfies();
//    }

    /**
     * @param Specification $otherSpec
     * @return AndSpecification
     */
    public function andIs(Specification $otherSpec)
    {
        return new AndSpecification($this, $otherSpec);
    }

    /**
     * @param Specification $otherSpec
     * @return OrSpecification
     */
    public function orIs(Specification $otherSpec)
    {
        return new OrSpecification($this, $otherSpec);
    }

    /**
     * @return NotSpecification
     */
    public function notIs()
    {
        return new NotSpecification($this);
    }
}