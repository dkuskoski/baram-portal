package mk.com.barambe.activity;

import android.annotation.SuppressLint;
import android.net.Uri;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.text.Html;
import android.text.Spannable;
import android.util.DisplayMetrics;
import android.util.Log;
import android.view.Gravity;
import android.view.ViewGroup;
import android.webkit.WebView;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.VideoView;

import com.squareup.picasso.Picasso;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import mk.com.barambe.BaramConstants;
import mk.com.barambe.PicassoImageGetter;
import mk.com.barambe.R;
import mk.com.barambe.model.Post;

public class PostActivity extends AppCompatActivity {

    private static final String TAG = PostActivity.class.getSimpleName();
    private static final String MIME_TYPE_HTML = "text/html";
    private static final String UTF_8 = "UTF-8";
    private Post post;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_post);

        if (getIntent() != null && getIntent().hasExtra(BaramConstants.POST)) {
            post = (Post) getIntent().getSerializableExtra(BaramConstants.POST);
            init();
        } else {
            // TODO notify user
            finish();
        }
    }

    @SuppressLint("SetJavaScriptEnabled")
    private void init() {
        ImageView imageView = findViewById(R.id.post_image);
        LinearLayout wrapper = findViewById(R.id.post_wrapper);
        TextView title = findViewById(R.id.post_title);
        TextView contentHolder = findViewById(R.id.post_content);
        TextView date = findViewById(R.id.post_date);
        TextView views = findViewById(R.id.post_views);

        Picasso.get().load(post.getImage()).into(imageView);
        title.setText(post.getTitle());
        date.setText(getString(R.string.from,
                post.getCreated_at().substring(0, 11)));
        views.setText(getString(R.string.viewed, String.valueOf(post.getViews())));
        setVideos(wrapper);
        setContent(contentHolder);
    }

    @SuppressLint("SetJavaScriptEnabled")
    private void setVideos(LinearLayout wrapper) {
        Matcher matcher = Pattern.compile("(?i)<iframe[^>]+?src\\s*=\\s*['\"]([^'\"]+)['\"][^>]*>")
                .matcher(post.getContent());
        DisplayMetrics displayMetrics = new DisplayMetrics();
        getWindowManager().getDefaultDisplay().getMetrics(displayMetrics);
        int height = displayMetrics.heightPixels;
        int width = displayMetrics.widthPixels;
        while (matcher.find()){
            LinearLayout.LayoutParams layoutParams = new LinearLayout.LayoutParams(
                    width,width/18*9);

            layoutParams.gravity = Gravity.CENTER_HORIZONTAL;
            Log.d(TAG, "setVideos: " + matcher.group(1));
            WebView webView = new WebView(this);
            webView.getSettings().setJavaScriptEnabled(true);
            webView.setLayoutParams(layoutParams);
            webView.loadUrl(matcher.group(1));
            wrapper.addView(webView);
        }
    }

    private void setContent(TextView contentHolder) {
        PicassoImageGetter imageGetter = new PicassoImageGetter(contentHolder);
        String content = post.getContent();

        content = content.replaceAll("<iframe\\s+.*?\\s+src=(\".*?\").*?<\\/iframe>", "");
        Spannable html;
        if (android.os.Build.VERSION.SDK_INT >= android.os.Build.VERSION_CODES.N) {
            html = (Spannable) Html.fromHtml(content, Html.FROM_HTML_MODE_LEGACY, imageGetter, null);
        } else {
            html = (Spannable) Html.fromHtml(content, imageGetter, null);
        }
        contentHolder.setText(html);
    }
}
