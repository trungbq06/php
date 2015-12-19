var ResourceModel = cc.Class.extend({
    questionList: null,
    gameModel: null,
    volumeState: 'on',
    answerTime: null,
    eventLink: null,
    ctor: function () {
    },
    loadQuestion: function () {
        /*cc.loader.loadTxt(res.Questions_json, function (err, data) {
            if (err) {
                console.log("load failed");
            } else {
                var dataDecrypt = Utils.DecryptData(data, "ViettelWapGame");                
                var dataJson = JSON.parse(dataDecrypt);
                var resourceModel = new ResourceModel.getInstance();
                resourceModel.setAnswerTime(dataJson.answerTime);
                resourceModel.eventLink = dataJson.eventLink;
                resourceModel.setQuestList(dataJson.questionList);                
                resourceModel.readDataSuccess();
            }
        });*/
    },
    setQuestList: function (questionList) {
        this.questionList = questionList;
    },
    getQuestList: function () {
        return this.questionList;
    },
    readDataSuccess: function () {
//        var gameModel = GameModel.getInstance();
//        gameModel.play();
    },
    setAnswerTime: function (answerTime) {
        this.answerTime = answerTime;
    },
    getAnswerTime: function () {
        return this.answerTime;
    },
    getEventLink: function () {
        return this.eventLink;
    }
});

ResourceModel.resourceModelInstance;
ResourceModel.getInstance = function () {
    if (!ResourceModel.resourceModelInstance) {
        ResourceModel.resourceModelInstance = new ResourceModel();
    }
    return ResourceModel.resourceModelInstance;
};