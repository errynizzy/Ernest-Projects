package ernest.city.survicor;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ImageButton;


public class MenuApp extends Activity implements OnClickListener{
	
	ImageButton imageButtonExit;
	ImageButton imageButtonRain;
	ImageButton imageButtonSun;
	ImageButton imageButtonBack;
	ImageButton imageButtonFire;
	ImageButton imageButtonWaste;
	ImageButton imageButtonHealth;
	ImageButton imageButtonInfo;
	ImageButton imageButtonAccount;
	ImageButton imageButtonAdd;
	
	
	 @Override
	  	public void onBackPressed() {
	  	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
	  	    builder.setMessage("What do you want to do?")
	  	           .setCancelable(false)
	  	           .setPositiveButton("Previous", new DialogInterface.OnClickListener() {
	  	               public void onClick(DialogInterface dialog, int id) {
	  	            	 Intent i = new Intent(getApplicationContext(),
	  							Select.class);
	  					startActivity(i);
	  					finish();
	  	               }
	  	           })
	  	           
	  	   .setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
	            public void onClick(DialogInterface dialog, int id) {
	                 dialog.cancel();
	            }
	        });
	  	    
	  	  AlertDialog alert = builder.create();
		    alert.show();
		 }
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.menuapp);
        
     // Importing all assets like buttons, text fields 
       imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
       imageButtonRain = (ImageButton) findViewById(R.id.imageButtonRain);
       
       imageButtonSun = (ImageButton) findViewById(R.id.imageButtonSun);
       imageButtonBack = (ImageButton) findViewById(R.id.imageButtonBack);
       imageButtonFire = (ImageButton) findViewById(R.id.imageButtonFire);
       imageButtonWaste = (ImageButton) findViewById(R.id.imageButtonWaste);
       
       imageButtonHealth = (ImageButton) findViewById(R.id.imageButtonHealth);
       imageButtonInfo = (ImageButton) findViewById(R.id.imageButtonInfo);
       
       imageButtonAccount = (ImageButton) findViewById(R.id.imageButtonAccount);
       imageButtonAdd = (ImageButton) findViewById(R.id.imageButtonAdd);
      
       
        
        //assigning button click events 
       imageButtonInfo.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
  						AppInfo.class);
  				startActivity(i);
  				finish();
  			} 
  		});
       
       imageButtonAccount.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
   						Register.class);
   				startActivity(i);
   				finish();
   			} 
   		});
       
       imageButtonAdd.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				AddTipMenuActivity.class);
  				startActivity(i);
  				finish();
  			} 
  		});
      
       
       imageButtonRain.setOnClickListener(new View.OnClickListener() {
       	public void onClick(View view) {
       		Intent i = new Intent(getApplicationContext(),
						RainMenu.class);
				startActivity(i);
				finish();
			} 
		});
       
       imageButtonHealth.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
   						HealthApp.class);
   				startActivity(i);
   				finish();
   			} 
   		});
       
  
       imageButtonSun.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
   						SunApp.class);
   				startActivity(i);
   				finish();
   			} 
   		});
       
       imageButtonBack.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
  						Select.class);
  				startActivity(i);
  				finish();
  			} 
  		});
       
       imageButtonFire.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
  						FireApp.class);
  				startActivity(i);
  				finish();
  			} 
  		});
       
       imageButtonWaste.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				WasteApp.class);
  				startActivity(i);
  				finish();
  			} 
  		});
       
       imageButtonAdd.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		Intent i = new Intent(getApplicationContext(),
        				AddTipMenuActivity.class);
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
