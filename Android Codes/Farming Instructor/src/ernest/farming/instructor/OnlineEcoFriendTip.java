package ernest.farming.instructor;

import java.util.ArrayList;
import java.util.List;
import java.util.Locale;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.speech.tts.TextToSpeech;
import android.speech.tts.TextToSpeech.OnInitListener;
import android.util.Log;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

public class OnlineEcoFriendTip extends Activity implements OnClickListener, OnInitListener{
	//TTS object
		private TextToSpeech myTTS;
			//status check code
		private int MY_DATA_CHECK_CODE = 0;
	
	Button buttonView;
	Button buttonClear;
	Button buttonBack;
	Button buttonExit;
	String response;
	TextView showresult;
	TextView showresult1;
	Button speak;
	
	
	Spinner spinnerSelectCrop;
	String returnString = "";
	String bb;

@Override
 	public void onBackPressed() {
 	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
 	    builder.setMessage("What do you want to do?")
 	           .setCancelable(false)
 	           .setPositiveButton("Go Back", new DialogInterface.OnClickListener() {
 	               public void onClick(DialogInterface dialog, int id) {
 	            	  Intent i = new Intent(getApplicationContext(),
 								OnlineTipMenu.class);
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
        setContentView(R.layout.onlineecofriendtip);
        
        buttonView = (Button) findViewById(R.id.buttonView);
        buttonClear = (Button) findViewById(R.id.buttonClear);
        buttonBack = (Button) findViewById(R.id.buttonBack);
        buttonExit = (Button) findViewById(R.id.buttonExit);
        showresult  = (TextView) findViewById(R.id.showresult);
        showresult  = (TextView) findViewById(R.id.showresult);
        speak = (Button)findViewById(R.id.speak);
   		
   		
   	   	//listen for clicks
   	    	speak.setOnClickListener(this);

   			//check for TTS data
   	        Intent checkTTSIntent = new Intent();
   	        checkTTSIntent.setAction(TextToSpeech.Engine.ACTION_CHECK_TTS_DATA);
   	        startActivityForResult(checkTTSIntent, MY_DATA_CHECK_CODE);
       
        
        
        addItemsOnspinnerCrops();
     	addListenerOnSpinnerItemSelection1();
     	
    
        
        
        //button actions
        buttonExit.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		 finish();
                 System.exit(0);
			} 
		}); 
        
        buttonClear.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						OnlineEcoFriendTip.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        buttonBack.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						OnlineTipMenu.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        
        
        //dont mess with this button.....hahahaaaa
        buttonView.setOnClickListener(new View.OnClickListener(){
            public void onClick(View v) {
           	
             
          
                
                
             ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
             postParameters.add(new BasicNameValuePair("spinnerSelectCrop", spinnerSelectCrop.getSelectedItem().toString()));
             String response = null;

             try {
        response = CustomHttpClient.executeHttpPost("http://10.0.2.2/farming/getonline.php",postParameters); // your ip address if using localhost server

        String result = response.toString();  
         //parse json data

            try{
                   returnString = "";
              JSONArray jArray = new JSONArray(result);
                
                    jArray = new JSONArray(result);
                    JSONObject json_data=null;
                    
                    
                    for(int i=0;i<jArray.length();i++){
                             json_data = jArray.getJSONObject(i);

                            Log.i("log_tag","Data: "+
                           		 json_data.getString("tipname")
                             
                            
                            );


                            //Get an output to the screen
                            returnString += "User Tip."
                           		 +"\n" + "Tip received from: \t"+ json_data.getString("names")+"."
                           		 + " \n"+ 
                           		 "Date sent: \t" +json_data.getString("date")+ "."
                           		 + " \n"+ 
                           		"Tip Name: \t" +json_data.getString("tipname")+ "."
                           		+ " \n"+ 
                           		"Sender Email: \t" +json_data.getString("email") + "."
                           		+ " \n"+ 
                           		"Country: \t" +json_data.getString("country")+"."
                          		 + " \n"+
                           		 "Tip added: \t" +json_data.getString("usertip")+"."
                           		 + "\n\n\n" + "---------------------------------------------------------------" + "\n\n\n"
                           		 ;
                          		
                           
                           
                    }
            }
            catch(JSONException e){
             	  showresult1.setText("No response. This can be caused by error in Internet Connection or the data you are trying to access is not available. Please check your Internet settings and try again!");
                    Log.e("log_tag", "Error parsing data "+e.toString());
            }
            try{
           	 showresult.setText(returnString);
           	 
            }
            catch(Exception e){
             Log.e("log_tag","Error in Display!" + e.toString());          
            }   
       }
             catch (Exception e) {
            	  showresult.setText("No response. This can be caused by error in Internet Connection or the data you are trying to access is not available. Please check your Internet settings and try again!");
        Log.e("log_tag","Error in http connection!!" + e.toString());     
       }
             
            }  
            
           });
        
        
        
       
        
        
        
	}
	
	 // add items into spinner dynamically
	 
	  public void addItemsOnspinnerCrops() {
			 
		  spinnerSelectCrop = (Spinner) findViewById(R.id.spinnerSelectCrop);
		List<String> list1 = new ArrayList<String>();
		list1.add("Chemical fertilizers");
		list1.add("Herbicides");
		list1.add("Intensive planting");
		list1.add("Rotating Crops");
		list1.add("Watering");
		list1.add("Weeding");
		list1.add("Deforestation");
		list1.add("Overcropping");
		list1.add("Overgrazing");
		list1.add("Soil Erosion");
		list1.add("Soil Erosion in Farms");
		list1.add("Salination");
		list1.add("Desertification");
		ArrayAdapter<String> dataAdapter1 = new ArrayAdapter<String>(this,
			android.R.layout.simple_spinner_item, list1);
		dataAdapter1.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
		spinnerSelectCrop.setAdapter(dataAdapter1);

}
	  
	 
	  
	  public void addListenerOnSpinnerItemSelection1() {
		  
		  spinnerSelectCrop.setOnItemSelectedListener(new CustomOnItemSelectedListener1());
 	  }
	  
	//respond to button clicks
			public void onClick(View v) {

					//get the text entered
			    	 showresult = (TextView)findViewById(R.id.showresult);
			    	String words = showresult.getText().toString();
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

