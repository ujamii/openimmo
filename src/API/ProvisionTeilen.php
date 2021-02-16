<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ProvisionTeilen
 * Aufteilen der provision bei Partnergeschäften. Auch "A Meta" Geschäft. Attribut zeigt, wie der Wert angegeben wird: fester wert, prozent, oder Text Information
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("provision_teilen") 
 */
class ProvisionTeilen {

	/**
	 */
	const WERT_ABSOLUT = 'absolut';

	/**
	 */
	const WERT_PROZENT = 'prozent';

	/**
	 */
	const WERT_TEXT = 'text';

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see WERT_* constants
	 * @var string
	 */
	protected $wert;

	/**
	 * @param string $wert Shortcut setter for wert
	 * @param string $value Shortcut setter for value
	 */
	public function __construct(string $wert = null, string $value = null) {
		$this->wert = $wert;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @return string
	 */
	public function getWert(): ?string {
		return $this->wert;
	}

	/**
	 * @param string $value Setter for value
	 * @return ProvisionTeilen
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}

	/**
	 * @param string $wert Setter for wert
	 * @return ProvisionTeilen
	 */
	public function setWert(?string $wert) {
		$this->wert = $wert;
		return $this;
	}
}
