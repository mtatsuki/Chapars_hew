'use strict';//エラー強化的な？

// const numValue = 100;                  //数字
// const strValue = "私は値です！";         //文字
// const boolValue = true;                //true/false
// const arrayValue = [1, 2, 3];          //配列
// const objValue = { key: 'value' };     //連想配列

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
async function downloads(){

    const browser = await puppeteer.launch({headless:false});

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
        '#Product > div.layout > div.body-super-container > div.body-container > div > div.contents-nav > div:nth-child(2) > a.tt.btn.btn-default.btn-file-dl.modal-btn'
    );
    await page.waitFor(3000);
    //--------------------------------------------------
    //CSVダウンロードボタン
    //--------------------------------------------------
    // await page.click(
    //     '#id_csv_download_button'
    // );
    // await page.waitFor(3000);
    //--------------------------------------------------
    // ブラウザーを閉じる
    //--------------------------------------------------
    await browser.close();

}//downloads
downloads();

