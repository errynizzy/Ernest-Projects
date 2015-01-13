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

public class HarvestSys extends Activity implements OnClickListener, OnInitListener{
	
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
 								RainMenu.class);
 						startActivity(i);
 						finish();
 	}
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.harvestsys);
        
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
		list1.add("Rain Barrels");
		list1.add("Dry System");
		list1.add("Wet System");
		
		
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
			  if (value1 == "Rain Barrels")
			  {
				  startAnimationRainBarrels();
			  }
			 
			  else if (value1 == "Dry System")
			  {
				  startAnimationDrySystem();
			  }
			  else if (value1 == "Wet System")
			  {
				  startAnimationWetSystem();
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

 private void startAnimationRainBarrels(){
	  
	
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.onerb), 17000); //intro
     //put timing in speech and snaps
     String words = "Rain Barrels System. This method is the most common and one that many people are familiar with. " +
     		"This involves installing a barrel at a gutter downspout to collect rainwater. The actual barrel may be a recycled barrel or a new commercially available rain barrel. " +
     		"Step One. The roof of the house is used as part of the system. " +
     		"Step Two. Put the continuous guttering system." +
     		"Step Three. Gutter is the edge of a road next to the pavement, where rain water collects and flows away. " +
     		"Step Four. Fix the Gutter to the roof. " +
     		"Step Five. At this stage your system is ready to use. Wait for the rain and start collecting water. " +
     		"6. Rain Barrels System Advantages.  Easily implemented by anyone at any residence. Barrels are readily available in your community or at various stores. Barrels don't take up much space so they can fit into any situation. " +
     		"7. Rain Barrels System Disadvantages. Capacity is generally only 50 to 100 gallons. Easily overflows and wastes collection opportunities. ".toString();

     
  	speakWords(words);
  	
     animationSoil.addFrame(getResources().getDrawable(R.drawable.rb1), 3000); //step one
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.rb2), 3000); //step 2
     animationSoil.addFrame(getResources().getDrawable(R.drawable.rb3), 6000); //step 3
     animationSoil.addFrame(getResources().getDrawable(R.drawable.rb4), 3000); //step 4
     animationSoil.addFrame(getResources().getDrawable(R.drawable.rb5), 7000); //step 5
     animationSoil.addFrame(getResources().getDrawable(R.drawable.rb6), 15000); //6
     animationSoil.addFrame(getResources().getDrawable(R.drawable.rb7), 1000);
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
 
 private void startAnimationDrySystem(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     
     String words = "Dry System. This method is a variation of a rain barrel set-up, but it involves a larger storage volume. Essentially, the collection pipe 'drys' after each rain event since it empties directly into the top of the tank. " +
       		"Advavtages. " +
       		"Can store a large amount of rainwater. " +
       		"Great for climates where rainfall happens with infrequent, larger storm events." +
       		"Can be inexpensive to implement. " +
       		"Less complicated system so maintenance is easier. " +
       		
       		"Disadvavtages . " +
       		"The storage tank must be located next to your house.".toString();

       
    	speakWords(words);
     
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     
     
     
    
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
 
 private void startAnimationWetSystem(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     String words = "Wet System. This method involves locating the collection pipes underground in order to connect multiple downspouts from different gutters. The rainwater will fill the underground piping and the water will rise in the vertical pipes until it spills into the tank. The downspouts and underground collection piping must have water-tight connections. The elevation of the tank inlet must be below the lowest gutter on the house. " +
      		"Advavtages. " +
      		"The ability to collect from your entire collection surface." +
      		"The ability to collect from multiple gutters and downspouts." +
      		"The tank can be located away from your house. " +
      		
      		
      		"Disadvavtages . " +
      		"More expensive to implement due to underground piping. " +
      		"Sufficient difference between gutters and tank inlet must be available.".toString();

      
   	speakWords(words);
     
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv1), 6000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv2), 6000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.hv3), 6000);
     
     animationSoil.setOneShot(true);
     
    
     
     
    
    animation1.setOneShot(true);
   
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


