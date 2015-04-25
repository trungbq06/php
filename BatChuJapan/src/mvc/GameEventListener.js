var GameEventListener = cc.Class.extend({
    handlerObject: undefined,
    handlerFunction: undefined,
    ctor: function(handlerObject, handlerFunction) {
        this.handlerObject = handlerObject;
        this.handlerFunction = handlerFunction;
    },
    getHandlerFunction: function() {
        return this.handlerFunction;
    },
    getHandlerObject: function() {
        return this.handlerObject;
    }
});

