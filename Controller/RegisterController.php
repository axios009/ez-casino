<?php

@session_start();

//<editor-fold defaultstate="collapsed" desc="/Member/Register/Verify">
$app->map(['POST'], $cVersion . '/Member/Register/Verify', function ($request, $response) use ($util, $renderer, $templateConfig) {
    unset($_SESSION["REG"]);

    $r = (Object) $request->getParsedBody();
    // ถ้ากรณีที่ต้องการให้เป็น Object เวลาเรียกใช้ตัวแปล ex. $r->username;
    // $r = $request->getParsedBody(); //ถ้ากรณีที่เป็น array ปกติ เวลาเรียกใช้ตัวแปล ex. $r['username'];
    /* if (!$r->accept) {
      $response->getBody()->write($util->resp(2081, L::Err_2081));
      return $response;
      } */
    if ($util->isEmpty($r->s_phone)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_phoneMobile, L::Err_2002)));
        return $response;
    } else {
        $r->s_phone = str_replace("-", "", $r->s_phone);
    }

    if (strlen($r->s_password) < 8) {
        $response->getBody()->write($util->resp(2013, $util->setMsg(L::lb_password, L::Err_2013, '8 - 20')));
        return $response;
    }
//
    if ($util->isEmpty($r->s_password)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_password, L::Err_2002)));
        return $response;
    }
    if ($util->isEmptyDDL($r->i_bank)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_bank, L::Err_2002)));
        return $response;
    }
    if ($util->isEmpty($r->s_account_no)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_accountNo, L::Err_2002)));
        return $response;
    }
//    if ($util->isEmpty($r->ref)) {
//        if ($util->isEmptyDDL($r->s_channel)) {
//            $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_channelRegister, L::Err_2002)));
//            return $response;
//        }
//    }
//    if ($util->isEmpty($r->s_line)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_lineID, L::Err_2002)));
//        return $response;
//    }
    $req = array(
        "s_agent_code" => AGENT,
        "s_phone" => $r->s_phone,
        "s_password" => $r->s_phone,
        "i_bank" => $r->i_bank,
        "s_account_no" => $r->s_account_no,
        "s_channel" => ($util->isEmpty($r->ref) ? $r->s_channel : 'เพื่อนแนะนำ'),
        "s_line" => '-',
        "s_ref" => ($r->ref != NULL ? $r->ref : ''),
        "type_shorturl" => ($r->ref != NULL ? TRUE : FALSE)
    );
    $resp = $util->post('/Member/Register/Verify', $req);
    if (!$util->statusError($resp)) {
        $data = array(
            "type_shorturl" => $resp->data->type_shorturl,
            "more_detail" => $resp->data->more_detail,
            "i_channel" => $resp->data->i_channel,
            "s_title" => $resp->data->s_title,
            "s_channel_name" => $resp->data->s_channel_name,
            "s_channel_remark" => $resp->data->s_channel_remark
        );
        $_SESSION["REG"] = $data;
    }
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp->data));
    return $response;
});
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="/Member/Register/Confirm">
$app->map(['POST'], $cVersion . '/Member/Register/Confirm', function ($request, $response) use ($util, $renderer, $templateConfig) {


    $r = (Object) $request->getParsedBody();
    // ถ้ากรณีที่ต้องการให้เป็น Object เวลาเรียกใช้ตัวแปล ex. $r->username;
    // $r = $request->getParsedBody(); //ถ้ากรณีที่เป็น array ปกติ เวลาเรียกใช้ตัวแปล ex. $r['username'];


    if ($util->isEmpty($r->s_phone)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_phoneMobile, L::Err_2002)));
        return $response;
    }
    if ($util->isEmpty($r->s_password)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_password, L::Err_2002)));
        return $response;
    }
    if ($util->isEmptyDDL($r->i_bank)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_bank, L::Err_2002)));
        return $response;
    }
    if ($util->isEmpty($r->s_account_no)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_accountNo, L::Err_2002)));
        return $response;
    }


    /* if ($util->isEmpty($r->ref)) {
      if ($util->isEmptyDDL($r->s_channel)) {
      $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_channelRegister, L::Err_2002)));
      return $response;
      }
      } */
