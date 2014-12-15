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
 * @author     <TODO AUTHOR> <AUTHOR@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */

namespace AppserverIo\Appserver\Core\Mock;

use AppserverIo\Appserver\Core\AbstractContainerThread;

/**
 * AppserverIo\Appserver\Core\Mock\MockAbstractContainerThread
 *
 * <TODO CLASS DESCRIPTION>
 *
 * @category   Server
 * @package    Appserver
 * @subpackage Application
 * @author     <TODO AUTHOR> <AUTHOR@techdivision.com>
 * @copyright  2014 TechDivision GmbH - <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.techdivision.com/
 */
class MockAbstractContainerThread extends AbstractContainerThread
{
    public function main()
    {
        // We have to notify the logical parent thread, the appserver, as it has to
        // know the port has been opened
        $this->synchronized(
            function () {
                $this->notify();
            }
        );
    }
}

