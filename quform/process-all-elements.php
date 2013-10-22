<?php

/**
 * Enable debug mode. Quform will try to display any fatal PHP errors or exceptions at
 * your form. It's useful to have this enabled while developing your form, but
 * you should set this to false on production sites.
 */
define('QUFORM_DEBUG', true);

/** DO NOT CHANGE THESE 2 LINES **/
define('QUFORM_ROOT', realpath(dirname(__FILE__)));
require_once QUFORM_ROOT . '/common.php';
/** DO NOT CHANGE THESE 2 LINES **/

/** FORM SETTINGS **/

/**
 * Success message, displayed when the form is successfully submitted
 */
$config['successMessage'] = 'Your message has been sent, thank you.';

/**
 * Whether or not to send the notification email. You may wish to disable this if you are
 * saving the form data to the database for example. true or false
 */
$config['email'] = true;

/**
 * Configure the recipients of the notification email message.  For a single
 * recipient use the following format:
 *
 * $config['recipients'] = 'me@example.com';
 *
 * You can add multiple email addresses by adding one on each line inside an
 * array, enclosed in quotes, separated by commas. E.g.
 *
 * $config['recipients'] = array(
 *     'recipient1@example.com',
 *     'recipient2@example.com'
 * );
 */
$config['recipients'] =  array('catering@berkeley.edu','nwl@berkeley.edu');

/**
 * Set the "From" address of the emails. You should set this to the contact
 * email address of your website. Some hosts require that the email
 * address is one that is associated with your hosting account.
 *
 * You can set this to be an email address string e.g.
 *
 * $config['from'] = 'company@example.com';
 *
 * Or you can also include a name with your email address using an array e.g.
 *
 * $config['from'] = array('company@example.com' => 'Company');
 *
 * Or you can set it to use a submitted email address. This example will get the
 * submitted address in the 'email' field. E.g.
 *
 * $config['from'] = '%email%';
 */
$config['from'] = '%email%';

/**
 * The subject of the notification email message. %first_name% will be replaced
 * with the form submitted value in the first_name field.
 */
$config['subject'] = 'Cal Catering Website Inquiry';

/**
 * Set the "Reply-To" email address of the notification email to
 * the email address submitted in the email field.
 */
$config['replyTo'] = '%email%';

/**
 * The file containing the HTML body of the notification email.
 */
$config['emailBody'] = '/emails/notification.php';

/**
 * Whether or not to show empty fields from the notification email. true or false
 */
$config['showEmptyFields'] = false;

/**
 * Whether or not to send an autoreply email. true or false
 */
$config['autoreply'] = false;

/**
 * Sets the autoreply recipient to the email address submitted to the email field
 *
 * If you want the email to show from their name submitted from the name field as well, you
 * can use the code:
 *
 * $config['autoreplyRecipient'] = array('%email%' => '%name%');
 */
$config['autoreplyRecipient'] = '%email%';

/**
 * The subject of the autoreply email
 */
$config['autoreplySubject'] = 'Thanks for your message, %name%';

/**
 * Set the "From" address of the autoreply email.
 * See the comment at the $config['from'] setting for options.
 */
$config['autoreplyFrom'] = '';

/**
 * The file containing the HTML body of the autoreply email
 */
$config['autoreplyBody'] = '/emails/autoreply.php';

/**
 * Redirect the user when the form is successfully submitted by entering a URL here.
 * By default, users are not redirected.
 *
 * $config['redirect'] = 'http://www.example.com/thanks.html';
 */
$config['redirect'] = '';

/**
 * Whether or not to save the form data to a database. true or false
 *
 * You can configure the database settings further down in this file. See the documentation
 * for help.
 */
$config['database'] = false;

/**
 * Whether or not to save uploaded files to the server. true or false
 */
$config['saveUploads'] = false;

/**
 * The path to save any uploaded files. This folder must be writeable by the
 * web server, you may need to set the folder permissions to 777 on Linux servers.
 */
$config['uploadPath'] = QUFORM_ROOT . '/uploads';

/**
 * Set this to the URL of the above folder to be sent links to uploaded
 * files in the notification email. E.g.
 *
 * $config['uploadUrl'] = 'http://www.example.com/quform/uploads';
 */
$config['uploadUrl'] = '';

/**
 * (Optional) Configure your SMTP settings, only 'host' is required. If your server
 * needs authentication, set your username and password. If these settings are left
 * blank the emails will be sent using the PHP mail() function.
 *
 * host - SMTP server (e.g. smtp.example.com)
 * port - SMTP port (e.g. 25)
 * username - SMTP username
 * password - SMTP password
 * encryption - SMTP encryption (e.g. ssl or tls)
 */
