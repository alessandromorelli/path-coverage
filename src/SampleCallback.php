<?php
declare( strict_types=1 );


namespace PathCoverage;

class SampleCallback {

	private readonly mixed $callback;

	/**
	 * @codeCoverageIgnore
	 */
	public function __construct(
		private readonly array $values,
		callable $callback
	) {
		$this->callback = $callback;
	}

	public function generate(): void {
		foreach ($this->values as $value) {
			if($value % 2) {
				($this->callback)('ODD');
			} else {
				($this->callback)('EVEN');
			}
		}
	}
}