<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class HallenLagerProd {

	/**
	 * @var string
	 */
	protected $hallenTyp;

	/**
	 * @return string
	 */
	public function getHallenTyp(): string {
		return $this->hallenTyp;
	}

	/**
	 * @param string $hallenTyp Setter for hallenTyp
	 * @return HallenLagerProd
	 */
	public function setHallenTyp(string $hallenTyp) {
		$this->hallenTyp = $hallenTyp;
		return $this;
	}
}
