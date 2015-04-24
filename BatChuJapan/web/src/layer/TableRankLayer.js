var CustomTableViewCell = cc.TableViewCell.extend({
    m_bTable: 0,
    m_bSlider: 0,
    tableView: undefined,
    slider: undefined,
    draw: function (ctx) {
        this._super(ctx);
    }
});
var TableRankLayer = cc.Layer.extend({
    isTableViewScroll: false,
    isSliderScroll: false,
    ctor: function (gameScene) {
        this._super();
        this._gameScene = gameScene;
        this.initialize();
        this.currentIndexLoaded = 0;
    },
    initialize: function () {
        var size = cc.winSize;

        this.slider = new cc.ControlSlider(res.ScrollBarBg_png, res.ScrollBarBg_png, res.ThumbScroll_png);
        this.slider.anchorX = 0.5;
        this.slider.anchorY = 1.0;
        this.slider.setMinimumValue(-8);
        this.slider.setMaximumValue(108);
        this.slider.minAllowedValue = 0;
        this.slider.maxAllowedValue = 100;
        this.slider.setRotation(90);
        this.slider.setPosition(size.width / 2 + 307, size.height / 2 - 15);
//        this.slider.tag = 1;
        this.slider.setTag(1);
        this.addChild(this.slider, 5);
        this.slider.addTargetWithActionForControlEvents(this, this.valueChanged, cc.CONTROL_EVENT_VALUECHANGED);

        this.tableView = new cc.TableView(this, cc.size(580, 410));
        this.tableView.setPosition(size.width / 2 - this.tableView.width / 2 + 5, 120);
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
    },
    tableCellSizeForIndex: function (table, idx) {
        return cc.size(60, 45);
    },
    tableCellAtIndex: function (table, idx) {
        var strValue = idx;
        var cell = table.dequeueCell();

        var labelIndex;
        var labelName;
        var labelStar;
        var labelLevel;
        var spriteStar;
//        if (!cell) {            
//        var label;
//        if (idx === this.numberOfCellsInTableView() - 1) {
//            this.isLoadComplete = true;
//        }
//        if (!cell) {
            cell = new CustomTableViewCell();

            var navSprite;
            if (this._gameScene.gameModel.idUser !== this._gameScene.gameModel.rank100json.Top100[strValue].id){
                navSprite = cc.Sprite.create(res.FirstNav_png);
            } else {
                navSprite = cc.Sprite.create(res.USERNAV_PNG);
            }
            navSprite.x = 0;
            navSprite.y = 0;
            navSprite.anchorX = 0;
            navSprite.anchorY = 0;
            cell.addChild(navSprite);

            var valueRank;
            if (this._gameScene.gameModel.idUser !== this._gameScene.gameModel.rank100json.Top100[strValue].id || idx < 100) {
                valueRank = parseInt(strValue) + 1;
            } else {                
                valueRank = this._gameScene.gameModel.rank100json.Top100[strValue].position === 0 ? "0" : this._gameScene.gameModel.rank100json.Top100[strValue].position;
            }

            labelIndex = new cc.LabelTTF(valueRank, res.FontCustom, 30.0, cc.size(50, 30), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
            labelIndex.setColor(cc.color(0, 0, 0));
            labelIndex.setPosition(30, 23);
//            labelIndex.anchorX = 0;
//            labelIndex.anchorY = 0;
            labelIndex.tag = 123;
            cell.addChild(labelIndex);            
                        
            var name;
            if (this._gameScene.gameModel.idUser !== this._gameScene.gameModel.rank100json.Top100[strValue].id) {
                name = this._gameScene.gameModel.rank100json.Top100[strValue].name;
                if (((name.indexOf("9") === 0 && name.length === 9) || (name.indexOf("1") === 0 && name.length === 10)) && !isNaN(name)) {
                    name = name.substring(0, name.length - 2);
                    name = "0" + name + "xx";
                }
            } else {
                name = "Bạn";
            }

            if (name.length > 18) {
                name = name.substring(0, 18);
            }            

            labelName = new cc.LabelTTF(name, res.FontCustom, 30.0, cc.size(250, 30), cc.TEXT_ALIGNMENT_LEFT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
            labelName.setColor(cc.color(0, 0, 0));
            labelName.setPosition(240, 23);
//            labelName.anchorX = 0;
//            labelName.anchorY = 0;
            labelName.tag = 456;
            cell.addChild(labelName);

            var level = this._gameScene.gameModel.rank100json.Top100[strValue].level;
            labelLevel = new cc.LabelTTF(level, res.FontCustom, 30.0, cc.size(80, 30), cc.TEXT_ALIGNMENT_CENTER, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
            labelLevel.setColor(cc.color(0, 0, 0));
            labelLevel.setPosition(380, 23);
//            labelLevel.anchorX = 0;
//            labelLevel.anchorY = 0;
            labelLevel.tag = 987;
            cell.addChild(labelLevel);

            var score = this._gameScene.gameModel.rank100json.Top100[strValue].score;
            labelStar = new cc.LabelTTF(score, res.FontCustom, 30.0, cc.size(80, 30), cc.TEXT_ALIGNMENT_RIGHT, cc.VERTICAL_TEXT_ALIGNMENT_CENTER);
            labelStar.setColor(cc.color(0, 0, 0));
            labelStar.setPosition(475, 23);
//            labelStar.anchorX = 0;
//            labelStar.anchorY = 0;
            labelStar.tag = 789;
            cell.addChild(labelStar);

            spriteStar = cc.Sprite.create(res.RankingStar_png);
            spriteStar.setPosition(535, 24);
            cell.addChild(spriteStar);
//        } else {
//            labelIndex = cell.getChildByTag(123);
//            labelIndex.setString(strValue);
//        }
        return cell;

    },
    numberOfCellsInTableView: function (table) {
        return this._gameScene.gameModel.rank100json.Top100.length;
    }

});