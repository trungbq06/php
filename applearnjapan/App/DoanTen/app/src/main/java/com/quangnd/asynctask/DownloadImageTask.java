package com.quangnd.asynctask;

import android.app.ProgressDialog;
import android.graphics.drawable.Drawable;
import android.os.AsyncTask;
import android.util.Log;
import android.widget.RelativeLayout;

import java.io.InputStream;
import java.net.URL;

/**
 * Created by vnGame on 3/16/17.
 */

public class DownloadImageTask extends AsyncTask<String, Void, Drawable> {

    private RelativeLayout relativeLayout;
    private ProgressDialog progressDialog;

    public DownloadImageTask(RelativeLayout relativeLayout, ProgressDialog progressDialog) {
        this.relativeLayout = relativeLayout;
        this.progressDialog = progressDialog;
    }

    @Override
    protected Drawable doInBackground(String... urls) {
        String urldisplay = urls[0];
        Drawable drawable = null;
        try {
            InputStream is = (InputStream) new URL(urldisplay).getContent();
            drawable = Drawable.createFromStream(is, "src name");
        } catch (Exception e) {
            Log.e("Error", e.getMessage());
            e.printStackTrace();
        }
        return drawable;
    }

    protected void onPostExecute(Drawable result) {
        progressDialog.dismiss();
        relativeLayout.setBackground(result);
    }

}