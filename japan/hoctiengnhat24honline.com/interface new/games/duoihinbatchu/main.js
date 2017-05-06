cc.game.onStart = function () {
    cc.view.adjustViewPort(true);
    cc.view.setDesignResolutionSize(1000, 680, cc.ResolutionPolicy.SHOW_ALL);
    cc.view.resizeWithBrowserSize(true);
    cc.LoaderScene.preload(g_resources, function () {
        cc.loader.loadTxt(res.Questions_json, function (err, data) {
            if (err) {
                window.location = window.location.href;
            } else {
                var dataDecrypt = Utils.DecryptData(data, "ViettelWapGame");
                var dataJson = JSON.parse(dataDecrypt);
                var resourceModel = ResourceModel.getInstance();
                resourceModel.setAnswerTime(dataJson.answerTime);
                resourceModel.eventLink = dataJson.eventLink;
                resourceModel.setQuestList(dataJson.questionList);
                resourceModel.readDataSuccess();

                var gameModel = GameModel.getInstance();
                gameModel.load();
                gameModel.loadDB();
                var controller = new Controller();
                controller.setModel(gameModel);

                var businessHandler = new BusinessHandler();

                controller.addHandler(businessHandler);

                controller.start();
            }
        });
    }, this);
};
cc.game.run();