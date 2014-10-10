<?php  namespace Uxweb\Specification\Contracts;

interface Specification {

    /**
     * @param SpecificationCandidate $candidate
     * @return mixed
     */
    public function isSatisfiedBy(SpecificationCandidate $candidate);

    /**
     * @param Specification $otherSpec
     * @return mixed
     */
    public function andIs(Specification $otherSpec);

    /**
     * @param Specification $otherSpec
     * @return mixed
     */
    public function orIs(Specification $otherSpec);

    /**
     * @return mixed
     */
    public function notIs();
}