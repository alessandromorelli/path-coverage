<?php

namespace PathCoverage\Tests;

use PathCoverage\SampleCallback;
use PHPUnit\Framework\TestCase;

/**
 * @covers \PathCoverage\SampleCallback
 */
class SampleCallbackTest extends TestCase {

	/**
	 * @dataProvider provideValues
	 */
	public function testGenerate( array $values, array $expected ): void {

		$actual = [];
		$sut = new SampleCallback( $values, function ( $value ) use ( &$actual ) {
			$actual[] = $value;
		} );

		$sut->generate();

		self::assertEquals( $expected, $actual);
	}

	public function provideValues(): array {
		return [
			[ [], [] ],
			[ [ 1, 2, 3, 4 ], [ 'ODD', 'EVEN', 'ODD', 'EVEN' ] ],
			[ [ 1 ], [ 'ODD' ] ],
		];
	}
}
