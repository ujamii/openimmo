<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Fehler
 *
 * @XmlRoot("fehler") 
 */
class Fehler {

	/**
	 * @Type("int") 
	 * @var int Minimum value (inclusive): -2147483648, Maximum value (inclusive): 2147483647
	 */
	protected $fehlernr;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $objektId;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $text;

	/**
	 * @param string $objektId Shortcut setter for objektId
	 * @param int $fehlernr Shortcut setter for fehlernr
	 * @param string $text Shortcut setter for text
	 */
	public function __construct(string $objektId = null, int $fehlernr = null, string $text = null) {
		$this->objektId = $objektId;
		$this->fehlernr = $fehlernr;
		$this->text = $text;
	}

	/**
	 * @return int
	 */
	public function getFehlernr(): ?int {
		return $this->fehlernr;
	}

	/**
	 * @return string
	 */
	public function getObjektId(): ?string {
		return $this->objektId;
	}

	/**
	 * @return string
	 */
	public function getText(): ?string {
		return $this->text;
	}

	/**
	 * @param int $fehlernr Setter for fehlernr
	 * @return Fehler
	 */
	public function setFehlernr(?int $fehlernr) {
		$this->fehlernr = $fehlernr;
		return $this;
	}

	/**
	 * @param string $objektId Setter for objektId
	 * @return Fehler
	 */
	public function setObjektId(?string $objektId) {
		$this->objektId = $objektId;
		return $this;
	}

	/**
	 * @param string $text Setter for text
	 * @return Fehler
	 */
	public function setText(?string $text) {
		$this->text = $text;
		return $this;
	}
}
