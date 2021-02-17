<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageImBau
 * Angabe über die Lage der Immobilie im Gesamtgebäude, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("lage_im_bau") 
 */
class LageImBau {

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("HINTEN") 
	 * @var bool
	 */
	protected $hinten;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("LINKS") 
	 * @var bool
	 */
	protected $links;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("RECHTS") 
	 * @var bool
	 */
	protected $rechts;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("VORNE") 
	 * @var bool
	 */
	protected $vorne;

	/**
	 * @param bool $links Shortcut setter for links
	 * @param bool $rechts Shortcut setter for rechts
	 * @param bool $vorne Shortcut setter for vorne
	 * @param bool $hinten Shortcut setter for hinten
	 */
	public function __construct(bool $links = null, bool $rechts = null, bool $vorne = null, bool $hinten = null) {
		$this->links = $links;
		$this->rechts = $rechts;
		$this->vorne = $vorne;
		$this->hinten = $hinten;
	}

	/**
	 * @return bool
	 */
	public function getHinten(): ?bool {
		return $this->hinten;
	}

	/**
	 * @return bool
	 */
	public function getLinks(): ?bool {
		return $this->links;
	}

	/**
	 * @return bool
	 */
	public function getRechts(): ?bool {
		return $this->rechts;
	}

	/**
	 * @return bool
	 */
	public function getVorne(): ?bool {
		return $this->vorne;
	}

	/**
	 * @param bool $hinten Setter for hinten
	 * @return LageImBau
	 */
	public function setHinten(?bool $hinten) {
		$this->hinten = $hinten;
		return $this;
	}

	/**
	 * @param bool $links Setter for links
	 * @return LageImBau
	 */
	public function setLinks(?bool $links) {
		$this->links = $links;
		return $this;
	}

	/**
	 * @param bool $rechts Setter for rechts
	 * @return LageImBau
	 */
	public function setRechts(?bool $rechts) {
		$this->rechts = $rechts;
		return $this;
	}

	/**
	 * @param bool $vorne Setter for vorne
	 * @return LageImBau
	 */
	public function setVorne(?bool $vorne) {
		$this->vorne = $vorne;
		return $this;
	}
}
