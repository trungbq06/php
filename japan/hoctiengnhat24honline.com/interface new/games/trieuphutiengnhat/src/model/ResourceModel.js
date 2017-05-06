var ResourceModel = cc.Class.extend({
    topicList: null,
    ctor: function () {
    },
    loadData: function () {
        cc.loader.loadTxt(res.TOPIC_LIST_JSON, function (err, data) {
            if (err) {
                console.log("load failed");
            } else {
                var dataJson = JSON.parse(data);
                var resourceModel = new ResourceModel.getInstance();
                resourceModel.setTopicList(dataJson.topicList);
            }
        });
    },
    setTopicList: function (topicList) {
        this.topicList = topicList;
    },
    getTopicList: function () {
        return this.topicList;
    }
});

ResourceModel.resourceModelInstance;
ResourceModel.getInstance = function () {
    if (!ResourceModel.resourceModelInstance) {
        ResourceModel.resourceModelInstance = new ResourceModel();
    }
    return ResourceModel.resourceModelInstance;
};