<?php

namespace PathCoverage\Tests;

use PathCoverage\SampleGenerator;
use PHPUnit\Framework\TestCase;

/**
 * @covers \PathCoverage\SampleGenerator
 */
class SampleGeneratorTest extends TestCase {

	/**
	 * @dataProvider provideValues
	 */
	public function testGenerate( array $values, array $expected ): void {

		$sut = new SampleGenerator( $values );

		$actual = iterator_to_array( $sut->generate() );

		self::assertEquals( $expected, $actual );
	}

	public function provideValues(): array {
		return [
			[ [], [] ],
			[ [ 1, 2, 3, 4 ], [ 'ODD', 'EVEN', 'ODD', 'EVEN' ] ],
			[ [ 1 ], [ 'ODD' ] ],
		];
	}
}
