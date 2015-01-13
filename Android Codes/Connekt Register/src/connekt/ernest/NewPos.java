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

public class NewPos extends Activity implements OnClickListener{
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
    	
    	
    	ImageButton pos_Button;
    	ImageButton reguser_Button;
    	
    	final SharedPreferences preferences ;
    	String PREFS_NAME = "com.example.sp.LoginPrefs";
    	 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);

         //String uname = getIntent().getExtras().getString("USERNAME");
         final String number = getIntent().getExtras().getString("number");
         final String name = getIntent().getExtras().getString("name");


    	
    	
    	
    	
        super.onCreate(savedInstanceState);
        setContentView(R.layout.newpos);
        
        // Importing all assets like buttons, text fields 
        pos_Button = (ImageButton) findViewById(R.id.pos_Button);
        reguser_Button = (ImageButton) findViewById(R.id.reguser_Button);
       

     
       
        
        pos_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				Main_Screen_scratch_cards.class);
        		i.putExtra("number", number);
        		i.putExtra("name", name);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        
        
        
        
        
        reguser_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				Main_Screen_mobile.class);
         		i.putExtra("number", number);
        		i.putExtra("name", name);
  				startActivity(i);
  				finish();
  			} 
  		});
        
       
        
    }

	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		
	}
}