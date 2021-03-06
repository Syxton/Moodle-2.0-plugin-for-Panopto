<?php
/**
 * File for class UserManagementStructListGroups
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for UserManagementStructListGroups originally named ListGroups
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?xsd=xsd0}
 * @package UserManagement
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-01-19
 */
class UserManagementStructListGroups extends UserManagementWsdlClass
{
    /**
     * The auth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructAuthenticationInfo
     */
    public $auth;
    /**
     * The pagination
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var UserManagementStructPagination
     */
    public $pagination;
    /**
     * Constructor method for ListGroups
     * @see parent::__construct()
     * @param UserManagementStructAuthenticationInfo $_auth
     * @param UserManagementStructPagination $_pagination
     * @return UserManagementStructListGroups
     */
    public function __construct($_auth = NULL,$_pagination = NULL)
    {
        parent::__construct(array('auth'=>$_auth,'pagination'=>$_pagination),false);
    }
    /**
     * Get auth value
     * @return UserManagementStructAuthenticationInfo|null
     */
    public function getAuth()
    {
        return $this->auth;
    }
    /**
     * Set auth value
     * @param UserManagementStructAuthenticationInfo $_auth the auth
     * @return UserManagementStructAuthenticationInfo
     */
    public function setAuth($_auth)
    {
        return ($this->auth = $_auth);
    }
    /**
     * Get pagination value
     * @return UserManagementStructPagination|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }
    /**
     * Set pagination value
     * @param UserManagementStructPagination $_pagination the pagination
     * @return UserManagementStructPagination
     */
    public function setPagination($_pagination)
    {
        return ($this->pagination = $_pagination);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see UserManagementWsdlClass::__set_state()
     * @uses UserManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return UserManagementStructListGroups
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
