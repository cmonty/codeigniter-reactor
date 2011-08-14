<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2006 - 2011 EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 2.0
<<<<<<< HEAD
 * @filesource	
=======
 * @filesource
>>>>>>> 254217a8655a14716bb673a0abde81c0b80ccd90
 */

// ------------------------------------------------------------------------

/**
<<<<<<< HEAD
 * CodeIgniter Dummy Caching Class 
=======
 * CodeIgniter Dummy Caching Class
>>>>>>> 254217a8655a14716bb673a0abde81c0b80ccd90
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Core
 * @author		ExpressionEngine Dev Team
<<<<<<< HEAD
 * @link		
=======
 * @link
>>>>>>> 254217a8655a14716bb673a0abde81c0b80ccd90
 */

class CI_Cache_dummy extends CI_Driver {

	/**
<<<<<<< HEAD
	 * Get 
	 *
	 * Since this is the dummy class, it's always going to return FALSE.
	 *
	 * @param 	string	
=======
	 * Get
	 *
	 * Since this is the dummy class, it's always going to return FALSE.
	 *
	 * @param 	string
>>>>>>> 254217a8655a14716bb673a0abde81c0b80ccd90
	 * @return 	Boolean		FALSE
	 */
	public function get($id)
	{
		return FALSE;
	}

<<<<<<< HEAD
	// ------------------------------------------------------------------------	
	
=======
	// ------------------------------------------------------------------------

>>>>>>> 254217a8655a14716bb673a0abde81c0b80ccd90
	/**
	 * Cache Save
	 *
	 * @param 	string		Unique Key
	 * @param 	mixed		Data to store
	 * @param 	int			Length of time (in seconds) to cache the data
	 *
	 * @return 	boolean		TRUE, Simulating success
	 */
	public function save($id, $data, $ttl = 60)
	{
		return TRUE;
	}
<<<<<<< HEAD
	
=======

>>>>>>> 254217a8655a14716bb673a0abde81c0b80ccd90
	// ------------------------------------------------------------------------

	/**
	 * Delete from Cache
	 *
	 * @param 	mixed		unique identifier of the item in the cache
	 * @param 	boolean		TRUE, simulating success
	 */
	public function delete($id)
	{
		return TRUE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Clean the cache
	 *
	 * @return 	boolean		TRUE, simulating success
	 */
	public function clean()
	{
		return TRUE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Cache Info
	 *
	 * @param 	string		user/filehits
	 * @return 	boolean		FALSE
	 */
	 public function cache_info($type = NULL)
	 {
		 return FALSE;
	 }

	// ------------------------------------------------------------------------

	/**
	 * Get Cache Metadata
	 *
	 * @param 	mixed		key to get cache metadata on
	 * @return 	boolean		FALSE
	 */
	public function get_metadata($id)
	{
		return FALSE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Is this caching driver supported on the system?
	 * Of course this one is.
<<<<<<< HEAD
	 * 
=======
	 *
>>>>>>> 254217a8655a14716bb673a0abde81c0b80ccd90
	 * @return TRUE;
	 */
	public function is_supported()
	{
		return TRUE;
	}

	// ------------------------------------------------------------------------
<<<<<<< HEAD
	
}
// End Class

/* End of file Cache_apc.php */
/* Location: ./system/libraries/Cache/drivers/Cache_apc.php */
=======

}
// End Class

/* End of file Cache_dummy.php */
/* Location: ./system/libraries/Cache/drivers/Cache_dummy.php */
>>>>>>> 254217a8655a14716bb673a0abde81c0b80ccd90
