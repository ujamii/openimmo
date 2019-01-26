<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageImBau
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("lage_im_bau") 
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
	public function getHinten(): bool {
		return $this->hinten;
	}

	/**
	 * @return boolean
	 */
	public function getLinks(): bool {
		return $this->links;
	}

	/**
	 * @return boolean
	 */
	public function getRechts(): bool {
		return $this->rechts;
	}

	/**
	 * @return boolean
	 */
	public function getVorne(): bool {
		return $this->vorne;
	}

	/**
	 * @param boolean $hinten Setter for hinten
	 * @return LageImBau
	 */
	public function setHinten(bool $hinten) {
		$this->hinten = $hinten;
		return $this;
	}

	/**
	 * @param boolean $links Setter for links
	 * @return LageImBau
	 */
	public function setLinks(bool $links) {
		$this->links = $links;
		return $this;
	}

	/**
	 * @param boolean $rechts Setter for rechts
	 * @return LageImBau
	 */
	public function setRechts(bool $rechts) {
		$this->rechts = $rechts;
		return $this;
	}

	/**
	 * @param boolean $vorne Setter for vorne
	 * @return LageImBau
	 */
	public function setVorne(bool $vorne) {
		$this->vorne = $vorne;
		return $this;
	}
}