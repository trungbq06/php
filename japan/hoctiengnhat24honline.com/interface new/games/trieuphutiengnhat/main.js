cc.game.onStart = function () {
    cc.view.adjustViewPort(true);
    cc.view.setDesignResolutionSize(1000, 680, cc.ResolutionPolicy.SHOW_ALL);
    cc.view.resizeWithBrowserSize(true);
    cc.LoaderScene.preload(g_resources, function () {
        var gameModel = new GameModel.getInstance();
        gameModel.load();

        var controller = new Controller();
        controller.setModel(gameModel);

        var businessHandler = new BusinessHandler();

        controller.addHandler(businessHandler);

        controller.start();
    }, this);

};
cc.game.run();