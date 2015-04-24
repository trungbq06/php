var GameModel = Model.extend({
    remainTime: 0,
    currentQuestIndex: undefined,
    score: undefined,
    remainingTime: 0,
    gameState: undefined,
    resourceModel: null,
    questionList: null,
    questionListContinue: null,
    numOfStar: null,
    statusAnswer: null,
    rank100json: null,
    idUser: null,
    nameUser: null,
    statusTextHelp: null,
    indexQuestionAnswer: -1,
    load: function () {
        this.start();
        this.getInfoUser();
    },
    start: function () {
        cc.director.getScheduler().scheduleUpdateForTarget(this, 1, false);
    },
    stop: function () {
        cc.director.getScheduler().unscheduleUpdateForTarget(this);
    },
    update: function (dt) {
        if (this.currentQuestIndex === null || this.currentQuestIndex === undefined) {
            return;
        }

        if (this.remainingTime === 0) {
            return;
        }

        if (this.gameState === GameModel.GAME_WAITING_STATE) {
            return;
        }

        var remainingTime = this.remainingTime - dt;
        if (remainingTime <= 0) {
            remainingTime = 0;
        }
        this.setRemainingTime(remainingTime);
    },
    loadDB: function () {
        this.resourceModel = ResourceModel.getInstance();
        //this.resourceModel.loadQuestion();
    },
    play: function () {
        this.questionList = this.resourceModel.getQuestList();

        if (this.indexQuestionAnswer === this.questionList.length) {
            this.indexQuestionAnswer = -1;
        }

        this.questionListContinue = this.shuffleQuest(this.questionList);
        GameModel.ANSWER_QUESTION_TIME = this.resourceModel.getAnswerTime();
        GameModel.TOTAL_QUEST = this.questionList.length;
        this.score = 0;
        this.currentQuestIndex = -1;

        this.fireEvent(new GameEvent(Events.GAMEMODEL_START_GAME, null));
        if (this.questionListContinue.length > 0) {
            var _this = this;
            cc.loader.loadImg("res/data/" + this.questionListContinue[0].image, { "isCrossOrigin": false }, function () {
                //this.fireEvent(new GameEvent(Events.GAMEMODEL_START_GAME, null));
                _this.nextLocation();
            });
            cc.loader.loadImg("res/data/" + this.questionListContinue[0].imageResult);
        } else {
            //this.fireEvent(new GameEvent(Events.GAMEMODEL_START_GAME, null));
            this.nextLocation();
        }
    },
    nextLocation: function () {
        this.statusTextHelp = false;
        this.statusAnswer = false;
        this.currentQuestIndex++;
        if (this.currentQuestIndex > GameModel.TOTAL_QUEST - 1) {
            this.fireEvent(new GameEvent(Events.GAMEMODEL_WIN_GAME, null));
            this.setGameState(GameModel.GAME_WAITING_STATE);
            return;
        }

        // Preload 2 next question
        if ((this.currentQuestIndex + 1) < GameModel.TOTAL_QUEST) {
            cc.loader.loadImg("res/data/" + this.questionListContinue[this.currentQuestIndex + 1].image);
            cc.loader.loadImg("res/data/" + this.questionListContinue[this.currentQuestIndex + 1].imageResult);
        }

        if ((this.currentQuestIndex + 2) < GameModel.TOTAL_QUEST) {
            cc.loader.loadImg("res/data/" + this.questionListContinue[this.currentQuestIndex + 2].image);
            cc.loader.loadImg("res/data/" + this.questionListContinue[this.currentQuestIndex + 2].imageResult);
        }

        this.numOfStar = 3;
        this.remainTime = 0;

        var _this = this;
        cc.loader.loadImg("res/data/" + this.questionListContinue[this.currentQuestIndex].image, { "isCrossOrigin": false }, function () {
            _this.showLocation();
        });

        
    },
    showLocation: function () {
        this.setGameState(GameModel.SHOW_QUESTION_STATE);
        this.fireEvent(new GameEvent(Events.GAMEMODEL_SHOW_QUESTION, null));
    },
    setGameState: function (gameState) {
        if (this.gameState !== gameState) {
            switch (gameState) {
                case GameModel.SHOW_QUESTION_STATE:
                    this.remainingTime = GameModel.SHOW_QUESTION_TIME;
                    break;
                case GameModel.ANSWER_QUESTION_STATE:
                    this.remainingTime = GameModel.ANSWER_QUESTION_TIME;
                    break;
                case GameModel.SHOW_RESULT_STATE:
                    this.remainingTime = GameModel.SHOW_RESULT_TIME;
                    break;
                case GameModel.CONTIONUE_GAME:
                    break;
                default:
                    break;
            }

            this.gameState = gameState;
        }
    },
    getGameState: function () {
        return this.gameState;
    },
    setRemainingTime: function (remainingTime) {
        if (this.remainingTime !== remainingTime) {
            this.remainingTime = remainingTime;

            if (this.gameState === GameModel.ANSWER_QUESTION_STATE || this.gameState === GameModel.CONTIONUE_GAME) {
                this.fireEvent(new GameEvent(Events.GAMEMODEL_REMAIN_TIME_CHANGED, null));
            }

            if (remainingTime === 0) {
                switch (this.gameState) {
                    case GameModel.SHOW_QUESTION_STATE:
                        this.startCountDown();
                        break;
                    case GameModel.ANSWER_QUESTION_STATE:
                    case GameModel.CONTIONUE_GAME:
                        this.timeup();
                        break;
                    case GameModel.SHOW_RESULT_STATE:
                        this.nextLocation();
                        break;
                    default:
                        break;
                }
            }
        }
    },
    startCountDown: function () {
        this.setGameState(GameModel.ANSWER_QUESTION_STATE);
    },
    timeup: function () {
        this.showResult();
    },
    showResult: function () {
        this.setGameState(GameModel.GAME_WAITING_STATE);
        if (this.statusAnswer) {
            this.fireEvent(new GameEvent(Events.GAMEMODEL_SHOW_ANSWER, null));
        } else {
            this.setGameState(GameModel.GAME_OVER);
            this.postScore();
            this.fireEvent(new GameEvent(Events.GAMEMODEL_GAME_OVER, null));
        }
    },
    getRemainingTime: function () {
        return this.remainingTime;
    },
    chaosAnswer: function () {
        var answer = this.questionListContinue[this.currentQuestIndex].answerBox;

        var totalCharRemaining = 20 - answer.length;

        answer += Utils.randomStringWithLength(totalCharRemaining);
        answer = answer.toUpperCase();
        var arr = this.shuffle(answer);

        return arr;
    },
    shuffle: function (strValue) {
        var array = new Array();
        for (var i = 0; i < strValue.length; i++) {
            array.push(strValue[i]);
        }

        var currentIndex = array.length, temporaryValue, randomIndex;

        while (0 !== currentIndex) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    },
    shuffleQuest: function (strValue) {
        this.indexQuestionAnswer += 1;
        var array = new Array();        

        for (var i = this.indexQuestionAnswer; i < strValue.length; i++) {
            array.push(strValue[i]);
        }

        for (var i = 0; i < this.indexQuestionAnswer; i++) {
            array.push(strValue[i]);
        }        

        return array;        
    },
    stopGame: function () {
        this.setGameState(GameModel.GAME_WAITING_STATE);
    },
    continueGame: function () {
        this.setGameState(GameModel.CONTIONUE_GAME);
    },
    compareAnswer: function (usersAnswer) {
        var answer = this.getCurrentQuest().answerBox;
        if (answer.toUpperCase() === usersAnswer) {
            this.score += this.numOfStar;
            this.statusAnswer = true;
        }
        this.showResult();
    },
    useHelp: function (countUnAnswer) {
        var answer = countUnAnswer;
        if (answer >= this.getCurrentQuest().answerBox.length) {
            return;
        }

        if (this.numOfStar <= 1) {
            return;
        }
        this.numOfStar -= 1;
        this.fireEvent(new GameEvent(Events.GAMEMODEL_USE_HELP, null));
    },
    useTextHelp: function () {        
        if (this.numOfStar <= 1 || this.statusTextHelp === true) {
            return;
        }
        this.statusTextHelp = true;
        this.numOfStar -= 1;
        this.fireEvent(new GameEvent(Events.GAMEMODEL_USE_HELP_TEXT, null));
    },
    postScore: function () {
        var questIndex = this.getCurrentQuestIndex();
        if (this.gameState === GameModel.GAME_OVER && questIndex > 0) {
            var dataStr = '{id: "' + this.idUser + '", name: "' + this.nameUser + '", level: ' + questIndex + ', score: ' + this.getScore() + '}';
            console.log(dataStr);
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: res.URLServer + "Default.aspx/postScore",
                data: dataStr,
                dataType: "json",
                success: function (msg) {
                    //$("#error").html(msg.d);
                    console.log(msg.d);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //$("#error").html(errorThrown);
                    console.log(errorThrown);
                }
            });
        }
    },
    getRank100: function () {
        var dataStr = '{id: "' + this.idUser + '"}';
        //var dataStr = '{id: "Guest"}';
        $.ajax({
            type: "POST",            
            contentType: "application/json; charset=utf-8",
            url: res.URLServer + "Default.aspx/getRank",
            data: dataStr,
            dataType: "json",
            success: function (msg) {
                var textMSG = JSON.stringify(msg);
                var smslLengthLast = textMSG.length - 8;
                textMSG = textMSG.substr(6, smslLengthLast);
                textMSG = textMSG.split("\\").join("");

                var gameModel = GameModel.getInstance();
                gameModel.rank100json = JSON.parse(textMSG);
                if (gameModel.rank100json.id !== "") {
                    console.log("new id");
                    gameModel.idUser = gameModel.rank100json.id;
                    gameModel.nameUser = gameModel.rank100json.id;
                }
                gameModel.getRankSuccess();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                //$("#error").html(errorThrown);
                console.log(errorThrown);
            }
        });
    },
    getRankSuccess: function () {
        if (this.gameState === GameModel.GAME_OVER) {
            this.fireEvent(new GameEvent(Events.GAMESCENE_GET_RANK_SUCCESS, null));
        } else {
            this.fireEvent(new GameEvent(Events.STARTSCENE_GET_RANK_SUCCESS, null));
        }
    },
    getCurrentQuestIndex: function () {
        return this.currentQuestIndex;
    },
    getCurrentQuest: function () {
        return this.questionListContinue[this.currentQuestIndex];
    },
    getStar: function () {
        return this.numOfStar;
    },
    getScore: function () {
        return this.score;
    },
    getStatusAnswer: function () {
        return this.statusAnswer;
    },
    setGameStateStartScene: function () {
        this.setGameState(GameModel.GAME_WAITING_STATE);
    },
    getInfoUser: function () {        
        var fbUtils = FacebookUtils.getInstance();
        this.idUser = fbUtils.getId();
        this.nameUser = fbUtils.getName();        

        if (this.idUser === null || this.idUser === undefined) {            
            this.idUser = "";            
            this.nameUser = "";            
        }
    }
});

GameModel.gameModelInstance = null;
GameModel.getInstance = function () {
    if (!GameModel.gameModelInstance) {
        GameModel.gameModelInstance = new GameModel();
    }
    return GameModel.gameModelInstance;
};

GameModel.GAME_WAITING_STATE = 0;
GameModel.SHOW_QUESTION_STATE = 1;
GameModel.ANSWER_QUESTION_STATE = 2;
GameModel.SHOW_RESULT_STATE = 18;
GameModel.GAME_OVER = 4;
GameModel.CONTIONUE_GAME = 5;

GameModel.SHOW_QUESTION_TIME = 1;
GameModel.ANSWER_QUESTION_TIME = 30;
GameModel.SHOW_RESULT_TIME = 5;
GameModel.TOTAL_STAR = 3;
GameModel.TOTAL_QUEST = 1;