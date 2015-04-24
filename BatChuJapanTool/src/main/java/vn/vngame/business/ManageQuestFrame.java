package vn.vngame.business;

import java.awt.Dimension;
import java.awt.Image;
import java.awt.Toolkit;
import java.awt.event.KeyEvent;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.imageio.ImageIO;
import javax.swing.DefaultListModel;
import javax.swing.ImageIcon;
import javax.swing.JFileChooser;
import javax.swing.JOptionPane;
import javax.swing.filechooser.FileNameExtensionFilter;
import org.json.JSONException;
import vn.vngame.entity.Question;
import vn.vngame.dao.DataGameDAO;
import vn.vngame.utils.FileUtils;

public class ManageQuestFrame extends javax.swing.JFrame {

    public ManageQuestFrame() {
        initComponents();

        Dimension dimension = Toolkit.getDefaultToolkit().getScreenSize();
        this.setLocation(dimension.width / 2 - this.getSize().width / 2, dimension.height / 2 - this.getSize().height / 2);

        dataGameDAO = new DataGameDAO();
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jScrollPane2 = new javax.swing.JScrollPane();
        questionList = new javax.swing.JList();
        panelImageQuest = new javax.swing.JPanel();
        lblImage = new javax.swing.JLabel();
        tfAnswerBox = new javax.swing.JTextField();
        jLabel1 = new javax.swing.JLabel();
        jButton1 = new javax.swing.JButton();
        jButton2 = new javax.swing.JButton();
        jButton3 = new javax.swing.JButton();
        btnChooseImage = new javax.swing.JButton();
        jButton5 = new javax.swing.JButton();
        jLabel2 = new javax.swing.JLabel();
        lblAnswerTime = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        tfAnswer = new javax.swing.JTextField();
        jMenuBar1 = new javax.swing.JMenuBar();
        jMenu1 = new javax.swing.JMenu();
        jMenuItem2 = new javax.swing.JMenuItem();
        jMenuItem1 = new javax.swing.JMenuItem();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Quản Lý Câu Hỏi");
        setResizable(false);
        addComponentListener(new java.awt.event.ComponentAdapter() {
            public void componentShown(java.awt.event.ComponentEvent evt) {
                formComponentShown(evt);
            }
        });

        questionList.setSelectionMode(javax.swing.ListSelectionModel.SINGLE_SELECTION);
        questionList.addListSelectionListener(new javax.swing.event.ListSelectionListener() {
            public void valueChanged(javax.swing.event.ListSelectionEvent evt) {
                questionListValueChanged(evt);
            }
        });
        jScrollPane2.setViewportView(questionList);

        panelImageQuest.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        panelImageQuest.setPreferredSize(new java.awt.Dimension(490, 388));

        lblImage.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblImage.setText("ẢNH CÂU HỎI (490x388)");

        javax.swing.GroupLayout panelImageQuestLayout = new javax.swing.GroupLayout(panelImageQuest);
        panelImageQuest.setLayout(panelImageQuestLayout);
        panelImageQuestLayout.setHorizontalGroup(
            panelImageQuestLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(panelImageQuestLayout.createSequentialGroup()
                .addComponent(lblImage, javax.swing.GroupLayout.PREFERRED_SIZE, 490, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );
        panelImageQuestLayout.setVerticalGroup(
            panelImageQuestLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(panelImageQuestLayout.createSequentialGroup()
                .addComponent(lblImage, javax.swing.GroupLayout.PREFERRED_SIZE, 388, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 0, 0))
        );

        jLabel1.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        jLabel1.setText("ĐÁP ÁN Ô CHỮ");

        jButton1.setText("THÊM");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });

        jButton2.setText("CẬP NHẬT");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });

        jButton3.setText("XÓA");
        jButton3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton3ActionPerformed(evt);
            }
        });

        btnChooseImage.setText("Chọn Ảnh");
        btnChooseImage.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnChooseImageActionPerformed(evt);
            }
        });

        jButton5.setText("+");
        jButton5.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton5ActionPerformed(evt);
            }
        });

        jLabel2.setText("Thời Gian Trả Lời Câu Hỏi:");
        jLabel2.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jLabel2MouseClicked(evt);
            }
        });

        lblAnswerTime.setText("0 s");
        lblAnswerTime.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                lblAnswerTimeMouseClicked(evt);
            }
        });

        jLabel4.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
        jLabel4.setText("ĐÁP ÁN");

        jMenu1.setText("Hệ thống");

        jMenuItem2.setAccelerator(javax.swing.KeyStroke.getKeyStroke(java.awt.event.KeyEvent.VK_T, java.awt.event.InputEvent.CTRL_MASK));
        jMenuItem2.setText("Thời Gian Trả Lời");
        jMenuItem2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem2ActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuItem2);

        jMenuItem1.setAccelerator(javax.swing.KeyStroke.getKeyStroke(java.awt.event.KeyEvent.VK_F4, java.awt.event.InputEvent.ALT_MASK));
        jMenuItem1.setText("Thoát");
        jMenuItem1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem1ActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuItem1);

        jMenuBar1.add(jMenu1);

        setJMenuBar(jMenuBar1);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(lblAnswerTime, javax.swing.GroupLayout.PREFERRED_SIZE, 107, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, 246, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel4)
                            .addComponent(jLabel1, javax.swing.GroupLayout.DEFAULT_SIZE, 92, Short.MAX_VALUE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(tfAnswerBox)
                            .addComponent(tfAnswer))
                        .addGap(90, 90, 90)
                        .addComponent(btnChooseImage)
                        .addContainerGap())
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jButton5, javax.swing.GroupLayout.PREFERRED_SIZE, 56, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jButton1)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jButton2)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jButton3)
                        .addGap(0, 0, 0))))
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel2)
                .addGap(0, 0, 0))
            .addGroup(layout.createSequentialGroup()
                .addGap(252, 252, 252)
                .addComponent(panelImageQuest, javax.swing.GroupLayout.PREFERRED_SIZE, 492, Short.MAX_VALUE)
                .addContainerGap())
        );

        layout.linkSize(javax.swing.SwingConstants.HORIZONTAL, new java.awt.Component[] {jButton1, jButton2, jButton3, jButton5});

        layout.linkSize(javax.swing.SwingConstants.HORIZONTAL, new java.awt.Component[] {jLabel1, jLabel4});

        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel2)
                    .addComponent(lblAnswerTime))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(panelImageQuest, javax.swing.GroupLayout.PREFERRED_SIZE, 390, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(17, 17, 17)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel4)
                            .addComponent(tfAnswer, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(btnChooseImage))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel1)
                            .addComponent(tfAnswerBox, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jButton5)
                            .addComponent(jButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 33, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jButton2)
                            .addComponent(jButton3))
                        .addContainerGap())
                    .addComponent(jScrollPane2)))
        );

        layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {jLabel1, jLabel4, tfAnswerBox});

        layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {jButton1, jButton2, jButton3, jButton5});

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jMenuItem1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem1ActionPerformed
        System.exit(-1);
    }//GEN-LAST:event_jMenuItem1ActionPerformed

    private void formComponentShown(java.awt.event.ComponentEvent evt) {//GEN-FIRST:event_formComponentShown
        try {
            dataGameDAO.readFromFile();
        } catch (IOException | JSONException ex) {
            Logger.getLogger(ManageQuestFrame.class.getName()).log(Level.SEVERE, null, ex);
        }

        itemListModel = new DefaultListModel();
        this.onAnswerTimeChanged();
        updateQuestList();
        questionList.setModel(itemListModel);
    }//GEN-LAST:event_formComponentShown

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        int index = questionList.getSelectedIndex();
        if (index != -1) {
            String answer = tfAnswer.getText();
            if (answer != null && answer.trim().equals("")) {
                JOptionPane.showMessageDialog(this,
                        "Mời Nhập Đáp Án!",
                        "Thông Báo",
                        JOptionPane.ERROR_MESSAGE);
                return;
            }

            String answerBox = tfAnswerBox.getText();
            if (answerBox != null && answerBox.trim().equals("")) {
                JOptionPane.showMessageDialog(this,
                        "Mời Nhập Đáp Án Ô!",
                        "Thông Báo",
                        JOptionPane.ERROR_MESSAGE);
                return;
            }

            String textHelp = "";

            if (answer != null && !answer.trim().equals("")) {
                try {
                    Question question = dataGameDAO.get(index);
                    question.setAnswer(answer);
                    question.setAnswerBox(answerBox);
                    question.setTextHelp(textHelp);

                    if (pathImageQuestNew != null) {
                        String pathImage = question.getImage();

                        String nameFile = processCopyImage(pathImageQuestNew);
                        question.setImage(nameFile);
                        FileUtils.deleteFileOrDirectory(new File("data\\" + pathImage));
                    }

                    dataGameDAO.update(question);
                    updateQuestList();

                    JOptionPane.showMessageDialog(this, "Thành Công");
                    questionList.setSelectedIndex(index);
                } catch (IOException ex) {
                    Logger.getLogger(ManageQuestFrame.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        } else {
            JOptionPane.showMessageDialog(this,
                    "Không thực hiện được!",
                    "Thông Báo",
                    JOptionPane.OK_OPTION);
        }
    }//GEN-LAST:event_jButton2ActionPerformed

    private void jButton3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton3ActionPerformed
        try {
            int index = questionList.getSelectedIndex();
            if (index != -1) {

                Question question = dataGameDAO.get(index);

                FileUtils.deleteFileOrDirectory(new File("data\\" + question.getImage()));

                dataGameDAO.delete(index);
                updateQuestList();
                lblImage.setIcon(null);
                lblImage.setText("ẢNH CÂU HỎI (490x388)");
                tfAnswer.setText("");
                tfAnswerBox.setText("");

                JOptionPane.showMessageDialog(this, "Thành Công");

            } else {
                JOptionPane.showMessageDialog(this,
                        "Chưa Chọn Câu Hỏi!",
                        "Thông Báo",
                        JOptionPane.ERROR_MESSAGE);
            }
        } catch (IOException ex) {
            Logger.getLogger(ManageQuestFrame.class.getName()).log(Level.SEVERE, null, ex);
        }
    }//GEN-LAST:event_jButton3ActionPerformed

    private void updateQuestList() {
        List<Question> questions = dataGameDAO.getQuestions();
        itemListModel.removeAllElements();
        for (int i = 0; i < questions.size(); i++) {
            itemListModel.addElement(questions.get(i).getAnswer().toUpperCase());
        }
    }

    private void jButton5ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton5ActionPerformed
        questionList.clearSelection();
        pathImageQuestNew = null;
        lblImage.setIcon(null);
        lblImage.setText("ẢNH CÂU HỎI (490x388)");
        tfAnswer.setText("");
        tfAnswerBox.setText("");
    }//GEN-LAST:event_jButton5ActionPerformed

    private void btnChooseImageActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnChooseImageActionPerformed
        JFileChooser fc = new JFileChooser();
        fc.setFileSelectionMode(JFileChooser.FILES_AND_DIRECTORIES);
        fc.setFileFilter(new FileNameExtensionFilter("JPG and JPEG", "jpg", "png"));
        if (pathImage != null) {
            fc.setCurrentDirectory(new File(pathImage));
        }
        int result = fc.showOpenDialog(null);
        if (result == JFileChooser.APPROVE_OPTION) {
            File file = fc.getSelectedFile();
            try {
                Image image = ImageIO.read(file);
                Image icon = image.getScaledInstance(490, 388, Image.SCALE_DEFAULT);
                lblImage.setText("");
                lblImage.setIcon(new ImageIcon(icon));
                pathImageQuestNew = file.getAbsolutePath();

                pathImage = file.getParentFile().toString();
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
    }//GEN-LAST:event_btnChooseImageActionPerformed

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        int index = questionList.getSelectedIndex();
        if (index == -1) {
            String answer = tfAnswer.getText();
            if (answer != null && answer.trim().equals("")) {
                JOptionPane.showMessageDialog(this,
                        "Mời Nhập Đáp Án!",
                        "Thông Báo",
                        JOptionPane.ERROR_MESSAGE);
                return;
            }

            String answerBox = tfAnswerBox.getText();
            if (answerBox != null && answerBox.trim().equals("")) {
                JOptionPane.showMessageDialog(this,
                        "Mời Nhập Đáp Án Ô!",
                        "Thông Báo",
                        JOptionPane.ERROR_MESSAGE);
                return;
            }

            String textHelp = "";

            if (pathImageQuestNew == null) {
                JOptionPane.showMessageDialog(this,
                        "Mời Chọn Ảnh Câu Hỏi",
                        "Thông Báo",
                        JOptionPane.ERROR_MESSAGE);
                return;
            }

            try {
                String nameFile = processCopyImage(pathImageQuestNew);
                String nameFileResult = "";
                dataGameDAO.add(new Question(nameFile, answer, answerBox, textHelp, nameFileResult));
                updateQuestList();

                JOptionPane.showMessageDialog(this, "Thành Công");
                questionList.setSelectedIndex(dataGameDAO.getQuestions().size() - 1);
            } catch (IOException ex) {
                Logger.getLogger(ManageQuestFrame.class.getName()).log(Level.SEVERE, null, ex);
            }
        } else {
            JOptionPane.showMessageDialog(this,
                    "Không Thực Hiện Được!",
                    "Thông Báo",
                    JOptionPane.ERROR_MESSAGE);
        }
    }//GEN-LAST:event_jButton1ActionPerformed

    private void questionListValueChanged(javax.swing.event.ListSelectionEvent evt) {//GEN-FIRST:event_questionListValueChanged
        int index = questionList.getSelectedIndex();
        if (index != -1) {
            try {
                pathImageQuestNew = null;

                Question question = dataGameDAO.get(index);
                tfAnswer.setText(question.getAnswer().toUpperCase());
                tfAnswerBox.setText(question.getAnswerBox().toUpperCase());

                Image image = ImageIO.read(new File("data\\" + question.getImage()));
                Image icon = image.getScaledInstance(490, 388, Image.SCALE_DEFAULT);
                lblImage.setText("");
                lblImage.setIcon(new ImageIcon(icon));
            } catch (IOException ex) {
                Logger.getLogger(ManageQuestFrame.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }//GEN-LAST:event_questionListValueChanged

    private void jMenuItem2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem2ActionPerformed
        this.openManageAnswerTimeDialog();
    }//GEN-LAST:event_jMenuItem2ActionPerformed

    private void jLabel2MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jLabel2MouseClicked
        this.openManageAnswerTimeDialog();
    }//GEN-LAST:event_jLabel2MouseClicked

    private void lblAnswerTimeMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_lblAnswerTimeMouseClicked
        this.openManageAnswerTimeDialog();
    }//GEN-LAST:event_lblAnswerTimeMouseClicked

    private void openManageAnswerTimeDialog() {
        manageAnswerTimeDialog = new ManageAnswerTimeDialog(this, true, dataGameDAO);
        manageAnswerTimeDialog.setVisible(true);
    }

    private String processCopyImage(String path) throws FileNotFoundException, IOException {
        indexImage += 1;
        File afile = new File(path);
        String nameFile = afile.getName();
        String extension = nameFile.substring(nameFile.lastIndexOf(".")).toLowerCase();

        String timeStamp = new SimpleDateFormat("yyMMddHHmmss").format(Calendar.getInstance().getTime());
        String fileCopyName = timeStamp + indexImage + extension;

        File bfile = new File("data\\" + fileCopyName);
        FileUtils.copyFile(afile, bfile);

        return fileCopyName;
    }

    public void onAnswerTimeChanged() {
        this.lblAnswerTime.setText(this.dataGameDAO.getDataGame().getAnswerTime() - 1 + "s");
    }

    private DefaultListModel itemListModel;
    private final DataGameDAO dataGameDAO;
    private String pathImageQuestNew = null;
    private ManageAnswerTimeDialog manageAnswerTimeDialog;
    private int indexImage = 0;
    private String pathImage = null;

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnChooseImage;
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JButton jButton3;
    private javax.swing.JButton jButton5;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JMenu jMenu1;
    private javax.swing.JMenuBar jMenuBar1;
    private javax.swing.JMenuItem jMenuItem1;
    private javax.swing.JMenuItem jMenuItem2;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JLabel lblAnswerTime;
    private javax.swing.JLabel lblImage;
    private javax.swing.JPanel panelImageQuest;
    private javax.swing.JList questionList;
    private javax.swing.JTextField tfAnswer;
    private javax.swing.JTextField tfAnswerBox;
    // End of variables declaration//GEN-END:variables
}
