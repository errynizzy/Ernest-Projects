package ernest.farming.instructor;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;

public class OnlineTipMenu extends Activity{
	ImageButton imageButtonCropsTip;
	ImageButton imageButtonPestTip;
	ImageButton imageButtonAnimalTip;
	ImageButton imageButtonaftrharvestTip;
	ImageButton imageButtonEcoTip;
	ImageButton imageButtonHome;
	ImageButton imageButtonExit;

@Override
 	public void onBackPressed() {
 	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
 	    builder.setMessage("What do you want to do?")
 	           .setCancelable(false)
 	           .setPositiveButton("Go Back", new DialogInterface.OnClickListener() {
 	               public void onClick(DialogInterface dialog, int id) {
 	            	  Intent i = new Intent(getApplicationContext(),
 								MainActivity.class);
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
        setContentView(R.layout.onlinetipmenu);
        
        imageButtonCropsTip = (ImageButton) findViewById(R.id.imageButtonCropsTip);
        imageButtonPestTip = (ImageButton) findViewById(R.id.imageButtonPestTip);
        imageButtonAnimalTip = (ImageButton) findViewById(R.id.imageButtonAnimalTip);
        imageButtonaftrharvestTip = (ImageButton) findViewById(R.id.imageButtonaftrharvestTip);
        imageButtonEcoTip = (ImageButton) findViewById(R.id.imageButtonEcoTip);
        imageButtonHome = (ImageButton) findViewById(R.id.imageButtonHome);
        imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
        
        
        //button actions
        imageButtonCropsTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				OnlineCropTip.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        imageButtonPestTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				OnlinePestTip.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        imageButtonAnimalTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				OnlineAnimalTip.class); 
  				startActivity(i);
  				finish();
  			} 
  		});
        
        imageButtonaftrharvestTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				OnlineAfterHarvestTip.class); 
  				startActivity(i);
  				finish();
  			} 
  		});
        
        
        imageButtonEcoTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				OnlineEcoFriendTip.class); //change
  				startActivity(i);
  				finish();
  			} 
  		});
        
        
        imageButtonHome.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				MainActivity.class);
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

