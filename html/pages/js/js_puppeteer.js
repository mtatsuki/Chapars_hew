'use strict';//エラー強化的な？

// const numValue = 100;                  //数字
// const strValue = "私は値です！";         //文字
// const boolValue = true;                //true/false
// const arrayValue = [1, 2, 3];          //配列
// const objValue = { key: 'value' };     //連想配列


const puppeteer = require('puppeteer');


//ログイン関数
async function downloads(){

    const browser = await puppeteer.launch({headless:false});
    //新タブ
    const page = await browser.newPage();
    // ページの大きさ定義
    await page.setViewport({ width: 1024, height: 768 });
    //移動
    await page.goto("https://accounts.smaregi.jp/login?client_id=pos&_ga=2.40594788.79894584.1549952904-166718165.1549952904");
      // twitter id 入力
    await page.type(
        "#UserLoginForm > div.form-group.signin-form-group > input.version-2-item.f.f-login-id",
        "chapars2019@gmail.com"
    );

    // twitter password 入力
    await page.type(
        "#UserLoginForm > div.form-group.signin-form-group > input.f.f-login-pswd",
        "ohs2019hew"
    );

    // ログインボタンクリック
    await page.click(
        "#UserLoginForm > input#doLogin.btn.btn-primary.btn-primary-login"
    );

    // ページ遷移するの待つ
    await page.waitFor(5000);

    // スマレジを始めるボタン
    await page.click(
        "div.section.start-section > a.btn.btn-primary.btn-lg.btn-xl "
    );
    // ページ遷移するの待つ
    await page.waitFor(5000);

    //商品一覧ページへ移動
    await page.click(
        // '#gnav_product > li:nth-child(1) > a'
    );
        // ページ遷移するの待つ
        await page.waitFor(5000);

    // 商品一覧(stock)ダウンロード
    await page.click(
        "div.contents-nav > div.btn-group > a.tt.btn.btn-default.btn-file-dl.modal-btn"
    );
        // ページ遷移するの待つ
        await page.waitFor(5000);


    // 終わり
    await browser.close();

}//downloads

downloads();
