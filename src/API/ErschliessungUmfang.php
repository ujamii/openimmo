<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ErschliessungUmfang
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("erschliessung_umfang") 
 */
class ErschliessungUmfang {

	/**
	 * @var string
	 */
	protected $erschlAttr;

	/**
	 * @return string
	 */
	public function getErschlAttr(): string {
		return $this->erschlAttr;
	}

	/**
	 * @param string $erschlAttr Setter for erschlAttr
	 * @return ErschliessungUmfang
	 */
	public function setErschlAttr(string $erschlAttr) {
		$this->erschlAttr = $erschlAttr;
		return $this;
	}
}
