package mk.com.barambe.adapter;

import android.content.Context;
import android.graphics.Color;
import android.support.annotation.NonNull;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.Gravity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.FrameLayout;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.bumptech.glide.request.target.Target;
import com.google.android.gms.ads.AdListener;
import com.google.android.gms.ads.AdRequest;
import com.google.android.gms.ads.AdSize;
import com.google.android.gms.ads.AdView;

import java.util.List;
import java.util.Random;

import mk.com.barambe.BaramConstants;
import mk.com.barambe.R;
import mk.com.barambe.model.Post;

public class CategoryAdapter extends RecyclerView.Adapter<CategoryAdapter.ViewHolder> {

    private final List<Post> data;
    private final Context context;
    private final CategoryCallback callback;
    private boolean fetchData;

    public CategoryAdapter(Context context, List<Post> data, CategoryCallback callback) {
        this.data = data;
        this.context = context;
        this.callback = callback;

        setFetchData(true);
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View itemView = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.item_category, parent, false);
        return new ViewHolder(itemView);
    }

    @Override
    public void onBindViewHolder(@NonNull final ViewHolder holder, int position) {
        Post item = data.get(position);

        // Load ad
        if(item == null){
            holder.wrapper.setVisibility(View.GONE);
            holder.adWrapper.setVisibility(View.VISIBLE);

            final AdView adView = new AdView(context);
            adView.setAdSize(AdSize.WIDE_SKYSCRAPER);
            adView.setAdUnitId(context.getString(R.string.banner_ad_unit_id));
            adView.setBackgroundColor(Color.BLACK);

            AdRequest adRequest = new AdRequest.Builder().build();
            adView.loadAd(adRequest);
            adView.setAdListener(new AdListener() {
                @Override
                public void onAdFailedToLoad(int errorCode) {
                    holder.adWrapper.setVisibility(View.GONE);
                }
            });
            holder.adWrapper.addView(adView);

        } else {
            // Load post
            holder.wrapper.setVisibility(View.VISIBLE);
            holder.adWrapper.setVisibility(View.GONE);
            holder.title.setText(item.getTitle());
            if(item.getSection().equals(BaramConstants.ADULT)){
                Glide.with(context).load(item.getImage()).apply(new RequestOptions().override(16, 9)).into(holder.image);
            } else {
                Glide.with(context).load(item.getImage()).apply(new RequestOptions().override(Target.SIZE_ORIGINAL)).into(holder.image);
                Glide.with(context).load(item.getImage()).into(holder.image);
            }
        }

        if(fetchData && position + 3 > getItemCount()){
            callback.fetchData();
        }
    }

    @Override
    public int getItemCount() {
        return data.size();
    }

    public void updateData(Post data) {
//        int oldCount = getItemCount();
        this.data.add(data);
        notifyItemInserted(getItemCount());
    }

    public void setFetchData(boolean fetchData) {
        this.fetchData = fetchData;
    }

    class ViewHolder extends RecyclerView.ViewHolder {

        final FrameLayout wrapper;
        final ImageView image;
        final TextView title;
        final FrameLayout adWrapper;

        public ViewHolder(View itemView) {
            super(itemView);
            wrapper = itemView.findViewById(R.id.item_category_wrapper);
            image = itemView.findViewById(R.id.item_category_iv);
            title = itemView.findViewById(R.id.item_category_title);
            adWrapper = itemView.findViewById(R.id.item_category_aw);
        }
    }

    public interface CategoryCallback {
        void fetchData();
        void itemClick(Post post, int position);
    }
}
