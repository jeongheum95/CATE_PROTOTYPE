package app.com.youtubeapiv3;

import android.app.Dialog;
import android.content.Context;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.TextInputEditText;
import android.view.View;
import android.widget.Button;

public class AddDialog extends Dialog implements View.OnClickListener{
    private static final int LAYOUT = R.layout.dialog_add;

    private Context context;

    private TextInputEditText titleEt;
    private TextInputEditText urlEt;

    private Button confirmBt;

    private String name;

    public AddDialog(@NonNull Context context) {
        super(context);
        this.context = context;
    }

    public AddDialog(Context context,String name){
        super(context);
        this.context = context;
        this.name = name;
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(LAYOUT);

        titleEt = (TextInputEditText) findViewById(R.id.title_input);
        urlEt = (TextInputEditText) findViewById(R.id.url_input);

        confirmBt = (Button) findViewById(R.id.button_confirm);

        confirmBt.setOnClickListener(this);

        if(name != null){
            titleEt.setText(name);
        }
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.button_confirm:

                cancel();
                break;
        }
    }
}
