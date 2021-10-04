<?php

namespace spec\App\Entity;

use App\Entity\Course;
use PhpSpec\ObjectBehavior;

class CourseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Course::class);
    }

    function it_can_get_its_name()
    {
        $this->getName()->shouldReturn(null);
    }

    function it_can_set_its_name()
    {
        $this->setName("an awesome name");

        $this->getName()->shouldReturn("an awesome name");
    }

    function it_can_get_its_description()
    {
        $this->getDescription()->shouldReturn(null);
    }

    function it_can_set_its_description()
    {
        $this->setDescription("an awesome and not too long description");

        $this->getDescription()->shouldReturn("an awesome and not too long description");
    }

    function it_can_get_its_video()
    {
        $this->getVideo()->shouldReturn(null);
    }

    function it_can_set_its_video()
    {
        $this->setVideo("https://youtube.com");

        $this->getVideo()->shouldReturn("https://youtube.com");
    }
}
