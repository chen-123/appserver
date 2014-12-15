<?php

/**
 * AppserverIo\Appserver\Core\AbstractThread
 *
 * PHP version 5
 *
 * @category   Server
 * @package    Appserver
 * @subpackage Application
 * @author     Johann Zelger <jz@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Appserver\Core;

/**
 * An abstraction layer for Threads
 *
 * The major change vs. a normal Thread is that you have to use a main() method instead of a run() method.
 * You can use init() method to get and process args passed in constructor.
 *
 * @category   Server
 * @package    Appserver
 * @subpackage Application
 * @author     Johann Zelger <jz@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
abstract class AbstractThread extends \Thread
{

    /**
     * Constructor sets initialContext object per default and calls
     * init function to pass other args.
     */
    public function __construct()
    {
        // get all params
        $functionArgs = func_get_args();
        // send call init function and pass all args
        call_user_func_array(array("static", "init"), $functionArgs);
    }

    /**
     * Main run method
     *
     * @return void
     * @see \Thread::run()
     */
    public function run()
    {
        $this->main();
    }

    /**
     * The thread implementation main method which will be called from run in abstractness
     *
     * @return void
     */
    abstract public function main();
}
