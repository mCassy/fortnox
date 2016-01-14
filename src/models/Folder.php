<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:35:10
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 18:01:52
 */

namespace hmphu\fortnox\models;

/**
 * Class Folder
 * @package hmphu\fortnox\models
 */
class Folder extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Unique email for the folder
     * @var string
     */
    private $Email;
    
    /**
     * List of files
     * @var string
     */
    private $Files;
    
    /**
     * List of folders
     * @var string
     */
    private $Folders;
    
    /**
     * Id of the folder
     * @var string
     */
    private $Id;
    
    /**
     * Name of the folder
     * @var string
     */
    public $Name;
}
