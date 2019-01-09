package com.quangnd.doanten;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

import com.quangnd.until.AudioUntil;

public class MainMenuActivity extends AppCompatActivity implements View.OnClickListener {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_menu);

        findViewById(R.id.btnPlay).setOnClickListener(this);
        findViewById(R.id.btnIntro).setOnClickListener(this);
        findViewById(R.id.btnExit).setOnClickListener(this);
    }

    private void redirectActivity(Class clzz) {
        Intent intent = new Intent(this, clzz);
        startActivity(intent);
    }

    @Override
    public void onClick(View view) {
        AudioUntil.start(this, R.raw.button_click, false);

        if (view.getId() == R.id.btnPlay) {
            redirectActivity(MainActivity.class);

        } else if (view.getId() == R.id.btnIntro) {
            redirectActivity(IntroductionActivity.class);

        } else if (view.getId() == R.id.btnExit) {
            finish();
        }
    }

    @Override
    public void onBackPressed() {
        super.onBackPressed();
    }

}