//    if ($util->isEmpty($r->s_line)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_lineID, L::Err_2002)));
//        return $response;
//    }
    if ($util->isEmpty($r->s_firstname)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_firstName, L::Err_2002)));
        return $response;
    }
    if ($util->isEmpty($r->s_lastname)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_lastName, L::Err_2002)));
        return $response;
    }

    $req = array(
        "s_agent_code" => AGENT,
        "s_phone" => $r->s_phone,
        "s_password" => $r->s_password,
        "i_bank" => $r->i_bank,
        "s_account_no" => $r->s_account_no,
        //"s_channel" => ($util->isEmpty($r->s_channel) ? 'GOOGLE' : $r->s_channel),
        "s_channel" => 'GOOGLE',
        "s_line" => ($r->s_line != NULL ? $r->s_line : '-'),
        "s_ref" => ($util->isEmpty($r->ref) ? '' : $r->ref),
        "type_shorturl" => $r->type_shorturl,
        "more_detail" => $r->more_detail,
        "s_fullname" => $r->s_firstname . ' ' . $r->s_lastname,
        "s_title" => $_SESSION["REG"]["s_title"],
        "s_firstname" => $r->s_firstname,
        "s_lastname" => $r->s_lastname,
        //"i_channel" => $r->i_channel,
        "i_channel" => '1',
        "s_channel_name" =>  $_SESSION["REG"]["s_channel_name"],
        "s_channel_remark" => $_SESSION["REG"]["s_channel_remark"],
        //"s_channel_remark" => '',
        "ip" => $util->get_real_ip()
    );
    $resp = $util->post('/Member/Register/Confirm', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp));
    return $response;
});
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="/Member/RegisterKorea">
$app->map(['POST'], $cVersion . '/Member/RegisterKorean', function ($request, $response) use ($util, $renderer, $templateConfig) {


    $r = (Object) $request->getParsedBody();
    // ถ้ากรณีที่ต้องการให้เป็น Object เวลาเรียกใช้ตัวแปล ex. $r->username;
    // $r = $request->getParsedBody(); //ถ้ากรณีที่เป็น array ปกติ เวลาเรียกใช้ตัวแปล ex. $r['username'];


    if ($util->isEmpty($r->desktop_phone)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_phoneMobile, L::Err_2002)));
        return $response;
    }
//    if ($util->isEmpty($r->s_password)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_password, L::Err_2002)));
//        return $response;
//    }
//    if ($util->isEmptyDDL($r->i_bank)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_bank, L::Err_2002)));
//        return $response;
//    }
    if ($util->isEmpty($r->desktop_account_no)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_accountNo, L::Err_2002)));
        return $response;
    }


    /* if ($util->isEmpty($r->ref)) {
      if ($util->isEmptyDDL($r->s_channel)) {
      $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_channelRegister, L::Err_2002)));
      return $response;
      }
      } */
