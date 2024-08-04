<?php

@session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utility
 *
 * @author 
 */
class Utility {

    protected $secret_key = '@st2eak';
    protected $secret_suffix = '@st2eak';
    var $_v = '/v1';
//    var $_endpointAPI = 'http://localhost/ST_LOBBY_API_KOREAN';
//    var $_endpointAPI_Staging = 'http://localhost/ST_LOBBY_API_KOREAN';
//    var $_endpointAPI_Local = 'http://localhost/ST_LOBBY_API_KOREAN';
    var $_endpointAPI = 'https://lobby.stvg-api.co';
    var $_endpointAPI_Staging = 'https://lobby.stvg-api.co';
    var $_endpointAPI_Local = 'https://lobby.stvg-api.co';
    var $_keyAuthenAgent = "st";
    var $_keyAuthenToken = "52@d8c6ba5b8456db7c107710a22866bc9";
    var $_TIMEOUT = 0;
    var $_key2fa = 'ST-';
    var $_retry = 5;
    var $_keyPipe = '1a88';

//    var $_keyAuthen = array(
//        "st" => '52@d8c6ba5b8456db7c107710a22866bc9'
//    );

    const LOGS_INFO = '/opt/bitnami/apache/logs/info.log';

    function __construct() {
        if (ENV == "DEV") {
            $this->_endpointAPI = $this->_endpointAPI_Staging;
        } else if (ENV == "LOCAL") {
            $this->_endpointAPI = $this->_endpointAPI_Local;
        }
    }

    function logInfo($title, $msg) {
        $date = date('Y-m-d h:i:s');
        $log = $date . "  |  $title:  " . $msg . "\n";
        error_log($log, 3, self::LOGS_INFO);
    }

    function inquiry2fa($secret, $username) {
        //        if ($_SESSION["PROFILE"]->info->login->s_2fa == NULL) {
//            $secretkey = Google2Factor::generateRandomClue();
//        }
        $qrcode = Google2Factor::getBarCodeUrl('', '', $secret, $this->_key2fa . strtoupper($username));
        return $qrcode;
    }

    function BankMaster() {
        $bank = array(
            '1' => array('name' => 'SCB', "image" => "scb.png", "bgColor" => "#4C297E"),
            '2' => array('name' => 'KBANK', "image" => "kbank.png", "bgColor" => "#118f46"),
            '3' => array('name' => 'KTB', "image" => "ktb.png", "bgColor" => "#1EA1DB"),
            '4' => array('name' => 'BBL', "image" => "bbl.png", "bgColor" => "#003399"),
            '5' => array('name' => 'BAY', "image" => "bay.png", "bgColor" => "#FED20F"),
            '6' => array('name' => 'TTB', "image" => "tmb.png", "bgColor" => "#0052F7"),
            '7' => array('name' => 'TrueWallet', "image" => "tw.png", "bgColor" => "#F58021"),
            '8' => array('name' => 'GSB', "image" => "gsb.png", "bgColor" => "#EC068D"),
            '10' => array('name' => 'UOB', "image" => "uob.png", "bgColor" => "#00377A"),
            '11' => array('name' => 'KIATNAKIN', "image" => "kk.png", "bgColor" => "#009BCB"),
            '12' => array('name' => 'LHBANK', "image" => "lh.png", "bgColor" => "#009BCB"),
            '13' => array('name' => 'IBANK', "image" => "ibank.png", "bgColor" => "#154714"),
            '14' => array('name' => 'TISCO', "image" => "tisco.png", "bgColor" => "#0270BB"),
            '15' => array('name' => 'SCIB', "image" => "scib.png", "bgColor" => "#CD030B"),
            '16' => array('name' => 'GHB', "image" => "ghb.png", "bgColor" => "#F89828"),
            '17' => array('name' => 'CIMB', "image" => "cimb.png", "bgColor" => "#B9021D"),
            '18' => array('name' => 'BAAC', "image" => "baac.png", "bgColor" => "#006637"),
            '19' => array('name' => 'ICBC', "image" => "icbc.png", "bgColor" => "#BD0014"),
        );
        return $bank;
    }

