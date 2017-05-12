global.jQuery = global.$ = require('jquery');
require('foundation-sites');

$(function() {
	$(document).foundation();
});

require('./components/work.js');