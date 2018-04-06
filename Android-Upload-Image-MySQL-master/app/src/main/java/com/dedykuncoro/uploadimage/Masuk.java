package com.dedykuncoro.uploadimage;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;

/**
 * Created by rohtiman on 10/8/17.
 */

public class Masuk extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.masuk);
    }

    public void pindahKeinput(View view){
        Intent pindah = new Intent(Masuk.this, MainActivity.class);
        startActivity(pindah);
    }
}
