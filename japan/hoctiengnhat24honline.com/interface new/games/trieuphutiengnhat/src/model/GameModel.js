var GameModel = Model.extend({
    remainingTime: 0,
    winSize: null,
    resouceModel: null,
    currentQuestionInfo: null,
    currentQuestionIndex: -1,
    score: 0,
    chooseAnswer: 1,
    topicList: null,
    topicChoose: null,
    statusCorrectAnswer: false,
    level: 0,
    load: function () {
        this.start();
    },
    start: function () {
        cc.director.getScheduler().scheduleUpdateForTarget(this, 1, false);
    },
    stop: function () {
        cc.director.getScheduler().unscheduleUpdateForTarget(this);
    },
    update: function (dt) {
        if (this.remainingTime === 0) {
            return;
        }

        var remainingTime = this.remainingTime - dt;
        if (remainingTime <= 0) {
            remainingTime = 0;
        }

        this.setRemainingTime(remainingTime);
    },
    loadDB: function () {
        this.resouceModel = ResourceModel.getInstance();
        this.resouceModel.loadData();
    },
    play: function () {
        this.winSize = cc.winSize;
        this.currentQuestionIndex = -1;
        this.score = 0;
        this.startGame();
    },
    startGame: function () {
        this.setGameState(GameModel.START_GAME_STATE);
        this.fireEvent(new GameEvent(Events.GAMEMODEL_START_GAME, null));
    },
    playerGame: function () {
        this.setGameState(GameModel.START_COUNT_DOWN_PLAY_STATE);
    },
    setGameState: function (gameState) {
        if (this.gameState !== gameState) {
            switch (gameState) {
                case GameModel.START_GAME_STATE:
                    this.remainingTime = GameModel.START_GAME_TIME;
                    break;
                case GameModel.START_COUNT_DOWN_PLAY_STATE:
                    this.remainingTime = GameModel.START_COUNT_DOWN_PLAY_TIME;
                    break;
                case GameModel.SHOW_QUESTION_STATE:
                    this.remainingTime = GameModel.QUESTION_TIME;
                    break;
                case GameModel.SHOW_ANSWER_STATE:
                    this.remainingTime = GameModel.ANSWER_TIME;
                    break;
                case GameModel.CHOOSE_ANSWER_STATE:
                    this.remainingTime = GameModel.DELAY_SHOW_CORRECT_ANSWER_TIME;
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

            if (this.gameState === GameModel.START_COUNT_DOWN_PLAY_STATE) {
                this.fireEvent(new GameEvent(Events.GAMEMODEL_COUNT_DOWN_TIME_CHANGED, null));
            } else if (this.gameState === GameModel.SHOW_QUESTION_STATE) {
                this.fireEvent(new GameEvent(Events.GAMEMODEL_REMAIN_TIME_CHANGED, null));
            }

            if (remainingTime === 0) {
                switch (this.gameState) {
                    case GameModel.START_GAME_STATE:
                        this.playerGame();
                        break;
                    case GameModel.START_COUNT_DOWN_PLAY_STATE:
                        this.nextQuestion();
                        break;
                    case GameModel.SHOW_QUESTION_STATE:
                        this.showAnswer();
                        break;
                    case GameModel.SHOW_ANSWER_STATE:
                        this.nextQuestion();
                        break;
                    case GameModel.CHOOSE_ANSWER_STATE:
                        this.compareAnswer();
                        break;
                    default:
                        break;
                }
            }
        }
    },
    getRemainingTime: function () {
        return this.remainingTime;
    },
    nextQuestion: function () {
        if (this.currentQuestionIndex === this.topicChoose.questionList.length - 1) {
            this.setGameState(GameModel.SHOW_SCORE_STATE);
            this.fireEvent(new GameEvent(Events.GAMEMODEL_SHOW_SCORE, null));
            return;
        }

        this.statusCorrectAnswer = false;
        this.currentQuestionIndex++;
        this.currentQuestionInfo = this.topicChoose.questionList[this.currentQuestionIndex];
        this.setGameState(GameModel.SHOW_QUESTION_STATE);
        this.fireEvent(new GameEvent(Events.GAMEMODEL_SHOW_QUESTION, null));
    },
    showAnswer: function () {
        this.setGameState(GameModel.SHOW_ANSWER_STATE);
        this.fireEvent(new GameEvent(Events.GAMEMODEL_SHOW_ANSWER, null));
    },
    getAnswerIndex: function () {
        var correctAnswer = this.currentQuestionInfo.correctAnswer;
        switch (correctAnswer) {
            case "A":
                return 1;
            case "B":
                return 2;
            case "C":
                return 3;
            case "D":
                return 4;
        }
        return 1;
    },
    getCurrentQuestionInfo: function () {
        return this.currentQuestionInfo;
    },
    getCurrentQuestionIndex: function () {
        return this.currentQuestionIndex;
    },
    getScore: function () {
        return this.score;
    },
    getLevel: function () {
        return this.level;
    },
    setTopicList: function (level) {
        this.level = level;
        this.topicList = new Array();
        var topicListFull = this.resouceModel.getTopicList();
        for (var i = 0; i < topicListFull.length; i++) {
            var topicEntityTemp = topicListFull[i];
            if (level === topicEntityTemp.level) {
                this.topicList.push(topicEntityTemp);
            }
        }
        this.fireEvent(new GameEvent(Events.GAMEMODEL_GET_TOPIC_LIST_SUCCESS, null));
    },
    getTopicList: function () {
        return this.topicList;
    },
    setTopicChoose: function (index) {
        this.topicChoose = this.topicList[index];
    },
    userChooseAnswer: function (index) {
        if (this.gameState === GameModel.CHOOSE_ANSWER_STATE) {
            this.fireEvent(new GameEvent(Events.GAMEMODEL_CHOOSE_ANSWER_FAILED, this.chooseAnswer));
            return;
        }

        if (this.gameState === GameModel.SHOW_ANSWER_STATE) {
            this.fireEvent(new GameEvent(Events.GAMEMODEL_CHOOSE_ANSWER_FAILED, this.getAnswerIndex()));
            return;
        }
        this.chooseAnswer = index;
        this.setGameState(GameModel.CHOOSE_ANSWER_STATE);
    },
    compareAnswer: function () {
        var result;
        var correctAnswer = this.currentQuestionInfo.correctAnswer;
        switch (correctAnswer) {
            case "A":
                result = 1;
                break;
            case "B":
                result = 2;
                break;
            case "C":
                result = 3;
                break;
            case "D":
                result = 4;
                break;
        }

        if (result === this.chooseAnswer) {
            this.score += 10;
            this.statusCorrectAnswer = true;
        }

        this.setGameState(GameModel.SHOW_ANSWER_STATE);
        this.fireEvent(new GameEvent(Events.GAMEMODEL_SHOW_ANSWER, null));
    },
    getStatusCorrectAnswer: function () {
        return this.statusCorrectAnswer;
    }
});

GameModel.gameModelInstance;
GameModel.getInstance = function () {
    if (!GameModel.gameModelInstance) {
        GameModel.gameModelInstance = new GameModel();
    }
    return GameModel.gameModelInstance;
};

GameModel.START_GAME_TIME = 1;
GameModel.START_COUNT_DOWN_PLAY_TIME = 5;
GameModel.QUESTION_TIME = 21;
GameModel.ANSWER_TIME = 5;
GameModel.DELAY_SHOW_CORRECT_ANSWER_TIME = 3;

GameModel.START_GAME_STATE = 1;
GameModel.START_COUNT_DOWN_PLAY_STATE = 2;
GameModel.SHOW_QUESTION_STATE = 3;
GameModel.SHOW_ANSWER_STATE = 4;
GameModel.SHOW_SCORE_STATE = 5;
GameModel.CHOOSE_ANSWER_STATE = 6;