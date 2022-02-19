<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sender
 *
 * @XmlRoot("sender") 
 */
class Sender {

	/**
	 * @Type("string") 
	 * @SkipWhenEmpty 
	 * @var string
	 */
	protected $datum = '';

	/**
	 * @Type("string") 
	 * @SkipWhenEmpty 
	 * @var string
	 */
	protected $maklerId = '';

	/**
	 * @Type("string") 
	 * @SkipWhenEmpty 
	 * @var string
	 */
	protected $name = '';

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $openimmoAnid;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $regiId;

	/**
	 * @param string $name Shortcut setter for name
	 * @param string $openimmoAnid Shortcut setter for openimmoAnid
	 * @param string $datum Shortcut setter for datum
	 * @param string $maklerId Shortcut setter for maklerId
	 * @param string $regiId Shortcut setter for regiId
	 */
	public function __construct(string $name = '', string $openimmoAnid = null, string $datum = '', string $maklerId = '', string $regiId = null) {
		$this->name = $name;
		$this->openimmoAnid = $openimmoAnid;
		$this->datum = $datum;
		$this->maklerId = $maklerId;
		$this->regiId = $regiId;
	}

	/**
	 * @return string
	 */
	public function getDatum(): string {
		return $this->datum;
	}

	/**
	 * @return string
	 */
	public function getMaklerId(): string {
		return $this->maklerId;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getOpenimmoAnid(): ?string {
		return $this->openimmoAnid;
	}

	/**
	 * @return string
	 */
	public function getRegiId(): ?string {
		return $this->regiId;
	}

	/**
	 * @param string $datum Setter for datum
	 * @return Sender
	 */
	public function setDatum(string $datum) {
		$this->datum = $datum;
		return $this;
	}

	/**
	 * @param string $maklerId Setter for maklerId
	 * @return Sender
	 */
	public function setMaklerId(string $maklerId) {
		$this->maklerId = $maklerId;
		return $this;
	}

	/**
	 * @param string $name Setter for name
	 * @return Sender
	 */
	public function setName(string $name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * @param string $openimmoAnid Setter for openimmoAnid
	 * @return Sender
	 */
	public function setOpenimmoAnid(?string $openimmoAnid) {
		$this->openimmoAnid = $openimmoAnid;
		return $this;
	}

	/**
	 * @param string $regiId Setter for regiId
	 * @return Sender
	 */
	public function setRegiId(?string $regiId) {
		$this->regiId = $regiId;
		return $this;
	}
}
