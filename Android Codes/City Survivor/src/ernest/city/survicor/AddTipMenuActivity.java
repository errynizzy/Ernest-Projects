package ernest.city.survicor;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;

public class AddTipMenuActivity extends Activity{
	ImageButton imageButtonRainAddTip;
	ImageButton imageButtonSunAddTip;
	ImageButton imageButtonHealthAddTip;
	ImageButton imageButtonWasteAddTip;
	ImageButton imageButtonFireAddTip;
	ImageButton imageButtonInfo;
	ImageButton imageButtonBack;
	ImageButton imageButtonExit;
	
	@Override
 	public void onBackPressed() {
 	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
 	    builder.setMessage("What do you want to do?")
 	           .setCancelable(false)
 	           .setPositiveButton("Go Back", new DialogInterface.OnClickListener() {
 	               public void onClick(DialogInterface dialog, int id) {
 	            	  Intent i = new Intent(getApplicationContext(),
 								MenuApp.class);
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
        setContentView(R.layout.add_tip_menu);
        
        imageButtonRainAddTip = (ImageButton) findViewById(R.id.imageButtonRainAddTip);
        imageButtonSunAddTip = (ImageButton) findViewById(R.id.imageButtonSunAddTip);
        imageButtonHealthAddTip = (ImageButton) findViewById(R.id.imageButtonHealthAddTip);
        imageButtonWasteAddTip = (ImageButton) findViewById(R.id.imageButtonWasteAddTip);
        imageButtonFireAddTip = (ImageButton) findViewById(R.id.imageButtonFireAddTip);
        imageButtonBack = (ImageButton) findViewById(R.id.imageButtonBack);
        imageButtonInfo = (ImageButton) findViewById(R.id.imageButtonInfo);
        imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
        
        
        //button actions
        imageButtonRainAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				AddTipRain.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        imageButtonSunAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				AddTipSun.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        imageButtonHealthAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				AddTipHealth.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        imageButtonWasteAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				AddTipWaste.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        
        imageButtonFireAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				AddTipFire.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        
       
        
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

}
