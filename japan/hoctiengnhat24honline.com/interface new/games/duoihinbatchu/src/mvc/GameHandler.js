var GameHandler = cc.Class.extend({
    controller: undefined,
    ctor: function() {
        this.controller = null;
    },
    processEvent: function(event) {

    },
    getController: function() {
        return this.controller;
    },
    setController: function(controller) {
        this.controller = controller;
    }
});
