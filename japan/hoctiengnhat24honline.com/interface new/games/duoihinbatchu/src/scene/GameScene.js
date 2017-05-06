var GameScene = View.extend({
    gameModel: null,
    _listener: undefined,
    backgroundSprite: null,
    starSprite: null,
    charLabel: null,
    questionLayer: null,
    partLayer: null,
    answerCharMenu: null,
    suggestCharMenu: null,
    _ranChar: null,
    menu: null,
    gameOverLayer: null,
    gameNextStageLayer: null,
    helpLayer: null,
    shuffledAnswer: null,
    menuQuestionToggle: null,
    menuItemQuestion: null,
    answerArray: null,
    levelLabel: null,
    starLayer: null,
    okButton: null,
    loadingLabel: null,
    keyboardEvent: null,
    timeLabel: null,
    helpLabel: null,
    ctor: function (gameModel) {
        this._super();
        this.gameModel = gameModel;
        this.init();
        this._listener = {
            "obj": this,
            "func": this.processEvent
        };
        gameModel.addEventListener(this._listener);
        this.quitLayer = undefined;
        this.rankLayer = undefined;

        //Register KeyboardEvent
        var _this = this;
        this.keyboardEvent = {
            event: cc.EventListener.KEYBOARD,
            onKeyPressed: function (key, event) {
                _this.onKeyPressed(key, event);
            },
            onKeyReleased: function (key, event) {
                _this.onKeyReleased(key, event);
            }
        };
        cc.eventManager.addListener(this.keyboardEvent, this);
    },
    createBackground: function () {

        var size = cc.winSize;
        this.partLayer = cc.Layer.create();
        this.partLayer.setPosition(0, 0);
        this.addChild(this.partLayer, 2);

        //background
        this.backgroundSprite = cc.Sprite.create(res.BackgroundGame_png);
        this.backgroundSprite.setPosition(size.width / 2, size.height / 2);
        this.addChild(this.backgroundSprite, 1);

        var mainLayer = cc.Layer.create();
        mainLayer.setPosition(0, 0);
        this.addChild(mainLayer, 2);

        this.menu = cc.Menu.create();
        this.menu.setPosition(0, 0);
        this.partLayer.addChild(this.menu);

        this.levelLabel = cc.LabelTTF.create("Câu Hỏi: 0", res.FontCustom, 46);
        this.levelLabel.setPosition(this.levelLabel.getContentSize().width / 2, this.backgroundSprite.getContentSize().height - 40);
        this.levelLabel.setColor(cc.color(255, 255, 255));
        this.partLayer.addChild(this.levelLabel, 2);

        var helpTextSprite = cc.MenuItemImage.create(res.HELPTEXT_PNG, res.HELPTEXT_SELECT_PNG);
        helpTextSprite.setPosition(this.backgroundSprite.getContentSize().width / 2, this.backgroundSprite.getContentSize().height - 30);
        helpTextSprite.setCallback(this.onHelpButtonClick, this);
        this.menu.addChild(helpTextSprite);

        this.loadingLabel = new cc.LabelTTF("Loading...", "Arial", 30);
        this.loadingLabel.setPosition(cc.director.getVisibleSize().width / 2, cc.director.getVisibleSize().height / 2 + 77);
        this.addChild(this.loadingLabel, 1);
    },
    showQuestion: function () {
        if (this.questionLayer !== null && this.questionLayer !== undefined) {
            this.questionLayer.removeFromParent(true);
        }

        this.questionLayer = cc.Layer.create();
        this.questionLayer.setPosition(0, 0);
        this.addChild(this.questionLayer, 1);

        //Image Support       
        var suggestSprite = cc.Sprite.create("res/data/" + this.gameModel.getCurrentQuest().image);
        suggestSprite.setPosition(cc.director.getVisibleSize().width / 2, cc.director.getVisibleSize().height / 2 + 77);
        this.questionLayer.addChild(suggestSprite);

        this.timeLabel = cc.LabelTTF.create("", "Tahoma", 48);
        this.timeLabel.setPosition(180, 70);
        this.timeLabel.setColor(cc.color(254, 235, 59));
        this.questionLayer.addChild(this.timeLabel, 2);

        var timeBgSprite = cc.Sprite.create(res.FG_TIME_CYAN_PNG);
        timeBgSprite.setPosition(180, 70);
        this.questionLayer.addChild(timeBgSprite);

        this.suggestCharMenu = cc.Menu.create();
        this.suggestCharMenu.setPosition(0, 0);
        this.questionLayer.addChild(this.suggestCharMenu);

        var numberCharPerRowDisplay = 10;
        var numberRowOfCharDisplay = 2;
        var halfOfCharDisplay = numberCharPerRowDisplay / 2;
        var charWidth = 0;
        var charHeight = 0;
        var charMargin = 2;
        this.shuffledAnswer = this.gameModel.chaosAnswer();
        var count = 0;
        for (var j = 0; j < numberRowOfCharDisplay; j++) {
            for (var i = 0; i < numberCharPerRowDisplay; i++) {
                var menuItemQuestion = cc.MenuItemImage.create(res.CharBox_Visible_png, res.CharBox_Visible_png);
                var menuItemQuestion2 = cc.MenuItemImage.create(res.CharBox_Hidden_png, res.CharBox_Hidden_png);
                var menuQuestionToggle = cc.MenuItemToggle.create(menuItemQuestion, menuItemQuestion2);
                this._ranChar = this.shuffledAnswer[count];
                this.charLabel = new cc.LabelTTF(this._ranChar, "Arial", 38);
                this.charLabel.setColor(cc.color(0, 0, 0));
                this.charLabel.setPosition(menuQuestionToggle.getContentSize().width / 2, menuQuestionToggle.getContentSize().height / 2);
                menuItemQuestion.addChild(this.charLabel);
                if (i === 0) {
                    charWidth = menuQuestionToggle.getContentSize().width;
                    charHeight = menuQuestionToggle.getContentSize().height;
                }
                menuQuestionToggle.setTag(this._ranChar.charCodeAt(0));
                menuQuestionToggle.setSelectedIndex(0);
                menuQuestionToggle.setCallback(this.onCharactorButtonClick, this);
                var positionX = (cc.winSize.width / 2) - ((halfOfCharDisplay - i - 0.5) * (charWidth + charMargin));
                menuQuestionToggle.setPosition(positionX, 25 + (j * (charHeight + charMargin)) + (charHeight / 2));
                this.suggestCharMenu.addChild(menuQuestionToggle);
                count++;
            }
        }

        //Answer
        this.answerCharMenu = cc.Menu.create();
        this.answerCharMenu.setPosition(0, 0);
        this.questionLayer.addChild(this.answerCharMenu);
        var currentQuest = this.gameModel.getCurrentQuest();
        var numberCharAnswerShow = currentQuest.answerBox.length;
        var halfOfCharDisplay = numberCharAnswerShow / 2;
        var charWidth = 0;
        var charHeight = 0;
        var charMargin = 2;
        for (var i = 0; i < numberCharAnswerShow; i++) {
            var menuItemAnswer = cc.MenuItemImage.create(res.CharBox_Visible_png, res.CharBox_Visible_png);
            var menuItemAnswer2 = cc.MenuItemImage.create(res.CharBox_Hidden_png, res.CharBox_Hidden_png);
            var menuItemAnswerToggle = cc.MenuItemToggle.create(menuItemAnswer2, menuItemAnswer);
            var charLabel = new cc.LabelTTF("", "Arial", 38);
            charLabel.setColor(cc.color(0, 0, 0));
            charLabel.setPosition(menuQuestionToggle.getContentSize().width / 2, menuQuestionToggle.getContentSize().height / 2);
            charLabel.setTag(10);
            menuItemAnswer.addChild(charLabel);
            if (i === 0) {
                charWidth = menuItemAnswerToggle.getContentSize().width;
                charHeight = menuItemAnswerToggle.getContentSize().height;
            }

            menuItemAnswerToggle.setCallback(this.onAnswerCharClick, this);
            menuItemAnswerToggle.setTag(-1);
            var positionX = (cc.winSize.width / 2) - ((halfOfCharDisplay - i - 0.5) * (charWidth + charMargin));
            menuItemAnswerToggle.setPosition(positionX, cc.winSize.height / 2 - charHeight * 4 + menuItemAnswerToggle.getContentSize().height / 2);
            this.answerCharMenu.addChild(menuItemAnswerToggle);
        }

        //Oke
        var commonMenuItem = cc.Menu.create();
        commonMenuItem.setPosition(0, 0);
        this.questionLayer.addChild(commonMenuItem);
        this.okButton = cc.MenuItemImage.create(res.OkeShow_png, res.OkeHide_png);
        this.okButton.setPosition(
                this.backgroundSprite.getContentSize().width - 180, 70);
        this.okButton.setCallback(this.onOkButtonClick, this);
        commonMenuItem.addChild(this.okButton);

        //Level        
        var level = this.gameModel.getCurrentQuestIndex() + 1;
        var levelStr = "Câu Hỏi: " + level;
        this.levelLabel.setString(levelStr);

        //Star           
        this.helpLabel = cc.LabelTTF.create("Bạn còn 2 sự trợ giúp", "Tahoma", 36);
        this.helpLabel.setPosition(this.backgroundSprite.getContentSize().width - this.helpLabel.getContentSize().width / 2, this.backgroundSprite.getContentSize().height - 30);
        this.helpLabel.setColor(cc.color(254, 235, 59));
        this.questionLayer.addChild(this.helpLabel, 2);
    },
    init: function () {
        this.scheduleUpdate();
    },
    onEnter: function () {
        this._super();
    },
    processEvent: function (event) {
        if (event.getEventCode() === Events.GAMEMODEL_USE_HELP) {
            this.processUseHelp();
        }
        else if (event.getEventCode() === Events.GAMEMODEL_START_GAME) {
            this.createBackground();
        }
        else if (event.getEventCode() === Events.GAMEMODEL_SHOW_QUESTION) {
            this.answerArray = [];
            this.showQuestion();
        }
        else if (event.getEventCode() === Events.GAMEMODEL_REMAIN_TIME_CHANGED) {
            var value = Math.floor(this.gameModel.getRemainingTime());
            this.timeLabel.setString(value);

        }
        else if (event.getEventCode() === Events.GAMEMODEL_SHOW_ANSWER) {
            this.fireEvent(new GameEvent(Events.WIN_GAME, null));
            this.questionLayer.removeFromParent(true);
            this.gameNextStageLayer = cc.LayerColor.create(cc.color(0, 0, 0, 180));
            this.addChild(this.gameNextStageLayer, 10);           
            var nextStageBoardSprite = cc.Sprite.create(res.GameOverBoard_png);
            nextStageBoardSprite.setPosition(this.gameNextStageLayer.getContentSize().width / 2, this.gameNextStageLayer.getContentSize().height / 2);
            this.gameNextStageLayer.addChild(nextStageBoardSprite, 2);
            var menuGameOver = cc.Menu.create();
            menuGameOver.setPosition(0, 0);
            nextStageBoardSprite.addChild(menuGameOver);
            var nextStageButton = cc.MenuItemImage.create(res.Next_png, res.Next_Select_png);
            nextStageButton.setPosition(nextStageBoardSprite.getContentSize().width / 2, 15);
            menuGameOver.addChild(nextStageButton);
            nextStageButton.setCallback(this.onNextStageButtonClick, this);

            var textCongrat;
            if (this.gameModel.getStar() === 3) {
                textCongrat = res.Congrat1;
            } else if (this.gameModel.getStar() === 2) {
                textCongrat = res.Congrat2;
            } else {
                textCongrat = res.Congrat3;
            }
            var congratLabel = new cc.LabelTTF(textCongrat, res.FontCustom, 30);
            congratLabel.setColor(cc.color(65, 27, 9));
            congratLabel.setPosition(nextStageBoardSprite.getContentSize().width / 2, nextStageBoardSprite.getContentSize().height - 50);
            nextStageBoardSprite.addChild(congratLabel);

            var dapAnLabel = new cc.LabelTTF("Đáp án:", res.FontCustom, 30);
            dapAnLabel.setColor(cc.color(65, 27, 9));
            dapAnLabel.setPosition(nextStageBoardSprite.getContentSize().width / 2, nextStageBoardSprite.getContentSize().height / 2);
            nextStageBoardSprite.addChild(dapAnLabel);

            var resultLabel = new cc.LabelTTF(this.gameModel.getCurrentQuest().answer, res.FontCustom, 32.0, cc.size(250, 70), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
            resultLabel.setColor(cc.color(65, 27, 9));
            resultLabel.setPosition(nextStageBoardSprite.getContentSize().width / 2, nextStageBoardSprite.getContentSize().height / 2 - 50);
            nextStageBoardSprite.addChild(resultLabel);

        } else if (event.getEventCode() === Events.GAMEMODEL_GAME_OVER) {
            this.fireEvent(new GameEvent(Events.LOSE_GAME, null));
            this.removeChild(this.gameNextStageLayer, true);
            this.removeChild(this.helpLayer, true);
            this.processGameOver(event);

        } else if (event.getEventCode() === Events.GAMEMODEL_WIN_GAME) {
            this.removeChild(this.gameNextStageLayer, true);
            this.removeChild(this.helpLayer, true);
            this.processGameOver(event);
        }

    },
    onCharactorButtonClick: function (button) {
        if (button.getSelectedIndex() === 0) {
            button.setSelectedIndex(1);
            return;
        }

        var buttonIndex = this.suggestCharMenu.getChildren().indexOf(button);
        var selectedChar = String.fromCharCode(button.getTag());
        var answerCharArray = this.answerCharMenu.getChildren();
        for (var i = 0; i < answerCharArray.length; i++) {
            if (answerCharArray[i].getTag() === -1) {
                answerCharArray[i].setTag(buttonIndex);
                var charLabel = answerCharArray[i].getSubItems()[1].getChildByTag(10);
                answerCharArray[i].setSelectedIndex(1);
                if (charLabel) {
                    charLabel.setString(selectedChar);
                    this.answerArray[i] = selectedChar;
                }
                button.setSelectedIndex(1);
                return;
            }
        }
        button.setSelectedIndex(0);
    },
    onAnswerCharClick: function (button) {
        var answerCharIndex = this.answerCharMenu.getChildren().indexOf(button);
        this.answerArray[answerCharIndex] = "";
        var buttonIndex = button.getTag();
        button.setSelectedIndex(0);
        if (buttonIndex >= 0) {
            this.suggestCharMenu.getChildren()[buttonIndex].setSelectedIndex(0);
        }
        button.setTag(-1);
    },
    onHelpButtonClick: function (button) {
        this.fireEvent(new GameEvent(Events.SOUND_HELP, null));
        var countUnAnswer = 0;
        var answerCharArray = this.answerCharMenu.getChildren();
        for (var i = 0; i < answerCharArray.length; i++) {
            if (answerCharArray[i].getTag() !== -1) {
                countUnAnswer++;
            }
        }
        this.fireEvent(new GameEvent(Events.GAMESCENE_HELP_CLICK, countUnAnswer));
    },
    onOkButtonClick: function (button) {
        this.fireEvent(new GameEvent(Events.BUTTON_CLICK, null));
        var currentQuest = this.gameModel.getCurrentQuest();
        var answerWithLength = currentQuest.answerBox.length;
        var existSpace = 0;
        if (this.answerArray.length === answerWithLength) {
            var result = "";
            for (var i = 0; i < this.answerArray.length; i++) {
                if (this.answerArray[i] === "") {
                    existSpace = 1;
                    return;
                }
                result += this.answerArray[i];
            }

            if (existSpace === 0) {
                this.fireEvent(new GameEvent(Events.GAMESCENE_ANSWER_CLICK, result));
            }
        }
    },
    onReplayButtonClick: function (button) {
        this.removeFromParent(true);
        if (this.gameNextStageLayer !== null) {
            this.gameNextStageLayer.removeFromParent(true);
        }
        this.gameOverLayer.removeFromParent();

        this.fireEvent(new GameEvent(Events.GAMESCENE_REPLAY_CLICK, null));
    },
    onNextStageButtonClick: function (button) {
        this.removeChild(this.gameNextStageLayer, true);
        this.fireEvent(new GameEvent(Events.GAMESCENE_NEXT_STAGE_CLICK, null));
    },
    processGameOver: function (event) {
        this.questionLayer.removeFromParent(true);
        this.gameOverLayer = cc.LayerColor.create(cc.color(0, 0, 0, 150));
        this.addChild(this.gameOverLayer, 10);
        this.partLayer.setVisible(false);

        var gameOverBoardSprite = cc.Sprite.create(res.GameOverBoard_png);
        gameOverBoardSprite.setPosition(this.gameOverLayer.getContentSize().width / 2, this.gameOverLayer.getContentSize().height / 2);
        this.gameOverLayer.addChild(gameOverBoardSprite, 2);

        var avgWidth = gameOverBoardSprite.getContentSize().width / 2;
        var avgHeight = gameOverBoardSprite.getContentSize().height - 80;

        var titleLabel;
        var level;
        if (event.getEventCode() === Events.GAMEMODEL_GAME_OVER) {
            level = this.gameModel.getCurrentQuestIndex() + 1;
            titleLabel = new cc.LabelTTF("Thua Cuộc", res.FontCustom, 72);
        } else {
            level = this.gameModel.getCurrentQuestIndex();
            titleLabel = new cc.LabelTTF("Thắng Cuộc", res.FontCustom, 72);
        }

        titleLabel.setColor(cc.color(65, 27, 9));
        titleLabel.setPosition(avgWidth, avgHeight);
        gameOverBoardSprite.addChild(titleLabel, 2);

        var menuGameOver = cc.Menu.create();
        menuGameOver.setPosition(0, 0);
        gameOverBoardSprite.addChild(menuGameOver);

        var levelStr = "Cấp Độ: " + level;
        var levelLabel = new cc.LabelTTF(levelStr, res.FontCustom, 46);
        levelLabel.setColor(cc.color(65, 27, 9));
        levelLabel.setPosition(avgWidth, avgHeight / 2);
        gameOverBoardSprite.addChild(levelLabel);

        var replayButton = cc.MenuItemImage.create(res.Replay1_png, res.Replay2_png);
        replayButton.setPosition(gameOverBoardSprite.getContentSize().width / 2, 15);
        menuGameOver.addChild(replayButton);
        replayButton.setCallback(this.onReplayButtonClick, this);
    },
    processUseHelp: function () {
        var indexToHide = this.gameModel.getStar() - 1;
        this.helpLabel.setString("Bạn còn " + indexToHide + " sự trợ giúp");

        //Show Char Help            
        var unanswerPosIndexList = [];
        var answerCharArray = this.answerCharMenu.getChildren();
        for (var i = 0; i < answerCharArray.length; i++) {
            if (answerCharArray[i].getTag() === -1) {
                unanswerPosIndexList.push(i);
            }
        }

        if (unanswerPosIndexList.length > 0) {
            var arr = this.gameModel.getCurrentQuest().answerBox;
            var randomIndex = Utils.randomBetween(0, unanswerPosIndexList.length - 1);
            var charHelp = arr[unanswerPosIndexList[randomIndex]].toUpperCase();
            var suggestCharMenuArray = this.suggestCharMenu.getChildren();

            for (var i = 0; i < this.shuffledAnswer.length; i++) {
                if (this.shuffledAnswer[i] === charHelp && suggestCharMenuArray[i].getSelectedIndex() === 0) {
                    suggestCharMenuArray[i].setSelectedIndex(1);
                    var answerCharMenuItem = this.answerCharMenu.getChildren()[unanswerPosIndexList[randomIndex]];
                    answerCharMenuItem.setSelectedIndex(1);
                    answerCharMenuItem.setTag(i);
                    var charLabel = answerCharMenuItem.getSubItems()[1].getChildByTag(10);
                    if (charLabel) {
                        charLabel.setString(charHelp);
                        this.answerArray[unanswerPosIndexList[randomIndex]] = charHelp;
                    }
                    break;
                }
            }
        }
    },
    backStartScene: function () {
        // Remove Keyboard Event
        cc.eventManager.removeListener(this.keyboardEvent);
        this.gameModel.removeEventListener(this._listener);

        this.fireEvent(new GameEvent(Events.BUTTON_CLICK, null));
        this.fireEvent(new GameEvent(Events.BACKSTART_SCENE, null));
    },
    onKeyPressed: function (key, event) {

    },
    onKeyReleased: function (key, event) {
        var char = String.fromCharCode(key);
        if (this.gameModel.getGameState() === GameModel.ANSWER_QUESTION_STATE) {
            if (key === 13) {
                this.onOkButtonClick(this.okButton);
            } else
            if (char) {
                char = char.toUpperCase();
                //console.log(this.shuffledAnswer);
                var arr = this.shuffledAnswer.join("").toUpperCase();

                // Get all charactor equal to typed key
                var keyIndexArray = [];
                var index = 0;
                while (index < arr.length) {
                    index = arr.indexOf(char, index);
                    if (index === -1) {
                        break;
                    }
                    keyIndexArray.push(index);
                    index++;
                }

                // Check charactor is answered or not and use it
                var answerCharArray = this.answerCharMenu.getChildren();
                var suggestCharMenuArray = this.suggestCharMenu.getChildren();

                for (var i = 0; i < keyIndexArray.length; i++) {
                    if (suggestCharMenuArray[keyIndexArray[i]].getSelectedIndex() === 0) {
                        for (var j = 0; j < answerCharArray.length; j++) {
                            if (answerCharArray[j].getTag() === -1) {
                                suggestCharMenuArray[keyIndexArray[i]].setSelectedIndex(1);
                                var answerCharMenuItem = answerCharArray[j];
                                answerCharMenuItem.setSelectedIndex(1);
                                answerCharMenuItem.setTag(keyIndexArray[i]);
                                var charLabel = answerCharMenuItem.getSubItems()[1].getChildByTag(10);
                                if (charLabel) {
                                    charLabel.setString(char);
                                    this.answerArray[j] = char;
                                }
                                break;
                            }
                        }
                        break;
                    }
                }
            }
        }
    }
}); 