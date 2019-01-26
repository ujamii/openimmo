<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class LageImBau {

	/**
	 * @var boolean
	 */
	protected $hinten;

	/**
	 * @var boolean
	 */
	protected $links;

	/**
	 * @var boolean
	 */
	protected $rechts;

	/**
	 * @var boolean
	 */
	protected $vorne;

	/**
	 * @return boolean
	 */
	public function getHinten() {
		return $this->hinten;
	}

	/**
	 * @return boolean
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * @return boolean
	 */
	public function getRechts() {
		return $this->rechts;
	}

	/**
	 * @return boolean
	 */
	public function getVorne() {
		return $this->vorne;
	}

	/**
	 * @param boolean $hinten Setter for hinten
	 * @return LageImBau
	 */
	public function setHinten($hinten) {
		$this->hinten = $hinten;
		return $this;
	}

	/**
	 * @param boolean $links Setter for links
	 * @return LageImBau
	 */
	public function setLinks($links) {
		$this->links = $links;
		return $this;
	}

	/**
	 * @param boolean $rechts Setter for rechts
	 * @return LageImBau
	 */
	public function setRechts($rechts) {
		$this->rechts = $rechts;
		return $this;
	}

	/**
	 * @param boolean $vorne Setter for vorne
	 * @return LageImBau
	 */
	public function setVorne($vorne) {
		$this->vorne = $vorne;
		return $this;
	}
}
