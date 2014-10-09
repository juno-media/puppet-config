<?php
/**
 * Puppet Config CLI Application for generating YAML config file.
 *
 * PHP Version 5
 *
 * @category Application
 * @package  Juno
 * @author   Adam Paterson <hello@adampaterson.co.uk>
 * @license  MIT https://github.com/juno-media/puppet-config/blob/master/LICENSE
 * @link     https://github.com/juno-media/puppet-config
 */
namespace Juno;

use Symfony\Component\Console\Application as BaseApplication;

/**
 * Class Application
 *
 * @category Application
 * @package  Juno
 * @author   Adam Paterson <hello@adampaterson.co.uk>
 * @license  MIT https://github.com/juno-media/puppet-config/blob/master/LICENSE
 * @link     Symfony\Component\Console\Application
 */
class Application extends BaseApplication
{
    /**
     * Juno Media logo
     *
     * @category Application
     * @package Juno
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
     * Create output formatter and set application name and version
     *
     * @param string $name    Application name
     * @param string $version Application version
     *
     * @category Application
     * @package Juno
     */
    public function __construct(
        $name = 'Puppet Config Generator',
        $version = '1.0.0'
    ) {
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
