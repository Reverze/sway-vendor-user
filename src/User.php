<?php

namespace Sway\Vendor\UserWrapper;

/**
 * Represents current user
 */
class User
{
    /**
     * User object
     * @var \SWUser
     */
    private $userObject = null;
    
    public function __construct()
    {
        $this->checkExternalIntegrity();
        $this->initialize();
    }
    
    /**
     * 
     * @global \SWUSER $SW_USER
     * @throws \Sway\Vendor\UserWrapper\Exception\User\ComponentException
     */
    private function checkExternalIntegrity()
    {
        /**
         * Set SW_USER as global variable
         */
        global $SW_USER;
        
        
        /**
         * SW_USER is required global variable,
         * throws an exception when not exists
         */
        if (!isset($SW_USER)){
            throw Exception\User\ComponentException::missedGlobalVariable('SW_USER');
        }     
        
        /**
         * If variable is empty (is null)
         */
        if (empty($SW_USER)){
            throw Exception\User\ComponentException::emptyGlobalVariable('SW_USER');
        }
    }
    
    /**
     * Initializes 
     * @global \SWUSER $SW_USER
     */
    private function initialize()
    {
        global $SW_USER;
        
        /**
         * Stores reference to global variable
         */
        $this->userObject = $SW_USER; 
    }
    
    /**
     * Checks if user is logged
     * @return bool
     */
    public function isOnline() :  bool
    {
        return $this->userObject->IsLogged();
    }
    
    /**
     * Gets current user name
     * @return string
     */
    public function getName() : string
    {
        return (string) $this->userObject->current_nick;
    }
    
    /**
     * Gets current user email adress
     * @return string
     */
    public function getEmailAddress() : string
    {
        return (string) $this->userObject->current_email;
    }
    
  
}


?>