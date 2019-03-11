$(document).ready(function () {
  var rec = new webkitSpeechRecognition();
  rec.continuous = true;
  rec.interimResults = false;
  rec.lang = 'ja-JP';
  var btnFlg = 0;

  var userSaid = function (str, s) {
    return str.indexOf(s) > -1;
  }

  rec.onresult = function (e) {
    for (var i = e.resultIndex; i < e.results.length; ++i) {
      var results = event.results;
      for (var i = event.resultIndex; i < results.length; i++) {
        if (results[i].isFinal) {
          document.getElementById('name_search').innerHTML = results[i][0].transcript;

        }
        else {
          document.getElementById('name_search').innerHTML = "[途中経過] " + results[i][0].transcript;
        }
      }
    }
  }

  $("#recBtn").click(function () {
    if (btnFlg == 0) {
      let start = rec.start();
      btnFlg = 1;
    }
    else if (btnFlg == 1) {
      rec.stop();
      btnFlg = 0;
    }
  });
});