require('./bootstrap');

import 'alpinejs';
var dateFormat = require('dateformat');

window.convertUTCDateToLocalDate = function(inputDate) {
    var date = new Date(inputDate);
    var timezone = date.toLocaleTimeString('en-us',{timeZoneName:'short'}).split(' ')[2];

    return dateFormat(date, 'mmmm dd, yyyy HH:MM') + ' ' + timezone;
}
