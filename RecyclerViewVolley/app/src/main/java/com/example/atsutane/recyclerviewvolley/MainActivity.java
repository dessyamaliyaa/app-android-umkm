package com.example.atsutane.recyclerviewvolley;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.RecyclerView;

import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    private String URL="http://192.168.43.221/kebun_pkl";
    private RecyclerAdapter recyclerAdapter;
    private RecyclerView recyclerView;
    private ArrayList<Data> listdata;

    private GridLayoutManager layoutManager;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        recyclerView = (RecyclerView) findViewById(R.id.recyclerview);
        recyclerView.setHasFixedSize(true);
        layoutManager = new GridLayoutManager(this,2);
        layoutManager.setOrientation(GridLayoutManager.VERTICAL);
        recyclerView.setLayoutManager(layoutManager);

        listdata = new ArrayList<Data>();
        AmbilData();
        recyclerAdapter = new RecyclerAdapter(this,listdata);
        recyclerView.setAdapter(recyclerAdapter);
        recyclerAdapter.notifyDataSetChanged();
    }

    public void AmbilData(){
        JsonArrayRequest aarRequest = new JsonArrayRequest(URL+ "/view_data.php",
                new Response.Listener<JSONArray>(){

                    @Override
                    public void onResponse(JSONArray response) {
                        if (response.length()>0){
                            for(int i=0; i < response.length(); i++){
                                try{
                                    JSONObject data = response.getJSONObject(i);
                                    Data item = new Data();
                                    item.setID(data.getString("ID"));
                                    item.setJUDUL(data.getString("JUDUL"));
                                    item.setHARGA(data.getString("HARGA"));
                                    item.setLOKASI(data.getString("LOKASI"));
                                    item.setPENJUAL(data.getString("PENJUAL"));
                                    item.setTELP(data.getString("TELP"));
                                    item.setGAMBAR(URL+ "/img/"+data.getString("GAMBAR"));
                                    listdata.add(item);
                                    recyclerAdapter.notifyDataSetChanged();

                                }catch (JSONException e){

                                }

                            }
                        }
                    }
                },
                new Response.ErrorListener(){
                    @Override
                    public void onErrorResponse(VolleyError error) {

                    }
                }){

        };
        Volley.newRequestQueue(this).add(aarRequest);
    }
}
