package quangnd.com.dao;

import com.google.gson.Gson;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import org.apache.commons.io.FileUtils;
import org.json.JSONException;
import quangnd.com.entity.QuestionEntity;
import quangnd.com.entity.TopicEntity;
import quangnd.com.entity.TopicListEntity;

public class TopicDAO {

    private final String PATH_DATA = "data\\topicList.json";
    private TopicListEntity topicListEntity;

    public TopicDAO() {
        topicListEntity = new TopicListEntity();
    }

    public void readFromFile() throws FileNotFoundException, IOException, JSONException {
        processFirstCreateQuest();

        String data = FileUtils.readFileToString(new File(PATH_DATA), "UTF-8");
        Gson gson = new Gson();
        topicListEntity = gson.fromJson(data, TopicListEntity.class);
    }

    private void processFirstCreateQuest() throws IOException {
        File theDir = new File(PATH_DATA);

        if (!theDir.exists()) {
            writeDataFile();
        }
    }

    public void writeDataFile() throws FileNotFoundException, IOException {
        Gson gson = new Gson();
        String value = gson.toJson(topicListEntity);
        FileUtils.writeStringToFile(new File(PATH_DATA), value, "UTF-8");
    }

    public void add(TopicEntity topicEntity) throws IOException {
        topicListEntity.getTopicList().add(topicEntity);
        writeDataFile();
    }

    public void update(TopicEntity topicEntity) throws IOException {
        for (int i = 0; i < topicListEntity.getTopicList().size(); i++) {
            TopicEntity topicListEntityTemp = topicListEntity.getTopicList().get(i);

            if (topicListEntityTemp.getId().equals(topicEntity.getId())) {

                TopicEntity musicInfoEntityCurrent = topicListEntityTemp;
                String name = topicEntity.getName();
                int level = topicEntity.getLevel();
                List<QuestionEntity> questionList = topicEntity.getQuestionList();

                musicInfoEntityCurrent.setName(name);
                musicInfoEntityCurrent.setLevel(level);
                musicInfoEntityCurrent.setQuestionList(questionList);
            }
        }
        writeDataFile();
    }

    public void delete(String id) throws IOException {
        for (int i = 0; i < topicListEntity.getTopicList().size(); i++) {

            TopicEntity topicEntityTmp = topicListEntity.getTopicList().get(i);

            if (topicEntityTmp.getId().equals(id)) {
                topicListEntity.getTopicList().remove(i);
                break;
            }
        }
        writeDataFile();
    }

    public TopicEntity get(int index) {
        TopicEntity topicEntityTmp = topicListEntity.getTopicList().get(index);
        return topicEntityTmp;
    }

    public List<TopicEntity> getAll() {
        return topicListEntity.getTopicList();
    }

    public List<TopicEntity> getByLevel(int level) {
        List<TopicEntity> topicListRoot = new ArrayList<>();
        List<TopicEntity> topicList = topicListEntity.getTopicList();
        for (int i = 0; i < topicList.size(); i++) {
            TopicEntity topicListTmp = topicList.get(i);
            if (topicListTmp.getLevel() == level) {
                topicListRoot.add(topicListTmp);
            }
        }
        return topicListRoot;
    }

}
