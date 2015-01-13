package ernest.farming.instructor;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;


public class MainActivity extends Activity{
	
	ImageButton imageButtonExit;
	ImageButton imageButtonRegister;
	ImageButton imageButtonCrops;
	ImageButton imageButtonPest;
	ImageButton imageButtonaftrharvest;
	ImageButton imageButtonSpeech;
	ImageButton imageButtonRestart;
	ImageButton imageButtonAnimals;
	ImageButton imageButtonAgro;
	ImageButton imageButtonToDo;
	ImageButton imageButtonAddTip;
	ImageButton imageButtonOnlineTips;
	ImageButton imageButtonEcoFriend;
	ImageButton imageButtonComment;
	ImageButton imageButtonAbout;
	ImageButton imageButtonAnimated;
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
        
     // Importing all assets like buttons, text fields 
       imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
       imageButtonRegister = (ImageButton) findViewById(R.id.imageButtonRegister);
       imageButtonAbout = (ImageButton) findViewById(R.id.imageButtonAbout);
       imageButtonComment = (ImageButton) findViewById(R.id.imageButtonComment);
       imageButtonOnlineTips = (ImageButton) findViewById(R.id.imageButtonOnlineTips);
       imageButtonAddTip = (ImageButton) findViewById(R.id.imageButtonAddTip);
       imageButtonAnimals = (ImageButton) findViewById(R.id.imageButtonAnimals);
       imageButtonCrops = (ImageButton) findViewById(R.id.imageButtonCrops);
       imageButtonPest = (ImageButton) findViewById(R.id.imageButtonPest);
       imageButtonaftrharvest = (ImageButton) findViewById(R.id.imageButtonaftrharvest);
       imageButtonSpeech = (ImageButton) findViewById(R.id.imageButtonSpeech);
       imageButtonRestart = (ImageButton) findViewById(R.id.imageButtonRestart);
       imageButtonEcoFriend = (ImageButton) findViewById(R.id.imageButtonEcoFriend);
       imageButtonAgro = (ImageButton) findViewById(R.id.imageButtonAgro);
       imageButtonToDo = (ImageButton) findViewById(R.id.imageButtonToDo);
       imageButtonAnimated = (ImageButton) findViewById(R.id.imageButtonAnimated);
       
        
        //assigning button click events 
       
       imageButtonRegister.setOnClickListener(new View.OnClickListener() {
       	public void onClick(View view) {
       		Intent i = new Intent(getApplicationContext(),
						Register.class);
				startActivity(i);
				finish();
			} 
		});
       
       imageButtonAddTip.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				AddTipMenuActivity.class);
   				startActivity(i);
   				finish();
   			} 
   		});
   		
       imageButtonAnimated.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				AnimatedActivity.class);
   				startActivity(i);
   				finish();
   			} 
   		});
   		
       imageButtonAbout.setOnClickListener(new View.OnClickListener() {
       	public void onClick(View view) {
       		Intent i = new Intent(getApplicationContext(),
       				About.class);
				startActivity(i);
				finish();
			} 
		});
       
      
   		
   		
   		imageButtonComment.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				Comment.class);
   				startActivity(i);
   				finish();
   			} 
   		});
   		
       imageButtonEcoFriend.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				EcoFriend.class);
   				startActivity(i);
   				finish();
   			} 
   		});
       
       imageButtonOnlineTips.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				OnlineTipMenu.class);
  				startActivity(i);
  				finish();
  			} 
  		});
       
       
       imageButtonToDo.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
          				MySQLiteDB.class);
   				startActivity(i);
   				finish();
   			} 
   		});
       
       
       imageButtonAgro.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
   						SplashAgro.class);
   				startActivity(i);
   				finish();
   			} 
   		});
       
       
       imageButtonCrops.setOnClickListener(new View.OnClickListener() {
          	public void onClick(View view) {
          		Intent i = new Intent(getApplicationContext(),
   						Crops.class);
   				startActivity(i);
   				finish();
   			} 
   		});
       
       imageButtonSpeech.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
  						SpeechMenu.class);
  				startActivity(i);
  				finish();
  			} 
  		});
       
       imageButtonPest.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
  						PestControl.class);
  				startActivity(i);
  				finish();
  			} 
  		});
       
       imageButtonaftrharvest.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				AfterHarvest.class);
  				startActivity(i);
  				finish();
  			} 
  		});
       
       imageButtonRestart.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		Intent i = new Intent(getApplicationContext(),
        				SplashActivity.class);
 				startActivity(i);
 				finish();
 			} 
 		});
       
       
       imageButtonAnimals.setOnClickListener(new View.OnClickListener() {
       	public void onClick(View view) {
       		Intent i = new Intent(getApplicationContext(),
       				AnimalsActivity.class);
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
