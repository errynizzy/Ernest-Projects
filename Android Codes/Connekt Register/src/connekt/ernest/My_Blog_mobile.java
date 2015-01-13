package connekt.ernest;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.webkit.WebView;

public class My_Blog_mobile extends Activity {
	
	@Override
 	public void onBackPressed() {
 	 
 	            	  Intent i = new Intent(getApplicationContext(),
 	            			 MainActivity.class);
 						startActivity(i);
 						finish();
 	}
    private WebView webView;

    public void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.my_blog_static);

	webView = (WebView) findViewById(R.id.webView1);
	webView.getSettings().setJavaScriptEnabled(true);
	webView.loadUrl("http://connektafrica.net/");

    }

}
