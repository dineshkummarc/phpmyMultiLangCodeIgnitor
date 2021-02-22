<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author CodeIgniter community
 * @author Muhammad Ali
 * @copyright Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license http://opensource.org/licenses/MIT MIT License
 * @link http://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Email authentication method must be provided in an array';
$lang['email_invalid_address'] = '% s: Invalid email address';
$lang['email_attachment_missing'] = '% s: Unable to find the following email document';
$lang['email_attachment_unreadable'] = '% s: This attachment is unable to open the email attachment';
$lang['email_no_from'] = 'Cannot send mail without "." Header';
$lang['email_no_recipients'] = 'Bcc or, Cc, To: The following must be included in the recipients';
$ $lang['email_send_failure_phpmail'] = '. Unable to send. Your server may not be configured to use this method using PHP mail () ';
$lang['email_send_failure_sendmail'] = '. Unable to send. Your server may not be configured to use this method using PHP sendmail email ';
$lang['email_send_failure_smtp'] = '. Unable to send. Your server may not be configured to use this method. Using PHP SMTP email ';
$lang['email_sent'] = '% s: Your message has been successfully sent using the following protocol';
$lang['email_no_socket'] = 'Cannot open socket. View Sendmail ';
$lang['email_no_hostname'] = 'You need to specify a hostname SMTP you have';
$lang['email_smtp_error'] = '% s: Error following SMTP following';
$lang['email_no_smtp_unpw'] = 'You must provide a username and password for. SMTP Error: You have a';
$lang['email_failed_smtp_login'] = '% s: Failed to send command. Error AUTH LOGIN ';
$lang['email_smtp_auth_un'] = '% s: Failed to verify username. Error ';
$lang['email_smtp_auth_pw'] = '% s: Password authentication failed. Error ';
$lang['email_smtp_data_failure'] = '% s: Sending data is not possible';
$lang['email_exit_status'] = '% s: Exit Status Code';
