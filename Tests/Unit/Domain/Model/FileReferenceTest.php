<?php

namespace Heilmann\JhNewsImgpreviewonly\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Jonathan Heilmann <mail@jonathan-heilmann.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Heilmann\JhNewsImgpreviewonly\Domain\Model\FileReference.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Jonathan Heilmann <mail@jonathan-heilmann.de>
 */
class FileReferenceTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Heilmann\JhNewsImgpreviewonly\Domain\Model\FileReference
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Heilmann\JhNewsImgpreviewonly\Domain\Model\FileReference();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getJhNewsImagepreviewonlyReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getJhNewsImagepreviewonly()
		);
	}

	/**
	 * @test
	 */
	public function setJhNewsImagepreviewonlyForBooleanSetsJhNewsImagepreviewonly() {
		$this->subject->setJhNewsImagepreviewonly(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'jhNewsImagepreviewonly',
			$this->subject
		);
	}
}
