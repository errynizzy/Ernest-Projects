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

public class FirstClass extends Activity implements OnClickListener{
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
    	
    	
    	ImageButton pos_Button;
    	ImageButton pos_Drop;
    	ImageButton reguser_Button;
    	ImageButton posmap_Button;
    	ImageButton brand_Button;
    	ImageButton sync_Button;
    	ImageButton restart_Button;
    	ImageButton exit_Button;
    	ImageButton list_Button;
    	final SharedPreferences preferences ;
    	String PREFS_NAME = "com.example.sp.LoginPrefs";
    	TextView check1;
    	 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);

         //String uname = getIntent().getExtras().getString("USERNAME");
         final String upass = getIntent().getExtras().getString("PASSWORD");
         boolean check = getIntent().getExtras().getBoolean("CHECK");

    	
    	
    	
    	
        super.onCreate(savedInstanceState);
        setContentView(R.layout.menu);
        
        // Importing all assets like buttons, text fields 
        pos_Button = (ImageButton) findViewById(R.id.pos_Button);
        brand_Button = (ImageButton) findViewById(R.id.brand_Button);
        reguser_Button = (ImageButton) findViewById(R.id.reguser_Button);
        posmap_Button= (ImageButton) findViewById(R.id.posmap_Button);
        pos_Drop= (ImageButton) findViewById(R.id.pos_Drop);
        restart_Button = (ImageButton) findViewById(R.id.restart_Button);
        exit_Button = (ImageButton) findViewById(R.id.exit_Button);
        list_Button = (ImageButton) findViewById(R.id.list_Button);
		check1 = (TextView)findViewById(R.id.check1);

        
       
        
        
        if(!check)
        {
        	check1.setText("             Back");
        }
        
        
      //assigning button click events
        exit_Button.setOnClickListener(new View.OnClickListener() {
            public void onClick(View view) {
            		// finish();
                    // System.exit(0);
            	android.os.Process.killProcess(android.os.Process.myPid());
                // This above line close correctly
    			} 
    		}); 
        
       
        restart_Button.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				
				SharedPreferences.Editor editor = preferences.edit();
				editor.clear();
				editor.commit();
				
				Intent intent = new Intent(FirstClass.this,MainActivity.class);
				startActivity(intent);
				
				
			}
		});
        
        final Intent intent = new Intent (this, ListViewActivity.class);
        pos_Drop.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		
  			  //twende
  		    	intent.putExtra("number", upass);
  		    	startActivity(intent);
  				finish();
  			} 
  		});
        
        list_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				Main_Screen_sim.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        pos_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				Main_Screen_scratch_cards.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        
        
        
        
        
        reguser_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				Main_Screen_mobile.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        brand_Button.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				Main_Screen_branding.class);
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