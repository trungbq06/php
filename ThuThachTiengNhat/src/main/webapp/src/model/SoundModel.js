var SoundModel = cc.Class.extend({
    _audioEngine: null,
    currentEffectId: 0,
    volumeState: 'on',
    ctor: function () {
        this._audioEngine = cc.audioEngine;

    },
    preloadEffect: function (path) {
        this._audioEngine.preloadEffect(path);
    },
    preloadMusic: function (path) {
        this._audioEngine.preloadMusic(path);
    },
    playEffect: function (path, loop) {
        var soundId = this._audioEngine.playEffect(path, loop);
        return  soundId;
    },
    playEffectWithTimeout: function (path, loop, delay) {
        var soundId;
        var _this = this;
        setTimeout(function () {
            soundId = _this._audioEngine.playEffect(path, loop);
            SoundModel.getInstance().currentEffectId = soundId;
        }, delay * 1000);
        return soundId;
    },
    setEffectVolume: function (volume) {
        this._audioEngine.setEffectsVolume(volume)
    },
    playMusic: function (path, loop) {
        this.currentEffectId = this._audioEngine.playMusic(path, loop);
    },
    playMusicWithTimeout: function (path, loop, delay) {
        var _this = this;
        setTimeout(function () {
            _this._audioEngine.playMusic(path, loop);
        }, delay * 1000);
    },
    pauseEffect: function (soundId) {
        this._audioEngine.pauseEffect(soundId);
    },
    pauseMusic: function () {
        this.volumeState = 'off';
        this._audioEngine.pauseMusic();
    },
    resumeMusic: function () {
        this.volumeState = 'on';
        this._audioEngine.resumeMusic();
    },
    pauseAllEffects: function () {
        this._audioEngine.pauseAllEffects();
    },
    resumeEffect: function (soundId) {
        return this._audioEngine.resumeEffect(soundId);
    },
    resumeAllEffects: function () {
        this._audioEngine.resumeAllEffects();
    },
    stopEffect: function (soundId) {
        this._audioEngine.stopEffect(soundId);
    },
    stopAllEffects: function () {
        this._audioEngine.stopAllEffects();
    },
    stopMusic: function () {
        this._audioEngine.stopMusic();
    },
    buttonClickSound: function () {
        this.playEffect(SoundModel.Effect.BUTTON_CLICK, false);
    },
    winSound: function () {
        this.playEffect(SoundModel.Effect.WIN, false);
    },
    loseSound: function () {
        this.playEffect(SoundModel.Effect.LOSE, false);
    },
    playMusicGame: function (path, delay) {
        this.currentEffectId = this.playEffectWithTimeout(path, false, delay);
        console.log(this.currentEffectId);
    },
    stopCurrentEffect: function () {
        if (this.currentEffectId !== 0) {
            this.stopEffect(this.currentEffectId);
        }
    },
    turnOnSound: function () {
        this.volumeState = 'on';
        this._audioEngine.setEffectsVolume(1.0);
    },
    turnOffSound: function () {
        this.volumeState = 'off';
        this._audioEngine.setEffectsVolume(0.0);
    },
    pauseSound: function () {
        this.pauseEffect(this.currentEffectId);
    },
    resumeSound: function () {
        this.resumeEffect(this.currentEffectId);
    },
    turnOnMusic: function () {
        this.volumeState = 'on';
        this._audioEngine.setMusicVolume(1.0);
    },
    turnOffMusic: function () {
        this.volumeState = 'off';
        this._audioEngine.setMusicVolume(0.0);
    }
});
SoundModel.soundInstance;
SoundModel.getInstance = function () {
    if (!SoundModel.soundInstance) {
        SoundModel.soundInstance = new SoundModel();
    }
    return SoundModel.soundInstance;
};

SoundModel.Effect = {
    BUTTON_CLICK: "res/sounds/button_click.mp3",
    WIN: "res/sounds/win.mp3",
    LOSE: "res/sounds/lose.mp3"
};