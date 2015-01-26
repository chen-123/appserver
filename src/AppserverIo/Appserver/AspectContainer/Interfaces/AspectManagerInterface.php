<?php

/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Server
 * @package    Appserver
 * @subpackage Application
 * @author     Bernhard Wick <bw@appserver.io>
 * @copyright  2014 TechDivision GmbH - <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io/
 */

namespace AppserverIo\Appserver\AspectContainer\Interfaces;

use AppserverIo\Doppelgaenger\AspectRegister;

/**
 * AppserverIo\Appserver\AspectContainer\Interfaces\AspectManagerInterface
 *
 * Interface which all manager classes supervising aspects should implement
 *
 * @category   Server
 * @package    Appserver
 * @subpackage Application
 * @author     Bernhard Wick <bw@appserver.io>
 * @copyright  2014 TechDivision GmbH - <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io/
 */
interface AspectManagerInterface
{
    /**
     * The unique identifier to be registered in the application context.
     *
     * @var string
     */
    const IDENTIFIER = 'AspectManagerInterface';

    /**
     * Getter for the $aspectRegister property
     *
     * @return \AppserverIo\Doppelgaenger\AspectRegister The aspect register
     */
    public function getAspectRegister();

    /**
     * Inject the aspect register
     *
     * @param \AppserverIo\Doppelgaenger\AspectRegister $aspectRegister The aspect register instance
     *
     * @return null
     */
    public function injectAspectRegister(AspectRegister $aspectRegister);
}
