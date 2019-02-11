<?php
function getRakutenResult($keyword)
{

// ベースとなるリクエストURL
    $base_url = 'https://app.rakuten.co.jp/services/api/IchibaItem/Search/20170706';
// リクエストのパラメータ作成
    $params = array();
    $params['applicationId'] = '1069000170280582227'; // アプリID
    $params['keyword'] = urlencode_rfc3986($keyword); // 任意のキーワード。※文字コードは UTF-8
    $params['sort'] = urlencode_rfc3986('+itemPrice'); // ソートの方法。※文字コードは UTF-8

    $canonical_string='';

    foreach ($params as $k => $v) {
        $canonical_string .= '&' . $k . '=' . $v;
    }
// 先頭の'&'を除去
    $canonical_string = substr($canonical_string, 1);

// リクエストURL を作成
    $url = $base_url . '?' . $canonical_string;

// XMLをオブジェクトに代入
    $rakuten_json=json_decode(@file_get_contents($url, true));
    return current($rakuten_json->Items);
}

// RFC3986 形式で URL エンコードする関数
function urlencode_rfc3986($str)
{
    return str_replace('%7E', '~', rawurlencode($str));
}

$rakuten_result = getRakutenResult('4946842100019', 1000);
var_dump($rakuten_result);

// next -> csvを作る
