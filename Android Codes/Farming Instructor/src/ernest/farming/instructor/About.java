package ernest.farming.instructor;

import java.util.Locale;


	


	import android.app.Activity;
	import android.app.AlertDialog;
	import android.content.DialogInterface;
	import android.content.Intent;
	import android.os.Bundle;
	import android.speech.tts.TextToSpeech;
	import android.speech.tts.TextToSpeech.OnInitListener;
	import android.view.View;
	import android.view.View.OnClickListener;
	import android.widget.Button;
	import android.widget.TextView;
	import android.widget.Toast;

	public class About extends Activity implements OnClickListener, OnInitListener{
		
		//TTS object
				private TextToSpeech myTTS;
					//status check code
				private int MY_DATA_CHECK_CODE = 0;
		
		String one = "Farming Instructor Mobile Application."+ "\n\n" +
						"Created by: Mwalusanya Ernest James." + "\n\n"+
						"Student at Kampala International University." + "\n\n"+
						"Email: erry_nizzy@yahoo.com" + "\n\n";
		
		String two = "Farming Instructor is an Android mobile application that provides necessary Agricultural Information to the farmers and the community. The Information provided with this application includes Agro- Ecological Zones, Pest Control, Crops Farming Tips, Fisheries tips, Animal Husbandly tips, and after harvest activities like storage and packaging.";
		
		String three = "Farming Instructor Version 1.0 has the following features:"+"\n"+
				"\t" + "-Modern Farming Tips." + "\n"+
				"\t" + "-Pest Control Tips." + "\n"+
				"\t" + "-After Harvest Tips." + "\n"+
				"\t" + "-Animal Keeping Tips." + "\n"+
				"\t" + "-Eco Friendly Information." + "\n"+
				"\t" + "-Crops growing Animated Steps." + "\n"+
				"\t" + "-Text To Speech for all Tips." + "\n";
						
		String four = "Farming Instructor provides both Online and Offline Information.";
		
		String five = "With this application users can be able to listen to the farming speech of the tips they want.";
		
		String six = "Users will also be able to add their own farming tips. To do this, user must register with this application using My Account button and they will be able to get their Farming Instructor Account."+ "\n\n"+
		"Registration is Free.";
		
		String seven = "Once users are registrered, they can be able to add their tips in this app and their tip will be visible to the public.";
		
		String eight = "How To Use:" + "\n\n" + 
		"\t"+ "- Register With farming instructor (Using My Account Button). Tis Registration will allow you to Add your own Tips to this app" + "\n\n" + 
		"\t"+ "- Obtain your Farming Instructor ID by using the password you create when registering" + "\n\n" + 
		"\t"+ "- Access Farming Tips, Pest Control, After Harvest, and Animals Features. They are offline Information from local database." + "\n\n" + 
		"\t"+ "- Access Live to chat with farmers . This feature needs your phone to be connected to Internet. Note My Account Registration and Live Chat Registration are note then same. To use both features you must register in each feature." + "\n\n" + 
		"\t"+ "- Access Add Tip to add different tips . This feature needs your phone to be connected to Internet." + "\n\n" + 
		"\t"+ "- Access Online Tips to get Information from different users of Farming Instructor worldwide. This feature needs your phone to be connected to Internet." + "\n\n" + 
		"\t"+ "- Access Speech to listen to the speech of all the Information (Tips available in this app) This feature needs your phone to have Speech Synthesis Installed in your Android phone. By default the app is configured to download it direct from Google Play when you use it for the first time." + "\n\n" + 
		"\t"+ "- Access To Do List to write the list of all activities you wish to do." + "\n\n" + 
		"\t"+ "- Access Comment to send your opinion on how to improve this app. This feature needs your phone to be connected to Internet." + "\n\n" + 
		"\t"+ "- Access About to know more about this app and the developer of this app." + "\n\n" 
		 ;
		String nine = "I wish you all the best in using this app."+"\n\n"+"Thank You.";
		String ten = "Developer:"+ "\t"+ "Mwalusanya Ernest James.";
		String eleven = "E-Mail:"+ "\t"+ "errynizzy@gmail.com" + "\n"+
		"\t\t\t"+"erry_nizzy@yahoo.com";
		String twelve = "Phone:"+ "+256 703 642275. 0r. +255 754 949485";
		
		String total = one + two + three + four + five + six + seven + eight + nine + ten + eleven + twelve;
		
		
		TextView showresult1;
		TextView showresult2;
		TextView showresult3;
		TextView showresult4;
		TextView showresult5;
		TextView showresult6;
		TextView showresult7;
		TextView showresult8;
		TextView showresult9;
		TextView showresult10;
		TextView showresult11;
		TextView showresult12;
		
		Button buttonBack;
		Button buttonExit;
		Button speak;
		
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
	        setContentView(R.layout.about);
	        
	        
	        //allocate
	        showresult1  = (TextView) findViewById(R.id.showresult1);
	        showresult2  = (TextView) findViewById(R.id.showresult2);
	        showresult3  = (TextView) findViewById(R.id.showresult3);
	        showresult4  = (TextView) findViewById(R.id.showresult4);
	        showresult5  = (TextView) findViewById(R.id.showresult5);
	        showresult6  = (TextView) findViewById(R.id.showresult6);
	        showresult7  = (TextView) findViewById(R.id.showresult7);
	        showresult8  = (TextView) findViewById(R.id.showresult8);
	        showresult9  = (TextView) findViewById(R.id.showresult9);
	        showresult10  = (TextView) findViewById(R.id.showresult10);
	        showresult11  = (TextView) findViewById(R.id.showresult11);
	        showresult12  = (TextView) findViewById(R.id.showresult12);
	        
	        buttonExit = (Button) findViewById(R.id.buttonExit); 
	        buttonBack = (Button) findViewById(R.id.buttonBack); 
	        speak = (Button)findViewById(R.id.speak);
	   		
	   		
	       	//listen for clicks
	        	speak.setOnClickListener(this);

	    		//check for TTS data
	            Intent checkTTSIntent = new Intent();
	            checkTTSIntent.setAction(TextToSpeech.Engine.ACTION_CHECK_TTS_DATA);
	            startActivityForResult(checkTTSIntent, MY_DATA_CHECK_CODE);
	        
	        
	        
	        
	        
	        //buttons actions
	        buttonExit.setOnClickListener(new View.OnClickListener() {
	        	public void onClick(View view) {
	        		 finish();
	                 System.exit(0);
				} 
			}); 
	        
	        
	        buttonBack.setOnClickListener(new View.OnClickListener() {
	        	public void onClick(View view1) {
					Intent i = new Intent(getApplicationContext(),
							MainActivity.class);
					startActivity(i);
					finish();
				} 
			}); 
	        
	        //text view actions
	        showresult1.setText(one);
	        showresult2.setText(two);
	        showresult3.setText(three);
	        showresult4.setText(four);
	        showresult5.setText(five);
	        showresult6.setText(six);
	        showresult7.setText(seven);
	        showresult8.setText(eight);
	        showresult9.setText(nine);
	        showresult10.setText(ten);
	        showresult11.setText(eleven);
	        showresult12.setText(twelve);

	        
	        
		}
		
		//respond to button clicks
	  	public void onClick(View v) {

	  			//get the text entered
	  	    	String words = total.toString();
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
