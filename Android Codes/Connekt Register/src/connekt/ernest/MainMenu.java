package connekt.ernest;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ImageButton;
import android.widget.TextView;

public class MainMenu extends Activity implements OnClickListener{
    /** Called when the activity is first created. */
	
	 @Override
		public void onBackPressed() {
		    AlertDialog.Builder builder = new AlertDialog.Builder(this);
		    builder.setMessage("Do you want to exit?")
		           .setCancelable(false)
		           .setPositiveButton("Yes", new DialogInterface.OnClickListener() {
		               public void onClick(DialogInterface dialog, int id) {
		            	   finish();
		                   System.exit(0);
		               }
		           })
		           .setNegativeButton("No", new DialogInterface.OnClickListener() {
	        public void onClick(DialogInterface dialog, int id) {
	             dialog.cancel();
	        }
	    });
		    AlertDialog alert = builder.create();
		    alert.show();

		}
    @Override
    public void onCreate(Bundle savedInstanceState) {
    	
    	
    	ImageButton newpos_Button;
    	ImageButton brands_Button;
    	ImageButton checkin_Button;
    	ImageButton sc_Button;
    	ImageButton imageButtonReset;
    	
    	final SharedPreferences preferences ;
    	String PREFS_NAME = "com.example.sp.LoginPrefs";
    	TextView check1;
    	 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);

         final String uname = getIntent().getExtras().getString("USERNAME");
         final String upass = getIntent().getExtras().getString("PASSWORD");
         boolean check = getIntent().getExtras().getBoolean("CHECK");

    	
    	
    	
    	
        super.onCreate(savedInstanceState);
        setContentView(R.layout.mainmenu);
        
        // Importing all assets like buttons, text fields 
        newpos_Button = (ImageButton) findViewById(R.id.newpos_Button);
        brands_Button = (ImageButton) findViewById(R.id.brands_Button);
        checkin_Button= (ImageButton) findViewById(R.id.checkin_Button);
        sc_Button = (ImageButton) findViewById(R.id.sc_Button);
        imageButtonReset= (ImageButton) findViewById(R.id.imageButtonReset);
		check1 = (TextView)findViewById(R.id.check1);

     
        
        if(!check)
        {
        	check1.setText(" ");
        }
        
        
      //assigning button click events
      
       
        imageButtonReset.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				
				SharedPreferences.Editor editor = preferences.edit();
				editor.clear();
				editor.commit();
				
				Intent intent = new Intent(MainMenu.this,MainActivity.class);
				startActivity(intent);
				
				
			}
		});
        
        
        final Intent intent = new Intent (this, Main_Screen_checkin.class);
        checkin_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		
  			  //twende
  		    	intent.putExtra("number", upass);
  		    	intent.putExtra("name", uname);
  		    	startActivity(intent);
  				finish();
  			} 
  		});
        
        final Intent intent1 = new Intent (this, NewPos.class);
        newpos_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		
  			  //twende
  		    	intent1.putExtra("number", upass);
  		    	intent1.putExtra("name", uname);
  		    	startActivity(intent1);
  				finish();
  			} 
  		});
        
        final Intent intent2 = new Intent (this, Main_Screen_branding.class);
        brands_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		
  			  //twende
  		    	intent2.putExtra("number", upass);
  		    	intent2.putExtra("name", uname);
  		    	startActivity(intent2);
  				finish();
  			} 
  		});
        
        
        final Intent intent3 = new Intent (this, Main_Screen_scratch_cards.class);
        sc_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		
  			  //twende
  		    	intent3.putExtra("number", upass);
  		    	intent3.putExtra("name", uname);
  		    	startActivity(intent3);
  				finish();
  			} 
  		});
        
        
     
        
    }

	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		
	}
}