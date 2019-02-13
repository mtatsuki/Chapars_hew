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
echo print_r($rakuten_result);

// next -> csvを作る

/**
 * CSVローダー
 *
 * @param string $csvfile CSVファイルパス
 * @param string $mode `sjis` ならShift-JISでカンマ区切り、 `utf16` ならUTF-16LEでタブ区切りのCSVを読む。'utf8'なら文字コード変換しないでカンマ区切り。
 * @return array ヘッダ列をキーとした配列を返す
 */
function get_csv($csvfile, $mode = 'sjis')
{
    // ファイル存在確認
    if (!file_exists($csvfile)) {
        return false;
    }
 
    // 文字コードを変換しながら読み込めるようにPHPフィルタを定義
    if ($mode === 'sjis') {
        $filter = 'php://filter/read=convert.iconv.cp932%2Futf-8/resource='.$csvfile;
    } elseif ($mode === 'utf16') {
        $filter = 'php://filter/read=convert.iconv.utf-16%2Futf-8/resource='.$csvfile;
    } elseif ($mode === 'utf8') {
        $filter = $csvfile;
    }
 
    // SplFileObject()を使用してCSVロード
    $file = new SplFileObject($filter);
    if ($mode === 'utf16') {
        $file->setCsvControl("\t");
    }
    $file->setFlags(
        SplFileObject::READ_CSV |
        SplFileObject::SKIP_EMPTY |
        SplFileObject::READ_AHEAD
    );
 
    // 各行を処理
    $records = array();
    foreach ($file as $i => $row) {
        // 1行目はキーヘッダ行として取り込み
        if ($i===0) {
            foreach ($row as $j => $col) {
                $colbook[$j] = $col;
            }
            continue;
        }
 
        // 2行目以降はデータ行として取り込み
        $line = array();
        foreach ($colbook as $j => $col) {
            $line[$colbook[$j]] = @$row[$j];
        }
        $records[] = $line;
    }
    return $records;
}
// 登録ボタンが押されたら
$records = get_csv('./商品データ.csv', 'utf8');

$productData = fopen("商品データ.csv", "a");
$itemCode = explode(":", $rakuten_result->Item->itemCode);
// fwrite($productData, "商品ID","部門ID","商品コード","商品名","商品単価","説明");
fclose($productData);