//    if ($util->isEmpty($r->s_line)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_lineID, L::Err_2002)));
//        return $response;
//    }
//    if ($util->isEmpty($r->s_firstname)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_firstName, L::Err_2002)));
//        return $response;
//    }
//    if ($util->isEmpty($r->s_lastname)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_lastName, L::Err_2002)));
//        return $response;
//    }
    $name_parts = explode(" ", $r->desktop_fullname);

    $lastname = $name_parts[0];
    $firstname = $name_parts[1];
    $req = array(
        "s_agent_code" => 'AG002',
        "s_phone" => $r->desktop_phone,
        "s_password" => $r->desktop_phone,
        "i_bank" => $r->desktop_bank,
        "s_account_no" => $r->desktop_account_no,
        //"s_channel" => ($util->isEmpty($r->s_channel) ? 'GOOGLE' : $r->s_channel),
        "s_channel" => 'GOOGLE',
        "s_line" => ($r->s_line != NULL ? $r->s_line : '-'),
        "s_ref" => ($util->isEmpty($r->ref) ? '' : $r->ref),
        "type_shorturl" => false,
        "more_detail" => '',
        "s_fullname" => $r->s_firstname . ' ' . $r->s_lastname,
        "s_title" => '',
        "s_firstname" => $firstname,
        "s_lastname" => $lastname,
        //"i_channel" => $r->i_channel,
        "i_channel" => '1',
        //"s_channel_name" => $_SESSION["REG"]["s_channel_name"],
        "s_channel_name" => 'GOOGLE',
        "s_channel_remark" => '', //$_SESSION["REG"]["s_channel_remark"]
        //"s_channel_remark" => '',
        "ip" => $util->get_real_ip()
    );
    $resp = $util->post('/Member/RegisterKorean', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp));
    return $response;
});
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="/Member/RegisterKorea">
$app->map(['POST'], $cVersion . '/Member/RegisterMobileKorean', function ($request, $response) use ($util, $renderer, $templateConfig) {


    $r = (Object) $request->getParsedBody();
    // ถ้ากรณีที่ต้องการให้เป็น Object เวลาเรียกใช้ตัวแปล ex. $r->username;
    // $r = $request->getParsedBody(); //ถ้ากรณีที่เป็น array ปกติ เวลาเรียกใช้ตัวแปล ex. $r['username'];


    if ($util->isEmpty($r->m_phone)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_phoneMobile, L::Err_2002)));
        return $response;
    }
//    if ($util->isEmpty($r->s_password)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_password, L::Err_2002)));
//        return $response;
//    }
//    if ($util->isEmptyDDL($r->i_bank)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_bank, L::Err_2002)));
//        return $response;
//    }
    if ($util->isEmpty($r->m_account_no)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_accountNo, L::Err_2002)));
        return $response;
    }


    /* if ($util->isEmpty($r->ref)) {
      if ($util->isEmptyDDL($r->s_channel)) {
      $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_channelRegister, L::Err_2002)));
      return $response;
      }
      } */
//    if ($util->isEmpty($r->s_line)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_lineID, L::Err_2002)));
//        return $response;
//    }
//    if ($util->isEmpty($r->s_firstname)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_firstName, L::Err_2002)));
//        return $response;
//    }
//    if ($util->isEmpty($r->s_lastname)) {
//        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_lastName, L::Err_2002)));
//        return $response;
//    }
    $name_parts = explode(" ", $r->m_fullname);

    $lastname = $name_parts[0];
    $firstname = $name_parts[1];
    $req = array(
        "s_agent_code" => 'AG001',
        "s_phone" => $r->m_phone,
        "s_password" => $r->m_phone,
        "i_bank" => $r->m_bank,
        "s_account_no" => $r->m_account_no,
        //"s_channel" => ($util->isEmpty($r->s_channel) ? 'GOOGLE' : $r->s_channel),
        "s_channel" => 'GOOGLE',
        "s_line" => ($r->s_line != NULL ? $r->s_line : '-'),
        "s_ref" => ($util->isEmpty($r->ref) ? '' : $r->ref),
        "type_shorturl" => false,
        "more_detail" => '',
        "s_fullname" => $r->s_firstname . ' ' . $r->s_lastname,
        "s_title" => '',
        "s_firstname" => $firstname,
        "s_lastname" => $lastname,
        //"i_channel" => $r->i_channel,
        "i_channel" => '1',
        //"s_channel_name" => $_SESSION["REG"]["s_channel_name"],
        "s_channel_name" => 'GOOGLE',
        "s_channel_remark" => '', //$_SESSION["REG"]["s_channel_remark"]
        //"s_channel_remark" => '',
        "ip" => $util->get_real_ip()
    );
    $resp = $util->post('/Member/RegisterKorean', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp));
    return $response;
});
//</editor-fold>