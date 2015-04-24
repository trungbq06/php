var QuitLayer = cc.LayerColor.extend({
    menu: null,
    ctor: function (gameScene) {
        this._super();
        this._gameScene = gameScene;
        this.init(cc.color(0, 0, 0, 255));
        this.initialize();

    },
    initialize: function () {
        var size = cc.winSize;

        var quitBoard = cc.Sprite.create(res.QuitBoard_png);
        quitBoard.setPosition(size.width / 2, size.height / 2);
        this.addChild(quitBoard, 2);

        var levelLabel = cc.LabelTTF.create("Bạn Có Muốn Thoát Không ?", res.FontCustom, 30);
        //levelLabel.anchorX = 0;
        levelLabel.setPosition(quitBoard.width / 2, quitBoard.height / 2);
        levelLabel.setColor(cc.color(0, 0, 0));
        quitBoard.addChild(levelLabel);

        this.menu = cc.Menu.create();
        this.menu.setPosition(0, 0);
        quitBoard.addChild(this.menu);

        var cancelButton = cc.MenuItemImage.create(res.Cacel_png, res.CacelSelected_png);
        cancelButton.setPosition(quitBoard.width / 2 - 100, 0);
        cancelButton.setCallback(this.onResumeGameClick, this);
        this.menu.addChild(cancelButton);

        var applyButton = cc.MenuItemImage.create(res.Apply_png, res.ApplySelected_png);
        applyButton.setPosition(quitBoard.width / 2 + 100, 0);
        applyButton.setCallback(this.onQuitGameClick, this);
        this.menu.addChild(applyButton);
    },
    onResumeGameClick: function (button) {
        this._gameScene.resumeGame();
    },
    onQuitGameClick: function(button){
        this._gameScene.onQuitGameClick();
    }
});
