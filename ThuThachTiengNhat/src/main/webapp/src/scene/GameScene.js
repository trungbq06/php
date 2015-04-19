var GameScene = View.extend({
    gameModel: null,
    _listener: null,
    mainLayer: null,
    winSize: null,
    loadingLabel: null,
    gameCenterLayer: null,
    showtimeLayer: null,
    answer1MenuToggle: null,
    answer2MenuToggle: null,
    answer3MenuToggle: null,
    answer4MenuToggle: null,
    doremonSprite: null,
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
        if (event.getEventCode() === Events.GAMEMODEL_START_GAME) {
            this.createBackground();
        } else if (event.getEventCode() === Events.GAMEMODEL_COUNT_DOWN_TIME_CHANGED) {
            var time = this.gameModel.getRemainingTime();
            this.startCountDown(time);
        } else if (event.getEventCode() === Events.GAMEMODEL_SHOW_QUESTION) {
            this.showQuestion();
        } else if (event.getEventCode() === Events.GAMEMODEL_REMAIN_TIME_CHANGED) {
            var time = this.gameModel.getRemainingTime();
            var value = Math.floor(time)
            this.countDowntAnswer(value);

            this.removeChild(this.doremonSprite, true);
            var adsSprite = cc.Sprite.create(res.ADS_PNG);
            if (value % 2 === 0) {
                this.doremonSprite = cc.Sprite.create(res.DOREMON_SE_PNG);
            } else {
                this.doremonSprite = cc.Sprite.create(res.DOREMON_PNG);
            }
            this.doremonSprite.setPosition(this.winSize.width / 2 + 400, this.winSize.height - adsSprite.getContentSize().height / 2 + 10);
            this.addChild(this.doremonSprite, 5);

        } else if (event.getEventCode() === Events.GAMEMODEL_SHOW_ANSWER) {
            this.showAnswer();
        } else if (event.getEventCode() === Events.GAMEMODEL_SHOW_SCORE) {
            this.removeChild(this.gameCenterLayer, true);

            this.gameCenterLayer = cc.Layer.create();
            this.gameCenterLayer.setPosition(0, 0);
            this.addChild(this.gameCenterLayer, 40);

            var bgScoreSprite = cc.Sprite.create(res.BG_SCORE_PNG);
            bgScoreSprite.setPosition(this.winSize.width / 2, this.winSize.height / 2);
            this.addChild(bgScoreSprite, 10);

            var scoreLabel = new cc.LabelTTF("Điểm Của Bạn: " + this.gameModel.getScore(), "Tahoma", 36, cc.size(400, 200), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
            scoreLabel.setColor(cc.color(0, 0, 0));
            scoreLabel.setPosition(this.winSize.width / 2, this.winSize.height / 2);
            this.gameCenterLayer.addChild(scoreLabel, 10);

            var menu = cc.Menu.create();
            menu.setPosition(0, 0);
            this.gameCenterLayer.addChild(menu);

            var replayMenuItem = cc.MenuItemImage.create(res.BTN_REPLAY_PNG, res.BTN_REPLAY_PNG);
            var replaySelectMenuItem = cc.MenuItemImage.create(res.BTN_REPLAY_SELECT_PNG, res.BTN_REPLAY_SELECT_PNG);
            var replayMenuToggle = cc.MenuItemToggle.create(replayMenuItem, replaySelectMenuItem);
            replayMenuToggle.setCallback(this.onReplayButtonClick, this);
            replayMenuToggle.setPosition(this.winSize.width / 2 - 100, this.winSize.height / 2 - bgScoreSprite.getContentSize().height / 2);
            menu.addChild(replayMenuToggle);

            var shareFBMenuItem = cc.MenuItemImage.create(res.BTN_SHARE_FB2_PNG, res.BTN_SHARE_FB2_PNG);
            var shareFBSelectMenuItem = cc.MenuItemImage.create(res.BTN_SHARE_FB2_SELECT_PNG, res.BTN_SHARE_FB2_SELECT_PNG);
            var shareFBMenuToggle = cc.MenuItemToggle.create(shareFBMenuItem, shareFBSelectMenuItem);
            shareFBMenuToggle.setCallback(this.onShareFBButtonClick, this);
            shareFBMenuToggle.setPosition(this.winSize.width / 2 + 100, this.winSize.height / 2 - bgScoreSprite.getContentSize().height / 2);
            menu.addChild(shareFBMenuToggle);

        } else if (event.getEventCode() === Events.GAMEMODEL_CHOOSE_ANSWER_FAILED) {
            var index = event.getEventData();

            if (index === 1) {
                this.answer1MenuToggle.setSelectedIndex(1);
            } else {
                this.answer1MenuToggle.setSelectedIndex(0);
            }

            if (index === 2) {
                this.answer2MenuToggle.setSelectedIndex(1);
            } else {
                this.answer2MenuToggle.setSelectedIndex(0);
            }

            if (index === 3) {
                this.answer3MenuToggle.setSelectedIndex(1);
            } else {
                this.answer3MenuToggle.setSelectedIndex(0);
            }

            if (index === 4) {
                this.answer4MenuToggle.setSelectedIndex(1);
            } else {
                this.answer4MenuToggle.setSelectedIndex(0);
            }
        }
    },
    createBackground: function () {
        this.winSize = cc.winSize;
        this.mainLayer = cc.Layer.create();
        this.mainLayer.setPosition(0, 0);
        this.addChild(this.mainLayer, 5);

        var stateSprite = cc.Sprite.create(res.STATE_PNG);
        stateSprite.setPosition(this.winSize.width / 2, this.winSize.height / 2);
        this.addChild(stateSprite, 10);

        var adsSprite = cc.Sprite.create(res.ADS_PNG);
        adsSprite.setPosition(this.winSize.width / 2, this.winSize.height - adsSprite.getContentSize().height / 2);
        this.addChild(adsSprite, 1);

        this.doremonSprite = cc.Sprite.create(res.DOREMON_PNG);
        this.doremonSprite.setPosition(this.winSize.width / 2 + 400, this.winSize.height - adsSprite.getContentSize().height / 2 + 10);
        this.addChild(this.doremonSprite, 5);

        var lightSprite = cc.Sprite.create(res.LIGHT_PNG);
        lightSprite.setPosition(this.winSize.width / 2, this.winSize.height - adsSprite.getContentSize().height / 2);
        this.addChild(lightSprite, 20);

        var logoSprite = cc.Sprite.create(res.LOGO_PNG);
        logoSprite.setPosition(this.winSize.width / 2, this.winSize.height - adsSprite.getContentSize().height / 2);
        this.addChild(logoSprite, 30);

        var bgBottomBannerSprite = cc.Sprite.create(res.BG_BOTTOM_BANNER_PNG);
        bgBottomBannerSprite.setPosition(this.winSize.width / 2, adsSprite.getContentSize().height / 2 - 20);
        this.addChild(bgBottomBannerSprite, 1);
    },
    startCountDown: function (time) {
        if (this.gameCenterLayer !== null) {
            this.gameCenterLayer.removeFromParent(true);
        }

        if (time < 1) {
            this.gameCenterLayer = null;
            return;
        }

        this.gameCenterLayer = cc.Layer.create();
        this.gameCenterLayer.setPosition(0, 0);
        this.addChild(this.gameCenterLayer, 10);

        var countDownSprite;
        if (time > 4) {
            countDownSprite = cc.Sprite.create(res.N3_PNG);
        } else if (time > 3) {
            countDownSprite = cc.Sprite.create(res.N2_PNG);
        }
        else if (time > 2) {
            countDownSprite = cc.Sprite.create(res.N1_PNG);
        } else {
            countDownSprite = cc.Sprite.create(res.GO_PNG);
        }
        countDownSprite.setPosition(this.winSize.width / 2, this.winSize.height / 2);
        this.gameCenterLayer.addChild(countDownSprite, 10);
    },
    countDowntAnswer: function (time) {
        if (this.showtimeLayer !== null) {
            this.showtimeLayer.removeFromParent(true);
        }

        this.showtimeLayer = cc.Layer.create();
        this.showtimeLayer.setPosition(0, 0);
        this.gameCenterLayer.addChild(this.showtimeLayer, 50);

        var countDownSprite = cc.LabelTTF.create(time, "Tahoma", 32);
        countDownSprite.setPosition(this.winSize.width / 2, this.winSize.height / 2 - 220);
        countDownSprite.setColor(cc.color(254, 235, 59));
        this.showtimeLayer.addChild(countDownSprite, 2);
    },
    showQuestion: function () {
        if (this.gameCenterLayer !== null) {
            this.removeChild(this.gameCenterLayer, true);
        }

        this.gameCenterLayer = cc.Layer.create();
        this.gameCenterLayer.setPosition(0, 0);
        this.addChild(this.gameCenterLayer, 40);

        var indexQuestion = this.gameModel.getCurrentQuestionIndex() + 1;
        var indexQuestionStr = "Câu Hỏi: " + indexQuestion;

        var indexQuestionLabel = new cc.LabelTTF(indexQuestionStr, "Tahoma", 40);
        indexQuestionLabel.setColor(cc.color(255, 255, 255));
        indexQuestionLabel.setPosition(this.winSize.width / 2 - 350, this.winSize.height / 2 + 130);
        this.gameCenterLayer.addChild(indexQuestionLabel, 10);


        var scoreLabel = new cc.LabelTTF("Điểm: " + this.gameModel.getScore(), "Tahoma", 40);
        scoreLabel.setColor(cc.color(255, 255, 255));
        scoreLabel.setPosition(this.winSize.width / 2 + 320, this.winSize.height / 2 + 130);
        this.gameCenterLayer.addChild(scoreLabel, 10);

        var questionBgSprite = cc.Sprite.create(res.QUESTION_BG_PNG);
        questionBgSprite.setPosition(this.winSize.width / 2, this.winSize.height / 2);
        this.gameCenterLayer.addChild(questionBgSprite, 1);

        var question = this.gameModel.getCurrentQuestionInfo().question;
        var questionLabel;
        if (question.length > 170) {
            questionLabel = new cc.LabelTTF(question, "Tahoma", 18, cc.size(850, 80), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        } else if (question.length > 129) {
            questionLabel = new cc.LabelTTF(question, "Tahoma", 21, cc.size(850, 80), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        } else if (question.length > 55) {
            questionLabel = new cc.LabelTTF(question, "Tahoma", 28, cc.size(850, 80), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        } else {
            questionLabel = new cc.LabelTTF(question, "Tahoma", 32, cc.size(850, 80), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        }
        questionLabel.setColor(cc.color(255, 255, 255));
        questionLabel.setPosition(this.winSize.width / 2, this.winSize.height / 2);
        this.gameCenterLayer.addChild(questionLabel, 10);

        var menu = cc.Menu.create();
        menu.setPosition(0, 0);
        this.gameCenterLayer.addChild(menu);

        var answer1MenuItem = cc.MenuItemImage.create(res.ANSWER_BG_PNG, res.ANSWER_BG_PNG);
        var answer1SelectMenuItem = cc.MenuItemImage.create(res.ANSWER_BG_SELECTED_PNG, res.ANSWER_BG_SELECTED_PNG);
        this.answer1MenuToggle = cc.MenuItemToggle.create(answer1MenuItem, answer1SelectMenuItem);
        this.answer1MenuToggle.setCallback(this.onChooseAnswerClick, this);
        this.answer1MenuToggle.setTag(1);
        this.answer1MenuToggle.setPosition(this.winSize.width / 2 - 250, this.winSize.height / 2 - 170);
        menu.addChild(this.answer1MenuToggle);


        var answer1Str = this.gameModel.getCurrentQuestionInfo().answerA;
        var answer1Label;
        if (answer1Str.length > 30) {
            answer1Label = new cc.LabelTTF("A: " + answer1Str, "Tahoma", 18, cc.size(410, 58), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        } else {
            answer1Label = new cc.LabelTTF("A: " + answer1Str, "Tahoma", 24, cc.size(410, 58), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        }
        answer1Label.setColor(cc.color(255, 255, 255));
        answer1Label.setPosition(this.winSize.width / 2 - 250, this.winSize.height / 2 - 170);
        this.gameCenterLayer.addChild(answer1Label, 10);

        var answer2MenuItem = cc.MenuItemImage.create(res.ANSWER_BG_PNG, res.ANSWER_BG_PNG);
        var answer2SelectMenuItem = cc.MenuItemImage.create(res.ANSWER_BG_SELECTED_PNG, res.ANSWER_BG_SELECTED_PNG);
        this.answer2MenuToggle = cc.MenuItemToggle.create(answer2MenuItem, answer2SelectMenuItem);
        this.answer2MenuToggle.setCallback(this.onChooseAnswerClick, this);
        this.answer2MenuToggle.setTag(2);
        this.answer2MenuToggle.setPosition(this.winSize.width / 2 + 250, this.winSize.height / 2 - 170);
        menu.addChild(this.answer2MenuToggle);

        var answer2Str = this.gameModel.getCurrentQuestionInfo().answerB;
        var answer2Label;
        if (answer2Str.length > 30) {
            answer2Label = new cc.LabelTTF("B: " + answer2Str, "Tahoma", 18, cc.size(410, 58), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        } else {
            answer2Label = new cc.LabelTTF("B: " + answer2Str, "Tahoma", 24, cc.size(410, 58), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        }
        answer2Label.setColor(cc.color(255, 255, 255));
        answer2Label.setPosition(this.winSize.width / 2 + 250, this.winSize.height / 2 - 170);
        this.gameCenterLayer.addChild(answer2Label, 10);

        var answer3MenuItem = cc.MenuItemImage.create(res.ANSWER_BG_PNG, res.ANSWER_BG_PNG);
        var answer3SelectMenuItem = cc.MenuItemImage.create(res.ANSWER_BG_SELECTED_PNG, res.ANSWER_BG_SELECTED_PNG);
        this.answer3MenuToggle = cc.MenuItemToggle.create(answer3MenuItem, answer3SelectMenuItem);
        this.answer3MenuToggle.setCallback(this.onChooseAnswerClick, this);
        this.answer3MenuToggle.setTag(3);
        this.answer3MenuToggle.setPosition(this.winSize.width / 2 - 250, this.winSize.height / 2 - 270);
        menu.addChild(this.answer3MenuToggle);

        var answer3Str = this.gameModel.getCurrentQuestionInfo().answerC;
        var answer3Label;
        if (answer3Str.length > 30) {
            answer3Label = new cc.LabelTTF("C: " + answer3Str, "Tahoma", 18, cc.size(410, 58), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        } else {
            answer3Label = new cc.LabelTTF("C: " + answer3Str, "Tahoma", 24, cc.size(410, 58), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        }
        answer3Label.setColor(cc.color(255, 255, 255));
        answer3Label.setPosition(this.winSize.width / 2 - 250, this.winSize.height / 2 - 270);
        this.gameCenterLayer.addChild(answer3Label, 10);

        var answer4MenuItem = cc.MenuItemImage.create(res.ANSWER_BG_PNG, res.ANSWER_BG_PNG);
        var answer4SelectMenuItem = cc.MenuItemImage.create(res.ANSWER_BG_SELECTED_PNG, res.ANSWER_BG_SELECTED_PNG);
        this.answer4MenuToggle = cc.MenuItemToggle.create(answer4MenuItem, answer4SelectMenuItem);
        this.answer4MenuToggle.setCallback(this.onChooseAnswerClick, this);
        this.answer4MenuToggle.setTag(4);
        this.answer4MenuToggle.setPosition(this.winSize.width / 2 + 250, this.winSize.height / 2 - 270);
        menu.addChild(this.answer4MenuToggle);

        var answer4Str = this.gameModel.getCurrentQuestionInfo().answerD;
        var answer4Label;
        if (answer4Str.length > 30) {
            answer4Label = new cc.LabelTTF("D: " + answer4Str, "Tahoma", 18, cc.size(410, 58), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        } else {
            answer4Label = new cc.LabelTTF("D: " + answer4Str, "Tahoma", 24, cc.size(410, 58), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        }
        answer4Label.setColor(cc.color(255, 255, 255));
        answer4Label.setPosition(this.winSize.width / 2 + 250, this.winSize.height / 2 - 270);
        this.gameCenterLayer.addChild(answer4Label, 10);

        var timeBgSprite = cc.Sprite.create(res.TIME_BG_PNG);
        timeBgSprite.setPosition(this.winSize.width / 2, this.winSize.height / 2 - 220);
        this.gameCenterLayer.addChild(timeBgSprite, 1);

        var effectTimeSprite = cc.Sprite.create(res.EFFECT_TIME_PNG);
        effectTimeSprite.setPosition(this.winSize.width / 2, this.winSize.height / 2 - 220);
        this.gameCenterLayer.addChild(effectTimeSprite, 1);
    },
    showAnswer: function () {
        this.fireEvent(new GameEvent(Events.MUSIC_ANSWER_GAME_SCENE, null));

        var index = this.gameModel.getAnswerIndex();
        if (index === 1) {
            this.answer1MenuToggle.setSelectedIndex(1);
        } else if (index === 2) {
            this.answer2MenuToggle.setSelectedIndex(1);
        } else if (index === 3) {
            this.answer3MenuToggle.setSelectedIndex(1);
        } else {
            this.answer4MenuToggle.setSelectedIndex(1);
        }
    },
    onReplayButtonClick: function (button) {
        this.fireEvent(new GameEvent(Events.OPEN_TOPIC_LIST_SCENE, null));
    },
    onChooseAnswerClick: function (button) {
        var index = button.getTag();
        this.fireEvent(new GameEvent(Events.CHOOSE_ANSWER_GAME_SCENE, index));
    },
    onShareFBButtonClick: function (button) {
        this.fireEvent(new GameEvent(Events.SHARE_SCORE_FACEBOOK, null));
    }
}); 