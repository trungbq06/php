package com.quangnd.doanten;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

import com.quangnd.until.AudioUntil;

public class IntroductionActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_introduction);

        findViewById(R.id.titlebar_back).setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                AudioUntil.start(IntroductionActivity.this, R.raw.button_click, false);
                finish();
            }
        });
    }

    @Override
    public void onBackPressed() {
        super.onBackPressed();
        AudioUntil.start(this, R.raw.button_click, false);
        finish();
    }

}
