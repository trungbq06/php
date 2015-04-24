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
        
        } else if (gameEvent.getEventCode() === Events.BUTTON_CLICK) {
            SoundModel.getInstance().buttonClickSound();

        } else if (gameEvent.getEventCode() === Events.LOSE_GAME) {
            SoundModel.getInstance().stopCurrentEffect();
            this.soundId = SoundModel.getInstance().loseGameSound();

        } else if (gameEvent.getEventCode() === Events.WIN_GAME) {
            this.soundId = SoundModel.getInstance().winGameSound();

        }
    }
});