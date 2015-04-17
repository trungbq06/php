package quangnd.com.entity;

import java.util.List;

/**
 * @author QUANGND
 */
public class TopicEntity {

    private String id;
    private String name;
    private int level;
    private List<QuestionEntity> questionList;

    public TopicEntity() {
    }

    public TopicEntity(String id, String name, int level, List<QuestionEntity> questionList) {
        this.id = id;
        this.name = name;
        this.level = level;
        this.questionList = questionList;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getLevel() {
        return level;
    }

    public void setLevel(int level) {
        this.level = level;
    }

    public List<QuestionEntity> getQuestionList() {
        return questionList;
    }

    public void setQuestionList(List<QuestionEntity> questionList) {
        this.questionList = questionList;
    }

    @Override
    public String toString() {
        return name;
    }

}
