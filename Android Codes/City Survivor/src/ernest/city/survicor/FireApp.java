package ernest.city.survicor;

import java.util.ArrayList;
import java.util.List;
import java.util.Locale;


import android.app.Activity;
import android.content.Intent;
import android.graphics.drawable.AnimationDrawable;
import android.os.Bundle;
import android.speech.tts.TextToSpeech;
import android.speech.tts.TextToSpeech.OnInitListener;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ArrayAdapter;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.RelativeLayout;
import android.widget.Spinner;
import android.widget.Toast;

public class FireApp extends Activity implements OnClickListener, OnInitListener{
	
	//TTS object
	private TextToSpeech myTTS;
		//status check code
	private int MY_DATA_CHECK_CODE = 0;
	
	
	ImageButton imageButtonPlay;
	
	Spinner spinnerCrops;
	String value1 = "";
	 AnimationDrawable animation;
     AnimationDrawable animation1;
     AnimationDrawable animationSoil;
     AnimationDrawable animationWater;
     
     ImageView imgbottom;
	
	
	@Override
 	public void onBackPressed() {
 	            	  Intent i = new Intent(getApplicationContext(),
 								MenuApp.class);
 						startActivity(i);
 						finish();
 	}
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.fire_app);
        
        imageButtonPlay = (ImageButton) findViewById(R.id.imageButtonPlay);
        //for TTS
     	//listen for clicks
        imageButtonPlay.setOnClickListener(this);

		//check for TTS data
        Intent checkTTSIntent = new Intent();
        checkTTSIntent.setAction(TextToSpeech.Engine.ACTION_CHECK_TTS_DATA);
        startActivityForResult(checkTTSIntent, MY_DATA_CHECK_CODE);
        
       
     	addListenerOnButton();
     	
     	
     	addItemsOnspinnerCrops();
     	addListenerOnButton1();
     	addListenerOnSpinnerItemSelection1();
        
	}
	
	 // add items into spinner dynamically
	 
	  public void addItemsOnspinnerCrops() {
			 
		  spinnerCrops = (Spinner) findViewById(R.id.spinnerCrops);
		List<String> list1 = new ArrayList<String>();
		list1.add("Firefighting");
		list1.add("Firefighters' duties");
		
		
		ArrayAdapter<String> dataAdapter1 = new ArrayAdapter<String>(this,
			android.R.layout.simple_spinner_item, list1);
		dataAdapter1.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
		spinnerCrops.setAdapter(dataAdapter1);

}
	  
	 
	  
	  public void addListenerOnSpinnerItemSelection1() {
		  
		  spinnerCrops.setOnItemSelectedListener(new CustomOnItemSelectedListener1());
   	  }
   	 
   	  // get the selected dropdown list value
   	  public void addListenerOnButton() {
   	 
   		
}
public void addListenerOnButton1() {
   	 
	imageButtonPlay = (ImageButton) findViewById(R.id.imageButtonPlay);
	
     imgbottom = (ImageView)findViewById(R.id.imgbottom);
		
   	//for crops tips
	imageButtonPlay.setOnClickListener(new View.OnClickListener() {
		  public void onClick(View v) {
			  
			 value1 = spinnerCrops.getSelectedItem().toString();
			  if (value1 == "Firefighting")
			  {
				  startAnimationFirefighting();
			  }
			 
			  else if (value1 == "Firefighters' duties")
			  {
				  startAnimationFirefightersduties();
			  }
			  
			 
	
		  }
	 
		});
	
	
	
   	
   	
	

}

class Starter implements Runnable {
    public void run() {
         animation.start();
         animation1.start();
         animationSoil.start();
     }
 }
 
//implement button action

 private void startAnimationFirefighting(){
	  
	
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
    
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.firefit), 8000); 
    
     String words = "Firefighting is the act of extinguishing fires. A firefighter fights fires to prevent loss of life, and/or destruction of property and the environment. Firefighting is a highly technical skill that requires professionals who have spent years training in both general firefighting techniques and specialized areas of expertise.".toString();

     
  	speakWords(words);
  	
     animationSoil.addFrame(getResources().getDrawable(R.drawable.firefit), 8000); 
     
    
     animationSoil.setOneShot(true);
     
    
     
     
    
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
    
   
     animation.setOneShot(true);
     
     //the view itself
         ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(400, 450);
     paramsSoil.alignWithParent = true;
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 230, 10, 10);
     
    
     

   //final
    
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }
 
 private void startAnimationFirefightersduties(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.firefit), 8000); 
    
     String words = "Firefighters' goals are to save lives, property and the environment. A fire can rapidly spread and endanger many lives; however, with modern firefighting techniques, catastrophe is usually, but not always, avoided. To prevent fires from starting, a firefighter's duties can include public education about fire safety and conducting fire inspections of locations for their adherence to local fire codes." +

"Because firefighters are often the first responders to people in critical conditions, firefighters may provide many other valuable services to the community they serve, such as:" +

    "Emergency medical services, as technicians or as licensed paramedics, staffing ambulances."+
    "Hazardous materials mitigation (HAZMAT)." +
    "Vehicle rescue/extrication." +
    "Search and rescue." +
    "Community disaster support." +
    "Fire risk assessments".toString();

     
  	speakWords(words);
  	
     animationSoil.addFrame(getResources().getDrawable(R.drawable.firefit), 8000); 
     
    
    
     animationSoil.setOneShot(true);
     
    
     
     
     
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
    
     animation.setOneShot(true);
     
     //the view itself
    
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(400, 450);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 230, 10, 10);
     
   
     
     

   //final
    
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }
 
 

 
//respond to button clicks
	//public void onClick(View v) {

			//get the text entered
	    	//String words = total.toString();
	    	//speakWords(words);
	//}
	
//speak the user text
	private void speakWords(String speech) {

			//speak straight away
	    	myTTS.speak(speech, TextToSpeech.QUEUE_FLUSH, null);
	}
	
//act on result of TTS data check
	protected void onActivityResult(int requestCode, int resultCode, Intent data) {
	
		if (requestCode == MY_DATA_CHECK_CODE) {
			if (resultCode == TextToSpeech.Engine.CHECK_VOICE_DATA_PASS) {
				//the user has the necessary data - create the TTS
			myTTS = new TextToSpeech(this, this);
			}
			else {
					//no data - install it now
				Intent installTTSIntent = new Intent();
				installTTSIntent.setAction(TextToSpeech.Engine.ACTION_INSTALL_TTS_DATA);
				startActivity(installTTSIntent);
			}
		}
	}

		//setup TTS
	public void onInit(int initStatus) {
	
			//check for successful instantiation
		if (initStatus == TextToSpeech.SUCCESS) {
			if(myTTS.isLanguageAvailable(Locale.UK)==TextToSpeech.LANG_AVAILABLE)
				myTTS.setLanguage(Locale.UK);
		}
		else if (initStatus == TextToSpeech.ERROR) {
			Toast.makeText(this, "Sorry! Text To Speech failed...", Toast.LENGTH_LONG).show();
		}
	}


		@Override
		public void onClick(View arg0) {
			// TODO Auto-generated method stub
			
		}
	


}



