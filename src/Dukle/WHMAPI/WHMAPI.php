<?php 
namespace Dukle\WHMAPI; 
use Config;

class WHMAPI 
{

	function get_whois_servers() {
	return  array(
			"ac" => "whois.nic.ac", // Ascension Island
			// ad - Andorra - no whois server assigned
			"ae" => "whois.nic.ae", // United Arab Emirates
			"aero"=>"whois.aero",
			"af" => "whois.nic.af", // Afghanistan
			"ag" => "whois.nic.ag", // Antigua And Barbuda
			"ai" => "whois.ai", // Anguilla
			"al" => "whois.ripe.net", // Albania
			"am" => "whois.amnic.net",  // Armenia
			// an - Netherlands Antilles - no whois server assigned
			// ao - Angola - no whois server assigned
			// aq - Antarctica (New Zealand) - no whois server assigned
			// ar - Argentina - no whois server assigned
			"arpa" => "whois.iana.org",
			"as" => "whois.nic.as", // American Samoa
			"asia" => "whois.nic.asia",
			"at" => "whois.nic.at", // Austria
			"au" => "whois.aunic.net", // Australia
			// aw - Aruba - no whois server assigned
			"ax" => "whois.ax", // Aland Islands
			"az" => "whois.ripe.net", // Azerbaijan
			// ba - Bosnia And Herzegovina - no whois server assigned
			// bb - Barbados - no whois server assigned
			// bd - Bangladesh - no whois server assigned
			"be" => "whois.dns.be", // Belgium
			"bg" => "whois.register.bg", // Bulgaria
			"bi" => "whois.nic.bi", // Burundi
			"biz" => "whois.biz",
			"bj" => "whois.nic.bj", // Benin
			// bm - Bermuda - no whois server assigned
			"bn" => "whois.bn", // Brunei Darussalam
			"bo" => "whois.nic.bo", // Bolivia
			"br" => "whois.registro.br", // Brazil
			"bt" => "whois.netnames.net", // Bhutan
			// bv - Bouvet Island (Norway) - no whois server assigned
			// bw - Botswana - no whois server assigned
			"by" => "whois.cctld.by", // Belarus
			"bz" => "whois.belizenic.bz", // Belize
			"ca" => "whois.cira.ca", // Canada
			"cat" => "whois.cat", // Spain
			"cc" => "whois.nic.cc", // Cocos (Keeling) Islands
			"cd" => "whois.nic.cd", // Congo, The Democratic Republic Of The
			// cf - Central African Republic - no whois server assigned
			"ch" => "whois.nic.ch", // Switzerland
			"ci" => "whois.nic.ci", // Cote d'Ivoire
			"ck" => "whois.nic.ck", // Cook Islands
			"cl" => "whois.nic.cl", // Chile
			// cm - Cameroon - no whois server assigned
			"cn" => "whois.cnnic.net.cn", // China
			"co" => "whois.nic.co", // Colombia
			"com" => "whois.verisign-grs.com",
			"coop" => "whois.nic.coop",
			// cr - Costa Rica - no whois server assigned
			// cu - Cuba - no whois server assigned
			// cv - Cape Verde - no whois server assigned
			// cw - Curacao - no whois server assigned
			"cx" => "whois.nic.cx", // Christmas Island
			// cy - Cyprus - no whois server assigned
			"cz" => "whois.nic.cz", // Czech Republic
			"de" => "whois.denic.de", // Germany
			// dj - Djibouti - no whois server assigned
			"dk" => "whois.dk-hostmaster.dk", // Denmark
			"dm" => "whois.nic.dm", // Dominica
			// do - Dominican Republic - no whois server assigned
			"dz" => "whois.nic.dz", // Algeria
			"ec" => "whois.nic.ec", // Ecuador
			"edu" => "whois.educause.edu",
			"ee" => "whois.eenet.ee", // Estonia
			"eg" => "whois.ripe.net", // Egypt
			// er - Eritrea - no whois server assigned
			"es" => "whois.nic.es", // Spain
			// et - Ethiopia - no whois server assigned
			"eu" => "whois.eu",
			"fi" => "whois.ficora.fi", // Finland
			// fj - Fiji - no whois server assigned
			// fk - Falkland Islands - no whois server assigned
			// fm - Micronesia, Federated States Of - no whois server assigned
			"fo" => "whois.nic.fo", // Faroe Islands
			"fr" => "whois.nic.fr", // France
			// ga - Gabon - no whois server assigned
			"gd" => "whois.nic.gd", // Grenada
			// ge - Georgia - no whois server assigned
			// gf - French Guiana - no whois server assigned
			"gg" => "whois.gg", // Guernsey
			// gh - Ghana - no whois server assigned
			"gi" => "whois2.afilias-grs.net", // Gibraltar
			"gl" => "whois.nic.gl", // Greenland (Denmark)
			// gm - Gambia - no whois server assigned
			// gn - Guinea - no whois server assigned
			"gov" => "whois.nic.gov",
			// gr - Greece - no whois server assigned
			// gt - Guatemala - no whois server assigned
			"gs" => "whois.nic.gs", // South Georgia And The South Sandwich Islands
			// gu - Guam - no whois server assigned
			// gw - Guinea-bissau - no whois server assigned
			"gy" => "whois.registry.gy", // Guyana
			"hk" => "whois.hkirc.hk", // Hong Kong
			// hm - Heard and McDonald Islands (Australia) - no whois server assigned
			"hn" => "whois.nic.hn", // Honduras
			"hr" => "whois.dns.hr", // Croatia
			"ht" => "whois.nic.ht", // Haiti
			"hu" => "whois.nic.hu", // Hungary
			// id - Indonesia - no whois server assigned
			"ie" => "whois.domainregistry.ie", // Ireland
			"il" => "whois.isoc.org.il", // Israel
			"im" => "whois.nic.im", // Isle of Man
			"in" => "whois.inregistry.net", // India
			"info" => "whois.afilias.net",
			"int" => "whois.iana.org",
			"io" => "whois.nic.io", // British Indian Ocean Territory
			"iq" => "whois.cmc.iq", // Iraq
			"ir" => "whois.nic.ir", // Iran, Islamic Republic Of
			"is" => "whois.isnic.is", // Iceland
			"it" => "whois.nic.it", // Italy
			"je" => "whois.je", // Jersey
			// jm - Jamaica - no whois server assigned
			// jo - Jordan - no whois server assigned
			"jobs" => "jobswhois.verisign-grs.com",
			"jp" => "whois.jprs.jp", // Japan
			"ke" => "whois.kenic.or.ke", // Kenya
			"kg" => "www.domain.kg", // Kyrgyzstan
			// kh - Cambodia - no whois server assigned
			"ki" => "whois.nic.ki", // Kiribati
			// km - Comoros - no whois server assigned
			// kn - Saint Kitts And Nevis - no whois server assigned
			// kp - Korea, Democratic People's Republic Of - no whois server assigned
			"kr" => "whois.kr", // Korea, Republic Of
			// kw - Kuwait - no whois server assigned
			// ky - Cayman Islands - no whois server assigned
			"kz" => "whois.nic.kz", // Kazakhstan
			"la" => "whois.nic.la", // Lao People's Democratic Republic
			// lb - Lebanon - no whois server assigned
			// lc - Saint Lucia - no whois server assigned
			"li" => "whois.nic.li", // Liechtenstein
			// lk - Sri Lanka - no whois server assigned
			"lt" => "whois.domreg.lt", // Lithuania
			"lu" => "whois.dns.lu", // Luxembourg
			"lv" => "whois.nic.lv", // Latvia
			"ly" => "whois.nic.ly", // Libya
			"ma" => "whois.iam.net.ma", // Morocco
			// mc - Monaco - no whois server assigned
			"md" => "whois.nic.md", // Moldova
			"me" => "whois.nic.me", // Montenegro
			"mg" => "whois.nic.mg", // Madagascar
			// mh - Marshall Islands - no whois server assigned
			"mil" => "whois.nic.mil",
			// mk - Macedonia, The Former Yugoslav Republic Of - no whois server assigned
			"ml" => "whois.dot.ml", // Mali
			// mm - Myanmar - no whois server assigned
			"mn" => "whois.nic.mn", // Mongolia
			"mo" => "whois.monic.mo", // Macao
			"mobi" => "whois.dotmobiregistry.net",
			"mp" => "whois.nic.mp", // Northern Mariana Islands
			// mq - Martinique (France) - no whois server assigned
			// mr - Mauritania - no whois server assigned
			"ms" => "whois.nic.ms", // Montserrat
			// mt - Malta - no whois server assigned
			"mu" => "whois.nic.mu", // Mauritius
			"museum" => "whois.museum",
			// mv - Maldives - no whois server assigned
			// mw - Malawi - no whois server assigned
			"mx" => "whois.mx", // Mexico
			"my" => "whois.domainregistry.my", // Malaysia
			// mz - Mozambique - no whois server assigned
			"na" => "whois.na-nic.com.na", // Namibia
			"name" => "whois.nic.name",
			"nc" => "whois.nc", // New Caledonia
			// ne - Niger - no whois server assigned
			"net" => "whois.verisign-grs.net",
			"nf" => "whois.nic.nf", // Norfolk Island
			"ng" => "whois.nic.net.ng", // Nigeria
			// ni - Nicaragua - no whois server assigned
			"nl" => "whois.domain-registry.nl", // Netherlands
			"no" => "whois.norid.no", // Norway
			// np - Nepal - no whois server assigned
			// nr - Nauru - no whois server assigned
			"nu" => "whois.nic.nu", // Niue
			"nz" => "whois.srs.net.nz", // New Zealand
			"om" => "whois.registry.om", // Oman
			"org" => "whois.pir.org",
			// pa - Panama - no whois server assigned
			"pe" => "kero.yachay.pe", // Peru
			"pf" => "whois.registry.pf", // French Polynesia
			// pg - Papua New Guinea - no whois server assigned
			// ph - Philippines - no whois server assigned
			// pk - Pakistan - no whois server assigned
			"pl" => "whois.dns.pl", // Poland
			"pm" => "whois.nic.pm", // Saint Pierre and Miquelon (France)
			// pn - Pitcairn (New Zealand) - no whois server assigned
			"post" => "whois.dotpostregistry.net",
			"pr" => "whois.nic.pr", // Puerto Rico
			"pro" => "whois.dotproregistry.net",
			// ps - Palestine, State of - no whois server assigned
			"pt" => "whois.dns.pt", // Portugal
			"pw" => "whois.nic.pw", // Palau
			// py - Paraguay - no whois server assigned
			"qa" => "whois.registry.qa", // Qatar
			"re" => "whois.nic.re", // Reunion (France)
			"ro" => "whois.rotld.ro", // Romania
			"rs" => "whois.rnids.rs", // Serbia
			"ru" => "whois.tcinet.ru", // Russian Federation
			// rw - Rwanda - no whois server assigned
			"sa" => "whois.nic.net.sa", // Saudi Arabia
			"sb" => "whois.nic.net.sb", // Solomon Islands
			"sc" => "whois2.afilias-grs.net", // Seychelles
			// sd - Sudan - no whois server assigned
			"se" => "whois.iis.se", // Sweden
			"sg" => "whois.sgnic.sg", // Singapore
			"sh" => "whois.nic.sh", // Saint Helena
			"si" => "whois.arnes.si", // Slovenia
			"sk" => "whois.sk-nic.sk", // Slovakia
			// sl - Sierra Leone - no whois server assigned
			"sm" => "whois.nic.sm", // San Marino
			"sn" => "whois.nic.sn", // Senegal
			"so" => "whois.nic.so", // Somalia
			// sr - Suriname - no whois server assigned
			"st" => "whois.nic.st", // Sao Tome And Principe
			"su" => "whois.tcinet.ru", // Russian Federation
			// sv - El Salvador - no whois server assigned
			"sx" => "whois.sx", // Sint Maarten (dutch Part)
			"sy" => "whois.tld.sy", // Syrian Arab Republic
			// sz - Swaziland - no whois server assigned
			"tc" => "whois.meridiantld.net", // Turks And Caicos Islands
			// td - Chad - no whois server assigned
			"tel" => "whois.nic.tel",
			"tf" => "whois.nic.tf", // French Southern Territories
			// tg - Togo - no whois server assigned
			"th" => "whois.thnic.co.th", // Thailand
			"tj" => "whois.nic.tj", // Tajikistan
			"tk" => "whois.dot.tk", // Tokelau
			"tl" => "whois.nic.tl", // Timor-leste
			"tm" => "whois.nic.tm", // Turkmenistan
			"tn" => "whois.ati.tn", // Tunisia
			"to" => "whois.tonic.to", // Tonga
			"tp" => "whois.nic.tl", // Timor-leste
			"tr" => "whois.nic.tr", // Turkey
			"travel" => "whois.nic.travel",
			// tt - Trinidad And Tobago - no whois server assigned
			"tv" => "tvwhois.verisign-grs.com", // Tuvalu
			"tw" => "whois.twnic.net.tw", // Taiwan
			"tz" => "whois.tznic.or.tz", // Tanzania, United Republic Of
			"ua" => "whois.ua", // Ukraine
			"ug" => "whois.co.ug", // Uganda
			"uk" => "whois.nic.uk", // United Kingdom
			"us" => "whois.nic.us", // United States
			"uy" => "whois.nic.org.uy", // Uruguay
			"uz" => "whois.cctld.uz", // Uzbekistan
			// va - Holy See (vatican City State) - no whois server assigned
			"vc" => "whois2.afilias-grs.net", // Saint Vincent And The Grenadines
			"ve" => "whois.nic.ve", // Venezuela
			"vg" => "whois.adamsnames.tc", // Virgin Islands, British
			// vi - Virgin Islands, US - no whois server assigned
			// vn - Viet Nam - no whois server assigned
			// vu - Vanuatu - no whois server assigned
			"wf" => "whois.nic.wf", // Wallis and Futuna
			"ws" => "whois.website.ws", // Samoa
			"xxx" => "whois.nic.xxx",
			// ye - Yemen - no whois server assigned
			"yt" => "whois.nic.yt", // Mayotte
			"yu" => "whois.ripe.net");
	}


