package ernest.farming.instructor;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;


public class SpeechMenu extends Activity{
	
	ImageButton imageButtonExit;
	ImageButton imageButtonCropsSpeech;
	ImageButton imageButtonPestSpeech;
	ImageButton imageButtonaftrharvestSpeech;
	ImageButton imageButtonAnimalSpeech;
	ImageButton imageButtonHome;
	ImageButton imageButtonEcoSpeech;

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
        setContentView(R.layout.speechmenu);
        
     // Importing all assets like buttons, text fields 
       imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
       imageButtonHome = (ImageButton) findViewById(R.id.imageButtonHome);
       imageButtonCropsSpeech = (ImageButton) findViewById(R.id.imageButtonCropsSpeech);
       imageButtonPestSpeech = (ImageButton) findViewById(R.id.imageButtonPestSpeech);
       imageButtonaftrharvestSpeech = (ImageButton) findViewById(R.id.imageButtonaftrharvestSpeech);
       imageButtonAnimalSpeech = (ImageButton) findViewById(R.id.imageButtonAnimalSpeech);
       imageButtonEcoSpeech = (ImageButton) findViewById(R.id.imageButtonEcoSpeech);
       
       
        
        //assigning button click events 
       
       imageButtonCropsSpeech.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		Intent i = new Intent(getApplicationContext(),
        				CropsSpeech.class);
 				startActivity(i);
 				finish();
 			} 
 		});
       
       imageButtonaftrharvestSpeech.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				AfterHarvestSpeech.class);
   				startActivity(i);
   				finish();
   			} 
   		});
       
       imageButtonEcoSpeech.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				EcoFriendSpeech.class);
  				startActivity(i);
  				finish();
  			} 
  		});
       
       imageButtonPestSpeech.setOnClickListener(new View.OnClickListener() {
       	public void onClick(View view) {
       		Intent i = new Intent(getApplicationContext(),
       				PestControlSpeech.class);
				startActivity(i);
				finish();
			} 
		});
       
       
       imageButtonAnimalSpeech.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				AnimalsActivitySpeech.class);
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

