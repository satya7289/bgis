<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	
   public $actsAs = array('Containable');
   

/**
* Custom Validation Function for Uniqueness Check -- Daman
*/
function checkUnique($data, $fields) {
    if (!is_array($fields)) {
            $fields = array($fields);
        }
        foreach($fields as $key) {
            $tmp[$key] = $this->data[$this->name][$key];
        }
    if (isset($this->data[$this->name][$this->primaryKey]) && $this->data[$this->name][$this->primaryKey] > 0) {
            $tmp[$this->primaryKey." !="] = $this->data[$this->name][$this->primaryKey];
        }
    //return false;
        return $this->isUnique($tmp, false); 
    }


/**
	 * Custom validation rule for uploaded files.
	 *
	 *  @param Array $data CakePHP File info.
	 *  @param Boolean $required Is this field required?
	 *  @return Boolean
	*/
	function isValidImage($val, $required = false)
	{
		// Remove first level of Array ($data['Image']['size'] becomes $data['size'])
		$upload_info = array_shift($val);
		// No file uploaded.
		if ($required && $upload_info['size'] == 0) {
				return false;
		}
		
		if(!empty($upload_info['name']))
		{
			// Check for Basic PHP file errors.
			if ($upload_info['error'] !== 0) {
					return false;
			}
			
			$allowedExtns = array('gif', 'jpeg', 'png', 'jpg');
			$fileArr = explode(".", $upload_info['name']);
			$extn = end($fileArr);
			if(!in_array($extn, $allowedExtns)) return false;
			else return true;
		}
		else return true;
	}
	
} 
?>