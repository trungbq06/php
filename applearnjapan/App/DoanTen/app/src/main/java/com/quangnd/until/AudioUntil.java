package com.quangnd.until;

import android.content.Context;
import android.media.MediaPlayer;

/**
 * Created by vnGame on 3/20/17.
 */

public class AudioUntil {

    public static void start(Context context, int idMusic, boolean loop){
        MediaPlayer mp;
        mp = MediaPlayer.create(context, idMusic);
        mp.setLooping(loop);
        mp.start();
    }
}
