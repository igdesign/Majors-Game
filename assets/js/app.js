document.addEventListener("DOMContentLoaded", function() {

  intro = new XMLHttpRequest();
  intro.open('GET', 'http://api.ptm.dev?type=doc&doc=15xnzFcrrJqDtdTIO7wjUY9FcPsFMdYjkE8yMu-d-pV8', true);
  intro.onload = function() {

    if (intro.status >= 200 && intro.status < 400){
      // Success!

      var data = JSON.parse(intro.responseText);

      console.log(data);

      appendIntro(data);
    }
  };

  intro.onerror = function() {
    // There was a connection error of some sort
  };

  intro.send();



  spreadsheet = new XMLHttpRequest();
  spreadsheet.open('GET', 'http://api.ptm.dev?type=sheet&doc=13E_Sdi3RwNvL6XoEec-8oAVu1K8o0PBDZ6mt5uvh2wc&key=od6', true);
  spreadsheet.onload = function() {
    if (spreadsheet.status >= 200 && spreadsheet.status < 400){
      // Success!

      var data = JSON.parse(spreadsheet.responseText);

      console.log(data);

      appendGroup(data);
    }
  };

  spreadsheet.onerror = function() {
    // There was a connection error of some sort
  };

  spreadsheet.send();

  var appendGroup = function(data) {

    var source = document.querySelector('#golfers').innerHTML;
    var template = Handlebars.compile(source);

    var groups = document.querySelector('#groups');
    var html = template(data);
        groups.innerHTML = html;
  }

  var appendIntro = function(data) {

    var intro = document.querySelector('#intro').innerHTML;
    var template = Handlebars.compile(intro);
    var html = template(data);
        intro.innerHTML = html;
  }

});
