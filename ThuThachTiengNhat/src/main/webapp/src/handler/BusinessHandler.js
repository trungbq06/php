var BusinessHandler = GameHandler.extend({
    ctor: function () {

    },
    processEvent: function (gameEvent) {
        var gameModel = this.getController().getModel();

        if (gameEvent.getEventCode() === GameEvent.GAME_BEGIN || gameEvent.getEventCode() === Events.OPEN_MAIN_MENU_SCENE) {
            if (gameEvent.getEventCode() === Events.OPEN_MAIN_MENU_SCENE) {
                SoundModel.getInstance().buttonClickSound();
            }

            if (gameEvent.getEventCode() === GameEvent.GAME_BEGIN) {
                SoundModel.getInstance().playMusic(res.MUISC_BG, true);
            }

            var mainMenuScene = new MainMenuScene(gameModel);
            this.getController().listen(mainMenuScene);
            cc.director.runScene(mainMenuScene);

            gameModel.loadDB();

        } else if (gameEvent.getEventCode() === Events.OPEN_TOPIC_LIST_SCENE) {
            SoundModel.getInstance().buttonClickSound();
            gameModel.setTopicList(TopicEntity.N1);
            var topicListScene = new TopicListScene(gameModel);
            this.getController().listen(topicListScene);
            cc.director.runScene(topicListScene);

        } else if (gameEvent.getEventCode() === Events.SHARE_FACEBOOK) {
            SoundModel.getInstance().buttonClickSound();
            FacebookUtils.shareGameToFB();

        } else if (gameEvent.getEventCode() === Events.SHARE_SCORE_FACEBOOK) {
            SoundModel.getInstance().buttonClickSound();
            var indexTopic = gameModel.getLevel();
            var levelStr;
            switch (indexTopic) {
                case 1:
                    levelStr = "N1";
                    break;
                case 2:
                    levelStr = "N2";
                    break;
                case 3:
                    levelStr = "N3";
                    break;
                case 4:
                    levelStr = "N4";
                    break;
                case 5:
                    levelStr = "N5";
                    break;
            }
            FacebookUtils.shareScoreToFB(gameModel.getScore(), levelStr);

        } else if (gameEvent.getEventCode() === Events.CHANGE_LEVEL_TOPIC_LIST_SCENE) {
            SoundModel.getInstance().buttonClickSound();
            var level = gameEvent.getEventData();
            gameModel.setTopicList(level);

        } else if (gameEvent.getEventCode() === Events.OPEN_GAME_SCENE) {
            SoundModel.getInstance().buttonClickSound();

            var indexTopic = gameEvent.getEventData();
            gameModel.setTopicChoose(indexTopic);

            var gameScene = new GameScene(gameModel);
            this.getController().listen(gameScene);
            cc.director.runScene(gameScene);
            gameModel.play();

        } else if (gameEvent.getEventCode() === Events.OPEN_RANK_SCENE) {
            SoundModel.getInstance().buttonClickSound();

            var rankScene = new RankScene(gameModel);
            this.getController().listen(rankScene);
            cc.director.runScene(rankScene);
        } else if (gameEvent.getEventCode() === Events.CHOOSE_ANSWER_GAME_SCENE) {
            SoundModel.getInstance().buttonClickSound();

            var index = gameEvent.getEventData();
            gameModel.userChooseAnswer(index);

        } else if (gameEvent.getEventCode() === Events.MUSIC_ANSWER_GAME_SCENE) {
            if (gameModel.getStatusCorrectAnswer() === true) {
                SoundModel.getInstance().winSound();
            } else {
                SoundModel.getInstance().loseSound();
            }

        }
    }
});