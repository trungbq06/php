var StartScene = View.extend({
    gameModel: null,
    _listener: null,
    mainLayer: null,
    menu: null,
    soundModel: null,
    ctor: function (gameModel) {
        this._super();
        this.gameModel = gameModel;
        this.rankLayer = null;
        this.init();
        this._listener = {
            "obj": this,
            "func": this.processEvent
        };
        gameModel.addEventListener(this._listener);
    },
    init: function () {
        this.createBackground();
    },
    onEnter: function () {
        this._super();
    },
    processEvent: function (event) {
        if (event.getEventCode() === Events.GAMEMODEL_START_GAME) {

        } else if (event.getEventCode() === Events.STARTSCENE_GET_RANK_SUCCESS) {
            if (this.rankLayer !== null) {
                this.rankLayer.addTableRank();
            }

        }
    },
    createBackground: function () {
        var size = cc.winSize;

        this.menu = cc.Menu.create();
        this.menu.setPosition(0, 0);

        //background
        this.backgroundSprite = cc.Sprite.create(res.BackgroundGame_png);
        this.backgroundSprite.setPosition(size.width / 2, size.height / 2);
        this.addChild(this.backgroundSprite, 1);
        this.mainLayer = cc.Layer.create();
        this.mainLayer.setPosition(0, 0);
        this.addChild(this.mainLayer, 3);

        var lightSprite = cc.Sprite.create(res.Light_png);
        lightSprite.setPosition(size.width / 2, size.height - lightSprite.getContentSize().height / 2);
        this.mainLayer.addChild(lightSprite, 1);

        var levelLabel = cc.LabelTTF.create("Đoán Chữ Tiếng Nhật", res.FontCustom, 72);
        levelLabel.setPosition(size.width / 2, size.height - 80);
        levelLabel.setColor(cc.color(255, 255, 255));
        this.mainLayer.addChild(levelLabel, 2);

        var logoSprite = cc.Sprite.create(res.Logo_png);
        logoSprite.setPosition(size.width / 2, 400);
        this.mainLayer.addChild(logoSprite, 2);

        var playItem = cc.MenuItemImage.create(res.PlayGame_png, res.PlayGameSelect_png);
        playItem.setPosition(size.width / 2, 200);
        playItem.setCallback(this.onPlayGame, this);
        this.menu.addChild(playItem, 2);        

        this.mainLayer.addChild(this.menu, 3);
    },
    onPlayGame: function (button) {
        this.fireEvent(new GameEvent(Events.STARTSCENE_PLAY_CLICK, null));
    }
});

