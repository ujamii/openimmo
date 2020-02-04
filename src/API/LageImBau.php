<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
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
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("HINTEN") 
	 * @var boolean
	 */
	protected $hinten;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("LINKS") 
	 * @var boolean
	 */
	protected $links;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("RECHTS") 
	 * @var boolean
	 */
	protected $rechts;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("VORNE") 
	 * @var boolean
	 */
	protected $vorne;

	/**
	 * @param boolean $links Shortcut setter for links
	 * @param boolean $rechts Shortcut setter for rechts
	 * @param boolean $vorne Shortcut setter for vorne
	 * @param boolean $hinten Shortcut setter for hinten
	 * @param string $value the actual value
	 */
	public function __construct(bool $links = null, bool $rechts = null, bool $vorne = null, bool $hinten = null, string $value = null) {
		$this->links = $links;
		$this->rechts = $rechts;
		$this->vorne = $vorne;
		$this->hinten = $hinten;
		$this->value = $value;
	}

	/**
	 * @return boolean
	 */
	public function getHinten(): ?bool {
		return $this->hinten;
	}

	/**
	 * @return boolean
	 */
	public function getLinks(): ?bool {
		return $this->links;
	}

	/**
	 * @return boolean
	 */
	public function getRechts(): ?bool {
		return $this->rechts;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @return boolean
	 */
	public function getVorne(): ?bool {
		return $this->vorne;
	}

	/**
	 * @param boolean $hinten Setter for hinten
	 * @return LageImBau
	 */
	public function setHinten(?bool $hinten) {
		$this->hinten = $hinten;
		return $this;
	}

	/**
	 * @param boolean $links Setter for links
	 * @return LageImBau
	 */
	public function setLinks(?bool $links) {
		$this->links = $links;
		return $this;
	}

	/**
	 * @param boolean $rechts Setter for rechts
	 * @return LageImBau
	 */
	public function setRechts(?bool $rechts) {
		$this->rechts = $rechts;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return LageImBau
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}

	/**
	 * @param boolean $vorne Setter for vorne
	 * @return LageImBau
	 */
	public function setVorne(?bool $vorne) {
		$this->vorne = $vorne;
		return $this;
	}
}
