require('./bootstrap');

import 'alpinejs';
var dateFormat = require('dateformat');

window.convertUTCDateToLocalDate = function(inputDate) {
    var date = new Date(inputDate);
    var newDate = new Date(date.getTime()+date.getTimezoneOffset()*60*1000);
    newDate.setHours(date.getHours() - (date.getTimezoneOffset() / 60));
    var timezone = newDate.toLocaleTimeString('en-us',{timeZoneName:'short'}).split(' ')[2];

    return dateFormat(newDate, 'mmmm dd, yyyy HH:MM') + ' ' + timezone;
}
