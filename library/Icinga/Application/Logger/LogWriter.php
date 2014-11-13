<?php
// {{{ICINGA_LICENSE_HEADER}}}
// {{{ICINGA_LICENSE_HEADER}}}

namespace Icinga\Application\Logger;

use Icinga\Application\Config;

/**
 * Abstract class for writers that write messages to a log
 */
abstract class LogWriter
{
    /**
     * @var Zend_Config
     */
    protected $config;

    /**
     * Create a new log writer initialized with the given configuration
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * Log a message with the given severity
     */
    abstract public function log($severity, $message);
}
