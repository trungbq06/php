package com.quangnd.doanten;

import android.app.ProgressDialog;
import android.os.Handler;
import android.os.Message;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Gravity;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.LinearLayout;
import android.widget.RelativeLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.ads.AdRequest;
import com.google.android.gms.ads.AdView;
import com.google.android.gms.ads.MobileAds;
import com.quangnd.asynctask.DownloadImageTask;
import com.quangnd.asynctask.GetDataAsyncTask;
import com.quangnd.entity.Question;
import com.quangnd.until.AudioUntil;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    private AdView mAdView;
    private LinearLayout ll_shell_1, ll_shell_2, ll_shell_3, ll_shell_4, ll_shell_5, ll_shell_6, ll_shell_7, ll_shell_8;
    private Toast toast;
    private Question[] questionList;
    private int indexQuestion = 0;
    private Question question;
    private RelativeLayout llMain;
    private ProgressDialog progressDialog;
    private Button btnNext;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Initialize the Mobile Ads SDK.
        MobileAds.initialize(this, getResources().getString(R.string.banner_ad_unit_id));

        // Gets the ad view defined in layout/ad_fragment.xml with ad unit ID set in
        // values/strings.xml.
        mAdView = (AdView) findViewById(R.id.adView);

        // Create an ad request. Check your logcat output for the hashed device ID to
        // get test ads on a physical device. e.g.
        // "Use AdRequest.Builder.addTestDevice("ABCDEF012345") to get test ads on this device."
        AdRequest adRequest = new AdRequest.Builder()
                .addTestDevice(AdRequest.DEVICE_ID_EMULATOR)
                .build();

        // Start loading the ad in the background.
        mAdView.loadAd(adRequest);


        llMain = (RelativeLayout) findViewById(R.id.llMain);

        ll_shell_1 = (LinearLayout) findViewById(R.id.ll_shell_1);
        ll_shell_2 = (LinearLayout) findViewById(R.id.ll_shell_2);
        ll_shell_3 = (LinearLayout) findViewById(R.id.ll_shell_3);
        ll_shell_4 = (LinearLayout) findViewById(R.id.ll_shell_4);
        ll_shell_5 = (LinearLayout) findViewById(R.id.ll_shell_5);
        ll_shell_6 = (LinearLayout) findViewById(R.id.ll_shell_6);
        ll_shell_7 = (LinearLayout) findViewById(R.id.ll_shell_7);
        ll_shell_8 = (LinearLayout) findViewById(R.id.ll_shell_8);
        btnNext = (Button) findViewById(R.id.btnNext);

        ll_shell_1.setOnClickListener(this);
        ll_shell_2.setOnClickListener(this);
        ll_shell_3.setOnClickListener(this);
        ll_shell_4.setOnClickListener(this);
        ll_shell_5.setOnClickListener(this);
        ll_shell_6.setOnClickListener(this);
        ll_shell_7.setOnClickListener(this);
        ll_shell_8.setOnClickListener(this);
        btnNext.setOnClickListener(this);

        progressDialog = new ProgressDialog(this);

        AudioUntil.start(this, R.raw.background1, true);

        getData();
    }

    @Override
    public void onClick(View view) {
        switch (view.getId()) {
            case R.id.ll_shell_1:
                showResult(question.getBox1());
                break;
            case R.id.ll_shell_2:
                showResult(question.getBox2());
                break;
            case R.id.ll_shell_3:
                showResult(question.getBox3());
                break;
            case R.id.ll_shell_4:
                showResult(question.getBox4());
                break;
            case R.id.ll_shell_5:
                showResult(question.getBox5());
                break;
            case R.id.ll_shell_6:
                showResult(question.getBox6());
                break;
            case R.id.ll_shell_7:
                showResult(question.getBox7());
                break;
            case R.id.ll_shell_8:
                showResult(question.getBox8());
                break;
            case R.id.btnNext:
                AudioUntil.start(this, R.raw.button_click, false);
                nextQuestion();
                break;
        }
    }

    private Handler handler = new Handler() {
        @Override
        public void handleMessage(Message msg) {
            progressDialog.dismiss();
            if (msg.what == 0) {
                Toast.makeText(getBaseContext(), "Không tải được dữ liệu, hãy thử lại!", Toast.LENGTH_SHORT).show();
            } else {
                questionList = (Question[]) msg.obj;
                nextQuestion();
            }
        }
    };

    private void showResult(String msg) {
        if (toast != null) {
            toast.cancel();
        }
        toast = Toast.makeText(this, msg, Toast.LENGTH_SHORT);
        toast.setGravity(Gravity.CENTER, 0, 0);
        ViewGroup group = (ViewGroup) toast.getView();
        TextView messageTextView = (TextView) group.getChildAt(0);
        messageTextView.setTextSize(30);

        toast.show();
    }

    private void nextQuestion() {
        if (indexQuestion == questionList.length) {
            indexQuestion = 0;
        }
        question = questionList[indexQuestion];
        progressDialog.setMessage("Đang tải câu hỏi...");
        progressDialog.show();
        new DownloadImageTask(llMain, progressDialog).execute("http://nihongo24h.com/DoanTenTool/uploads/" + question.getImg());
        indexQuestion++;
    }

    private void getData() {
        progressDialog.setMessage("Đang tải câu hỏi...");
        progressDialog.show();
        new GetDataAsyncTask(handler).execute();
    }


    private long recordTimeMillis = 0;

    @Override
    public void onBackPressed() {
        if (System.currentTimeMillis() - recordTimeMillis < 2000) {
            super.onBackPressed();
            finish();
        }

        recordTimeMillis = System.currentTimeMillis();
        Toast.makeText(this, "Ấn lần nữa để quay lại", Toast.LENGTH_SHORT).show();
    }

    /**
     * Called when leaving the activity
     */
    @Override
    public void onPause() {
        if (mAdView != null) {
            mAdView.pause();
        }
        super.onPause();
    }

    /**
     * Called when returning to the activity
     */
    @Override
    public void onResume() {
        super.onResume();
        if (mAdView != null) {
            mAdView.resume();
        }
    }

    /**
     * Called before the activity is destroyed
     */
    @Override
    public void onDestroy() {
        if (mAdView != null) {
            mAdView.destroy();
        }
        super.onDestroy();
    }
}
