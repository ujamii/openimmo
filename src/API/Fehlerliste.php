<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Fehlerliste
 *
 * @XmlRoot("fehlerliste") 
 */
class Fehlerliste {

	/**
	 * @XmlList(inline = true, entry = "fehler") 
	 * @Type("array<Ujamii\OpenImmo\API\Fehler>") 
	 * @var Fehler[]
	 */
	protected $fehler;

	/**
	 * @param array $fehler Shortcut setter for fehler
	 */
	public function __construct(array $fehler = []) {
		$this->fehler = $fehler;
	}

	/**
	 * Returns array of Fehler
	 *
	 * @return array
	 */
	public function getFehler(): array {
		return $this->fehler ?? [];
	}

	/**
	 * @param array $fehler Setter for fehler
	 * @return Fehlerliste
	 */
	public function setFehler(array $fehler) {
		$this->fehler = $fehler;
		return $this;
	}
}
