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

}//downloads

downloads();
