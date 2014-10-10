<?php

namespace Juno\Tests;

use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class ApplicationTest
 */
class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test application init and list command.
     */
    public function testExecute()
    {
        $application = require __DIR__ . '/../src/bootstrap.php';
        $this->assertInstanceOf('\Juno\Application', $application);

        $commandTester = new CommandTester($command = $application->get('list'));
        $commandTester->execute(
            array('command' => $command->getName()),
            array('decorated' => false)
        );

        $this->assertRegExp(
            '/help   Displays help for a command/',
            $commandTester->getDisplay(),
            '->execute() returns a list of available commands'
        );
    }
}
