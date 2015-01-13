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

public class SunApp extends Activity implements OnClickListener, OnInitListener{
	
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
        setContentView(R.layout.sun_app);
        
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
		list1.add("What is Solar System");
		list1.add("Advantages of Solar System");
		list1.add("Disadvantages of Solar System");
		list1.add("Requirements of Solar System");
		
		
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
			  if (value1 == "What is Solar System")
			  {
				  startAnimationWhatisSolarSystem();
			  }
			 
			  else if (value1 == "Advantages of Solar System")
			  {
				  startAnimationAdvantagesofSolarSystem();
			  }
			  else if (value1 == "Disadvantages of Solar System")
			  {
				  startAnimationDisadvantagesofSolarSystem();
			  }
			  
			  else if (value1 == "Requirements of Solar System")
			  {
				  startAnimationRequirmentsofSolarSystem();
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

 private void startAnimationWhatisSolarSystem(){
	  
	
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
    
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
    
     String words = "Solar energy is the radiant energy produced by the Sun. It is both light and heat. It, along with secondary solar-powered resources such as wind and wave power, account for the majority of the renewable energy on Earth." +
     		"Humans harness solar energy in many different ways: space heating and cooling, the production of potable water by distillation, disinfection, lighting, hot water, and cooking. The applications for solar energy are only limited by human ingenuity. Solar technologies are characterized as either passive or active depending on the way the energy is captured, converted, and distributed. Active solar techniques use photovoltaic panels and solar thermal collectors to harness the energy. Passive techniques include orienting a building to the Sun, selecting materials with thermal mass properties, and using materials with light dispersing properties.".toString();

     
  	speakWords(words);
  	
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000); 
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000);
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
 
 private void startAnimationAdvantagesofSolarSystem(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
    
     String words = "No green house gases, The first and foremost advantage of solar energy is that it does not emit any green house gases." +
"Infinite Free Energy, Another advantage of using solar energy is that beyond initial installation and maintenance, solar energy is one hundred percent free."+
"Decentralization of power, Solar energy offers decentralization in most (sunny) locations, meaning self-reliant societies."+
"Going off the grid with solar, Solar energy can be produced on or off the grid."+
"Solar jobs, A particularly relevant and advantageous feature of solar energy production is that it creates jobs."+
"Saving eco-systems and livelihoods, Because solar doesn’t rely on constantly mining raw materials, it doesn’t result in the destruction of forests and eco-systems that occurs with most fossil fuel operations. Destruction can come in many forms, from destruction through accepted extraction methods, to more irresponsible practices in vulnerable areas, to accidents.".toString();

     
  	speakWords(words);
  	
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000); 
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000);
    
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
 
 private void startAnimationDisadvantagesofSolarSystem(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
    
     String words = "Solar doesn’t work at night, Obviously the biggest disadvantages of solar energy production revolve around the fact that it’s not constant. To produce solar electricity there must be sunlight. So energy must be stored or sourced elsewhere at night" +
"Solar Inefficiency, A very common criticism is that solar energy production is relatively inefficient." +
"Storing Solar, Solar electricity storage technology has not reached its potential yet." +
"Cost, The main hindrance to solar energy going widespread is the cost of installing solar panels. Capital costs for installing a home solar system or building a solar farm are high.".toString();

     
  	speakWords(words);
  	
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000); 
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 8000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 8000);
     
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
 
 private void startAnimationRequirmentsofSolarSystem(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 5000); 
    
     String words = "Solar energy System Requirements. Sun, Panels, Energy Storage, complete wiring system and devices".toString();

     
  	speakWords(words);
  	
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 5000); 
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 5000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 5000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 5000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 5000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar1), 5000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar2), 5000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 5000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.solar3), 5000);
     
     
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



