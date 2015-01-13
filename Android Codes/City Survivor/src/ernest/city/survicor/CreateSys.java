package ernest.city.survicor;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ImageButton;


public class CreateSys extends Activity implements OnClickListener{
	
	ImageButton imageButtonExit;
	
	ImageButton imageButtonBack;
	
	
	
	 @Override
	  	public void onBackPressed() {
		 Intent i = new Intent(getApplicationContext(),
					RainMenu.class);
			startActivity(i);
			finish();
		 }
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.createsys);
        
     // Importing all assets like buttons, text fields 
       imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
       
       imageButtonBack = (ImageButton) findViewById(R.id.imageButtonBack);
       
      
       
        
        //assigning button click events 
       
      
       
  
       
       
       imageButtonBack.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
  						MenuApp.class);
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
        
    }



	@Override
	public void onClick(View arg0) {
		// TODO Auto-generated method stub
		
	}


}

