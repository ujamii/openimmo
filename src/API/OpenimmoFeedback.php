<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class OpenimmoFeedback
 *
 * @XmlRoot("openimmo_feedback") 
 */
class OpenimmoFeedback {

	/**
	 * @XmlList(inline = true, entry = "fehlerliste") 
	 * @Type("array<Ujamii\OpenImmo\API\Fehlerliste>") 
	 * @var Fehlerliste[]
	 */
	protected $fehlerliste;

	/**
	 * @XmlList(inline = true, entry = "objekt") 
	 * @Type("array<Ujamii\OpenImmo\API\Objekt>") 
	 * @var Objekt[]
	 */
	protected $objekt;

	/**
	 * @Type("Ujamii\OpenImmo\API\Sender") 
	 * @var Sender
	 */
	protected $sender;

	/**
	 * @XmlList(inline = true, entry = "status") 
	 * @Type("array<Ujamii\OpenImmo\API\Status>") 
	 * @var Status[]
	 */
	protected $status;

	/**
	 * @Type("string") 
	 * @SkipWhenEmpty 
	 * @var string
	 */
	protected $version = '';

	/**
	 * @param string $version Shortcut setter for version
	 * @param Sender $sender Shortcut setter for sender
	 * @param array $objekt Shortcut setter for objekt
	 * @param array $fehlerliste Shortcut setter for fehlerliste
	 * @param array $status Shortcut setter for status
	 */
	public function __construct(string $version = '', Sender $sender = null, array $objekt = [], array $fehlerliste = [], array $status = []) {
		$this->version = $version;
		$this->sender = $sender;
		$this->objekt = $objekt;
		$this->fehlerliste = $fehlerliste;
		$this->status = $status;
	}

	/**
	 * Returns array of Fehlerliste
	 *
	 * @return array
	 */
	public function getFehlerliste(): array {
		return $this->fehlerliste ?? [];
	}

	/**
	 * Returns array of Objekt
	 *
	 * @return array
	 */
	public function getObjekt(): array {
		return $this->objekt ?? [];
	}

	/**
	 * @return Sender
	 */
	public function getSender(): ?Sender {
		return $this->sender;
	}

	/**
	 * Returns array of Status
	 *
	 * @return array
	 */
	public function getStatus(): array {
		return $this->status ?? [];
	}

	/**
	 * @return string
	 */
	public function getVersion(): string {
		return $this->version;
	}

	/**
	 * @param array $fehlerliste Setter for fehlerliste
	 * @return OpenimmoFeedback
	 */
	public function setFehlerliste(array $fehlerliste) {
		$this->fehlerliste = $fehlerliste;
		return $this;
	}

	/**
	 * @param array $objekt Setter for objekt
	 * @return OpenimmoFeedback
	 */
	public function setObjekt(array $objekt) {
		$this->objekt = $objekt;
		return $this;
	}

	/**
	 * @param Sender $sender Setter for sender
	 * @return OpenimmoFeedback
	 */
	public function setSender(?Sender $sender) {
		$this->sender = $sender;
		return $this;
	}

	/**
	 * @param array $status Setter for status
	 * @return OpenimmoFeedback
	 */
	public function setStatus(array $status) {
		$this->status = $status;
		return $this;
	}

	/**
	 * @param string $version Setter for version
	 * @return OpenimmoFeedback
	 */
	public function setVersion(string $version) {
		$this->version = $version;
		return $this;
	}
}
