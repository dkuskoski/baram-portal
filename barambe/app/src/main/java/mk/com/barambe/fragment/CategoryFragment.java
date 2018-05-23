package mk.com.barambe.fragment;

import android.content.Intent;
import android.content.res.Configuration;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.v4.app.Fragment;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.StaggeredGridLayoutManager;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import java.util.List;

import mk.com.barambe.ApplicationController;
import mk.com.barambe.BaramConstants;
import mk.com.barambe.R;
import mk.com.barambe.Storage;
import mk.com.barambe.activity.PostActivity;
import mk.com.barambe.adapter.CategoryAdapter;
import mk.com.barambe.model.Post;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class CategoryFragment extends Fragment {

    private static final String ARG_1 = "section_name";
    private static final int SPAN_COUNT_PORTRAIT = 2;
    private static final int SPAN_COUNT_LANDSCAPE = 4;
    private static final String TAG = CategoryFragment.class.getSimpleName();
    private RecyclerView category_rv;
    private String categoryName;
    private static final int FETCH_SIZE = 6;
    private int dataSize = 6;
    private boolean fetching;

    public CategoryFragment() {
    }

    public static CategoryFragment newInstance(String name) {
        CategoryFragment fragment = new CategoryFragment();
        Bundle args = new Bundle();
        args.putString(ARG_1, name);
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View rootView = inflater.inflate(R.layout.fragment_category, container, false);

        category_rv = rootView.findViewById(R.id.category_rv);
        category_rv.setLayoutManager(createStaggeredLayoutManager());

        if (getArguments() != null) {
            categoryName = getArguments().getString(ARG_1);
        }

        getData();

        return rootView;
    }

    private void getData() {
        switch (categoryName) {
            case BaramConstants.HOME:
                createAdapter(Storage.getActivePosts());
                if (category_rv.getAdapter() != null) {
                    ((CategoryAdapter) category_rv.getAdapter()).setFetchData(false);
                }
                break;
            case BaramConstants.MOST_VIEWED:
                createAdapter(Storage.getMostViewed());
                if (category_rv.getAdapter() != null) {
                    ((CategoryAdapter) category_rv.getAdapter()).setFetchData(false);
                }
                break;
            default:
                ApplicationController.getApiInterface().getPosts(categoryName,
                        dataSize, null).enqueue(new Callback<List<Post>>() {
                    @Override
                    public void onResponse(@NonNull Call<List<Post>> call,
                                           @NonNull Response<List<Post>> response) {
                        Log.d(TAG, "onResponse: " + dataSize);
                        if (response.isSuccessful() && response.body() != null) {
                            if (response.body().size() > 0) {
                                List<Post> posts = response.body();
                                setData(posts);
                            } else {
                                if (category_rv.getAdapter() != null) {
                                    ((CategoryAdapter) category_rv.getAdapter()).setFetchData(false);
                                }
                            }
                        }
                        dataSize += FETCH_SIZE;
                        fetching = false;
                    }

                    @Override
                    public void onFailure(@NonNull Call<List<Post>> call, @NonNull Throwable t) {
                        fetching = false;
                    }
                });
        }
    }

    private void setData(List<Post> data) {
        if (category_rv.getAdapter() != null) {
            updateAdapter(data);
        } else {
            createAdapter(data);
        }
    }

    private void createAdapter(List<Post> data) {
        CategoryAdapter categoryAdapter = new CategoryAdapter(getContext(), data,
                new CategoryAdapter.CategoryCallback() {
                    @Override
                    public void fetchData() {
                        if (!fetching) {
                            fetching = true;
                            getData();
                        }
                    }

                    @Override
                    public void itemClick(Post post, int position) {
                        Intent intent = new Intent(getContext(), PostActivity.class);
                        intent.putExtra(BaramConstants.POST, post);
                        startActivity(intent);
                    }
                });
        category_rv.setAdapter(categoryAdapter);
    }

    private void updateAdapter(List<Post> data) {
        for (Post post : data) {
            ((CategoryAdapter) category_rv.getAdapter()).updateData(post);
        }
    }

    private StaggeredGridLayoutManager createStaggeredLayoutManager() {
        int spanCount = SPAN_COUNT_PORTRAIT;
        if (getActivity() != null && getActivity().getResources().getConfiguration()
                .orientation == Configuration.ORIENTATION_LANDSCAPE) {
            spanCount = SPAN_COUNT_LANDSCAPE;
        }
        StaggeredGridLayoutManager lm = new StaggeredGridLayoutManager(spanCount,
                StaggeredGridLayoutManager.VERTICAL);
        lm.setGapStrategy(StaggeredGridLayoutManager.GAP_HANDLING_MOVE_ITEMS_BETWEEN_SPANS);
        return lm;
    }
}