    //<editor-fold defaultstate="collapsed" desc="CloudFlare">
    public function get_ip() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function get_real_ip() {
        // Get IP Address
        $ip = $this->get_ip();

        if (function_exists('is_cloudflare')) {
            if ($this->is_cloudflare()) {
                $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
            }
        }
//        return strip_tags($ip);
        $ip = strip_tags($ip);
        return explode(',', $ip)[0];
    }

    function ip_in_range($ip, $range) {
        if (mb_strpos($range, '/') == false)
            $range .= '/32';

        // $range is in IP/CIDR format eg 127.0.0.1/24
        list( $range, $netmask ) = explode('/', $range, 2);
        $range_decimal = ip2long($range);
        $ip_decimal = ip2long($ip);
        $wildcard_decimal = ( pow(2, ( 32 - $netmask)) - 1);
        $netmask_decimal = ~ $wildcard_decimal;
        return ( ( $ip_decimal & $netmask_decimal ) == ( $range_decimal & $netmask_decimal ) );
    }

    function __cloudflare_check_ip($ip) {
        // @link https://www.cloudflare.com/ips/
        $cf_ips = array(
            '173.245.48.0/20',
            '103.21.244.0/22',
            '103.22.200.0/22',
            '103.31.4.0/22',
            '141.101.64.0/18',
            '108.162.192.0/18',
            '190.93.240.0/20',
            '188.114.96.0/20',
            '197.234.240.0/22',
            '198.41.128.0/17',
            '162.158.0.0/15',
            '104.16.0.0/13',
            '104.24.0.0/14',
            '172.64.0.0/13',
            '131.0.72.0/22'
        );

        $is_cf_ip = false;
        foreach ($cf_ips as $cf_ip) {
            if ($this->ip_in_range($ip, $cf_ip)) {
                $is_cf_ip = true;
                break;
            }
        }

        return $is_cf_ip;
    }

    function __cloudflare_requests_check() {
        $flag = true;

        if (!( isset($_SERVER['HTTP_CF_CONNECTING_IP']) || isset($_SERVER['HTTP_CF_IPCOUNTRY']) || isset($_SERVER['HTTP_CF_RAY']) || isset($_SERVER['HTTP_CF_VISITOR']) ))
            $flag = false;

        return $flag;
    }

