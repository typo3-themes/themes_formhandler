<?php

/**
 * Finisher to send mails after successful form submission.
 * Converts subject to recipient
 *
 * @author Thomas Deuling <typo3@coding.ms>
 */
class Tx_Formhandler_Finisher_MailSubjectRecipient extends Tx_Formhandler_Finisher_Mail {

	/**
	 * Method to set GET/POST for this class and load the configuration
	 *
	 * @param array The GET/POST values
	 * @param array The TypoScript configuration
	 * @return void
	 */
	public function init($gp, $tsConfig) {
		parent::init($gp, $tsConfig);
		$this->setEmailAndSubject();
	}

	protected function setEmailAndSubject() {
		$frontendUserUid = 0;
		$subjectParts = explode('_', $this->gp['subject']);
		if(count($subjectParts)==2) {
			$frontendUserUid = (int)$subjectParts[1];
		}
		if($frontendUserUid > 0) {
			$result = $GLOBALS['TYPO3_DB']->exec_SELECTquery('email,name', ' fe_users', 'uid=' . $frontendUserUid . ' AND deleted=0 AND disable=0');
			if($result) {
				$frontendUser = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result);
				if(isset($frontendUser['email']) && trim($frontendUser['email'])!='') {
					
					// Set the new data
					$this->gp['subject'] = $frontendUser['name'];
					$this->settings['admin.']['to_email'] = $frontendUser['email'];
					
				}
			}
		}
	}
	
}
?>