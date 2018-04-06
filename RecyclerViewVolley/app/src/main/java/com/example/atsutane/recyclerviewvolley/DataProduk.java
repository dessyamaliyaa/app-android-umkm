package com.example.atsutane.recyclerviewvolley;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.widget.ImageView;
import android.widget.TextView;

import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class DataProduk extends AppCompatActivity {
    private TextView ID, JUDUL, HARGA, LOKASI, PENJUAL, TELP;
    private ImageView GAMBAR;
    private GridLayoutManager layoutManager;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_data_produk);

        JUDUL = (TextView)findViewById(R.id.JUDUL);
        ID = (TextView)findViewById(R.id.ID);
        HARGA = (TextView)findViewById(R.id.HARGA);
        LOKASI = (TextView)findViewById(R.id.LOKASI);
        PENJUAL = (TextView)findViewById(R.id.PENJUAL);
        TELP = (TextView)findViewById(R.id.TELP);
        GAMBAR = (ImageView)findViewById(R.id.GAMBAR);


        final Bundle bundle = getIntent().getExtras();

        JUDUL.setText(bundle.getString("JUDUL"));
        ID.setText(bundle.getString("ID"));
        HARGA.setText(bundle.getString("HARGA"));
        LOKASI.setText(bundle.getString("LOKASI"));
        PENJUAL.setText(bundle.getString("PENJUAL"));
        TELP.setText(bundle.getString("TELP"));

    }
}


