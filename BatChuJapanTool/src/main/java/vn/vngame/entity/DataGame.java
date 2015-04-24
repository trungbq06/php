package vn.vngame.entity;

import java.util.ArrayList;
import java.util.List;

public class DataGame {

    private int answerTime;
    private String eventLink;
    private List<Question> questionList;

    public DataGame() {
        questionList = new ArrayList<>();
    }

    public DataGame(int answerTime, String eventLink, List<Question> questionList) {
        this.answerTime = answerTime;
        this.eventLink = eventLink;
        this.questionList = questionList;
    }

    public int getAnswerTime() {
        return answerTime;
    }

    public void setAnswerTime(int answerTime) {
        this.answerTime = answerTime;
    }

    public String getEventLink() {
        return eventLink;
    }

    public void setEventLink(String eventLink) {
        this.eventLink = eventLink;
    }

    public List<Question> getQuestionList() {
        return questionList;
    }

    public void setQuestionList(List<Question> questionList) {
        this.questionList = questionList;
    }

}