	/**
	* Retrieves data for the domain
	* @param string $whoisserver
	* @param string $domain
	* @return array $res
	**/
	public function whoisQueryServer($whoisserver, $domain) {
		$port = 43;
		$timeout = 10;
		$fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
		//if($whoisserver == "whois.verisign-grs.com") $domain = "=".$domain; // whois.verisign-grs.com requires the equals sign ("=") or it returns any result containing the searched string.
		fputs($fp, $domain . "\r\n");
		$out = "";
		while(!feof($fp)){
			$out .= fgets($fp);
		}
		fclose($fp);

		$res = "";
		if((strpos(strtolower($out), "error") === FALSE) && (strpos(strtolower($out), "not allocated") === FALSE)) {
			$rows = explode("\n", $out);
			foreach($rows as $row) {
				$row = trim($row);
				if(($row != '') && ($row{0} != '#') && ($row{0} != '%')) {
					$res .= $row."\n";
				}
			}
		}
		return $res;
	}

	/**
	* Validates the name od the domain
	* @param string $domain
	* @return mixin
	**/
	function validateDomain($domain) {
		if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
			return false;
		}
		return $domain;
	}

	/**
	 * Retrieves the owner of the domain
	 * @param string $domain
	 * @return mixin
	 */
	function whoisLookupDomain($domain){

		$whoisservers = get_whois_servers();
		$domain_parts = explode(".", $domain);
		$tld = strtolower(array_pop($domain_parts));
		$whoisserver = $whoisservers[$tld];
		if(!$whoisserver) {
			return "Error: No appropriate Whois server found for $domain domain!";
		}
		$result = whois_query_server($whoisserver, $domain);
		if(!$result) {
			return "Error: No results retrieved from $whoisserver server for $domain domain!";
		}
		else {
			while(strpos($result, "Whois Server:") !== FALSE){
				preg_match("/Whois Server: (.*)/", $result, $matches);
				$secondary = $matches[1];
				if($secondary) {
					$result = whois_query_server($secondary, $domain);
					$whoisserver = $secondary;
				}
			}
		}
		return $result;
	}


	/**
	 * Retrieves alternative domains
	 * @param string $domain
	 * @param string $tld
	 * @return array
	 */
	function alternativeDomains($domain, $tld) {
		
			ci()->load->helper('inflector');
		
			$domain = preg_replace('/[^a-zA-Z0-9-]/','',$domain);
			$tld = preg_replace('/[^a-zA-Z0-9]/','',$tld);
			$tld = $tld ? $tld : 'com';
			
			$result = dns_get_record("www." . $domain . "." . $tld, DNS_ANY);
			$available = $result ? 0 : 1;
		
			// Alternate suggestions
			$domains_alt = array();
			// drop last vowel
			$novowels = str_replace( array("a","e","i","o","u","y"), '@', $domain);
			$pos = strrpos($novowels, '@');
			if($pos) $domains_alt[] = substr_replace($domain, "", $pos, 1);
			// replace y with i
			if(strpos($domain, 'y')) $domains_alt[] = str_replace("y", "i", $domain);
			if(strpos($domain, 'i')) $domains_alt[] = str_replace("i", "y", $domain);
			// plural/singular
			
			$plural = plural($domain);
			$singular = singular($domain);
			if($plural != $domain) $domains_alt[] = $plural;
			if($singular != $domain) $domains_alt[] = $singular;
			// suffixes
			$suffixes = array("ly","ster","let");
			foreach($suffixes as $suffix) {
				$domains_alt[] = $domain.$suffix;
				$domains_alt[] = $domain."-".$suffix;
			}
		
			// prefixes
			$prefixes = array("i","e","my","the","le");
			foreach($prefixes as $prefix) {
				$domains_alt[] = $prefix.$domain;
				$domains_alt[] = $prefix."-".$domain;
				// plural/singular with prefix
				if($plural != $domain) {
					$domains_alt[] = $prefix . $plural;
					$domains_alt[] = $prefix . "-" . $plural;
				}
				if($singular != $domain) {
					$domains_alt[] = $prefix . $singular;
					$domains_alt[] = $prefix . "-" . $singular;
				}
			}
		
			// rank suggestions
			$alt_domains = array();
			$common_suggestions = array();
			$common_exts = array('com');
			foreach($common_exts as $ext) {
				if($ext != $tld) $alt_domains[] = $domain.".".$ext;
				foreach($domains_alt as $alt) {
					$common_suggestions[] = $alt.".".$ext;
				}
			}
			shuffle($alt_domains);
			shuffle($common_suggestions);
			$suggestions_test = array_merge($alt_domains, $common_suggestions);
			
			// test each suggestion until 10 available
			$suggestions = array();
			for($i=0;$i<count($suggestions_test);$i++) {
				$test = $suggestions_test[$i];
				
				$test_domain = 'www.'.$test;
				$result = dns_get_record($test_domain, DNS_ANY);
				$alt_available = $result ? 0 : 1;
				if($alt_available) $suggestions[] = $test;
				if(count($suggestions) >= 10) break;
			}

			return array(
					$available,
					$suggestions,
					);
			
	}



	/**
	 * Helper for executing curl request to WHM
	 * @param string $query
	 * @return array $result
	 */
	function websiteGetCurl($query) {
		$curl = curl_init();
		# Create Curl Object
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
		# Allow certs that do not match the domain
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
		# Disable verification for host and peer
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
		# Allow self-signed certs
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
		# Return contents of transfer on curl_exec
		$header[0] = "Authorization: WHM ".Config::get('w-hm-ap-i::whm_username').":" . preg_replace("'(\r|\n)'","",Config::get('w-hm-ap-i::whm_hash'));
		# Remove newlines from the hash
		curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
		# Set curl header
		curl_setopt($curl, CURLOPT_URL, $query);
		# Set your URL
		$result = curl_exec($curl);
		# Execute Query, assign to $result
		
		if($result === false) {
			echo var_dump(curl_error($curl));
			exit;
		}

		curl_close($curl);



		return $result;
	}


	/**
	 * @name create_website_account
	 * @desc function for creating website account (subdomain)
	 * @param string $username (1 create, 0 delete)
	 * @param string $password
	 * @param string $email
	 * @param string $domain
	 * @return boolean
	 */
	function websiteCreateAccount($username, $password, $email, $domain ) {

		echo 'create account <br/>';

		$query = Config::get('w-hm-ap-i::whm_cpanel_url')."/json-api/createacct?username={$username}&plan=".Config::get('w-hm-ap-i::whm_plan')."&ip=n&password={$password}"
		."&contactemail={$email}&domain={$domain}".Config::get('w-hm-ap-i::whm_domain_url')."&useregns=0&reseller=0";

		$result = website_get_curl($query);
		var_dump($result);exit;
		if ($result == false) return FALSE;

		$result = json_decode($result, TRUE);

		return ($result['result'][0]['status'] == 1) ? TRUE : FALSE;
	}


	/**
	 * Deletes account
	 * @param string $username
	 * @return boolean
	 */
	function websiteDeleteAccount($username)
	{
		$result = website_get_curl(Config::get('w-hm-ap-i::whm_cpanel_url') . "/json-api/removeacct?user={$username}&keepdns=0");

		if($result == false) return false;

		$result = json_decode($result, TRUE);

		return ($result['result'][0]['status'] == 1) ? TRUE : FALSE;
	}

	/**
	 * Checks the account of the user
	 * @param string $username
	 * @return boolean
	 */
	function websiteCheckUser($user)
	{
		$result = website_get_curl(Config::get('w-hm-ap-i::whm_cpanel_url') . "/json-api/listaccts?searchtype=user&search={$user}");

		if($result == false) return false;

		$result = json_decode($result, TRUE);

		return ($result['status'] == 1 && !empty($result['acct'])) ? $result['acct'] : FALSE;
	}

	/**
	 * Suspends user's account
	 * @param string $user
	 * @return boolean
	 */
	function websiteSuspendAccount($user)
	{
		$result = website_get_curl(Config::get('w-hm-ap-i::whm_cpanel_url') . "/json-api/suspendacct?user={$user}");

		if($result == false) return false;

		$result = json_decode($result, TRUE);

		return ($result['result'][0]['status'] == 1 && !empty($result['acct'])) ? TRUE : FALSE;
	}



	/**
	 * Unsuspends user's account
	 * @param string $user
	 * @return boolean
	 */
	function websiteUnsuspendAccount($user)
	{
		$result = website_get_curl(Config::get('w-hm-ap-i::whm_cpanel_url') . "/json-api/unsuspendacct?user={$user}");

		if($result == false) return false;

		$result = json_decode($result, TRUE);

		return ($result['result'][0]['status'] == 1 && !empty($result['acct'])) ? TRUE : FALSE;
	}



	/**
	 * Checks whether the user has active website
	 * @param array $user
	 * @return boolean
	 */
	function hasActiveWebsite($user)
	{
		return ($user['has_website'] && $user['website_active']) ? $user['website_name'] . Config::get('w-hm-ap-i::whm_domain_url') : FALSE;
	}
}

