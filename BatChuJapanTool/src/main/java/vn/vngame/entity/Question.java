package vn.vngame.entity;

public class Question {

    private String image;
    private String answer;
    private String answerBox;
    private String textHelp;
    private String imageResult;

    public Question() {
    }

    public Question(String image, String answer, String answerBox, String textHelp, String imageResult) {
        this.image = image;
        this.answer = answer;
        this.answerBox = answerBox;
        this.textHelp = textHelp;
        this.imageResult = imageResult;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getAnswer() {
        return answer;
    }

    public void setAnswer(String answer) {
        this.answer = answer;
    }

    public String getAnswerBox() {
        return answerBox;
    }

    public void setAnswerBox(String answerBox) {
        this.answerBox = answerBox;
    }

    public String getTextHelp() {
        return textHelp;
    }

    public void setTextHelp(String textHelp) {
        this.textHelp = textHelp;
    }

    public String getImageResult() {
        return imageResult;
    }

    public void setImageResult(String imageResult) {
        this.imageResult = imageResult;
    }

    @Override
    public String toString() {
        return answer.toUpperCase();
    }

}
