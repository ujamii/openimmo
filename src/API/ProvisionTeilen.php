<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ProvisionTeilen
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("provision_teilen") 
 */
class ProvisionTeilen {

	/**
	 * @var string
	 */
	protected $wert;

	/**
	 * @return string
	 */
	public function getWert(): string {
		return $this->wert;
	}

	/**
	 * @param string $wert Setter for wert
	 * @return ProvisionTeilen
	 */
	public function setWert(string $wert) {
		$this->wert = $wert;
		return $this;
	}
}
