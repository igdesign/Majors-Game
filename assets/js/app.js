document.addEventListener("DOMContentLoaded", function() {

  var documentKey = '13E_Sdi3RwNvL6XoEec-8oAVu1K8o0PBDZ6mt5uvh2wc';

  remote = new XMLHttpRequest();
  remote.open('GET', 'http://api.ptm.dev?doc='+documentKey, true);
  remote.onload = function() {
    if (remote.status >= 200 && remote.status < 400){
      // Success!

      data = JSON.parse(remote.responseText);

      var data = JSON.parse(remote.responseText);

      console.log(data);

      appendGroup(data);
    }
  };

  remote.onerror = function() {
    // There was a connection error of some sort
  };

  remote.send();

  var appendGroup = function(data) {

    var source = document.querySelector('#golfers').innerHTML;
    var template = Handlebars.compile(source);

    var groups = document.querySelector('#groups');
    var html = template(data);
        groups.innerHTML = html;
  }

});