    function is_cloudflare() {
        $ip_cf_check = $this->__cloudflare_check_ip($this->get_ip());
        $cf_request_check = $this->__cloudflare_requests_check();

        return (bool) ( $ip_cf_check && $cf_request_check );
    }

    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Format">
    function DateFormatImg($date) {
        $yyyy = substr($date, 0, 4);
        $mm = substr($date, 5, 2);
        $dd = substr($date, 8, 2);
        $hh = substr($date, 11, 2);
        $ii = substr($date, 14, 2);
        $ss = substr($date, 17, 2);
        return $yyyy . $mm . $dd . $hh . $ii . $ss;
    }

    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Search Data">
    // exmple SearchDataInArray('Ant',$arrayList,'animalName')
    function SearchDataInArray($keyword, $arrayToSearch, $fieldSearch) {
        $resp = array();
        foreach ($arrayToSearch as $key => $arrayItem) {
            $arrayItem = (array) $arrayItem;
            if (stristr($arrayItem["$fieldSearch"], $keyword)) {
                array_push($resp, (object) $arrayItem);
            }
        }
        return $resp;
    }

    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Encrypt & Decrypt">
    function encrypt($string) {
        $output = false;
        $encrypt_method = "AES-128-CBC";
        $key = hash('sha256', $this->secret_key);
        $suffix = substr(hash('sha256', $this->secret_suffix), 0, 16);
        $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $suffix));
        return $output;
    }

    function decrypt($string) {
        $output = false;
        $encrypt_method = "AES-128-CBC";
        $key = hash('sha256', $this->secret_key);
        $suffix = substr(hash('sha256', $this->secret_suffix), 0, 16);
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $suffix);
        return $output;
    }

    function validateScript($request) {
        $flg = FALSE;
        if ($request->getMethod() == "POST") {
            $contentType = $request->getHeaderLine('Content-Type');
            if ($contentType == "application/json") {
                $r = (array) json_decode($request->getBody()->getContents());
            } else {
                $r = $request->getParsedBody();
            }
            foreach ($r as $v) {
                if (is_object($v) || is_array($v)) {
                    continue;
                }
                $a = $v;
                $keyword = 'script';
                if (str_contains($v, $keyword)) {
                    $flg = TRUE;
                    break;
                }
            }
        }
        return $flg;
    }

    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Call API">


    function get($contextPath, $enable = false) {

        if ($enable) {
            $this->logInfo('URL [GET]', $this->_endpointAPI . $this->_v . $contextPath);
        }


        $curl = curl_init();
        curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => $this->_endpointAPI . $this->_v . $contextPath,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => $this->_TIMEOUT,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'authorization-agent: ' . $this->_keyAuthenAgent,
                        'authorization-token: ' . $this->_keyAuthenToken,
                        'language: ' . $_SESSION["lang"]
                    ),
                )
        );
        for ($i = 1; $i <= $this->_retry; $i++) {
            //            if ($i == $this->_retry) {
//                sleep(1);
//            }
            $resp = curl_exec($curl);
            if ($resp != "") {
                break;
            }
        }
        curl_close($curl);
        if ($enable) {
            $this->logInfo('RESPONSE', $resp);
        }

        return json_decode($resp);
    }

    function post($contextPath, $field, $enable = false) {
        if (is_object($field)) {
            $field = (array) $field;
        }


        if ($enable) {
            $this->logInfo('URL [POST]', $this->_endpointAPI . $this->_v . $contextPath);
            $this->logInfo('REQUEST', json_encode($field));
        }

        $curl = curl_init();
        curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => $this->_endpointAPI . $this->_v . $contextPath,
                    CURLOPT_SSL_VERIFYHOST => false,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_FRESH_CONNECT => true,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => $this->_TIMEOUT,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => json_encode($field),
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'authorization-agent: ' . $this->_keyAuthenAgent,
                        'authorization-token: ' . $this->_keyAuthenToken,
                        'language: ' . $_SESSION["lang"]
                    ),
                )
        );
        for ($i = 1; $i <= $this->_retry; $i++) {
            //            if ($i == $this->_retry) {
//                sleep(1);
//            }
            $resp = curl_exec($curl);
            if ($resp != "") {
                break;
            }
        }

        curl_close($curl);
        if ($enable) {
            $this->logInfo('RESPONSE', $resp);
        }

        return json_decode($resp);
    }

    function postFormData($contextPath, $field, $enable = false) {

        //        $field = array(
//            "s_name" => "test name",
//            "file1" => new CURLFILE('/C:/Users/user/Desktop/4444.png'),
//            "file2" => new CURLFILE('/C:/Users/user/Desktop/5555.png')
//        );



        if (is_object($field)) {
            $field = (array) $field;
        }


        if ($enable) {
            $this->logInfo('URL [POST]', $this->_endpointAPI . $this->_v . $contextPath);
            $this->logInfo('REQUEST', json_encode($field));
        }

        $curl = curl_init();
        curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => $this->_endpointAPI . $this->_v . $contextPath,
                    CURLOPT_SSL_VERIFYHOST => false,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_FRESH_CONNECT => true,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => $this->_TIMEOUT,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $field,
                    CURLOPT_HTTPHEADER => array(
                        'authorization-agent: ' . $this->_keyAuthenAgent,
                        'authorization-token: ' . $this->_keyAuthenToken,
                        'language: ' . $_SESSION["lang"]
                    ),
                )
        );
        for ($i = 1; $i <= $this->_retry; $i++) {
            //            if ($i == $this->_retry) {
//                sleep(1);
//            }
            $resp = curl_exec($curl);
            if ($resp != "") {
                break;
            }
        }

        curl_close($curl);
        if ($enable) {
            $this->logInfo('RESPONSE', $resp);
        }

        return json_decode($resp);
    }

    function statusError($data) {
        if ($data->statusCode != 0) {
            return true;
        } else {
            return false;
        }
    }

    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Response & SetMessage">
    function respFromAPI($tmp) {
        return json_encode((array) $tmp, JSON_UNESCAPED_UNICODE);
    }

    function resp($statusCode, $statusDesc = NULL, $object = NULL) {

        switch ($statusCode) {
            case 403:
                $statusDesc = L::badRequest_9001;
                break;
            case 404:
                $statusDesc = L::Err_default;
                break;
            case 503:
                $statusDesc = L::Err_default;
                break;
        }
        if ($object != NULL) {
            $tmp = array(
                'statusCode' => $statusCode,
                'statusDesc' => $statusDesc,
                'data' => $object,
            );
        } else {
            $tmp = array(
                'statusCode' => $statusCode,
                'statusDesc' => $statusDesc,
            );
        }

        return json_encode($tmp, JSON_UNESCAPED_UNICODE);
    }

    function setMsg($field, $err, $labelFormat = NULL) {
        $response = '';
        switch ($err) {
            case L::Err_2002:
                $response = str_replace("field", $field, $err);
                break;
            case L::Err_2003:
                $response = str_replace("field", $field, $err);
                $response = str_replace("regular", $labelFormat, $response);
                break;
            case L::Err_2004:
                $response = str_replace("field", $field, $err);
                break;
            case L::Err_2005:
                $response = str_replace("field", $field, $err);
                break;
            case L::Err_2006:
                $response = str_replace("field", $field, $err);
                break;
            case L::Err_2007:
                $response = str_replace("field", $field, $err);
                break;
            case L::Err_2012:
                $response = str_replace("field", $field, $err);
                break;
            case L::Err_2013:
                $response = str_replace("field", $field, $err);
                $response = str_replace("regular", $labelFormat, $response);
                break;
        }
        return $response;
    }

    function json_decode($jsonString) {
        return json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $jsonString), true);
    }

    function respDatatable($data) {
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="Validate Data">
    function isEmpty($tmp) {
        if ($tmp == NULL || trim($tmp) == '') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isEmptyDDL($tmp) {
        if ($tmp == NULL || trim($tmp) == '-1') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function detectCharacter($str, $min, $max) {
        if (strlen($str) < $min || strlen($str) > $max) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isBillDate($data) {
        if (strlen($data) == 7) {
            $yyyy = substr($data, 0, 4);
            $sp = substr($data, 4, 1);
            $mm = substr($data, 5, 2);

            if (!$this->isNumber($yyyy)) {
                return FALSE;
            }
            if ($sp != '-') {
                return FALSE;
            }
            if (!$this->isNumber($mm)) {
                return FALSE;
            }

            return TRUE;
        } else {
            return FALSE;
        }
    }

    function checkFrstCharacterNumertic($data) {
        $fstchar = substr($data, 0, 1);
        if (is_numeric($fstchar)) {
            return true;
        } else {
            return false;
        }
    }

    function countObject($_data) {
        $no = 0;
        foreach ($_data as $key => $value) {
            $no++;
        }
        return $no;
    }

    function isMediaImg($media) {
        if ($media == 'image/jpg' || $media == 'image/jpeg' || $media == 'image/png') {
            return true;
        } else {
            return false;
        }
    }

    // s_phone
    function isPhoneNumber($str) {

        //$str = "(999) 999-9999";
        $str = str_replace("(", "", $str);
        $str = str_replace(")", "", $str);
        $str = str_replace("-", "", $str);
        $str = str_replace("_", "", $str);
        $str = str_replace(" ", "", $str);

        if (strlen($str) == 10 && is_numeric($str) && (substr($str, 0, 1) === '0')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // s_phone
    function isPhoneNumber2($phone) {
        if (preg_match('/^[0-9]{10}+$/', $phone)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // s_account_no
    function isAccountNo($str) {
        //$str = "123-4-56789-0";
        $str = str_replace("(", "", $str);
        $str = str_replace(")", "", $str);
        $str = str_replace("-", "", $str);
        $str = str_replace(" ", "", $str);

        if (strlen($str) == 10 && is_numeric($str)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // s_account_no
    function isWebAccountNo($str) {
        $str = str_replace("(", "", $str);
        $str = str_replace(")", "", $str);
        $str = str_replace("-", "", $str);
        $str = str_replace(" ", "", $str);

        if ((strlen($str) == 10 || strlen($str) == 12) && is_numeric($str)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isWebAccountNo2($str, $gsbID) {

        if (($gsbID == 8 || $gsbID == 18 || $gsbID == 16) && (strlen($str) == 12) && is_numeric($str)) {
            return TRUE;
        } else if (($gsbID != 8) && ($gsbID != 18) && ($gsbID != 16) && (strlen($str) == 10) && is_numeric($str)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // s_pin
    function isSecurity($str) {
        if (strlen($str) == 6 && is_numeric($str)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // s_citizen
    function isCitizenID($str) {

        $str = str_replace("-", "", $str);
        $str = str_replace("_", "", $str);
        $str = str_replace(" ", "", $str);

        if (strlen($str) == 13 && is_numeric($str)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isPercen($str) {
        //
        $first = 0.00;
        $last = 100.00;
        try {

            if (preg_match('/[0-9]+%/', $str)) {
                return FALSE;
            }

            $tmp = (float) $str;
            $str = floatval(number_format($str, 2));
            if ($str >= $first && $str <= $last) {
                return TRUE;
            } else {
                return FALSE;
            }
        } catch (Exception $e) {
            return FALSE;
        }
    }

    //</editor-fold> 
    //<editor-fold defaultstate="collapsed" desc="Session & Permission">
    function initialPermission($resp) {
        $permission = array();
        foreach ($resp->data->info->menu as $key => $v) {
            $name = $v->s_variable;
            $view = ($v->_view == "Y" ? TRUE : FALSE);
            $manage = ($v->_manage == "Y" ? TRUE : FALSE);
            $delete = ($v->_delete == "Y" ? TRUE : FALSE);
            $permission[$v->s_menu_code] = ["menu" => $name, "view" => $view, "manage" => $manage, "delete" => $delete];
        }
        return $permission;
    }

    function Permission($menuCode) {
        $menu = $_SESSION["PERMISSION"][$menuCode];
        $menu["menu_active"] = $this->Menu($menuCode);
        return (Object) $menu;
    }

    function isBadRequest() {
        if ($_SESSION["PROFILE"] == NULL) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isSecuPass() {
        if ($_SESSION["SECURITY_LOGIN"] != NULL && $_SESSION["SECURITY_LOGIN"] == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isResetPass() {
        if ($_SESSION["PROFILE"]->info->login->s_reset_pass != NULL && $_SESSION["PROFILE"]->info->login->s_reset_pass == 'Y') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function activeMenu($idMain) {
        $_SESSION["MAIN-MENU"] = $idMain;
    }

    function Menu($idMain) {
        $arrMenu = array();
        $menu = json_decode(json_encode($_SESSION["PROFILE"]->info->menu), true);
        $key = array_search($idMain, array_column($menu, 's_menu_code'));
        if ($menu[$key]['s_type'] == 'M') {
            $arrMenu['M'] = $menu[$key]['s_variable'];
        }
        if ($menu[$key]['s_type'] == 'S') {
            $arrMenu['S'] = $menu[$key]['s_variable'];
            $key = array_search($menu[$key]['s_parent_key'], array_column($menu, 's_menu_code'));
            if ($menu[$key]['s_type'] == 'M') {
                $arrMenu['M'] = $menu[$key]['s_variable'];
            }
        }
        if ($menu[$key]['s_type'] == 'D') {
            $arrMenu['D'] = $menu[$key]['s_variable'];
            $key = array_search($menu[$key]['s_parent_key'], array_column($menu, 's_menu_code'));
            if ($menu[$key]['s_type'] == 'S') {
                $arrMenu['S'] = $menu[$key]['s_variable'];
                $key = array_search($menu[$key]['s_parent_key'], array_column($menu, 's_menu_code'));
                if ($menu[$key]['s_type'] == 'M') {
                    $arrMenu['M'] = $menu[$key]['s_variable'];
                }
            }
        }
        return (Object) $arrMenu;
    }

    function authenSessionExpire() {

        // to do call api update Session Database
        $dateMinAction = date('Y-m-d H:i:s');
        try {
            if ($_SESSION["PROFILE"]->token == null) {
                return TRUE;
            }
            $resp = $this->get('/Authen/SessionExpire/' . $_SESSION["PROFILE"]->token);
            if ($resp->statusCode == 0) {
                if ($resp->data->d_session_expire > $dateMinAction) {
                    return FALSE;
                } else {
                    return TRUE;
                }
            } else {
                return TRUE;
            }
        } catch (Exception $e) {
            return TRUE;
        }
    }

    function updateSessionExpire() {
        // to do call api update Session Database
        $resp = $this->get('/Authen/CheckTokenLogin/' . $_SESSION["PROFILE"]->token);
        if ($resp->statusCode == 0) {
            $_SESSION["PROFILE"]->d_session_expire = $resp->data->d_session_expire;
        }
    }

    function DeleteSession() {
        $_SESSION["PROFILE"] = null;
    }

    //</editor-fold> 
    //<editor-fold defaultstate="collapsed" desc="html button">
//    function btnDelete($id) {
//        $html = '';
//        $html = '<button onclick="deleteNotify(\'' . $id . '\')" class="btn btn-icon btn-circle btn-outline-danger"><i class="fa fa-trash"></i></button>&nbsp;';
//        return $html;
//    }
    function html_note($index, $id, $text) {
        $readonly = (trim($text) !== "" ? "readonly" : "readonly");
        $cssBackGround = ($readonly !== "" ? "background-color: #f4f5f8;" : "");
        $html = '';
        $html .= '<form action="#" method="POST" id="formEdit' . $index . '" name="formEdit' . $index . '" >';
        $html .= ' <div class="row"> ';
        $html .= ' <input type="hidden" id="id' . $index . '" name="id' . $index . '" value="' . $id . '" /> ';
        $html .= ' <input type="hidden" id="s_note_old' . $index . '" name="s_note_old' . $index . '" value="' . trim($text) . '" /> ';
        $html .= ' <input class="form-control form-control-sm" type="text" id="s_note' . $index . '"  name="s_note' . $index . '" value="' . trim($text) . '" ' . $readonly . ' style="' . $cssBackGround . ';width:180px;font-size: smaller;" /> ';
        $html .= ' &nbsp<a href="javascript:openInputText(' . $index . ');" class="btn btn-warning btn-sm waves-effect waves-float waves-light"  > ';
        $html .= ' <span>' . L::btn_edit . '</span> </a> ';
        $html .= ' &nbsp<a href="javascript:saveMessage(' . $index . ');" class="btn btn-primary btn-sm waves-effect waves-float waves-light"  id="save' . $index . '" style="display:none" > ';
        $html .= ' <span>' . L::btn_save . '</span> ';
        $html .= ' </a> ';
        $html .= ' </div> ';
        $html .= '</form>';
        return $html;
    }

    function btnEdit($id) {
        $html = '';
        $html = '<button onclick="edit(\'' . $id . '\')" class="btn btn-icon btn-circle btn-xs btn-outline-info"><i class="fa fa-edit"></i></button>&nbsp;';
        return $html;
    }

    function btnDelete($id) {
        $html = '';
        $html = '<button onclick="deleteNotify(\'' . $id . '\')" class="btn btn-icon btn-xs btn-circle btn-outline-danger"><i class="fa fa-trash"></i></button>&nbsp;';
        return $html;
    }

    function btnEditModalFaIcon($id, $func, $icon, $color) {
        $html = '';
        $html = '<button onclick="' . $func . '(\'' . $id . '\')" class="btn btn-icon btn-xs btn-circle ' . $color . '"><i class="' . $icon . '"></i></button>&nbsp;';
        return $html;
    }

    function btnChangePage($endpoint, $id, $icon, $color) {
        $html = '';
        $html .= '<a href="javascript:document.formView' . $id . '.submit();">';
        $html .= '<button class="btn btn-icon btn-xs btn-circle ' . $color . '"><i class="' . $icon . '"></i></button>&nbsp;';
        $html .= '<form action="' . $_SESSION['BasePath'] . $endpoint . '" method="POST" id="formView' . $id . '" name="formView' . $id . '" style="display:none;">';
        $html .= '</a>';
        $html .= '<input type="hidden" id="id" name="id" value="' . $id . '" />';
        $html .= '<input type="submit" />';
        $html .= '</form>';
        return $html;
    }

    function btnModalFaIcon($func, $icon, $color, $param1 = NULL, $param2 = NULL, $param3 = NULL) {
        $param = array();
        if ($param1 != NULL)
            array_push($param, '\'' . $param1 . '\'');
        if ($param2 != NULL)
            array_push($param, '\'' . $param2 . '\'');
        if ($param3 != NULL)
            array_push($param, '\'' . $param3 . '\'');

        $html = '';
        $html = '<button onclick="' . $func . '(' . implode(",", $param) . ')" class="btn btn-xs btn-icon btn-circle ' . $color . '"><i class="' . $icon . '"></i></button>&nbsp;';
        return $html;
    }

    function switchStatusAC($id, $status, $func) {
        $html = '';
        $check = ($status == 'A' ? 'checked="checked" ' : '');
        $html .= '<span class="switch switch-outline switch-icon switch-sm switch-success justify-content-center">';
        $html .= '<label>';
        $html .= '<input type="checkbox" ' . $check . ' name="selectAC' . $id . '" onchange="' . $func . '(this.checked,\'' . $id . '\')">';
        $html .= '<span></span>';
        $html .= '</label>';
        $html .= '</span>';
        return $html;
    }

    function checkboxStatusYN($id, $status, $func) {
        $html = '';
        $check = ($status == 'Y' ? 'checked="checked" ' : '');
        $html .= '<input type="checkbox"' . $id . '" name="Checkbox' . $id . '" onclick="' . $func . '(this.value,\'' . $id . '\')" value="Y" ' . $check . '>';
        return $html;
    }

    function switchStatusYN($id, $status, $func) {
        $html = '';
        $check = ($status == 'Y' ? 'checked="checked" ' : '');
        $html .= '<span class="switch switch-outline switch-icon switch-sm  switch-success justify-content-center">';
        $html .= '<label>';
        $html .= '<input type="checkbox"  ' . $check . '  name="selectYN' . $id . '" onchange="' . $func . '(this.checked,\'' . $id . '\')">';
        $html .= '<span></span>';
        $html .= '</label>';
        $html .= '</span>';
        return $html;
    }

    function selectStatusAL($id, $status, $func) {
        $html = '';

        $selectedA = ($status === 'A' ? ' selected' : '');
        $selectedL = ($status === 'L' ? ' selected' : '');
        $selectedNB = ($status === 'NB' ? ' selected' : '');

        $html .= '<select class="form-control" name="selectAL' . $id . '" onchange="' . $func . '(this.value,\'' . $id . '\')">';
        $html .= '<option value="A" ' . $selectedA . ' >' . L::status_active . '</option>';
        $html .= '<option value="L" ' . $selectedL . ' >' . L::status_lock . '</option>';
        $html .= '<option value="NB" ' . $selectedNB . ' >' . L::status_nobet . '</option>';
        $html .= '</select>';

        return $html;
    }

    function labelCredit($id, $amount) {
        $html = '';
        $html .= '<span class="mr-2 span-label-credit" id="txt-amount-' . $id . '">' . $amount . '</span>';

        return $html;
    }

    function btnAddCredit($username, $credit, $func, $typeCredit, $icon, $color) {
        $html = '<button onclick="' . $func . '(\'' . $username . '\' , \'' . $credit . '\', \'' . $typeCredit . '\')" class="btn btn-xs btn-icon btn-circle ' . $color . '"><i class="' . $icon . '"></i></button>&nbsp;';
        return $html;
    }

    function btnReduceCredit($username, $credit, $func, $typeCredit, $icon, $color) {
        $html = '<button onclick="' . $func . '(\'' . $username . '\' , \'' . $credit . '\', \'' . $typeCredit . '\')" class="btn btn-xs btn-icon btn-circle ' . $color . '"><i class="' . $icon . '"></i></button>&nbsp;';
        return $html;
    }

//</editor-fold> 
    //<editor-fold defaultstate="collapsed" desc="Random">
    function randomPercen($data) {
        foreach ($data as $k => $v) {
            $rand = rand(20, 90);
            $v->f_percen = $rand;
        }
        return $data;
    }

    //</editor-fold>
    //<editor-fold defaultstate="collapsed" desc="CreateFileFromBase64">
    function CreateFileFromBase64($imageBase64, $pathFileName) {

        $decodedImage = base64_decode($imageBase64);
        if (file_put_contents($pathFileName, $decodedImage) !== false) {
            error_log('s 3');
        } else {
            error_log('s 4');
        }
    }

    function pathFile($type, $agentCode, $fileName) {
        $pathFileName = './Config/' . $agentCode . '/db/' . $type . '/' . $fileName;
        return $pathFileName;
    }

    function CreateSlide($agentCode, $slide) {
        if ($slide != NULL) {
            foreach ($slide as $k => $v) {
                $pathFileName = $this->pathFile('slide', $agentCode, $v->mid . '_' . $this->DateFormatImg($v->d_update) . '.webp');
                error_log('s 1');
                $v->source_image = $pathFileName;
                if (!file_exists($pathFileName)) {
                    error_log('s 2');
                    $this->CreateFileFromBase64($v->s_image, $pathFileName);
                }
            }
        }
        return $slide;
    }

    function CreatePromotion($agentCode, $prm) {
        if ($prm != NULL) {
            foreach ($prm as $k => $v) {
                $pathFileName = $this->pathFile('promotion', $agentCode, $v->mid . '_' . $this->DateFormatImg($v->d_update) . '.webp');
                $v->source_image = $pathFileName;
                if (!file_exists($pathFileName)) {
                    $this->CreateFileFromBase64($v->s_source_img, $pathFileName);
                }
            }
        }
        return $prm;
    }

    function CreateNewsImg($agentCode, $news) {
        $pathFileName = $this->pathFile('news', $agentCode, 'news_' . $this->DateFormatImg($news->d_update) . '.webp');
        if (!file_exists($pathFileName)) {
            $this->CreateFileFromBase64($news->s_source_img, $pathFileName);
        }
        return ($news == NULL ? $news : $pathFileName);
    }

    //</editor-fold>
}
