<?php

namespace spec\App;

use App\AttractionRepository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PathSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Path');
    }

    function let(AttractionRepository $attractionRepository)
    {
        $this->beConstructedWith($attractionRepository);
    }

    function it_calculates_the_shortest_path()
    {
        
    }
}
