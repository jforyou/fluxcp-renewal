<?php
// This is the application configuration file. All values have been set to
// the default, and should be changed as needed.
return array(
	'ServerAddress'        => 'localhost',              // This value is the hostname:port under which Flux runs. (e.g., example.com or example.com:80)
	'BaseURI'              => '/~kuja/flux',            // The base URI is the base web root on which your application lies.
	'InstallerPassword'    => 'secretpassword',         // Installer/updater password.
	'DefaultLoginGroup'    => null,
	'DefaultCharMapServer' => null,
	'SiteTitle'            => 'Flux Control Panel',     // This value is only used if the theme decides to use it.
	'ThemeName'            => 'default',                // The theme name of the theme you would like to use.  Themes are in FLUX_ROOT/themes.
	'MissingEmblemBMP'     => 'empty.bmp',              //
	'ForceEmptyEmblem'     => false,                    // Forcefully display empty guild emblems, helpful when you don't have GD2 installed.
	'SessionCookieExpire'  => 48,                       // Duration in hours.
	'AdminMenuLevel'       => AccountLevel::LOWGM,      // The starting level for which module actions are moved into the admin menu for display.
	'DateDefaultTimezone'  => null,                     // The default timezone, consult the PHP manual for valid timezones: http://php.net/timezones (null for defaut system TZ)
	'DateFormat'           => 'Y-m-d',                  // Default DATE format to be displayed in pages.
	'DateTimeFormat'       => 'Y-m-d H:i:s',            // Default DATETIME format to be displayed in pages.
	'ShowSinglePage'       => true,                     // Whether or not to show the page numbers even if there's only one page.
	'ResultsPerPage'       => 20,                       // The number of results to display in a paged set, per page.
	'PagesToShow'          => 10,                       // The number of page numbers to display at once.
	'MinUsernameLength'    => 4,                        // Minimum username length.
	'MaxUsernameLength'    => 23,                       // Maximum username length.
	'MinPasswordLength'    => 4,                        // Minimum password length.
	'MaxPasswordLength'    => 23,                       // Maximum password length.
	'AllowDuplicateEmails' => false,                    // Whether or not to allow duplicate e-mails to be used in registration. (See Mailer config options)
	'RequireEmailConfirm'  => false,                    // Require e-mail confirmation during registration.
	'EmailConfirmExpire'   => 48,                       // E-mail confirmations expire hours. Unconfirmed accounts will expire after this period of time.
	'MailerFromAddress'    => 'noreply@localhost',      // The e-mail address displayed in the From field.
	'MailerFromName'       => 'MailerName',             // The name displayed with the From e-mail address.
	'MailerUseSMTP'        => false,                    // Whether or not to use a separate SMTP server for sending mail.
	'MailerSMTPUseSSL'     => false,                    // Whether or not mailer should connect using SSL (yes for GMail).
	'MailerSMTPPort'       => null,                     // When MailerUseSMTP is true: SMTP server port (mailer will default to 25).
	'MailerSMTPHosts'      => null,                     // When MailerUseSMTP is true: A string host or array of hosts (e.g., 'host1' or array('host1', 'backuphost')).
	'MailerSMTPUsername'   => null,                     // When MailerUseSMTP is true: Authorized username for SMTP server.
	'MailerSMTPPassword'   => null,                     // When MailerUseSMTP is true: Authorized password for SMTP server (for above user).
	'ServerStatusTimeout'  => 2,                        // For each server, spend X amount of seconds to determine whether it's up or not.
	'SessionKey'           => 'fluxSessionData',        // Shouldn't be changed, just specifies the session key to be used for session data.
	'DefaultModule'        => 'main',                   // This is the module to execute when none has been specified.
	'DefaultAction'        => 'index',                  // This is the default action for any module, probably should leave this alone. (Deprecated)
	'OutputCleanHTML'      => true,                     // Use this if you have Tidy installed to clean your HTML output when serving pages.
	'ShowCopyright'        => true,                     // Whether or not to show the copyright footer.
	'ShowRenderDetails'    => true,                     // Shows the "page rendered in X seconds" and "number of queries executed: X" in the default theme.
	'UseCleanUrls'         => false,                    // Set to true if you're running Apache and it supports mod_rewrite and .htaccess files.
	'DebugMode'            => true,                     // Set to false to minimize technical details from being output by Flux.
	'UseCaptcha'           => true,                     // Use CAPTCHA image for account registration to prevent automated account creations. (Requires GD2)
	'DisplaySinglePages'   => true,                     // Whether or not to display paging for single page results.
	'ForwardYears'         => 15,                       // (Visual) The number of years to display ahead of the current year in date inputs.
	'BackwardYears'        => 30,                       // (Visual) The number of years to display behind the current year in date inputs.
	'ColumnSortAscending'  => ' ▲',                     // (Visual) Text displayed for ascending sorted column names.
	'ColumnSortDescending' => ' ▼',                     // (Visual) Text displayed for descending sorted column names.
	'CreditExchangeRate'   => 1.0,                      // The rate at which credits are exchanged for dollars.
	'MinDonationAmount'    => 2.0,                      // Minimum donation amount. (NOTE: Actual donations made that are less than this account won't be exchanged)
	'DonationCurrency'     => 'USD',                    // Preferred donation currency. Only donations made in this currency will be processed for credit deposits.
	'MoneyDecimalPlaces'   => 2,                        // (Visual) Number of decimal places to display in amount.
	'MoneyThousandsSymbol' => ',',                      // (Visual) Thousanths place separator (a period in European currencies).
	'MoneyDecimalSymbol'   => '.',                      // (Visual) Decimal separator (a comma in European currencies).
	'AcceptDonations'      => true,                     // Whether or not to accept donations.
	'PayPalIpnUrl'         => 'www.sandbox.paypal.com', // The URL for PayPal's IPN responses (www.paypal.com for live and www.sandbox.paypal.com for testing)
	'PayPalBusinessEmail'  => 'admin@localhost',        // Enter the e-mail under which you have registered your business account.
	'PayPalReceiverEmails' => array(                    // These are the receiver e-mail addresses who are allowed to receive payment.
		//'admin2@localhost',                             // -- This array may be empty if you only use one e-mail
		//'admin3@localhost'                              // -- because your Business Email is also checked.
	),
	'AllowIpBanLogin'      => false,                    // Allow logging into account from banned IP.
	'AllowTempBanLogin'    => false,                    // Allow logging in of temporarily banned accounts.
	'AllowPermBanLogin'    => false,                    // Allow logging in of permanently banned accounts.
	'AutoRemoveTempBans'   => true,                     // Automatically remove expired temporary bans on certain pages.
	'ItemShopMaxCost'      => 99,                       // Max price an item can be sold for.
	'ItemShopMaxQuantity'  => 99,                       // Max quantity the item may be sold at once for.
	'HideFromWhosOnline'   => 10,                       // Levels greater than or equal to this will be hidden from the "Who's Online" page.
	'ChargeGenderChange'   => 0,                        // You can specify this as the number of credits to charge for gender change.  Can be 0 for free change.
	'BanPaymentStatuses'   => array(                    // Payment statuses that will automatically ban the account owner if received.
		'Cancelled_Reversal',                           // -- 'Cancelled_Reversal'
		'Reversed',                                     // -- 'Reversed'
	),
	
	'HoldUntrustedAccount' => 0,                        // This is the time in hours to hold a donation crediting process for, if the account
	                                                    // isn't a trusted account. Specify 0 or false to disable this feature.
	
	'AutoUnholdAccount'    => false,                    // Enable this to auto-unhold an account and credit it if the transaction is still
	                                                    // valid.  This only applies if you are using the HoldUnstrustedAccount feature.
	                                                    // If you want to run a cron job instead, you can make a request to the '/donate/update'
	                                                    // module/action with the InstallerPassword as the password to run the update task.
	                                                    // With clean URLs: http://<server>/<baseURI>/donate/update?password=<InstallerPassword>
	                                                    // Without clean URLs: http://<server>/<baseURI>?module=donate&action=update&password=<InstallerPassword>
	                                                    // NOTE: This option is HIGHLY inefficient, it's recommended to run a cron job instead.
	
	'ShopImageExtensions'  => array(                    // These are the image extensions allowed for uploading in the item shop.
		'png', 'jpg', 'gif', 'bmp', 'jpeg', 'bmp'
	),
	'CharRankingLimit'    => 20,                        //
	'GuildRankingLimit'   => 20,                        //
	'ZenyRankingLimit'    => 20,                        //
	'RankingHideLevel'    => AccountLevel::LOWGM,       //
	
	'HideTempBannedCharRank'  => false,                  // Hide temporarily banned characters from ranking.
	'HidePermBannedCharRank'  => true,                   // Hide permanently banned characters from ranking.
	
	'HideTempBannedZenyRank'  => false,                  // Hide temporarily banned characters from ranking.
	'HidePermBannedZenyRank'  => true,                   // Hide permanently banned characters from ranking.
	
	// These are the main menu items that should be displayed by themes.
	// They route to modules and actions.  Whether they are displayed or
	// not at any given time depends on the user's account level and/or
	// their login status.
	'MenuItems' => array(
		'Home'          => array('module' => 'main'),
		'Register'      => array('module' => 'account', 'action' => 'create'),
		'Login'         => array('module' => 'account', 'action' => 'login'),
		'Logout'        => array('module' => 'account', 'action' => 'logout'),
		'My Account'    => array('module' => 'account', 'action' => 'view'),
		'Purchase'      => array('module' => 'purchase'),
		'Donate'        => array('module' => 'donate'),
		'Server Status' => array('module' => 'server', 'action' => 'status'),
		'WoE Hours'     => array('module' => 'woe'),
		"Who's Online"  => array('module' => 'character', 'action' => 'online'),
		'Log Data'      => array('module' => 'logdata'),
		'IP Ban List'   => array('module' => 'ipban'),
		'Accounts'      => array('module' => 'account'),
		'Characters'    => array('module' => 'character'),
		'Guilds'        => array('module' => 'guild'),
		'Reload'        => array('module' => 'reload'),
		//'Castles'       => array('module' => 'castle'),
		//'Auction'       => array('module' => 'auction'),
		//'Economy'       => array('module' => 'economy'),
		'Ranking'       => array('module' => 'ranking', 'action' => 'character'),
		'Items'         => array('module' => 'item'),
		'Monsters'      => array('module' => 'monster'),
		'Send Mail'     => array('module' => 'mail'),
		//'Google'        => array('exturl' => 'http://www.google.com')
	),
	
	// Sub-menu items that are displayed for any action belonging to a
	// particular module. The format it simple.
	'SubMenuItems' => array(
		'account' => array(
			'index'      => 'List Accounts',
			'view'       => 'View Account',
			'changepass' => 'Change Password',
			'changesex'  => 'Change Gender',
			'transfer'   => 'Transfer Credits',
			'xferlog'    => 'Credit Transfer History',
			'cart'       => 'Go to Shopping Cart'
		),
		'guild' => array(
			'index'  => 'List Guilds',
			'export' => 'Export Guild Emblems'
		),
		'server' => array(
			'status'     => 'View Status',
			'status-xml' => 'View Status as XML'
		),
		'logdata' => array(
			'paypal'  => 'Transactions',
			//'char'    => 'Characters',
			//'inter'   => 'Interactions',
			//'command' => 'Commands',
			//'branch'  => 'Branches',
			//'chat'    => 'Chats',
			//'login'   => 'Logins',
			//'mvp'     => 'MVP',
			//'npc'     => 'NPC',
			//'pick'    => 'Item Picks',
			//'zeny'    => 'Zeny'
		),
		'reload' => array(
			'mobskill' => 'Mob Skills'
		),
		'purchase' => array(
			'index'    => 'Shop',
			'cart'     => 'Go to Cart',
			'checkout' => 'Checkout',
			'clear'    => 'Empty Cart',
			'pending'  => 'Pending Redemption'
		),
		'donate' => array(
			'index'   => 'Make a Donation',
			'history' => 'Donation History'
		),
		'ipban' => array(
			'index' => 'IP Ban List',
			'add'   => 'Add IP Ban'
		),
		'ranking' => array(
			'character' => 'Character Ranking',
			'guild'     => 'Guild Ranking',
			'zeny'      => 'Zeny Ranking'
		)
	),
	
	'AllowMD5PasswordSearch'       => false,
	'ReallyAllowMD5PasswordSearch' => false, // Are you POSITIVELY sure?
	
	// Specifies which modules and actions should be ignored by Tidy
	// (enabled/disabled by the OutputCleanHTML option).
	'TidyIgnore' => array(
		array('module' => 'captcha'),
		array('module' => 'guild', 'action' => 'emblem')
	),
	
	// Job classes, loaded from another file to avoid cluttering this one.
	// There isn't normally a need to modify this file, unless it's been
	// modified in an update. (In English: DON'T TOUCH THIS.)
	'JobClasses'    => include('jobs.php'),
	'JobClassIndex' => array_flip(include('jobs.php')),
	
	// Homunculus class IDs and their corresponding names.
	// Best not to mess with this either.
	'HomunClasses' => include('homunculus.php'),

	// Item Types with their corresponding names.
	// Shouldn't touch this either.
	'ItemTypes' => include('itemtypes.php'),
	
	// DON'T TOUCH. THIS IS FOR DEVELOPERS.
	'FluxTables' => array(
		'CreditsTable'        => 'cp_credits',
		'CreditTransferTable' => 'cp_xferlog',
		'ItemShopTable'       => 'cp_itemshop',
		'TransactionTable'    => 'cp_txnlog',
		'RedemptionTable'     => 'cp_redeemlog',
		'AccountCreateTable'  => 'cp_createlog',
		'AccountBanTable'     => 'cp_banlog',
		'DonationTrustTable'  => 'cp_trusted',
		'AccountPrefsTable'   => 'cp_loginprefs',
		'CharacterPrefsTable' => 'cp_charprefs'
	),

	// Do not change these unless you also rename the files in FLUX_ROOT/lib/eA/
	'MobSkillDb1' => FLUX_ROOT.'/lib/eA/mob_skill_db.txt',
	'MobSkillDb2' => FLUX_ROOT.'/lib/eA/mob_skill_db2.txt',

	// This is the combined file of the Mob Skill DBs minus the comments and clutter.
	'MobSkillDb'  => FLUX_ROOT.'/lib/eA/mob_skills.txt'
);
?>