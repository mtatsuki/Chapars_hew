'use strict';

const puppeteer = require('puppeteer');

async function downloads() {
    //仮装ブラウザ
    const browser = await puppeteer.launch({headless:false});
    //新タブ
    const page = await browser.newPage();
    //移動
    await page.goto("http://localhost:8888");

}//downloads
downloads();
