package vn.vngame.dao;

import com.google.gson.Gson;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.List;
import org.apache.commons.io.FileUtils;
import org.json.JSONException;
import vn.vngame.entity.DataGame;
import vn.vngame.entity.Question;
import vn.vngame.utils.EncryptUtils;

public class DataGameDAO {

    private DataGame dataGame;

    public DataGameDAO() {
        dataGame = new DataGame();
    }

    public void readFromFile() throws FileNotFoundException, IOException, JSONException {
        processFirstCreateQuest();

        String everything = FileUtils.readFileToString(new File("data\\questions.txt"), "UTF-8");
        String decryptData = EncryptUtils.decrypt(everything, "ViettelWapGame");
        System.out.println(decryptData);
        Gson gson = new Gson();
        dataGame = gson.fromJson(decryptData, DataGame.class);
    }

    private void processFirstCreateQuest() throws IOException {
        File theDir = new File("data");

        if (!theDir.exists()) {
            writeDataFile();
        }
    }

    public void update(Question question) throws IOException {
        for (int i = 0; i < dataGame.getQuestionList().size(); i++) {
            Question questionTemp = dataGame.getQuestionList().get(i);
            if (questionTemp == question) {
                Question questionCurrent = dataGame.getQuestionList().get(i);
                String pathImage = question.getImage();
                String answer = question.getAnswer();
                questionCurrent.setImage(pathImage);
                questionCurrent.setAnswer(answer);
            }
        }
        writeDataFile();
    }

    public void add(Question question) throws IOException {
        dataGame.getQuestionList().add(question);
        writeDataFile();
    }

    public Question get(int index) {
        Question question = dataGame.getQuestionList().get(index);
        return question;
    }

    public void delete(int index) throws IOException {
        dataGame.getQuestionList().remove(index);
        writeDataFile();
    }

    public List<Question> getQuestions() {
        return dataGame.getQuestionList();
    }

    public void writeDataFile() throws FileNotFoundException, IOException {
        Gson gson = new Gson();
        String value = gson.toJson(dataGame);

        value = EncryptUtils.encrypt(value, "ViettelWapGame");
        FileUtils.writeStringToFile(new File("data\\questions.txt"), value, "UTF-8");
    }

    public DataGame getDataGame() {
        return dataGame;
    }

    public void setDataGame(DataGame dataGame) {
        this.dataGame = dataGame;
    }

}
