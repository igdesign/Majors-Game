document.addEventListener("DOMContentLoaded", function() {

  remote = new XMLHttpRequest();
  remote.open('GET', 'http://api.ptm.dev', true);
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

 /*
 local = new XMLHttpRequest();
  local.open('GET', '/golfers.json', true);
  local.onload = function() {
    if (local.status >= 200 && local.status < 400){
      // Success!

      data = JSON.parse(local.responseText);

      var data = JSON.parse(local.responseText);

      console.log(data);

//       appendGroup(data);
    } else {
      // We reached our target server, but it returned an error

    }
  };

  local.onerror = function() {
    // There was a connection error of some sort
  };

  local.send()
*/;

  var appendGroup = function(data) {

    var source = document.querySelector('#golfers').innerHTML;
    var template = Handlebars.compile(source);

    var groups = document.querySelector('#groups');
    var html = template(data);
        groups.innerHTML = html;
  }

});