$config['smtp'] = array(
    'host' => '',
    'port' => 25,
    'username' => '',
    'password' => '',
    'encryption' => ''
);

// Add the visitor IP to the email
$config['extra']['IP address'] = Quform::getIPAddress();

/** END FORM SETTINGS **/

/** FORM ELEMENT CONFIGURATION **/

$textInput4 = new Quform_Element('text_input4', 'Name');
$textInput4->addFilter('trim');
$textInput4->addValidator('required');
$form->addElement($textInput4);

$textInput5 = new Quform_Element('text_input5', 'Phone');
$textInput5->addFilter('trim');
$textInput4->addValidator('required');
$form->addElement($textInput5);

$textInput6 = new Quform_Element('email', 'email');
$textInput6->addFilter('trim');
$textInput6->addValidator('required');
$form->addElement($textInput6);

$subject = new Quform_Element('subject', 'Type of event');
$subject->addFilter('trim');
$form->addElement($subject);

$textInput3 = new Quform_Element('text_input3', 'Desired Event Date(s)');
$textInput3->addFilter('trim');
$form->addElement($textInput3);

$radioButton = new Quform_Element('radio_button', 'Event date is flexible?');
$form->addElement($radioButton);

$date = new Quform_Element('date', 'Event time');
$subject->addFilter('trim');
$form->addElement($date);

$textInput7 = new Quform_Element('text_input7', 'No. of guest');
$textInput7->addFilter('trim');
$textInput7->addValidator('required');
$form->addElement($textInput7);

$textarea = new Quform_Element('textarea', 'Tell us about your event');
$textarea->addValidator('required');
$textarea->addFilter('trim');
$form->addElement($textarea);



$singleSelect = new Quform_Element('single_select', 'How did you hear about us');
$singleSelect->addValidator('required');
$form->addElement($singleSelect);




/** END FORM ELEMENT CONFIGURATION **/

