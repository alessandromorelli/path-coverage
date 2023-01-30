<?php
declare( strict_types=1 );


namespace PathCoverage;

class SampleGenerator {

	/**
	 * @codeCoverageIgnore
	 */
	public function __construct(
		private readonly array $values
	) {
	}

	public function generate(): \Generator {
		foreach ($this->values as $value) {
			if($value % 2) {
				yield 'ODD';
			} else {
				yield 'EVEN';
			}
		}
	}
}