var CustomTableViewCell = cc.TableViewCell.extend({
    m_bTable: 0,
    m_bSlider: 0,
    tableView: undefined,
    slider: undefined,
    draw: function (ctx) {
        this._super(ctx);
    }
});
var TableTopicListLayer = cc.Layer.extend({
    isTableViewScroll: false,
    isSliderScroll: false,
    cellOld: null,
    _gameScene: null,
    topicList: null,
    cellBeforeChoose: null,
    navSpriteBeforeChoose: null,
    ctor: function (gameScene) {
        this._super();
        this._gameScene = gameScene;
        this.topicList = this._gameScene.gameModel.getTopicList();
        this.currentIndexLoaded = 0;
        this.initialize();
    },
    initialize: function () {
        var size = cc.winSize;

        this.slider = new cc.ControlSlider(res.SCROLLBARBG_PNG, res.SCROLLBARBG_PNG, res.THUMRSCROLL_PNG);
        this.slider.anchorX = 0.5;
        this.slider.anchorY = 1.0;
        this.slider.setMinimumValue(-8);
        this.slider.setMaximumValue(108);
        this.slider.minAllowedValue = 0;
        this.slider.maxAllowedValue = 100;
        this.slider.setRotation(90);
        this.slider.setPosition(size.width - 23, size.height / 2 - 40);
        this.slider.setTag(1);
        this.addChild(this.slider, 5);
        this.slider.addTargetWithActionForControlEvents(this, this.valueChanged, cc.CONTROL_EVENT_VALUECHANGED);

        this.tableView = new cc.TableView(this, cc.size(931, 507));
        this.tableView.setPosition(20, 49);
        this.tableView.setDelegate(this);
        this.tableView.tag = 0;
        this.addChild(this.tableView, 2);
        this.tableView.setDirection(cc.SCROLLVIEW_DIRECTION_VERTICAL);
        this.tableView.setVerticalFillOrder(cc.TABLEVIEW_FILL_TOPDOWN);
        this.tableView.reloadData();
        if (this.tableView.getContentSize().height <= this.tableView.getViewSize().height) {
            this.slider.setVisible(false);
            this.tableView.setBounceable(false);
        }
        return true;
    },
    valueChanged: function (sender, controlEvent) {
        if (this.tableView.getContentSize().height <= this.tableView.getViewSize().height) {
            return;
        }
        this.isSliderScroll = true;

        if (this.isTableViewScroll === false) {
            var minOffset = this.tableView.minContainerOffset().y;
            var maxOffset = this.tableView.maxContainerOffset().y;

            var offset = (this.slider.getValue() * (maxOffset - minOffset) / 100) + minOffset;
            this.tableView.setContentOffset(cc.p(0, offset));
        }
        else {
            this.isTableViewScroll = false;
        }
    },
    scrollViewDidScroll: function (view) {
        if (this.tableView.getContentSize().height <= this.tableView.getViewSize().height) {
            return;
        }
        this.isTableViewScroll = true;

        if (this.isSliderScroll === false) {
            var minOffset = this.tableView.minContainerOffset().y;
            var maxOffset = this.tableView.maxContainerOffset().y;

            var offset = (this.tableView.getContentOffset().y - minOffset) / (maxOffset - minOffset) * 100;
            this.slider.setValue(offset);
        } else {
            this.isSliderScroll = false;
        }
    },
    scrollViewDidZoom: function (view) {

    },
    tableCellTouched: function (table, cell) {
        if (this.cellBeforeChoose === cell) {
            this._gameScene.onClickChooseTopic(cell._idx);
            return;
        }

        if (this.cellBeforeChoose !== null) {
            this.cellBeforeChoose.removeChild(this.navSpriteBeforeChoose, true);
            this.cellBeforeChoose = null;
        }

        this.cellBeforeChoose = cell;

        this.navSpriteBeforeChoose = cc.Sprite.create(res.BGNAV_SELECT_PNG);
        this.navSpriteBeforeChoose.x = 0;
        this.navSpriteBeforeChoose.y = 0;
        this.navSpriteBeforeChoose.anchorX = 0;
        this.navSpriteBeforeChoose.anchorY = 0;
        cell.addChild(this.navSpriteBeforeChoose, 1);
    },
    tableCellSizeForIndex: function (table, idx) {
        return cc.size(931, 83);
    },
    tableCellAtIndex: function (table, idx) {
        var strValue = idx.toFixed(0);
        var cell = table.dequeueCell();


        var cell = new CustomTableViewCell();
        var navSprite = cc.Sprite.create(res.BGNAV_PNG);
        navSprite.x = 0;
        navSprite.y = 0;
        navSprite.anchorX = 0;
        navSprite.anchorY = 0;
        cell.addChild(navSprite, 5);

        var nameStr = this.topicList[strValue].name;
        if (nameStr.length > 50) {
            nameStr = nameStr.substring(0, 47) + " ..."
        }
        var labelName = new cc.LabelTTF(nameStr, "Tahoma", 24, cc.size(730, 30), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
        labelName.setColor(cc.color(255, 255, 255));
        labelName.setPosition(450, 45);
        cell.addChild(labelName, 5);

        var totalQuest = this.topicList[strValue].questionList.length;
        var labelTotalQuest = new cc.LabelTTF(totalQuest + " Câu", "Tahoma", 24);
        labelTotalQuest.setColor(cc.color(255, 255, 255));
        labelTotalQuest.setPosition(860, 45);
        cell.addChild(labelTotalQuest, 5);

        return cell;
    },
    numberOfCellsInTableView: function (table) {
        return this.topicList.length;
    }

});