function process(Quform $form, array &$config)
{
    // Process the form
    if ($form->isValid($_POST)) {
        // Custom code section #1 - see documentation for examples

        // End custom code section #1

        try {
            $attachments = array();
            $elements = $form->getElements();

            // Process uploaded files
            foreach ($elements as $element) {
                if ($element instanceof Quform_Element_File
                && array_key_exists($element->getName(), $_FILES)
                && is_array($_FILES[$element->getName()])) {
                    $file = $_FILES[$element->getName()];

                    if (is_array($file['error'])) {
                        // Process multiple upload field
                        foreach ($file['error'] as $key => $error) {
                            if ($error === UPLOAD_ERR_OK) {
                                $fileData = array(
                                    'path' => $file['tmp_name'][$key],
                                    'filename' => Quform_Element_File::filterFilename($file['name'][$key]),
                                    'type' => $file['type'][$key],
                                    'size' => $file['size'][$key]
                                );

                                if ($config['saveUploads'] && $element->getSave()) {
                                    $result = Quform_Element_File::saveUpload($config['uploadPath'], $config['uploadUrl'], $fileData, $element);

                                    if (is_array($result)) {
                                        $fileData = $result;
                                    }
                                }

                                if ($element->getAttach()) {
                                    $attachments[] = $fileData;
                                }

                                $element->addFile($fileData);
                            }
                        }
                    } else {
                        // Process single upload field
                        if ($file['error'] === UPLOAD_ERR_OK) {
                            $fileData = array(
                                'path' => $file['tmp_name'],
                                'filename' => Quform_Element_File::filterFilename($file['name']),
                                'type' => $file['type'],
                                'size' => $file['size']
                            );

                            if ($config['saveUploads'] && $element->getSave()) {
                                $result = Quform_Element_File::saveUpload($config['uploadPath'], $config['uploadUrl'], $fileData, $element);

                                if (is_array($result)) {
                                    $fileData = $result;
                                }
                            }

                            if ($element->getAttach()) {
                                $attachments[] = $fileData;
                            }

                            $element->addFile($fileData);
                        }
                    }
                } // element exists in $_FILES
            } // foreach element

            // Save to a MySQL database
            if ($config['database']) {
                // Connect to MySQL
                mysql_connect('localhost', 'username', 'password') or die(mysql_error());

                // Select the database
                mysql_select_db('database') or die(mysql_error());

                // Set the connection encoding
                if (strtolower(QUFORM_CHARSET) == 'utf-8') {
                    mysql_query("SET NAMES utf8") or die(mysql_error());
                }

                // Build the query
                $query = "INSERT INTO table SET ";
                $query .= "`first_name` = '" . mysql_real_escape_string($form->getValue('first_name')) . "',";
                $query .= "`last_name` = '" . mysql_real_escape_string($form->getValue('last_name')) . "',";
                $query .= "`email` = '" . mysql_real_escape_string($form->getValue('email')) . "',";
                $query .= "`subject` = '" . mysql_real_escape_string($form->getValue('subject')) . "',";
                $query .= "`message` = '" . mysql_real_escape_string($form->getValue('message')) . "';"; // Careful! The last line ends in a semi-colon

                // Execute the query
                mysql_query($query) or die(mysql_error());

                // Close the connection
                mysql_close();
            }

            if ($config['email']) {
                // Get a new PHPMailer instance
                $mailer = Quform::newPHPMailer($config['smtp']);

                // Set the from information
                $from = $form->parseEmailRecipient($config['from']);

                if ($from['email']) {
                    $mailer->From = $from['email'];
                    $mailer->FromName = $from['name'];
                }

                // Set the Reply-To header of the email as the submitted email address from the form
                if (!empty($config['replyTo'])) {
                    $replyTo = $form->parseEmailRecipient($config['replyTo']);

                    if ($replyTo['email']) {
                        $mailer->AddReplyTo($replyTo['email'], $replyTo['name']);
                    }
                }

                // Set the subject
                $mailer->Subject = $form->replacePlaceholderValues($config['subject']);

                // Set the recipients
                foreach ((array) $config['recipients'] as $recipient) {
                    $mailer->AddAddress($recipient);
                }

                // Set the message body HTML
                ob_start();
                include QUFORM_ROOT . $config['emailBody'];
                $mailer->MsgHTML(ob_get_clean());

                $mailer->AltBody = 'To view this email please use HTML compatible email software.';

                // Add any attachments
                foreach ($attachments as $attachment) {
                    $mailer->AddAttachment($attachment['path'], $attachment['filename'], 'base64', $attachment['type']);
                }

                // Send the notification message
                $mailer->Send();
            }

            // Autoreply email
            if ($config['autoreply']) {
                $autoreplyRecipient = $form->parseEmailRecipient($config['autoreplyRecipient']);

                if ($autoreplyRecipient['email']) {
                    // Create the autoreply message
                    $mailer = Quform::newPHPMailer($config['smtp']);

                    // Set the from address
                    $autoreplyFrom = $form->parseEmailRecipient($config['autoreplyFrom']);

                    if ($autoreplyFrom['email']) {
                        $mailer->From = $autoreplyFrom['email'];
                        $mailer->FromName = $autoreplyFrom['name'];
                    }

                    // Set the recipient
                    $mailer->AddAddress($autoreplyRecipient['email'], $autoreplyRecipient['name']);

                    // Set the subject
                    $mailer->Subject = $form->replacePlaceholderValues($config['autoreplySubject']);

                    // Set the message body HTML
                    ob_start();
                    include QUFORM_ROOT . $config['autoreplyBody'];
                    $mailer->MsgHTML(ob_get_clean());

                    $mailer->AltBody = 'To view this email please use HTML compatible email software.';

                    // Send the autoreply
                    $mailer->Send();
                }
            }

            // Custom code section #2 - see documentation for examples

            // End custom code section #2
        } catch (Exception $e) {
            if (QUFORM_DEBUG) {
                throw $e;
            }
        }
    } else {
        // Form data failed validation
        return false;
    }

    // Form processed successfully
    return true;
}

if (process($form, $config)) {
    $result = array('type' => 'success');
    if (strlen($config['redirect'])) {
        $result['redirect'] = $config['redirect'];
    } else {
        $result['message'] = $form->replacePlaceholderValues($config['successMessage']);
    }
} else {
    $result = array('type' => 'error', 'error' => $form->getError(), 'elementErrors' => $form->getElementErrors());
}

if (isset($_POST['quform_ajax']) && $_POST['quform_ajax'] == 1) {
    $response = '<textarea>' . Quform::jsonEncode($result) . '</textarea>';
} else {
    if (isset($result['type'], $result['redirect']) && $result['type'] == 'success' && strlen($result['redirect']) && !headers_sent()) {
        header('Location: ' . $result['redirect']);
        exit;
    }

    ob_start();
    require_once 'nojs.php';
    $response = ob_get_clean();
}

echo $response;