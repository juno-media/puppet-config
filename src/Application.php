<?php
namespace Juno;

use Symfony\Component\Console\Application as BaseApplication;

/**
 * Class Application
 * @package Juno
 * @author Adam Paterson <hello@adampaterson.co.uk>
 */
class Application extends BaseApplication
{
    /**
     * Juno Media logo
     *
     * @var
     */
    protected static $logo = "
       __                                        ___
      / /_  ______  ____     ____ ___  ___  ____/ (_)___ _
 __  / / / / / __ \/ __ \   / __ `__ \/ _ \/ __  / / __ `/
/ /_/ / /_/ / / / / /_/ /  / / / / / /  __/ /_/ / / /_/ /
\____/\__,_/_/ /_/\____/  /_/ /_/ /_/\___/\__,_/_/\__,_/

    ";

    /**
     * Create output formatter and set application name and version.
     *
     * @param string $name
     * @param string $version
     */
    public function __construct($name = 'Puppet Config Generator', $version = '1.0.0')
    {
        return parent::__construct($name, $version);
    }

    /**
     * Add logo to help output
     *
     * @return string
     */
    public function getHelp()
    {
        return self::$logo . parent::getHelp();
    }
}
