<?php
require_once __DIR__ .'/../vendor/autoload.php';

if (!class_exists('Juno_PuppetConfig_Bootstrap')) {
    /**
     * Class Juno_PuppetConfig_Bootstrap
     */
    class Juno_PuppetConfig_Bootstrap
    {
        /**
         * @param $file
         * @return mixed
         */
        public static function includeIfExists($file)
        {
            if (file_exists($file)) {
                return include $file;
            }
        }

        /**
         * @return mixed
         * @throws ErrorException
         */
        public static function getLoader()
        {
            if ((!$loader = \Juno_PuppetConfig_Bootstrap::includeIfExists(__DIR__.'/../vendor/autoload.php'))
                && (!$loader = \Juno_PuppetConfig_Bootstrap::includeIfExists(__DIR__.'/../../../autoload.php'))) {
                throw new \ErrorException('You must set up the project dependencies, run the following commands:'.PHP_EOL.
                    'curl -s http://getcomposer.org/installer | php'.PHP_EOL.
                    'php composer.phar install'.PHP_EOL);
            }

            return $loader;
        }
    }
}

try {
    $loader = \Juno_PuppetConfig_Bootstrap::getLoader();
    $application = new \Juno\Application();

    return $application;
} catch (\Exception $e) {
    echo $e->getMessage();
    exit(1);
}