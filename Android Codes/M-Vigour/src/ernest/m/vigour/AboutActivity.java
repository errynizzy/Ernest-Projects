package ernest.m.vigour;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;


public class AboutActivity extends Activity{
	
	Button btnLinkToHelp;
	Button btnLinkToAbout;
	Button btnLinkToHome2;
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.about);
        
     // Importing all assets like buttons, text fields 	
        
        btnLinkToHelp = (Button) findViewById(R.id.btnLinkToHelp); 
        btnLinkToAbout = (Button) findViewById(R.id.btnLinkToAbout); 
        btnLinkToHome2 = (Button) findViewById(R.id.btnLinkToHome2); 
        
       
        
        //assigning button click events in order
        btnLinkToHelp.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View v) {
        		Intent i = new Intent(getApplicationContext(),
						HelpActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnLinkToAbout.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View v) {
        		Intent i = new Intent(getApplicationContext(),
						me.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnLinkToHome2.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
       
        
        
    }
	
}
