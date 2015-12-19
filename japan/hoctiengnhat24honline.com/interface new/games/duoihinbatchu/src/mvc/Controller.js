var Controller = cc.Class.extend({
    model: undefined,
    handlerList: undefined,
    ctor: function () {
        this.model = null;
        this.handlerList = new Array();
    },
    getHandlerList: function () {
        return this.handlerList;
    },
    getModel: function () {
        return this.model;
    },
    setModel: function (model) {
        if (this.model !== model)
        {
            this.model = model;
        }
    },
    start: function () {
        var event = new GameEvent(GameEvent.GAME_BEGIN);
        this.processEvent(event);
    },
    stop: function () {
        var event = new GameEvent(GameEvent.GAME_STOP);
        this.processEvent(event);
    },
    listen: function (view) {
        var listener = {
            "obj":this, 
            "func": this.processEvent
        };
        view.addEventListener(listener);
    },
    addHandler: function (handler) {
        handler.setController(this);
        this.getHandlerList().push(handler);
    },
    removeHandler: function (handler) {
        this.getHandlerList().splice(handler, 1);
    },
    processEvent: function (event) {
        for (var i = 0; i < this.handlerList.length; i++) {
            var gameHandler = this.handlerList[i];
            gameHandler.processEvent(event);
        }
    }

});