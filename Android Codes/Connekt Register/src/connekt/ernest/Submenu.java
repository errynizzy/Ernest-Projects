package connekt.ernest;

import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ImageButton;
import android.widget.TextView;

public class Submenu extends Activity implements OnClickListener{
	 @Override
	 	public void onBackPressed() {
	 	 
	 	            	  Intent i = new Intent(getApplicationContext(),
	 	            			 MainActivity.class);
	 						startActivity(i);
	 						finish();
	 	}
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
    	
    	
    	ImageButton imageButtonDS;
    	ImageButton imageButtonCF;
    	ImageButton imageButtonSA;
    	
    	
    	final SharedPreferences preferences ;
    	String PREFS_NAME = "com.example.sp.LoginPrefs";
    	TextView check1;
    	 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);
         final String uname = getIntent().getExtras().getString("name");
         final String upass = getIntent().getExtras().getString("number");
         final String upos = getIntent().getExtras().getString("p_number");

        super.onCreate(savedInstanceState);
        setContentView(R.layout.submenu);
        
        // Importing all assets like buttons, text fields 
        imageButtonSA = (ImageButton) findViewById(R.id.imageButtonSA);
        imageButtonCF = (ImageButton) findViewById(R.id.imageButtonCF);
        imageButtonDS= (ImageButton) findViewById(R.id.imageButtonDS);
       

      
        
     //assigning button click events this will go to the next activity
        final Intent intent = new Intent (this, ListViewActivity.class);
        imageButtonDS.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		
  			  //twende
  		    	intent.putExtra("number", upass);
  		    	intent.putExtra("name", uname);
  		    	intent.putExtra("p_number", upos);
  		    	startActivity(intent);
  				finish();
  			} 
  		});
        
        final Intent intent1 = new Intent (this, Forms.class);
        imageButtonCF.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		
  			  //twende
  		    	intent1.putExtra("number", upass);
  		    	intent1.putExtra("name", uname);
  		    	intent1.putExtra("p_number", upos);
  		    	startActivity(intent1);
  				finish();
  			} 
  		});
  		
        
     
        
    }

	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		
	}
}