package ernest.city.survicor;

import java.util.Locale;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.speech.tts.TextToSpeech;
import android.speech.tts.TextToSpeech.OnInitListener;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ImageButton;
import android.widget.TextView;
import android.widget.Toast;


public class GameInfo extends Activity implements OnClickListener, OnInitListener{
	
	//TTS object
	private TextToSpeech myTTS;
		//status check code
	private int MY_DATA_CHECK_CODE = 0;
	
	ImageButton imageButtonExit;
	TextView showResult;
	ImageButton imageButtonBack;
	ImageButton speak;
	String info = "City Survivor" + "\n\n\n" + 
			"Mobile App that will increase your city surviving skills by giving you ideas and facts about city life that can help you reduce life expenditures by using natural resources that surrounds you." + "\n\n" + 

			"- The app has two parts Game and Pure App." + "\n\n" +
			"- City Survivor automatically starts at boot (the app will start every time you start your device)." + "\n\n" +
			"- City Survivor use notifications on status bar to remind you about new skills." + "\n\n" +
			"- The app covers five areas (Rain, Sun, Waste, Health and Fire)." + "\n\n" +
			"- The aim of the app is to make a good use of (Rain, Sun, Waste and Fire) in cities so as to reduce cost of life in cities." + "\n\n" +
			"- Also this app reminds you about important health tips." + "\n\n" +
			"- City survivor Mobile app can be used either online or offline." + "\n\n" +
			"- The game aims in helping users to sharp their surviving skills." + "\n\n\n" +
			
			"How to use: Game Part" + "\n\n" +
			"This game part use sentences/ tips, cells / small rooms, and produced words." + "\n\n" +
			"User / Player is required to re-create the sentence appearing on the screen by producing words using word producer button the drag the produced word and drop it to the cell that you think it is supposed to be." + "\n\n" +
			"The challenge to the player is to recreate the sentence that appear within 1 minute (60 seconds)" + "\n\n" +
			"Once the time is up you will have the chance to replay the game using a different sentence." + "\n\n" +

			"\t\t" + "- Use the Sun Button from Game Menu to play a ‘filling empty cell words game’ by drag and drop to recreate a sentence that appears on your screen." + "\n\n" +
			"\t\t" + "- Use the Waste Button from Game Menu to play a ‘filling empty cell words game’ by drag and drop to recreate a sentence that appears on your screen." + "\n\n" +
			"\t\t" + "- Use the Health Button from Game Menu to play a ‘filling empty cell words game’ by drag and drop to recreate a sentence that appears on your screen." + "\n\n" +
			"\t\t" + "- Use the Fire Button from Game Menu to play a ‘filling empty cell words game’ by drag and drop to recreate a sentence that appears on your screen." + "\n\n" +
			"\t\t" + "- Use the Rain Button from Game Menu to play a ‘filling empty cell words game’ by drag and drop to recreate a sentence that appears on your screen." + "\n\n" +
			"\t\t" + "- Access Info Button to get more information on how to use this app." + "\n\n\n\n" +

"Developers" + "\n\n" + 
"City Survivor Mobile App developed by" + "\n\n" +
"Team TopCoders" + "\n\n\n" +
"Mwalusanya Ernest James" + "\n"+
"[ernest.mwalusanya@gmail.com / +255 754 949485] " + "\n\n\n" +
"&" + "\n\n\n" +
"Koko Landry Cirhuza " + "\n" +
"[klandrych@gmail.com / +256 757 267542]. " + "\n\n\n" +
"TopCoders believes Life is not fair so plan accordingly and City Survivor is the way forward.";
	
				
	
	
	
	 @Override
	  	public void onBackPressed() {
		 Intent i = new Intent(getApplicationContext(),
				 MenuGame.class);
			startActivity(i);
			finish();
		 }
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.game_info);
        
     // Importing all assets like buttons, text fields 
       imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
       showResult = (TextView) findViewById(R.id.showResult);
       imageButtonBack = (ImageButton) findViewById(R.id.imageButtonBack);
       speak = (ImageButton)findViewById(R.id.speak);
       
       
     //listen for clicks
   	speak.setOnClickListener(this);

		//check for TTS data
       Intent checkTTSIntent = new Intent();
       checkTTSIntent.setAction(TextToSpeech.Engine.ACTION_CHECK_TTS_DATA);
       startActivityForResult(checkTTSIntent, MY_DATA_CHECK_CODE);
       
      
       
       //display to the screen
       showResult.setText(info);
       
        
        //assigning button click events 
       imageButtonBack.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
  						MenuGame.class);
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



	
	
	//respond to button clicks
  	public void onClick(View v) {

  			//get the text entered
  	    	String words = info.toString();
  	    	speakWords(words);
  	}
  	
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
  			if(myTTS.isLanguageAvailable(Locale.US)==TextToSpeech.LANG_AVAILABLE)
  				myTTS.setLanguage(Locale.US);
  		}
  		else if (initStatus == TextToSpeech.ERROR) {
  			Toast.makeText(this, "Sorry! Text To Speech failed...", Toast.LENGTH_LONG).show();
  		}
  	}
	



}




