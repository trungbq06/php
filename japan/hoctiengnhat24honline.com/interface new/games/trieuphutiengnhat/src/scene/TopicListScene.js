var TopicListScene = View.extend({
    gameModel: null,
    _listener: null,
    mainLayer: null,
    stateSprite: null,
    topicListLayer: null,
    winSize: null,
    buttonChooseX: null,
    buttonChooseY: null,
    n1MenuToggle: null,
    n2MenuToggle: null,
    n3MenuToggle: null,
    n4MenuToggle: null,
    n5MenuToggle: null,
    chooseLevelSprite: null,
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
        if (event.getEventCode() === Events.GAMEMODEL_GET_TOPIC_LIST_SUCCESS) {
            this.topicListLayer = new TableTopicListLayer(this);
            this.mainLayer.addChild(this.topicListLayer, 10);
        }
    },
    createBackground: function () {
        this.winSize = cc.winSize;
        this.mainLayer = cc.Layer.create();
        this.mainLayer.setPosition(0, 0);
        this.addChild(this.mainLayer, 5);

        var stateSprite = cc.Sprite.create(res.BG_MENU_PNG);
        stateSprite.setPosition(this.winSize.width / 2, this.winSize.height / 2);
        this.addChild(stateSprite, 1);

        var menu = cc.Menu.create();
        menu.setPosition(0, 0);
        this.mainLayer.addChild(menu, 5);

        var backMenuItem = cc.MenuItemImage.create(res.BACK_PNG, res.BACK_SELECT_PNG);
        backMenuItem.setPosition(backMenuItem.getContentSize().width, this.winSize.height - backMenuItem.getContentSize().height);
        backMenuItem.setCallback(this.onBackClick, this);
        menu.addChild(backMenuItem);

        var levelMenu = cc.Menu.create();
        levelMenu.setPosition(0, 0);
        this.mainLayer.addChild(levelMenu, 1);

        this.buttonChooseX = this.winSize.width / 2 - 160;

        var questionLevelMenuItem = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_PNG, res.BTN_LEVEL_QUEST_PNG);
        var questionLevelMenuItemSelect = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_SELECT_PNG, res.BTN_LEVEL_QUEST_SELECT_PNG);
        this.n1MenuToggle = cc.MenuItemToggle.create(questionLevelMenuItemSelect, questionLevelMenuItem);
        this.buttonChooseY = this.winSize.height - questionLevelMenuItem.getContentSize().height - 16;
        this.n1MenuToggle.setPosition(this.buttonChooseX, this.buttonChooseY);
        this.n1MenuToggle.setCallback(this.onLevelTopicClick, this);
        this.n1MenuToggle.setTag(1);
        levelMenu.addChild(this.n1MenuToggle);

        var n1Label = cc.LabelTTF.create("N1", "Tahoma", 18);
        n1Label.setPosition(this.buttonChooseX + 30, this.buttonChooseY);
        n1Label.setColor(cc.color(255, 255, 255));
        this.mainLayer.addChild(n1Label, 5);

        this.chooseLevelSprite = cc.Sprite.create(res.CHOOSE_LEVEL_TOPIC_PNG);
        this.chooseLevelSprite.setPosition(this.buttonChooseX - this.chooseLevelSprite.getContentSize().width / 2, this.buttonChooseY);
        this.mainLayer.addChild(this.chooseLevelSprite, 20);

        questionLevelMenuItem = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_PNG, res.BTN_LEVEL_QUEST_PNG);
        questionLevelMenuItemSelect = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_SELECT_PNG, res.BTN_LEVEL_QUEST_SELECT_PNG);
        this.n2MenuToggle = cc.MenuItemToggle.create(questionLevelMenuItemSelect, questionLevelMenuItem);
        this.n2MenuToggle.setPosition(this.buttonChooseX + questionLevelMenuItem.getContentSize().width + 1, this.buttonChooseY);
        this.n2MenuToggle.setCallback(this.onLevelTopicClick, this);
        this.n2MenuToggle.setTag(2);
        this.n2MenuToggle.setSelectedIndex(1);
        levelMenu.addChild(this.n2MenuToggle);

        var n2Label = cc.LabelTTF.create("N2", res.ParagonCleanersMedium, 18);
        n2Label.setPosition(this.buttonChooseX + 30 + questionLevelMenuItem.getContentSize().width + 1, this.buttonChooseY);
        n2Label.setColor(cc.color(255, 255, 255));
        this.mainLayer.addChild(n2Label, 5);

        questionLevelMenuItem = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_PNG, res.BTN_LEVEL_QUEST_PNG);
        questionLevelMenuItemSelect = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_SELECT_PNG, res.BTN_LEVEL_QUEST_SELECT_PNG);
        this.n3MenuToggle = cc.MenuItemToggle.create(questionLevelMenuItemSelect, questionLevelMenuItem);
        this.n3MenuToggle.setPosition(this.buttonChooseX + questionLevelMenuItem.getContentSize().width * 2 + 2, this.buttonChooseY);
        this.n3MenuToggle.setCallback(this.onLevelTopicClick, this);
        this.n3MenuToggle.setTag(3);
        this.n3MenuToggle.setSelectedIndex(1);
        levelMenu.addChild(this.n3MenuToggle);

        var n3Label = cc.LabelTTF.create("N3", res.ParagonCleanersMedium, 18);
        n3Label.setPosition(this.buttonChooseX + 30 + questionLevelMenuItem.getContentSize().width * 2 + 2, this.buttonChooseY);
        n3Label.setColor(cc.color(255, 255, 255));
        this.mainLayer.addChild(n3Label, 5);

        questionLevelMenuItem = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_PNG, res.BTN_LEVEL_QUEST_PNG);
        questionLevelMenuItemSelect = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_SELECT_PNG, res.BTN_LEVEL_QUEST_SELECT_PNG);
        this.n4MenuToggle = cc.MenuItemToggle.create(questionLevelMenuItemSelect, questionLevelMenuItem);
        this.n4MenuToggle.setPosition(this.buttonChooseX + questionLevelMenuItem.getContentSize().width * 3 + 3, this.buttonChooseY);
        this.n4MenuToggle.setCallback(this.onLevelTopicClick, this);
        this.n4MenuToggle.setTag(4);
        this.n4MenuToggle.setSelectedIndex(1);
        levelMenu.addChild(this.n4MenuToggle);

        var n4Label = cc.LabelTTF.create("N4", "Tahoma", 18);
        n4Label.setPosition(this.buttonChooseX + 30 + questionLevelMenuItem.getContentSize().width * 3 + 3, this.buttonChooseY);
        n4Label.setColor(cc.color(255, 255, 255));
        this.mainLayer.addChild(n4Label, 5);

        questionLevelMenuItem = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_PNG, res.BTN_LEVEL_QUEST_PNG);
        questionLevelMenuItemSelect = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_SELECT_PNG, res.BTN_LEVEL_QUEST_SELECT_PNG);
        this.n5MenuToggle = cc.MenuItemToggle.create(questionLevelMenuItemSelect, questionLevelMenuItem);
        this.n5MenuToggle.setPosition(this.buttonChooseX + questionLevelMenuItem.getContentSize().width * 4 + 4, this.buttonChooseY);
        this.n5MenuToggle.setCallback(this.onLevelTopicClick, this);
        this.n5MenuToggle.setTag(5);
        this.n5MenuToggle.setSelectedIndex(1);
        levelMenu.addChild(this.n5MenuToggle);

        var n5Label = cc.LabelTTF.create("N5", "Tahoma", 18);
        n5Label.setPosition(this.buttonChooseX + 30 + questionLevelMenuItem.getContentSize().width * 4 + 4, this.buttonChooseY);
        n5Label.setColor(cc.color(255, 255, 255));
        this.mainLayer.addChild(n5Label, 5);

        this.topicListLayer = new TableTopicListLayer(this);
        this.mainLayer.addChild(this.topicListLayer, 10);
    },
    onLevelTopicClick: function (button) {
        if (button.getSelectedIndex() === 1) {
            button.setSelectedIndex(0);
            return;
        }

        for (var i = 1; i <= 5; i++) {
            if (button.getTag() !== i) {
                switch (i) {
                    case 1:
                        this.n1MenuToggle.setSelectedIndex(1);
                        break;
                    case 2:
                        this.n2MenuToggle.setSelectedIndex(1);
                        break;
                    case 3:
                        this.n3MenuToggle.setSelectedIndex(1);
                        break;
                    case 4:
                        this.n4MenuToggle.setSelectedIndex(1);
                        break;
                    case 5:
                        this.n5MenuToggle.setSelectedIndex(1);
                        break;
                }
            } else {
                this.mainLayer.removeChild(this.chooseLevelSprite, true);
                this.chooseLevelSprite = cc.Sprite.create(res.CHOOSE_LEVEL_TOPIC_PNG);
                var questionLevelMenuItem = cc.MenuItemImage.create(res.BTN_LEVEL_QUEST_PNG, res.BTN_LEVEL_QUEST_PNG);

                var level;
                switch (i) {
                    case 1:
                        this.chooseLevelSprite.setPosition(this.buttonChooseX - this.chooseLevelSprite.getContentSize().width / 2, this.buttonChooseY);
                        level = TopicEntity.N1;
                        break;
                    case 2:
                        this.chooseLevelSprite.setPosition(this.buttonChooseX + questionLevelMenuItem.getContentSize().width + 1 - this.chooseLevelSprite.getContentSize().width / 2, this.buttonChooseY);
                        level = TopicEntity.N2;
                        break;
                    case 3:
                        this.chooseLevelSprite.setPosition(this.buttonChooseX + questionLevelMenuItem.getContentSize().width * 2 + 2 - this.chooseLevelSprite.getContentSize().width / 2, this.buttonChooseY);
                        level = TopicEntity.N3;
                        break;
                    case 4:
                        this.chooseLevelSprite.setPosition(this.buttonChooseX + questionLevelMenuItem.getContentSize().width * 3 + 3 - this.chooseLevelSprite.getContentSize().width / 2, this.buttonChooseY);
                        level = TopicEntity.N4;
                        break;
                    case 5:
                        this.chooseLevelSprite.setPosition(this.buttonChooseX + questionLevelMenuItem.getContentSize().width * 4 + 4 - this.chooseLevelSprite.getContentSize().width / 2, this.buttonChooseY);
                        level = TopicEntity.N5;
                        break;
                }
                this.mainLayer.addChild(this.chooseLevelSprite, 20);

                this.mainLayer.removeChild(this.topicListLayer, true);
                this.fireEvent(new GameEvent(Events.CHANGE_LEVEL_TOPIC_LIST_SCENE, level));
            }
        }
    },
    onBackClick: function (button) {
        this.fireEvent(new GameEvent(Events.OPEN_MAIN_MENU_SCENE, null));
    },
    onClickChooseTopic: function (indexTopicList) {
        this.fireEvent(new GameEvent(Events.OPEN_GAME_SCENE, indexTopicList));
    }
}); 