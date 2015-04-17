package quangnd.com.entity;

import java.util.ArrayList;
import java.util.List;

/**
 * @author QUANGND
 */
public class TopicListEntity {

    private List<TopicEntity> topicList;

    public TopicListEntity() {

    }

    public TopicListEntity(List<TopicEntity> topicList) {
        this.topicList = topicList;
    }

    public List<TopicEntity> getTopicList() {
        if (topicList == null) {
            topicList = new ArrayList<>();
        }
        return topicList;
    }

    public void setTopicList(List<TopicEntity> topicList) {
        this.topicList = topicList;
    }

}
