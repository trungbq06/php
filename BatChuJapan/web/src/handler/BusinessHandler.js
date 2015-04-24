var BusinessHandler = GameHandler.extend({
    ctor: function () {

    },
    processEvent: function (gameEvent) {
        var gameModel = this.getController().getModel();
      
        if (gameEvent.getEventCode() === GameEvent.GAME_BEGIN) {
            var startScene = new StartScene(gameModel);
            this.getController().listen(startScene);
            cc.director.runScene(startScene);
            
        } else if (gameEvent.getEventCode() === Events.GAMESCENE_HELP_CLICK) {
            SoundModel.getInstance().useHelpSound();
            gameModel.useHelp(gameEvent.getEventData());

        } else if (gameEvent.getEventCode() === Events.GAMESCENE_TEXT_HELP_CLICK) {
            SoundModel.getInstance().useHelpSound();
            gameModel.useTextHelp();

        } else if (gameEvent.getEventCode() === Events.GAMESCENE_ANSWER_CLICK) {
            SoundModel.getInstance().buttonClickSound();
            SoundModel.getInstance().stopCurrentEffect();
            gameModel.compareAnswer(gameEvent.getEventData());

        } else if (gameEvent.getEventCode() === Events.GAMESCENE_NEXT_STAGE_CLICK) {
            SoundModel.getInstance().buttonClickSound();
            SoundModel.getInstance().stopCurrentEffect();
            gameModel.nextLocation();

        } else if (gameEvent.getEventCode() === Events.GAMESCENE_REPLAY_CLICK) {
            SoundModel.getInstance().stopCurrentEffect();
            SoundModel.getInstance().buttonClickSound();
            gameModel.play();
        } else if (gameEvent.getEventCode() === Events.STARTSCENE_PLAY_CLICK) {
            SoundModel.getInstance().buttonClickSound();
            var gameScene = new GameScene(gameModel);
            this.getController().listen(gameScene);
            cc.director.runScene(gameScene);
            gameModel.play();

        } else if (gameEvent.getEventCode() === Events.GAMEMODEL_STOP_GAME) {
            SoundModel.getInstance().stopCurrentEffect();
            SoundModel.getInstance().buttonClickSound();
            gameModel.stopGame();
        } else if (gameEvent.getEventCode() === Events.GAMEMODEL_CONTINUE_GAME) {
            gameModel.continueGame();
        } else if (gameEvent.getEventCode() === Events.BACKSTART_SCENE) {
            gameModel.setGameStateStartScene();
            SoundModel.getInstance().buttonClickSound();
            SoundModel.getInstance().stopCurrentEffect();
            var startScene = new StartScene(gameModel);
            this.getController().listen(startScene);
            cc.director.runScene(startScene);

        } else if (gameEvent.getEventCode() === Events.BUTTON_CLICK) {
            SoundModel.getInstance().buttonClickSound();

        } else if (gameEvent.getEventCode() === Events.LOSE_GAME) {
            SoundModel.getInstance().stopCurrentEffect();
            this.soundId = SoundModel.getInstance().loseGameSound();

        } else if (gameEvent.getEventCode() === Events.WIN_GAME) {
            this.soundId = SoundModel.getInstance().winGameSound();

        } else if (gameEvent.getEventCode() === Events.VOLUME_OFF) {
            SoundModel.getInstance().turnOffSound();

        } else if (gameEvent.getEventCode() === Events.VOLUME_ON) {
            SoundModel.getInstance().turnOnSound();

        } else if (gameEvent.getEventCode() === Events.STOP_EFFECT) {
            SoundModel.getInstance().stopCurrentEffect();
        }
    }
});