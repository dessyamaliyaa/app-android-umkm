package com.example.atsutane.recyclerviewvolley;
import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.support.design.widget.Snackbar;
import android.support.v7.widget.CardView;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.RelativeLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.bumptech.glide.Glide;

import java.net.IDN;
import java.util.ArrayList;


public class RecyclerAdapter extends RecyclerView.Adapter<RecyclerAdapter.ViewHolder> {
    private static  ArrayList<Data> listdata;
    private Activity activity;
    private static Context context;

    public RecyclerAdapter(Activity activity, ArrayList<Data> listdata) {
        this.listdata = listdata;
        this.activity = activity;
    }

    @Override
    public RecyclerAdapter.ViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View v = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.list, parent, false);
        ViewHolder vh = new ViewHolder(v);
        return vh;
    }

    @Override
    public void onBindViewHolder(ViewHolder holder, final int position) {
        //holder.gambar.setImageResource(listdata.get(position).getGAMBAR());
        Data md = listdata.get(position);
        holder.ID.setText(md.getID());
        holder.JUDUL.setText(md.getJUDUL());
        holder.HARGA.setText(md.getHARGA());
        holder.LOKASI.setText(md.getLOKASI());
        holder.PENJUAL.setText(md.getPENJUAL());
        holder.TELP.setText(md.getTELP());
        holder.md = md;
        final ViewHolder x=holder;
        Glide.with(activity)
                .load(md.getGAMBAR())
                .into(holder.GAMBAR);
        holder.ID.setVisibility(View.GONE);
       /** holder.cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(v.getContext(), DataProduk.class);
                i.putExtra("ID", listdata.get(position).getID());
                i.putExtra("JUDUL", listdata.get(position).getJUDUL());
                i.putExtra("HARGA", listdata.get(position).getHARGA());
                i.putExtra("GAMBAR", listdata.get(position).getGAMBAR());
                context.startActivity(i);
            }
        }); */

    }
    @Override
    public int getItemCount() {
        return listdata.size();
    }

    public static class ViewHolder extends RecyclerView.ViewHolder {
        private CardView cv;
        private TextView ID,JUDUL,HARGA, PENJUAL, LOKASI, TELP;
        private ImageView GAMBAR;
        private ArrayList<Data> listdata;
        Data md;

        public ViewHolder(View v) {
            super(v);
            cv=(CardView)v.findViewById(R.id.card_view);
            ID=(TextView)v.findViewById(R.id.ID);
            JUDUL=(TextView)v.findViewById(R.id.JUDUL);
            HARGA=(TextView)v.findViewById(R.id.HARGA);
            PENJUAL=(TextView)v.findViewById(R.id.PENJUAL);
            LOKASI=(TextView)v.findViewById(R.id.LOKASI);
            TELP=(TextView)v.findViewById(R.id.TELP);
            GAMBAR =(ImageView)v.findViewById(R.id.GAMBAR);

          v.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View v) {
                    Intent i = new Intent(context, DataProduk.class);
                    i.putExtra("ID", md.getID());
                    i.putExtra("JUDUL", md.getJUDUL());
                    i.putExtra("HARGA", md.getHARGA());
                    i.putExtra("GAMBAR", md.getGAMBAR());
                    i.putExtra("LOKASI", md.getLOKASI());
                    i.putExtra("PENJUAL", md.getPENJUAL());
                    i.putExtra("TELP", md.getTELP());
                    context.startActivity(i);
                }
            });


        }

    }

}