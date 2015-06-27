<?php
namespace Heilmann\JhNewsImgpreviewonly\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Jonathan Heilmann <mail@jonathan-heilmann.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * FileReference
 */
class FileReference extends \Tx_News_Domain_Model_FileReference {

	/**
	 * Display image in preview only
	 *
	 * @var boolean
	 */
	protected $jhNewsImagepreviewonly = FALSE;

	/**
	 * Returns the jhNewsImagepreviewonly
	 *
	 * @return boolean $jhNewsImagepreviewonly
	 */
	public function getJhNewsImagepreviewonly() {
		return $this->jhNewsImagepreviewonly;
	}

	/**
	 * Sets the jhNewsImagepreviewonly
	 *
	 * @param boolean $jhNewsImagepreviewonly
	 * @return void
	 */
	public function setJhNewsImagepreviewonly($jhNewsImagepreviewonly) {
		$this->jhNewsImagepreviewonly = $jhNewsImagepreviewonly;
	}

	/**
	 * Returns the boolean state of jhNewsImagepreviewonly
	 *
	 * @return boolean
	 */
	public function isJhNewsImagepreviewonly() {
		return $this->jhNewsImagepreviewonly;
	}

}