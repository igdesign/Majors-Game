(function() {
  (function() {
    method;
    var console, length, method, methods, noop, _results;
    noop = function() {};
    methods = ['assert', 'clear', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
    length = methods.length;
    console = (window.console = window.console || {});
    _results = [];
    while (length > 0) {
      method = methods[length];
      if (console[method] != null) {
        console[method] = noop;
      }
      _results.push(length - 1);
    }
    return _results;
  });

}).call(this);
