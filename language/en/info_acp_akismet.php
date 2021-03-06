<?php
/**
 *
 * Akismet. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit();
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP modules
	'ACP_AKISMET_TITLE'			=> 'Akismet',
	'ACP_AKISMET_SETTINGS'		=> 'Settings',
	'ACP_AKISMET_SETTING_SAVED'	=> 'Settings have been saved successfully!',

	// Log operations
	'AKISMET_LOG_SETTING_CHANGED'				=> '<strong>Akismet settings updated.</strong>',
	'AKISMET_LOG_CALL_FAILED'					=> '<strong>Call to Akismet API failed</strong><br />» API returned: "%1$s"',
	'AKISMET_LOG_POST_DISAPPROVED'				=> '<strong>Disapproved post “%1$s” written by “%2$s” for the following reason</strong><br />» Post detected as spam by Akismet',
	'AKISMET_LOG_TOPIC_DISAPPROVED'				=> '<strong>Disapproved topic “%1$s” written by “%2$s” for the following reason</strong><br />» Topic detected as spam by Akismet',
	'AKISMET_LOG_SPAMMER_REGISTRATION'			=> '<strong>User %s: Spammy registration detected by Akismet</strong>',
	'AKISMET_LOG_BLATANT_SPAMMER_REGISTRATION'	=> '<strong>User %s: Blatantly spammy registration detected by Akismet</strong>',
	'AKISMET_LOG_SPAMMER_GROUP_REMOVED'			=> '<strong>Akismet: Group %s was deleted</strong><br />Akismet will no longer add new spammy registrations to a group'
));
