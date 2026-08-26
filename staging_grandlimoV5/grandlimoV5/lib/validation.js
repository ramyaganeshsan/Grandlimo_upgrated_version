var validator = require('validator');

exports.validate = function (validate_array) {
  var return_array = [];

  validate_array.forEach(function (val) {
    switch (val.rule) {
      case 'empty':
        if (validator.isEmpty(String(val.value == null ? '' : val.value))) {
          var message = val.key.split('_').join(' ');
          return_array.push(message + ' must not be empty');
        }
        break;
    }
  });

  return return_array;
};
