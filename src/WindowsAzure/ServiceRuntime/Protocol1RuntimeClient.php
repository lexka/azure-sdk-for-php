<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   PEAR2\WindowsAzure\ServiceRuntime
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */

namespace PEAR2\WindowsAzure\ServiceRuntime;
use PEAR2\WindowsAzure\Resources;

/**
 * An implementation for the protocol runtime client.
 *
 * @category  Microsoft
 * @package   PEAR2\WindowsAzure\ServiceRuntime\Protocol1RuntimeClient
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class Protocol1RuntimeClient
{
    /**
     * @var Protocol1RuntimeGoalStateClient
     */
    private $_goalStateClient;
    
    /**
     * @var Protocol1RuntimeCurrentStateClient
     */
    private $_currentStateClient;
    
    /**
     * Constructor
     * 
     * @param string $goalStateClient    The goal state client.
     * @param string $currentStateClient The current state client.
     * @param string $endpoint           The endpoint.
     */
    public function __construct($goalStateClient, $currentStateClient, $endpoint)
    {
        $this->_goalStateClient    = $goalStateClient;
        $this->_currentStateClient = $currentStateClient;
        
        $this->_goalStateClient->setEndpoint($endpoint);
    }
    
    /**
     * Gets the current goal state.
     * 
     * @return GoalState.
     */
    public function getCurrentGoalState()
    {
        return $this->_goalStateClient->getCurrentGoalState();
    }
    
    /**
     * Gets the role environment data.
     * 
     * @return RoleEnvironmentData.
     */
    public function getRoleEnvironmentData()
    {
        return $this->_goalStateClient->getRoleEnvironmentData();
    }
    
    /**
     * Adds a goal state changed listener.
     * 
     * @param function $listener The listener function.
     * 
     * @return none.
     */
    public function addGoalStateChangedListener($listener)
    {
        $this->_goalStateClient->addGoalStateChangedListener($listener);
    }
    
    /**
     * Removes a goal state changed listener.
     * 
     * @param function $listener The listener function.
     * 
     * @return none.
     */
    public function removeGoalStateChangedListener($listener)
    {
        $this->_goalStateClient->removeGoalStateChangedListener($listener);
    }
    
    /**
     * Sets the current state.
     * 
     * @param CurrentState $state The new state.
     * 
     * @return none.
     */
    public function setCurrentState($state)
    {
        $this->_currentStateClient->setCurrentState($state);
    }
}

?>