'use strict';//エラー強化的な？

const puppeteer = require('puppeteer');


//ログイン関数
async function downloads(){

    const browser = await puppeteer.launch({headless:false});
    //新タブ
    const page = await browser.newPage();
    //移動
    await page.goto("https://blog.tes.co.jp/entry/2018/03/14/193601");

}//downloads

downloads();
