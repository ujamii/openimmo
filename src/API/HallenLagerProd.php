<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class HallenLagerProd {

	/**
	 * @var string
	 */
	protected $hallenTyp;

	/**
	 * @return string
	 */
	public function getHallenTyp() {
		return $this->hallenTyp;
	}

	/**
	 * @param string $hallenTyp Setter for hallenTyp
	 * @return HallenLagerProd
	 */
	public function setHallenTyp($hallenTyp) {
		$this->hallenTyp = $hallenTyp;
		return $this;
	}
}
