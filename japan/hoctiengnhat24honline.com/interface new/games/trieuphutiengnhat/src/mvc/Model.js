var Model = cc.Class.extend({
    eventListeners: undefined,
    ctor: function () {
        this.eventListeners = new Array();
    },
    getEventListeners: function () {
        return this.eventListeners;
    },
    addEventListener: function (eventListener) {
        this.eventListeners.push(eventListener);
    },
    removeEventListener: function (eventListener) {
        this.eventListeners.splice(eventListener, 1);
    },
    fireEvent: function (event) {
        for (var i = 0; i < this.eventListeners.length; i++) {
            var listener = this.eventListeners[i];
            listener.func.call(listener.obj, event);
        }
    }
});