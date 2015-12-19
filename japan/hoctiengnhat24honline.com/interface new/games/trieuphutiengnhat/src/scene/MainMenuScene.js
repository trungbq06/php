var MainMenuScene = View.extend({
    gameModel: null,
    _listener: null,
    mainLayer: null,
    bgSprite: null,
    winSize: null,
    ctor: function (gameModel) {
        this._super();
        this.gameModel = gameModel;
        this.init();
        this._listener = {
            "obj": this,
            "func": this.processEvent
        };
        gameModel.addEventListener(this._listener);
    },
    init: function () {
        this.scheduleUpdate();
        this.createBackground();
    },
    onEnter: function () {
        this._super();
    },
    onExit: function () {
        this._super();
        this.gameModel.removeEventListener(this._listener);
    },
    update: function (dt) {

    },
    processEvent: function (event) {

    },
    createBackground: function () {
        this.winSize = cc.winSize;
        this.mainLayer = cc.Layer.create();
        this.mainLayer.setPosition(0, 0);
        this.addChild(this.mainLayer, 5);

        var backgroundSprite = cc.Sprite.create(res.BG_MENU_JPG);
        backgroundSprite.setPosition(this.winSize.width / 2, this.winSize.height / 2);
        this.addChild(backgroundSprite, 1);

        var menu = cc.Menu.create();
        menu.setPosition(0, 0);
        this.mainLayer.addChild(menu, 5);

        var topicListMenuItem = cc.MenuItemImage.create(res.BTN_PLAY_PNG, res.BTN_PLAY_SELECT_PNG);
        topicListMenuItem.setPosition(this.winSize.width / 2, this.winSize.height / 2 - topicListMenuItem.getContentSize().height - 30);
        topicListMenuItem.setCallback(this.onTopicListSceneClick, this);
        menu.addChild(topicListMenuItem);

        var shareFBMenuItem = cc.MenuItemImage.create(res.BTN_SHARE_FB_PNG, res.BTN_SHARE_FB_SELECT_PNG);
        shareFBMenuItem.setPosition(this.winSize.width / 2, this.winSize.height / 2 - topicListMenuItem.getContentSize().height - topicListMenuItem.getContentSize().height - 40);
        shareFBMenuItem.setCallback(this.onShareFBClick, this);
        menu.addChild(shareFBMenuItem);
    },
    onTopicListSceneClick: function (button) {
        this.fireEvent(new GameEvent(Events.OPEN_TOPIC_LIST_SCENE, null));
    },  
    onShareFBClick: function (button) {
        this.fireEvent(new GameEvent(Events.SHARE_FACEBOOK, null));
    }
});