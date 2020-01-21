<?php

namespace MadWeb\Initializer\Test;

use MadWeb\Initializer\Run;

class OptionRunnerCommandTest extends RunnerCommandsTestCase
{
    /**
     * @test
     * @dataProvider initCommandsOptionSet
     */
    public function option($command)
    {
        $test = false;

        $this->declareCommands(function (Run $run) use (&$test) {
            $test = $run->getOption('some');
        }, $command);

        $this->assertTrue($test);
    }
}