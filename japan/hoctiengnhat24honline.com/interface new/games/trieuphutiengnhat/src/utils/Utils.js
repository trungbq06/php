var Utils = cc.Class.extend({
    ctor: function () {
        this._super();
    }
});

Utils.DecryptData = function (encryptedString, key) {
    var output = "";
    var key_length = key.length;
    var encrypted_string_length = encryptedString.length;
    var encryptedCharArray = encryptedString.split("");
    var keyCharArray = key.split("");

    for (var i = key_length - 1; i >= 0; i--) {
        output = "";
        for (var j = 0; j < encrypted_string_length; j++) {
            var decryptChar = String.fromCharCode(encryptedCharArray[j].charCodeAt(0) ^ keyCharArray[i].charCodeAt(0));
            output += decryptChar;
        }
        encryptedString = output;
        encryptedCharArray = encryptedString.split("");
    }
    return output;
};

Utils.randomString = function () {
    var chars = "ABCDEFGHIJKLMNOPQURSTUVWXYZ";
    return chars.substr(Math.floor(Math.random() * 27), 1);
};

Utils.randomStringWithLength = function (length) {
    var strRandom = "";
    for (var i = 0; i < length; i++) {
        strRandom += Utils.randomString();
    }
    return strRandom.substr(0, length);
};

Utils.randomBetween = function (min, max) {
    return (Math.floor(Math.random() * max) + min);
};

Utils.ConvertSecondToTime = function (second) {
    var minutes = Math.floor(second / 60);
    var seconds = second - minutes * 60;
    var secondsStr = seconds + "";
    if (secondsStr.length === 1) {
        secondsStr = "0" + secondsStr;
    }
    return minutes + ":" + secondsStr;
};