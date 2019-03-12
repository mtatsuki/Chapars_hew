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
//x
//--------------------------------------------------
//puppeteer読み込み
//--------------------------------------------------
const puppeteer = require('puppeteer');
//=========================== 
//ログインとダウンロード関数
//=========================== 
async function screenshot(id){
    const browser = await puppeteer.launch({headless: false});
    const page = await browser.newPage();
    await page.setViewport({width: 1320, height: 800});
    const url = 'http://localhost:8888/project_file/chapars/Chapars_hew/html/pages/copy.php?id='+id
    await page.goto(url);
    await page.waitForNavigation({waitUntil:'networkidle2', timeout:5000})
              .catch(e => console.log('timeout exceed. proceed to next operation'))
    await page.screenshot({path: '/works/project_file/chapars/Chapars_hew/html/pages/image/Drag_screen/'+id+'.png', fullPage:true})
    console.log("save screenshot: " + url)
    await browser.close()
}
for(var i = 0;i < process.argv.length; i++){
    if (i  > 1) {
        screenshot(process.argv[i]);
      } 
  }
