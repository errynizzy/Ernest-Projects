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

public class WasteApp extends Activity implements OnClickListener, OnInitListener{
	
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
        setContentView(R.layout.waste_app);
        
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
		list1.add("Waste management");
		list1.add("Waste Reduce ways");
		list1.add("Waste Re-use ways");
		list1.add("Waste Recycle ways"); 
		list1.add("Landfill method");
		
		
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
			  if (value1 == "Waste management")
			  {
				  startAnimationWastemanagement();
			  }
			 
			  else if (value1 == "Waste Reduce ways")
			  {
				  startAnimationWasteReduceways();
			  }
			  else if (value1 == "Waste Re-use ways")
			  {
				  startAnimationWasteReuseways();
			  }
			  
			  else if (value1 == "Waste Recycle ways")
			  {
				  startAnimationWasteRecycleways();
			  }
			  
			  else if (value1 == "Landfill method")
			  {
				  startAnimationLandfillmethod();
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

 private void startAnimationWastemanagement(){
	  
	
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
    
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    
     String words = "Waste management is the collection, transport, processing or disposal, managing and monitoring of waste materials. The term usually relates to materials produced by human activity, and the process is generally undertaken to reduce their effect on health, the environment or aesthetics. Waste management is a distinct practice from resource recovery which focuses on delaying the rate of consumption of natural resources. All wastes materials, whether they are solid, liquid, gaseous or radioactive fall within the remit of waste management" +
"Waste management practices can differ for developed and developing nations, for urban and rural areas, and for residential and industrial producers. Management of non-hazardous waste residential and institutional waste in metropolitan areas is usually the responsibility of local government authorities, while management for non-hazardous commercial and industrial waste is usually the responsibility of the generator subject to local, national or international controls.".toString();

     
  	speakWords(words);
  	
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
     
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
 
 private void startAnimationWasteReduceways(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    
     String words = "Here are some tips on how to minimise the waste in the environment" + "Reduce the waste you produce in the first place." +

   	"Buy goods with little or no packaging or packaging that can be recycled." +
    "Also buy refills and concentrates – these usually involve less packaging." +
    "Repair an item instead of replacing it, or if you no longer want it, give it to a person who does." +
    "Avoid buying disposable items such as paper plates and foam cups."+
    "Print or photocopy articles on both sides of the paper – it saves money on buying paper and on storage and postage.".toString();

     
  	speakWords(words);
  	
  	animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    
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
 
 private void startAnimationWasteReuseways(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    
     String words = "Here are some tips on how to minimise the waste in the environment" + "Re-use items before they become waste" +

    "Wash and re-use glass and plastic containers." +
    "Re-use strong plastic carrier bags instead of buying them, or use more permanent cloth bags for groceries." +
    "Cut up already printed one-sided paper into blocks for memo sheets (i.e. use the reverse side of the paper).".toString();

     
  	speakWords(words);
  	
animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
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
 
 private void startAnimationWasteRecycleways(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 5000); 
    
     String words = "Recycle your waste – many waste types can be reprocessed into useful items:" +

    "Purchase recycled or environmentally-friendly products at the shop." +
    "Recycle as much of your refuse as possible. Items such as glass bottles, tin cans, paper, plastic, vegetable matter and car oil can be recycled. Collect these items in a separate bin or box and take to your nearest solid waste drop-off facility or recycling depot. Click here for a tabled list of what facilities accept which items. View a cartoon map of all drop-off facilities in Cape Town." +
    "Electronic waste (e-waste) such as computers, printers and cell phones can also be recycled." +
    "Make compost from vegetable matter (e.g. potato peels) and garden waste (e.g. leaves/grass cuttings). Compost improves the soil structure and provides extra nutrients for garden plants.".toString();

     
  	speakWords(words);
  	
  	animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
     
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

 
 private void startAnimationLandfillmethod(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     //put speech and snaps
     animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 5000); 
    
     String words = "Disposal of waste in a landfill involves burying the waste, and this remains a common practice in most countries. Landfills were often established in abandoned or unused quarries, mining voids or borrow pits. A properly designed and well-managed landfill can be a hygienic and relatively inexpensive method of disposing of waste materials. Older, poorly designed or poorly managed landfills can create a number of adverse environmental impacts such as wind-blown litter, attraction of vermin, and generation of liquid leachate. Another common product of landfills is gas (mostly composed of methane and carbon dioxide), which is produced as organic waste breaks down anaerobically. This gas can create odor problems, kill surface vegetation, and is a greenhouse gas. Design characteristics of a modern landfill include methods to contain leachate such as clay or plastic lining material. Deposited waste is normally compacted to increase its density and stability, and covered to prevent attracting vermin (such as mice or rats). Many landfills also have landfill gas extraction systems installed to extract the landfill gas. Gas is pumped out of the landfill using perforated pipes and flared off or burnt in a gas engine to generate electricity.".toString();

     
  	speakWords(words);
  	
  	animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg1), 8000); 
    animationSoil.addFrame(getResources().getDrawable(R.drawable.wasteimg2), 8000);
     
     
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




