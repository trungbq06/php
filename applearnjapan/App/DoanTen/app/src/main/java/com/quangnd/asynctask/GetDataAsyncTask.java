package com.quangnd.asynctask;

import android.os.AsyncTask;
import android.os.Handler;
import android.os.Message;
import android.util.Log;

import com.google.gson.Gson;
import com.quangnd.entity.Question;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;

/**
 * Created by vnGame on 3/18/17.
 */

public class GetDataAsyncTask extends AsyncTask<String, String, String> {

    private Handler mHandler;

    public GetDataAsyncTask(Handler handler) {
        this.mHandler = handler;
    }

    @Override
    protected String doInBackground(String... params) {
        InputStream inputStream = null;
        String result = "";
        String url_select = "http://nihongo24h.com/DoanTenTool/DataController.php?commit=Get";

        ArrayList<NameValuePair> param = new ArrayList<NameValuePair>();

        try {
            // Set up HTTP post

            // HttpClient is more then less deprecated. Need to change to URLConnection
            HttpClient httpClient = new DefaultHttpClient();

            HttpPost httpPost = new HttpPost(url_select);
            httpPost.setEntity(new UrlEncodedFormEntity(param));
            HttpResponse httpResponse = httpClient.execute(httpPost);
            HttpEntity httpEntity = httpResponse.getEntity();

            // Read content & Log
            inputStream = httpEntity.getContent();
        } catch (Exception ex) {
            Log.e("IOException", ex.toString());
        }
        // Convert response to string using String Builder
        try {
            BufferedReader bReader = new BufferedReader(new InputStreamReader(inputStream, "utf-8"), 8);
            StringBuilder sBuilder = new StringBuilder();

            String line = null;
            while ((line = bReader.readLine()) != null) {
                sBuilder.append(line + "\n");
            }

            inputStream.close();
            result = sBuilder.toString();

        } catch (Exception e) {
            Log.e("Error converting result", e.toString());
        }

        return result;
    } // protected Void doInBackground(String... params)

    protected void onPostExecute(String result) {
        Message msg = new Message();
        if (!result.isEmpty()) {
            msg.what = 1;
            Gson gson = new Gson();
            final Question question[] = gson.fromJson(result, Question[].class);
            msg.obj = question;
        } else {
            msg.what = 0;
        }
        mHandler.sendMessage(msg);
    }
}
