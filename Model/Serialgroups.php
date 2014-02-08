<?php
/**
 * DelightSerial Customisation by delight software gmbh for Magento
 *
 * DISCLAIMER
 *
 * Do not edit or add code to this file if you wish to upgrade this Module to newer
 * versions in the future.
 *
 * @category   Custom
 * @package    Delight_Delightserial
 * @copyright  Copyright (c) 2001-2011 delight software gmbh (http://www.delightsoftware.com/)
 */

/**
 * SerialNumber Groups Model
 *
 * @category   Custom
 * @package    Delight_Delightserial
 * @author     delight software gmbh <info@delightsoftware.com>
 */
class Delight_Delightserial_Model_Serialgroups extends Mage_Core_Model_Abstract {

	protected function _construct() {
		$this->_init('delightserial/serialgroups');
	}

	public function isInformed() {
		return ($this->getInformed() > 0);
	}

	public function getNumSerials() {
		$serials = Mage::getResourceModel('delightserial/numbers_collection')->loadByGroupId($this->getId());
		return $serials->count();
	}
}
?>