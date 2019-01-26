<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class EmailSonstige
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("email_sonstige") 
 */
class EmailSonstige {

	/**
	 */
	const EMAILART_EM_DIREKT = 'EM_DIREKT';

	/**
	 */
	const EMAILART_EM_PRIVAT = 'EM_PRIVAT';

	/**
	 */
	const EMAILART_EM_SONSTIGE = 'EM_SONSTIGE';

	/**
	 */
	const EMAILART_EM_ZENTRALE = 'EM_ZENTRALE';

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var string
	 */
	protected $bemerkung;

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @see EMAILART_* constants
	 * @var string
	 */
	protected $emailart;

	/**
	 * @Inline 
	 * @var string
	 */
	protected $value;

	/**
	 * @return string
	 */
	public function getBemerkung(): string {
		return $this->bemerkung;
	}

	/**
	 * @return string
	 */
	public function getEmailart(): string {
		return $this->emailart;
	}

	/**
	 * @return string
	 */
	public function getValue(): string {
		return $this->value;
	}

	/**
	 * @param string $bemerkung Setter for bemerkung
	 * @return EmailSonstige
	 */
	public function setBemerkung(string $bemerkung) {
		$this->bemerkung = $bemerkung;
		return $this;
	}

	/**
	 * @param string $emailart Setter for emailart
	 * @return EmailSonstige
	 */
	public function setEmailart(string $emailart) {
		$this->emailart = $emailart;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return EmailSonstige
	 */
	public function setValue(string $value) {
		$this->value = $value;
		return $this;
	}
}
