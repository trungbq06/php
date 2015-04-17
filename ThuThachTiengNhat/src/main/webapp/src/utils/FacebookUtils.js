(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/all.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
function getUserInfo() {
    FB.api('/me?fields=id,name', function (response) {
        var fbUtils = new FacebookUtils.getInstance();
        fbUtils.setId(response.id);
        fbUtils.setName(response.name);
        var gameModel = GameModel.getInstance();
        gameModel.postScore();
    });
}

function shareScore(scoreVar, text) {
    FB.ui({
        method: 'feed',
        name: 'Thử Thách Tiếng Nhật',
        link: "http://hoctiengnhat24honline.com",
        caption: 'Tớ đã đạt được ' + scoreVar + ' điểm ở mức ' + text + ', còn các bạn thì sao ^^',
        picture: 'http://hoctiengnhat24honline.com/UploadFile//uploads/2015-04-16-09-36-40.png'
    }, function (response) {
    });
}

function shareGame() {
    FB.ui({
        method: 'feed',
        name: 'Thử Thách Tiếng Nhật',
        link: "http://hoctiengnhat24honline.com",
        caption: 'Game hay quá, mọi người cùng chơi nào ^^!',
        picture: 'http://hoctiengnhat24honline.com/UploadFile//uploads/2015-04-16-09-36-40.png'
    }, function (response) {
    });
}

var FacebookUtils = cc.Class.extend({
    id: null,
    name: null,
    ctor: function () {

    },
    setId: function (id) {
        this.id = id;
    },
    getId: function () {
        return this.id;
    },
    setName: function (name) {
        this.name = name;
    },
    getName: function () {
        return this.name;
    }
});
FacebookUtils.shareScoreToFB = function (scoreVar, text) {
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            shareScore(scoreVar, text);
        }
        else {
            FB.login(function (response) {
                if (response.status === 'connected') {
                    getUserInfo();
                    shareScore(scoreVar, text);
                }
            });
        }
    });
};
FacebookUtils.shareGameToFB = function () {
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            shareGame();
        }
        else {
            FB.login(function (response) {
                if (response.status === 'connected') {
                    shareGame();
                }
            });
        }
    });
};
FacebookUtils.fbInstance;
FacebookUtils.getInstance = function () {
    if (!FacebookUtils.fbInstance) {
        FacebookUtils.fbInstance = new FacebookUtils();
    }
    return FacebookUtils.fbInstance;
};
window.fbAsyncInit = function () {
    FB.init({
        appId: '383038031850881',
        version: 'v2.1',
        status: true,
        xfbml: true,
        cookie: true
    });
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            getUserInfo();
        }
    });
};