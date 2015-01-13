package ernest.city.survicor;


import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;


public class TimeUpHealth extends Activity {
	
	ImageButton imageButtonExit;
	ImageButton imageButtonReplay;
	ImageButton imageButtonInfo;
	
	//add onback press  
	ImageButton imageButtonBack;
	

	@Override
  	public void onBackPressed() {
	 Intent i = new Intent(getApplicationContext(),
				MenuGame.class);
		startActivity(i);
		finish();
	}

	
	
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.time_up_game_health);
        
     // Importing all assets like buttons, text fields 
        imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
        imageButtonReplay = (ImageButton) findViewById(R.id.imageButtonReplay);
        imageButtonBack = (ImageButton) findViewById(R.id.imageButtonBack);
        imageButtonInfo = (ImageButton) findViewById(R.id.imageButtonInfo);

       
      
       
        
        //assigning button click events 
        imageButtonInfo.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				GameInfo.class);
   				startActivity(i);
   				finish();
   			} 
   		});
        
        imageButtonExit.setOnClickListener(new View.OnClickListener() {
            public void onClick(View view) {
            		 finish();
                     System.exit(0);
    			} 
    		}); 
       
        imageButtonReplay.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				FirstActivityHealth.class);
   				startActivity(i);
   				finish();
   			} 
   		});
        
        imageButtonBack.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				MenuGame.class);
   				startActivity(i);
   				finish();
   			} 
   		});
    
       
  
       
       
       
       
      
       
       


        
    }







}

