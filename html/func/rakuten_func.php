<?php
function getRakutenResult($keyword, $base_url, $search_type)
{
    $params_type = paramsCheck($search_type);
// リクエストのパラメータ作成
    $params = array();
    $params['format'] = 'json';
    $params[$params_type] = urlencode_rfc3986($keyword); // 任意のキーワード。※文字コードは UTF-8
    $params['applicationId'] = '1069000170280582227'; // アプリID
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
    if (!empty($rakuten_json)) {
        return $rakuten_json;
    }
}
function paramsCheck($search_type)
{
    switch ($search_type) {
        case 'keyword':
            return 'keyword';
            break;
        case 'genre':
            return 'genreId';
            break;
        case 'tag':
            return 'tagId';
            break;
        default:
            return false;
            break;
    }
}
// RFC3986 形式で URL エンコードする関数
function urlencode_rfc3986($str)
{
    return str_replace('%7E', '~', rawurlencode($str));
}
