<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Dachform {

	/**
	 * @var boolean
	 */
	protected $flachdach;

	/**
	 * @var boolean
	 */
	protected $krueppelwalmdach;

	/**
	 * @var boolean
	 */
	protected $mansarddach;

	/**
	 * @var boolean
	 */
	protected $pultdach;

	/**
	 * @var boolean
	 */
	protected $pyramidendach;

	/**
	 * @var boolean
	 */
	protected $satteldach;

	/**
	 * @var boolean
	 */
	protected $walmdach;

	/**
	 * @return boolean
	 */
	public function getFlachdach() {
		return $this->flachdach;
	}

	/**
	 * @return boolean
	 */
	public function getKrueppelwalmdach() {
		return $this->krueppelwalmdach;
	}

	/**
	 * @return boolean
	 */
	public function getMansarddach() {
		return $this->mansarddach;
	}

	/**
	 * @return boolean
	 */
	public function getPultdach() {
		return $this->pultdach;
	}

	/**
	 * @return boolean
	 */
	public function getPyramidendach() {
		return $this->pyramidendach;
	}

	/**
	 * @return boolean
	 */
	public function getSatteldach() {
		return $this->satteldach;
	}

	/**
	 * @return boolean
	 */
	public function getWalmdach() {
		return $this->walmdach;
	}

	/**
	 * @param boolean $flachdach Setter for flachdach
	 * @return Dachform
	 */
	public function setFlachdach($flachdach) {
		$this->flachdach = $flachdach;
		return $this;
	}

	/**
	 * @param boolean $krueppelwalmdach Setter for krueppelwalmdach
	 * @return Dachform
	 */
	public function setKrueppelwalmdach($krueppelwalmdach) {
		$this->krueppelwalmdach = $krueppelwalmdach;
		return $this;
	}

	/**
	 * @param boolean $mansarddach Setter for mansarddach
	 * @return Dachform
	 */
	public function setMansarddach($mansarddach) {
		$this->mansarddach = $mansarddach;
		return $this;
	}

	/**
	 * @param boolean $pultdach Setter for pultdach
	 * @return Dachform
	 */
	public function setPultdach($pultdach) {
		$this->pultdach = $pultdach;
		return $this;
	}

	/**
	 * @param boolean $pyramidendach Setter for pyramidendach
	 * @return Dachform
	 */
	public function setPyramidendach($pyramidendach) {
		$this->pyramidendach = $pyramidendach;
		return $this;
	}

	/**
	 * @param boolean $satteldach Setter for satteldach
	 * @return Dachform
	 */
	public function setSatteldach($satteldach) {
		$this->satteldach = $satteldach;
		return $this;
	}

	/**
	 * @param boolean $walmdach Setter for walmdach
	 * @return Dachform
	 */
	public function setWalmdach($walmdach) {
		$this->walmdach = $walmdach;
		return $this;
	}
}
