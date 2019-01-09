package com.quangnd.millionaire;

import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.net.ConnectivityManager;
import android.os.Handler;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class WelcomeActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_welcome);

        new Handler().postDelayed(new Runnable() {

            @Override
            public void run() {
                if (!isNetworkConnected()) {
                    showFailDialog();
                } else {
                    redirectMainApp();
                }
            }
        }, 4000);
    }

    private void showFailDialog() {
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setMessage("Không có kết nối Internet, bạn hãy mở mạng và thử lại!")
                .setCancelable(false)
                .setPositiveButton("Thử lại", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {
                        if (!isNetworkConnected()) {
                            showFailDialog();
                        } else {
                            redirectMainApp();
                        }
                    }
                })
                .setNegativeButton("Thoát", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {
                        dialog.cancel();
                        finish();
                    }
                });
        AlertDialog alert = builder.create();
        alert.show();
    }

    private boolean isNetworkConnected() {
        ConnectivityManager cm = (ConnectivityManager) getSystemService(Context.CONNECTIVITY_SERVICE);

        return cm.getActiveNetworkInfo() != null;
    }

    private void redirectMainApp() {
        Intent intent = new Intent(WelcomeActivity.this,
                MainActivity.class);
        startActivity(intent);
        WelcomeActivity.this.finish();
    }
}
