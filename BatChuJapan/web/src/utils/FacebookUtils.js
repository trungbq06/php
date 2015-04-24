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

FacebookUtils.shareToFB = function (scoreVar) {
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            shareScore(scoreVar);
        }
        else {
            FB.login(function (response) {
                if (response.status === 'connected') {
                    getUserInfo();
                }
            });

        }
    });
};

FacebookUtils.shareQuestToFB = function (urlImage) {
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            shareQuest(urlImage);
        }
        else {
            FB.login(function (response) {
                if (response.status === 'connected') {
                    shareQuest(urlImage);
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
        console.log(response);
        var fbUtils = FacebookUtils.getInstance();
        fbUtils.setId(response.id);
        fbUtils.setName(response.name);

        var gameModel = GameModel.getInstance();
        gameModel.getInfoUser();
        if (gameModel.getGameState() === GameModel.GAME_OVER && gameModel.getCurrentQuestIndex() > 0) {
            gameModel.postScore();
            shareScore(gameModel.getScore().toString());
        }
    });
}

function shareScore(scoreVar) {
    var url = window.location.href;
    url += "res/icon-game.png";
    FB.ui({
        method: 'feed',
        name: 'Đoán Tên Sao',
        link: res.LinkFB,
        caption: 'Tớ đã đạt được ' + scoreVar + ' điểm, còn các bạn thì sao ^^',
        picture: url
    }, function (response) {
    });
}
//            description: 'Using Dialogs to interact with users.'

function shareQuest(urlImage) {
    FB.ui({
        method: 'feed',
        name: 'Đoán Tên Sao',
        link: res.LinkFB,
        caption: 'Câu hỏi hóc búa!',
        description: 'Câu hỏi này khó quá các bạn giúp mình với ^^!',
        picture: urlImage
    }, function (response) {
//        var gameModel = GameModel.getInstance();
//        gameModel.continueGame();
    });
}

window.fbAsyncInit = function () {
    FB.init({
        appId: '388179928012145',
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