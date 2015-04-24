var RankLayer = cc.LayerColor.extend({
    ctor: function (gameScene) {
        this._super();
        this._gameScene = gameScene;
        this.init(cc.color(0, 0, 0, 150));
        this.initialize();
        this._this = this;
    },
    initialize: function () {
        var size = cc.winSize;

        var menu = cc.Menu.create();
        menu.setPosition(0, 0);
        this.addChild(menu, 2);

        var backItem = cc.MenuItemImage.create(res.RankBack_png, res.RankBackSelect_png);
        backItem.setPosition(40, size.height - backItem.height / 2 - 15);
        if (this._gameScene.gameModel.getGameState() === GameModel.GAME_OVER) {
            backItem.setCallback(this.onBackGameOver, this);
        } else {
            backItem.setCallback(this._onBackStart, this);
        }
        menu.addChild(backItem);

        var rankBg = cc.Sprite.create(res.RankBg_png);
        rankBg.setPosition(size.width / 2, size.height / 2);
        this.addChild(rankBg, 2);

        var rankLogo = cc.Sprite.create(res.RankLogo_png);
        rankLogo.setPosition(rankBg.width / 2, rankBg.getContentSize().height + rankLogo.getContentSize().height / 2 - 30);
        rankBg.addChild(rankLogo, 2);

        var navName = cc.Sprite.create(res.NameNav_png);
        navName.setPosition(rankBg.width / 2 - 5, rankBg.getContentSize().height - 45);
        rankBg.addChild(navName, 2);

        var labelRank = new cc.LabelTTF("XH", res.FontCustom, 32.0, cc.size(50, 37), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        labelRank.setColor(cc.color(0, 0, 0));
        labelRank.setPosition(30, 27);
        navName.addChild(labelRank, 2);

        var labelName = new cc.LabelTTF("Tên", res.FontCustom, 32.0, cc.size(250, 37), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        labelName.setColor(cc.color(0, 0, 0));
        labelName.setPosition(210, 27);
        navName.addChild(labelName, 2);

        var labelLevel = new cc.LabelTTF("Cấp Độ", res.FontCustom, 32.0, cc.size(120, 37), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        labelLevel.setColor(cc.color(0, 0, 0));
        labelLevel.setPosition(370, 27);
        navName.addChild(labelLevel, 2);

        var labelScore = new cc.LabelTTF("Sao", res.FontCustom, 32.0, cc.size(80, 37), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        labelScore.setColor(cc.color(0, 0, 0));
        labelScore.setPosition(480, 27);
        navName.addChild(labelScore, 2);

        return true;
    },
    addTableRank: function () {
        var tableRank = new TableRankLayer(this._gameScene);
        this.addChild(tableRank, 2);
    },
    _onBackStart: function (button) {
        this._gameScene.backStartScene();

    },
    onBackGameOver: function (button) {
        this._gameScene.onBackGameOver();
    }
});