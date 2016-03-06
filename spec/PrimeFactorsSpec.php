<?php

namespace spec;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_returns_an_empty_array_for_1(){
        $this->generate(1)->shouldReturn([]);
    }
    function it_returns_2_for_2(){
        $this->generate(2)->shouldReturn([2]);
    }

    function it_returns_2_2_2_for_8(){
        $this->generate(8)->shouldReturn([2, 2, 2]);
    }

    function it_returns_3_3_for_9() {
        $this->generate(9)->shouldReturn([3, 3]);
    }

    function it_returns_2_2_5_5_for_100(){
        $this->generate(100)->shouldReturn([2, 2, 5, 5]);
    }
}
