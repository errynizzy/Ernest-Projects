package ernest.m.vigour;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;

public class MainActivity extends Activity {
	 
	ImageButton btnLinkToRegister;
	ImageButton btnLinkToMenu;
	ImageButton btnLinkToAbout;
	ImageButton btnExit;
	

    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
        
     // Importing all assets like buttons, text fields 	
        btnLinkToRegister = (ImageButton) findViewById(R.id.btnLinkToRegister); 
        btnLinkToMenu = (ImageButton) findViewById(R.id.btnLinkToMenu); 
        btnLinkToAbout = (ImageButton) findViewById(R.id.btnLinkToAbout);	
        btnExit = (ImageButton) findViewById(R.id.btnExit);
        
        //assigning button click events
        btnLinkToRegister.setOnClickListener(new View.OnClickListener() {
			public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						RegisterActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnLinkToMenu.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						MenuActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnLinkToAbout.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						AboutActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
       
        
        btnExit.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		 finish();
                 System.exit(0);
			} 
		}); 
    }
}