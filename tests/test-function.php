<?php
require_once "./app/AllFunctionText.php";

use PHPUnit\Framework\TestCase;

	class FunctionTest extends TestCase {

		public function testTimberExists() {
			$user = new User();
			$this->assertTrue($user->isConnected());
			$this->assertTrue($user->isAdmin());
		}

	}
	
