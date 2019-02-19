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
    await page.setViewport({ width: 1200, height: 600 });
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



}//downloads

downloads();
