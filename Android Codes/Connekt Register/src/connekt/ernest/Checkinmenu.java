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

public class Checkinmenu extends Activity implements OnClickListener{
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
    	
    	
    	ImageButton imageButton_Chk;
    	ImageButton imageButton_My_Chekin_list;
    	ImageButton imageButton_My_Dropped_list;
    	ImageButton imageButton_My_Airtime_list;
    	
    	final SharedPreferences preferences ;
    	String PREFS_NAME = "com.example.sp.LoginPrefs";
    	TextView check1;
    	 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);
         final String uname = getIntent().getExtras().getString("USERNAME");
         final String upass = getIntent().getExtras().getString("PASSWORD");

        super.onCreate(savedInstanceState);
        setContentView(R.layout.checkinmenu);
        
        // Importing all assets like buttons, text fields 
        imageButton_Chk = (ImageButton) findViewById(R.id.imageButton_Chk);
        imageButton_My_Chekin_list = (ImageButton) findViewById(R.id.imageButton_My_Chekin_list);
        imageButton_My_Dropped_list = (ImageButton) findViewById(R.id.imageButton_My_Dropped_list);
        imageButton_My_Airtime_list= (ImageButton) findViewById(R.id.imageButton_My_Airtime_list);
       

      
        
     //assigning button click events this will go to the next activity
        final Intent intent = new Intent (this, Main_Screen_checkin.class);
        imageButton_Chk.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		
  			  //twende
  		    	intent.putExtra("number", upass);
  		    	intent.putExtra("name", uname);
  		    	startActivity(intent);
  				finish();
  			} 
  		});
  		
        
     
        
    }

	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		
	}
}