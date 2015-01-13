package ernest.city.survicor;

import java.util.ArrayList;
import java.util.Calendar;
import java.util.Locale;
import java.util.Random;

import org.apache.http.NameValuePair;
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
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.TextView;
import android.widget.Toast;




public class FirstClass extends Activity implements OnClickListener, OnInitListener{
	
	String returnString = "";
	
	//TTS object
	private TextToSpeech myTTS;
		//status check code
	private int MY_DATA_CHECK_CODE = 0;
	Calendar c = Calendar.getInstance(); 
	int hour = c.get(Calendar.HOUR);
	
	private String[] hellos;
	String q;
	String p;
    private static final Random rgenerator = new Random();
    TextView textView;
    ImageButton speak;
    ImageButton imageButtonContinue;
    ImageButton imageButtonThanx;
    ImageButton imageButtonInfo;
    
    String response;
	
    
    

	Button btnStartService;
	
	 @Override
	  	public void onBackPressed() {
	  	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
	  	    builder.setMessage("What do you want to do?")
	  	           .setCancelable(false)
	  	           .setPositiveButton("Exit", new DialogInterface.OnClickListener() {
	  	               public void onClick(DialogInterface dialog, int id) {
	  	            	  finish();
	  	                 System.exit(0);
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
        setContentView(R.layout.firstclass);
        
        
        
        textView = (TextView) findViewById(R.id.textView);
        speak = (ImageButton)findViewById(R.id.speak);
        imageButtonContinue = (ImageButton)findViewById(R.id.imageButtonContinue);
        imageButtonThanx = (ImageButton)findViewById(R.id.imageButtonThanx);
        imageButtonInfo = (ImageButton) findViewById(R.id.imageButtonInfo);
        
        
      //kitu from online
        
        
     ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();

     String response = null;

     try {
response = CustomHttpClient.executeHttpPost("http://www.mvigour.com/cs/getonline.php",postParameters); // your ip address if using localhost server

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
                    returnString = "User Tip."
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
                   		
                   		 ;
                  		
                   
            }
    }
    catch(JSONException e){
     	 
    }
    try{
    	//hellos[131] = returnString;
   	 
    }
    catch(Exception e){
     Log.e("log_tag","Error in Display!" + e.toString());          
    }   
}
     catch (Exception e) {
    	      
}
     

        
        
        
        
        
        
        
        imageButtonThanx.setOnClickListener(new View.OnClickListener() {
            public void onClick(View view) {
            		 finish();
                     System.exit(0);
    			} 
    		}); 
        
        
        imageButtonContinue.setOnClickListener(new View.OnClickListener() {
           	public void onClick(View view) {
           		Intent i = new Intent(getApplicationContext(),
    						Select.class);
    				startActivity(i);
    				finish();
    			} 
    		});
        
        imageButtonInfo.setOnClickListener(new View.OnClickListener() {
           	public void onClick(View view) {
           		Intent i = new Intent(getApplicationContext(),
           				GeneralInfo.class);
    				startActivity(i);
    				finish();
    			} 
    		});
        
        
      //listen for clicks
    	speak.setOnClickListener(this);

		//check for TTS data
        Intent checkTTSIntent = new Intent();
        checkTTSIntent.setAction(TextToSpeech.Engine.ACTION_CHECK_TTS_DATA);
        startActivityForResult(checkTTSIntent, MY_DATA_CHECK_CODE);
        
        //strings containing different messages 
        hellos = new String[132]; //n+ 1
        
        hellos[0] = "Buy a smoke alarm at any hardware or discount store. It's inexpensive protection for you and your family.";
        hellos[1] = "Never overload circuits or extension cords. Do not place cords and wires under rugs, over nails or in high traffic areas.";    
        hellos[2] = "Immediately shut off and unplug appliances that sputter, spark or emit an unusual smell. Have them professionally repaired or replaced.";
        hellos[3] = "When using appliances follow the manufacturer's safety precautions.";
        hellos[4] = "Overheating, unusual smells, shorts and sparks are all warning signs that appliances need to be shut off, then replaced or repaired.";
        hellos[5] = "Unplug appliances when not in use. Use safety caps to cover all unused outlets, especially if there are small children in the home.";
        hellos[6] = "Kerosene heaters should be used only where approved by authorities. Never use gasoline or camp-stove fuel. Refuel outside and only after the heater has cooled.";
        hellos[7] = "Smoke alarms can be battery-operated or electrically hardwired in your home and are available at a variety of price points.";
        hellos[8] = "Test smoke alarms every month. Replace batteries once a year, even if alarms are hardwired.";
        hellos[9] = "Replace all smoke alarms every 10 years.";
        hellos[10] = "Never leave a burning candle unattended.";
        hellos[11] = "Place candles in a safe location away from combustible materials and where children or pets cannot tip them over.";
        hellos[12] = "Maintain machinery to prevent overheating and friction sparks.";
        hellos[13] = "Report electrical hazards. Many fires start in faulty wiring and malfunctioning electrical equipment.";
        hellos[14] = "Never attempt electrical repairs unless you are qualified and authorized.";
        hellos[15] = "Maintain free access to all electrical control panels. Material or equipment stored in front of the panels would slow down the shutting down of power in an emergency situation";
        hellos[16] = "Learn how to properly use a fire extinguisher.";
        hellos[17] = "Remember, if your smoke alarms are hardwired they will not function during a power failure - consider installing a backup battery powered smoke alarm as an additional asset to your home.";
        hellos[18] = "Don’t leave combustible rubbish where it can be set a fire outside the building.";
        hellos[19] = "Smoke only in designated areas, and extinguish smoking materials safely.";
        hellos[20] = "Never smoke in storerooms or chemical storage areas";
        hellos[21] = " Use all precautions to prevent ignition in potentially explosive atmospheres such as those containing flammable liquid vapors or fine particles.";
        hellos[22] = "Drink plenty of water or other calorie-free beverages.";
        hellos[23] = "Think about what you can add to your diet, not what you should take away.";    
        hellos[24] = "Consider whether you're really hungry before you eat.";
        hellos[25] = "Be choosy about nighttime snacks.";
        hellos[26] = "Enjoy your favorite foods.";
        hellos[27] = "Enjoy your treats away from home.";
        hellos[28] = "Eat several mini-meals during the day.";
        hellos[29] = "Eat protein at every meal.";
        hellos[30] = "Add spices or chiles to your food for a flavor boost that can help you feel satisfied.";
        hellos[31] = "Protein is more satisfying than carbohydrates or fats, and thus may be the new secret weapon in weight control.";
        hellos[32] = "Stock your kitchen with healthy convenience foods.";
        hellos[33] = "Eat foods in season.";
        hellos[34] = "Use non-food alternatives to cope with stress.";
        hellos[35] = "Be physically active.";
        hellos[36] = "Sunlight is an easy way to raise vitamin D levels.";
        hellos[37] = "Add color to salads with baby carrots, grape tomatoes, spinach leaves or mandarin oranges.";
        hellos[38] = "The healthiest way to lose weight is neither crash diets nor bursts of exercise. The body likes slow changes in terms of food and exercise.";
        hellos[39] = "Water is the basic medium in which life processes take place – from intricate biochemical reactions inside cells to the removal of waste products from the body.";
        hellos[40] = "Caffeine is mildly addictive, making it one of the world's most widely used drugs. It can cause a number of health problems.";
        hellos[41] = "Limit your bread intake, eliminate it or replace thick bread with healthy alternatives.";
        hellos[42] = "Use smaller plates and cups";
        hellos[43] = "Eliminate soda. Soda is another example of empty calories";
        hellos[44] = "Relatively cheap materials can be used for construction of containers and collecting surfaces in rainwater harvesting system.";
        hellos[45] = "Construction methods of rainwater harvesting systems are relatively straightforward.";    
        hellos[46] = "Rainwater harvesting systems has low maintenance costs and requirements.";
        hellos[47] = "Collected rainwater can be consumed without treatment providing a clean collecting surface has been used.";
        hellos[48] = "Rainwater harvesting system provides a supply of safe water close to homes, schools or clinics, encourages increased consumption, reduces the time [men] women and children spend collecting water, reduces back strain or injuries from carrying heavy water containers.";
        hellos[49] = "Rainwater harvesting system supplies can be contaminated by bird/animal droppings on catchment surfaces and guttering structures unless they are cleaned/flushed before use.";
        hellos[50] = "Poorly constructed water jars/containers can suffer from algal growth and invasion by insects, lizards etc..";
        hellos[51] = "Rainwater harvesting system containers can act as a breeding ground for disease vectors if they are not properly maintained.";
        hellos[52] = "If you are intending to drink the water you are harvesting, or use it in food preparation you will need to ensure you install a purifying or treatment system for your potable water.";
        hellos[53] = "There are specialised tanks that are designed to be used for those who collect water for consumption, so always check you have the right type of tank and system in place .";
        hellos[54] = "It’s also advisable to contact the local environmental health before consuming water to ensure your system is set up properly.";
        hellos[55] = "Water storage tanks for Rainwater harvesting systems need to be kept clean and in good condition.";
        hellos[56] = "Place the tank for Rainwater harvesting system either under the ground or above ground in a safe and secure position.";
        hellos[57] = "It's a good idea to fence off larger tanks for Rainwater harvesting systems and also use an opaque tank placed out of direct sunlight to help prevent algae from growing inside.";
        hellos[58] = "Clean out the tank for Rainwater harvesting system every three years and ensure it has a lockable lid to prevent animals and children from gaining access.";
        hellos[59] = "In Rainwater harvesting system, water will be collected from your roof and transported into your container where you’ll hold it until it is needed.";
        hellos[60] = "To help reduce the amount of debris and contaminants in Rainwater harvesting system it is a good idea to use some gutter mesh that stops leaves and debris from coming into the pipe system.";
        hellos[61] = "In Rainwater harvesting system, rain heads can also be attached to downpipes that can also help to prevent insects from laying their eyes in the wet environment.";
        hellos[62] = "Harvesting rain water is an excellent way of providing your home with a sustainable water supply.";
        hellos[63] = "Rainwater harvesting system can be used in all sorts of ways and reduces the amount of water you use, and are charged for, from your supplier.";
        hellos[64] = "Set up a safe water harvesting system so that the water is of the best possible quality before you begin using it..";
        hellos[65] = "If you intend to drink the water, make sure all parts purchases for the distribution system indicate their use for potable water.";
        hellos[66] = "Water should be purified or treated before being pumped to the point-of-use.";
        hellos[67] = "Solar energy is energy from the sun.";
        hellos[68] = "Solar energy can be converted directly or indirectly into other forms of energy.";    
        hellos[69] = "Solar energy is also referred to as solar power.";
        hellos[70] = "Solar energy free and clean energy source.";
        hellos[71] = "Solar energy does not produce waste or pollution and is ecologically acceptable.";
        hellos[72] = "Solar energy drives climate and weather and supports all life on Earth.";
        hellos[73] = "Solar energy technologies are using the Sun's energy for practical purposes.";
        hellos[74] = "Solar energy usually refers to photovoltaic and concentrating solar thermal technologies that can convert Sun's energy into electricity.";
        hellos[75] = "Solar energy is used in many applications like: Electricity, Evaporation, Biomass, Heating water and buildings and even for transport (solar cars).";
        hellos[76] = "Solar energy is renewable energy source .";
        hellos[77] = "Solar energy can't be easily exploited in all areas.";
        hellos[78] = "Solar energy has these general problems: small thickness of energetic flow , huge oscillation of radiation intensity and large investments costs.";
        hellos[79] = "Solar energy is still a very tiny fraction on global world energy market.";
        hellos[80] = "Solar energy's reduction in unit costs has yielded its growth rates and therefore solar energy has potential to become very important energy source.";
        hellos[81] = "Solar energy once installed has almost no variable costs.";
        hellos[82] = "Solar energy is not exposed to market price movements so there's no forward exchange rate risk.";
        hellos[83] = "Solar energy is very reliable energy source.";
        hellos[84] = "Solar energy should play more effective role in meeting the electricity needs of the world.";
        hellos[85] = "Solar energy's budget on global scale should be much bigger because solar energy is ecologically acceptable.";
        hellos[86] = "Solar energy's great potential should really be more researched and more funds to this sector would be a wise thing to do.";
        hellos[87] = "Solar energy's use should be gradually growing in years to come.";
        hellos[88] = "Solar energy could generate 2.5 percent of the world's electricity by 2025.";
        hellos[89] = "Solar energy has tremendous potential because for instance the energy we get from all of the world's reserves of coal, oil and natural gas can be matched by just 20 days' supply of sunshine.";
        hellos[90] = "Solar energy will be more affordable in future with new scientific researches that should decrease the costs and increase the efficiency of the solar energy.";
        hellos[91] = "Solar energy must be at or even below the costs of fossil fuels in order to play more significant role on global scale, therefore solar energy must be more economically viable for everyday use.";
        hellos[92] = "Solar energy could improve environmental quality that is damaged by current dominant fossil fuels use.";
        hellos[93] = "Solar energy's value must be recognized by politicians as well in order to get more funds for further research.";
        hellos[94] = "Solar energy still doesn't have promotion in public it should be having considering the negative effects of fossil fuels use.";
        hellos[95] = "Solar energy will be major energy source in years to come because of its massive potential and long-term advantages.";
        hellos[96] = "Solar energy should be used not only to decrease the use of fossil fuels but also to decrease the price of fossil fuels.";
        hellos[97] = "The sun is a direct source of energy. Using renewable energy technologies, we can convert that solar energy into electricity.";
        hellos[98] = "All solar lights are “wireless”. They are not “hooked up” to external sources of power.";
        hellos[99] = "Solar lights produce no pollution and cause no harmful environmental effects.";
        hellos[100] = "Solar lighting is sometimes preferred for applications where the need is temporary (fairs, mining sites, Olympics, introduction of real estate developments, etc.).";
        hellos[101] = "Solar lights are immune to black outs.";
        hellos[102] = "Solar-powered outdoor lighting is virtually maintenance-free, since the batteries require no water or other regular service.";
        hellos[103] = "Solar lights work at night.";
        hellos[104] = "Once installed, the solar energy is free";
        hellos[105] = "Solar lights provide enhanced security in poorly lit remote areas where access to grid power is challenging, such as parks and large parking lots.";
        hellos[106] = "Solar lights work even after cloudy days. During daylight, even when overcast, the solar panels’ “solar generators” charge long-life batteries, which store the energy until needed, up to 5 days for Solar systems.";
        hellos[107] = "Solar energy striking the Earth goes about 50% absorbed by Earth itself while 30% of solar energy is being reflected back into space.";
        hellos[108] = "Solar energy is free and abundant energy supplied by nature itself";
        hellos[109] = "Waste product management flows in a cycle: Monitoring, Collection, Transport, Processing, Disposal / Recycle.";
        hellos[110] = "Collection of Waste product involves the logistical organization to promise that bin containers won’t overfill and waste sit time doesn’t become too long.";    
        hellos[111] = "Reducing waste is the most important part of waste minimisation.";
        hellos[112] = "Waste reduction avoids the unnecessary use of resources such as materials, energy and water and means there is less waste to manage.";
        hellos[113] = "The aim of waste reduction is to eliminate waste before it is produced and to reduce both the quantity and toxicity of waste.";
        hellos[114] = "Take a reusable shopping bag with you so you don't have to use a paper or plastic bag from the shop.";
        hellos[115] = "Say “no” to a plastic shopping bag when you only have a couple of items.";
        hellos[116] = "Choose products that use less packaging, this will reduse waste production.";
        hellos[117] = "Instead of Plastic wrap replace with Reusable containers with lids.";
        hellos[118] = "Instead of Paper napkins replace with Washable cloth napkins.";
        hellos[119] = "Instead of Disposable nappies replace with Washable cloth nappies.";
        hellos[120] = "Instead of Disposable batteries replace with Rechargeable batteries.";
        hellos[121] = "Instead of Tea bags replace with Loose tea leaves.";
        hellos[122] = "Reusing an item means it doesn't go in the rubbish and end up in the landfill.  It also means that you don't have to buy a new product and so you are saving the energy and resources that would have been used to make the new product.";
        hellos[123] = "Take unwanted toys and books to hospitals, early childhood education centres or schools.";
        hellos[124] = "Use empty plastic packaging containers for freezing or storing food items.";
        hellos[125] = "Save wrapping paper and boxes to use again.";
        hellos[126] = "Recycling involves some form of reprocessing of waste materials to produce another product.  For example, recycling plastic bottles to make buckets.";
        hellos[127] = "Did you know Recycling one ton on newspapers saves 15 trees?.";
        hellos[128] = "The best way to manage waste is not to generate the waste in the first place.";
        hellos[129] = "Buy refillable pens, mechanical pencils, and tape dispensers (and reusable calendars).";
        hellos[130] = "Use rechargeable batteries where possible.";
       
        //from online database
        
        hellos[131] = returnString; //that fetch from db randomly


        
        //text changer
        p = hellos[rgenerator.nextInt(hellos.length)];
        textView.setText(p);
        
     
        
      
        
        
     // Importing all assets like buttons, text fields 
        if (hour == 1 || hour == 2 || hour == 3 || hour == 4 || hour == 5 || hour == 6 || hour == 7 || hour == 8 || hour == 9 || hour == 10 || hour == 11 || hour == 12) {
     	   Intent myIntent = new Intent(getApplicationContext(), ServiceTemplate.class);
     	   startService(myIntent);
        }
        
      
       
       
	}
	
	//respond to button clicks
  	public void onClick(View v) {

  			//get the text entered
  	    	String words = p.toString();
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

