var GameEvent = cc.Class.extend({
    eventCode: null,
    eventData: null,
    ctor: function(eventCode, eventData) {
        this.eventCode = eventCode;
        this.eventData = eventData;
    },
    getEventCode: function() {
        return this.eventCode;
    },
    getEventData: function() {
        return this.eventData;
    }

});

GameEvent.NO_EVENT = 0;
GameEvent.GAME_BEGIN = 1;
GameEvent.GAME_START = 2;
GameEvent.GAME_STOP = 3;


