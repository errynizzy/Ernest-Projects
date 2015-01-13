package ernest.farming.instructor;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;

public class AddTipMenuActivity extends Activity{
	ImageButton imageButtonCropsAddTip;
	ImageButton imageButtonPestAddTip;
	ImageButton imageButtonAnimalAddTip;
	ImageButton imageButtonaftrharvestAddTip;
	ImageButton imageButtonEcoAddTip;
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
        setContentView(R.layout.addtipmenuactivity);
        
        imageButtonCropsAddTip = (ImageButton) findViewById(R.id.imageButtonCropsAddTip);
        imageButtonPestAddTip = (ImageButton) findViewById(R.id.imageButtonPestAddTip);
        imageButtonAnimalAddTip = (ImageButton) findViewById(R.id.imageButtonAnimalAddTip);
        imageButtonaftrharvestAddTip = (ImageButton) findViewById(R.id.imageButtonaftrharvestAddTip);
        imageButtonEcoAddTip = (ImageButton) findViewById(R.id.imageButtonEcoAddTip);
        imageButtonHome = (ImageButton) findViewById(R.id.imageButtonHome);
        imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
        
        
        //button actions
        imageButtonCropsAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				CropAddTip.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        imageButtonPestAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				PestAddTip.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        imageButtonAnimalAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				AnimalAddTip.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        imageButtonaftrharvestAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				AfterHarvestAddTip.class);
  				startActivity(i);
  				finish();
  			} 
  		});
        
        
        imageButtonEcoAddTip.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				EcoFriendAddTip.class);
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
