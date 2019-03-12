'use strict';//エラー強化的な？

// const numValue = 100;                  //数字
// const strValue = "私は値です！";         //文字
// const boolValue = true;                //true/false
// const arrayValue = [1, 2, 3];          //配列
// const objValue = { key: 'value' };     //連想配列
//
//crontab -e
//*/5 * * * * /usr/local/bin/node /works/project_file/chapars/Chapars_hew/html/pages/js/js_puppeteer.js
//cat /var/mail/ユーザー名
//
//=========================== 
//設定
//=========================== 
//--------------------------------------------------
//puppeteer読み込み
//--------------------------------------------------
const puppeteer = require('puppeteer');


//=========================== 
//ログインとダウンロード関数
//=========================== 
async function creates() {

    const browser = await puppeteer.launch({ headless: false });
    //--------------------------------------------------
    //新タブを作る
    //--------------------------------------------------
    const page = await browser.newPage();

    // ページの大きさ定義
    await page.setViewport({ width: 1024, height: 768 });

    //--------------------------------------------------
    //ページの移動
    //--------------------------------------------------
    await page.goto("https://accounts.smaregi.jp/login?client_id=pos&_ga=2.40594788.79894584.1549952904-166718165.1549952904");
    //--------------------------------------------------
    // ログイン入力処理
    //--------------------------------------------------
    // login id 入力
    await page.type(
        "#UserLoginForm > div.form-group.signin-form-group > input.version-2-item.f.f-login-id",
        "chapars2019@gmail.com"
    );
    // login pass 入力
    await page.type(
        "#UserLoginForm > div.form-group.signin-form-group > input.f.f-login-pswd",
        "ohs2019hew"
    );
    //--------------------------------------------------
    // ログインボタンクリック
    //--------------------------------------------------
    await page.click(
        "#UserLoginForm > input#doLogin.btn.btn-primary.btn-primary-login"
    );
    //--------------------------------------------------
    // ページ遷移するの待つ
    //--------------------------------------------------
    await page.waitFor(3000);

    //--------------------------------------------------
    // スマレジを始めるボタン
    //--------------------------------------------------
    await page.click(
        "div.section.start-section > a.btn.btn-primary.btn-lg.btn-xl "
    );
    await page.waitFor(3000);
    //--------------------------------------------------
    //商品一覧ページ(アンカータグ )クリック
    //--------------------------------------------------
    await page.click(
        '#gnav_acrd1 > li.panel.product.parent'
    );
    await page.click(
        '#gnav_product > li:nth-child(1) > a'
    );
    await page.waitFor(3000);
    //--------------------------------------------------
    //CSVダウンロードするボタン
    //--------------------------------------------------
    await page.click(
        '#Product > div.layout > div.body-super-container > div.body-container > div > div.contents-nav > div:nth-child(1) > a.btn.btn-default.btn-file-up.tt'
    );
    await page.waitFor(3000);

    page.on('dialog', async dialog => {
        dialog.accept(); // OK
    });
    //--------------------------------------------------
    //ファイルアップロード
    //--------------------------------------------------
    var filePath = '../csv/商品データ(20190312130225).csv';
    console.log("filePath:" + filePath);
    var inputfileup = await page.$('#ProductUpload > div.layout > div.body-super-container > div.body-container > div > div.form-horizontal > form > div.section.form-section > div:nth-child(3) > div.fg-value > input[type="file"]');
    await inputfileup.uploadFile(filePath);
    await page.waitFor(2000);
    //--------------------------------------------------
    //CSVダウンロードボタン
    //--------------------------------------------------
    await page.click(
        '#ProductUpload > div.layout > div.body-super-container > div.body-container > div > div.form-horizontal > form > div.section.submit-section > div > input.btn.btn-m.btn-primary.btn-action-upload'
    );
    await page.waitFor(3000);
    //--------------------------------------------------
    // ブラウザーを閉じる
    //--------------------------------------------------
    await browser.close();

}//downloads
creates();

