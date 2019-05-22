<?php

/**
 * Validates a subject field
 *
 * @author Thomas Deuling <typo3@coding.ms>
 * @package Tx_Formhandler
 * @subpackage ErrorChecks
 */
class Tx_Formhandler_ErrorCheck_Subject extends Tx_Formhandler_AbstractErrorCheck
{
    public function check()
    {
        $checkFailed = '';
        if (isset($this->gp[$this->formFieldName]) && strlen(trim($this->gp[$this->formFieldName])) > 0) {
            $valid = false;
            $frontendUserUid = 0;
            $subjectParts = explode('_', $this->gp[$this->formFieldName]);
            if (count($subjectParts)==2) {
                $frontendUserUid = (int)$subjectParts[1];
            }
            if ($frontendUserUid > 0) {
                $result = $GLOBALS['TYPO3_DB']->exec_SELECTquery('email', ' fe_users', 'uid=' . $frontendUserUid . ' AND deleted=0 AND disable=0');
                if ($result) {
                    $frontendUser = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result);
                    if (isset($frontendUser['email']) && trim($frontendUser['email'])!='') {
                        $valid = true;
                    }
                }
            }
            if (!$valid) {
                $checkFailed = $this->getCheckFailed();
            }
        }
        return $checkFailed;
    }
}
