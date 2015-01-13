package ernest.m.vigour;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class SearchActivity extends Activity {

 Button btnLinktoMD;
 Button btnLinkToHC;
 Button exit;
 Button btnLinkToHome;
 Button previous;
 
 TextView showresult;

 
 String returnString;


    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.search);
        
        //import all from xml
        
        exit = (Button) findViewById(R.id.exit);
        showresult = (TextView) findViewById(R.id.showresult);
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome);
        previous = (Button) findViewById(R.id.previous);
        btnLinkToHC = (Button) findViewById(R.id.btnLinkToHC);
        btnLinktoMD = (Button) findViewById(R.id.btnLinktoMD);
     
        //assign buttons action
        btnLinktoMD.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						SearchWorkerActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnLinkToHC.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						SearchHCActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        
        btnLinkToHome.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        
        previous.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						MenuActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        exit.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		 finish();
                 System.exit(0);
			} 
		}); 
    }
}



