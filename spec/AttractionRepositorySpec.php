<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use App\Attraction;

class AttractionRepositorySpec extends ObjectBehavior
{

    function let(Attraction $attraction)
    {
        $this->beConstructedWith($attraction);
    }
    
    function it_is_initializable()
    {
        $this->shouldHaveType('App\AttractionRepository');
    }
}
