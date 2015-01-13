package ernest.farming.instructor;

import java.util.ArrayList;
import java.util.List;
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
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

public class AfterHarvestSpeech extends Activity implements OnClickListener, OnInitListener{
	
	//TTS object
		private TextToSpeech myTTS;
			//status check code
		private int MY_DATA_CHECK_CODE = 0;
	
	Button buttonHabit;
	Button buttonCrops;
	Button buttonBack;
	Button buttonExit;
	Button speak;
	
	Spinner spinnerCrops;
	TextView showresults;
	String value = "";
	String value1 = "";
	View modernfarming;
	
	String Storage = "There are many ways to harvest and store your crops so that you can use them over the winter." + "\n\n" +
"Root crops like potatoes, carrots, rutabagas, turnips and onions can be placed in a cold area and then used as needed. The cold area should not freeze your crops or they will be ruined. You can use a cold corner of your basement for stored root crops." + "\n\n" +

"Some root crops should be pickled like beets. Beets keep better in a cool place." + "\n\n" +

"Beans can be frozen, dried or canned. They are better frozen because they maintain more of their fresh, sweet flavor when they are frozen. Beans will store for a couple of weeks in the refrigerator." + "\n\n" +

"Corn can be harvested and then stored by canning, freezing or drying. Canned corn will last a long time when stored in a cool place. Freezing corn keeps the corn sweet and tasty. Drying corn can be somewhat difficult and the end product does not taste as good as frozen." + "\n\n" +

"Peas can be canned, frozen or dried. Peas are a very versatile crop that can be stored many ways to keep them tasty and nutritious over the winter months." + "\n\n" +

"Pumpkins and other squash crops can be placed in a cold corner of the basement to store them. Pumpkins and squash will last for months in the right temperature. The right temperature is cold but not freezing. Once a pumpkin or squash freezes it will get mushy and soft and start to mold." + "\n\n" +

"Apples can also be stored in cold storage. You can put apples in a cold corner of the basement and they will last for months. Some varieties of apples store better then other varieties of apples. The mushier the apple is the less likely it can be stored in cold storage. You can also can apples, and dry apples to store them over the winter." + "\n\n" +

"Other fruits like pears, peaches and plums are not as hardy as apples are. They need to be dried or canned to store over the winter. They will not last long in cold storage." + "\n\n" +

"Tomatoes need to be canned, frozen or dried to store in the winter. You can make tomatoes into a sauce and can them or you can place them in zip lock bag and freeze them.";
	
	String Preservation= "Food Preservation Tips." + "\n\n" +
			"Beans to be dried for later use in soups or bean dishes can usually be left to dry on the plant. When they rattle in the pods, they’re dry. If you live in an area, like I do, where frost or rain would threaten the beans before they’re dry, you can pick them early. If you have the space, pull the entire plant and hang somewhere warm and dry until the pods turn brown and the beans rattle. If you don’t have space, pull the individual pods, then string together 2 or 3 feet-worth on a heavy beading thread, and hang somewhere warm and dry (such as near a woodstove.) When the beans rattle in the pods, you can either continue to store them in the pods, or pop them out of their pods and store them in a glass jar." + "\n\n" +

			"Many vegetables can be sliced and dehydrated. You can follow the instructions on your home dehydrator, or you can use your oven turned to the very lowest setting, around 175 degrees. Celery should be blanched first. Zucchini, apples, pears, eggplant, carrots, and tomatoes can be merely sliced and dried. All of the above can be stored in glass jars. (Note: Potatoes need to be blanched and steamed to absolute transparency before dehydrating. Skipping this step or under-steaming will result in your dried potatoes turning black." + "\n\n" +

			"Most herbs can be dried by gathering a bunch early in the morning (when the aromatic compounds in the plants are at their peak) and then hanging them upside down somewhere cool and dry." + "\n\n" +

			"Winter Squashes can be stored for months. Pick the squash, leaving at least 2-3 of stem. Allow to toughen on your counter for 2 weeks, then rub the skin lightly with olive oil. Store on your counter if you like, or in cold storage. Do NOT store in a basket or bowl, as the restricted airflow and retained moisture may cause them to rot prematurely. Thinner-skinned summer squashes can also be stored longer by the same method, though they should be refrigerated and may only last a couple of extra weeks." + "\n\n" +

			"Other things can be fermented and made into “sauerkraut”-like concoctions in the same way sauerkraut is made. Shredded carrots and red onions make an amazing combination." + "\n\n" +

			"So, if you want to extend the life of your harvest and don’t want to dry, can, or ferment your pickings, you can also keep them in a kind of “suspended animation” using vinegar, salt, or a combination. This would be the kind of storage folks used before refrigeration, when copious quantities of salt or storage in cold root cellars were the preferred method for storing foods." + "\n\n" +

			"Basic Brining Formula – 1 Tbl salt per 1 quart of filtered or spring water. Pour over green beans, sliced carrots, peppers, eggplant, or other vegetables to extend their storage life. Keep in the fridge for up to a month. The salt retards the growth of mold and other spoiling organisms, as does the cool temperature." + "\n\n" +

			"Basic Vinegar Formula – Wash your vegetables and dry thoroughly. Pack a jar with your vegetables, poke holes in larger ones like Japanese eggplants and peppers. Fill jar 1/2 full with vinegar, 1/2 full with good filtered water, and top with a few drops of olive oil to create a seal at the top. Store in cold storage for several months.";
	
			
	String Treatment = "Seed Treatments."+ "\n\n\n" + "Corn." + "\n" +

"Treatment is recommended for all seed corn to prevent or reduce seed decay and seedling blights. The germination and early growth of the seedling is a critical period in the life cycle of corn. Soilborne organisms may invade and kill the embryo before germination, or when invasion occurs later, the seedlings may be destroyed before or after emergence. Seedlings surviving fungal infections at germination are often less vigorous." + "\n" +

"Corn seedling diseases are more prevalent in cold, wet soil than when soil temperatures are above 55 degrees F. Therefore, early planted corn needs the added protection of a good seed treatment fungicide. Seedling blights tend to be more severe in fields with poor seed bed preparation such as in no-tillage or reduced-tillage fields. Corn seed is generally treated with a fungicide or fungicide-insecticide combination by the seed producer or seed processor." + "\n" +

"Corn smut, leaf blights, stalk and ear rots, and virus diseases are not controlled by seed treatment fungicides." + "\n\n\n" +

"Small grains." + "\n" +

"Seed treatment of small grains is recommended to control smut diseases and to reduce seed decay and seedling blights. The smut diseases include stinking smut (common bunt) of wheat, loose smut of wheat and spelt, and the loose and covered smuts of oats and barley." + "\n" +

"All of the wheat varieties planted in Ohio are susceptible to stinking smut (common bunt). Wheat and oat varieties have resistance to some, but not all, races of loose smut (wheat) and loose and covered smuts (oats). The only sure method of smut control is by using an effective seed treatment fungicide. Spelt is extremely susceptible to loose smut and all seed should be treated with an effective fungicide." + "\n" +

"Seedling blight phases of head scab (Gibberella zeae) and glume blotch (Stagonospora nodorum) contribute to poor stands of small grains in Ohio. Both seed infecting fungi contribute to poor quality seed by causing lightweight, shriveled grain. Since these seed-borne diseases are common, all small grain seeds should be treated to control seedling blight when infected seed are planted." + "\n\n\n" +

"Soybean." + "\n" +

"Seed treatment for soybean is recommended in three disease situations; 1) when poor quality seed is used for planting (germination below 80 percent), 2) when early season control of Phytophthora damping-off is needed, and 3) when planting early into cool, wet soils, especially in reduced tillage." + "\n" +

"The major cause of poor-quality soybean seed in Ohio is Phomopsis seed rot. Infected seed may be visibly moldy, yet others appear healthy. Purchasing certified seed with the percent germination, the variety name, and the seed treatment material used listed on the label is one way to ensure quality seed is planted. Germination percentage of bin-run beans is generally unknown unless they are tested. Seed lots with greater than 80 percent germination generally do not benefit from seed treatment when planted at recommended seeding rates in warm soil. Those with less than 80 percent germination may benefit from seed treatments by increased stand and, possibly, increased yield. Decisions to use poor-quality seed should be based on the fact that any seed treatment fungicide effective against seed-borne diseases will not increase germination more than 20 percent. If bin-run beans of 50 percent germination are treated with a fungicide, the grower should not expect over 70 percent germination in the field. Planting rates can be increased to compensate for seed of low germination." + "\n" 
;
	
	String Transport = "Getting food it its destination fresh - that's what it's all about if you're in the food distribution business  means getting the food you're shipping to its destination fast."  + "\n\n" +

"In order to ensure that your food transport makes it from point A to point B safely, there are a few things that you must do to prepare." + "\n\n" +

"To transport a large amount of food safely from one location to another, you must use a temperature controlled vehicle. These vehicles have storage caches that are controlled to reach refrigeration and even freezing temperatures to transfer goods safely, without fear of spoilage that would occur with a vehicle without temperature control. This also applies to plant shipping. These types of vehicles come with quite a bit of insulation throughout the vehicle, in order to keep outside heat from entering. They also often have stainless steel floors, perfect for quick cleanup after transporting an item that could potentially make a mess." + "\n\n" +

"Once your vehicle is ready for action, it's time to figure out exactly how to pack it and with what. If you are going to pack a large number of items for the trip, it's important to figure out where each one will go in the vehicle. Think of your food transport vehicle as a mobile walk-in refrigerator - most restaurants follow the same method for stocking their walk-in, and you should do the same. All raw materials, be they meat, fish or otherwise should go to the bottom rack (or even under the bottom rack) so as to avoid any cross-contamination, which can lead to illness. This is a crucial step that many people in the food service industry tend to forget." + "\n\n" +

"Using both sides of your vehicle in different ways allows you to put all of your raw mean/fish/poultry on the bottom of one side, and your fresh vegetables on or near the bottom of the other side. Since the bottom level is usually the coldest, vegetables keep longer in this area. The next levels can store cheeses, cooked meats or prepared items such as soups. Dry goods that are to be kept chilled can go at the very top, as can anything else that you may have leftover such as liquids or sauces." + "\n\n" +

"Always be sure to clean out your transport vehicle thoroughly after each trip. Otherwise, it's possible for bacteria to buildup, which can in turn contaminate the rest of your food on a future trip. Most professionals recommend using a bleach solution to disinfect your vehicle; especially if you have the added luxury of easy-to-clean stainless steal. Cleaning after every trip can minimize the possibility of contaminating your goods.";
	
	String Marketing= "Crops Marketing." + "\n\n" +
			" Before you plant your first seed, answer this question: How will you sell your crops? A good marketing plan is an absolute must for a successful farm business. Know your market and your customers. Start by growing vegetables that are popular with people in your area. Make sure you grow enough of each crop, and make the quality of your vegetables good. Then consider the best way to sell them to your customers." + "\n\n\n" +
"Selling Everything to One Place." +  "\n\n" +

"If you have a big farm or live far away from customers, you might want to sell your crops to one place, such as a store, restaurant, food co-op. This is called wholesale marketing. Selling your crops this way is faster than other ways of selling. It is also a good choice if you are not comfortable meeting and talking to a lot of people. Wholesale marketing will probably not make you as much money as selling directly to the customer, and you may not get paid right away. But it is a simple, easy way of selling." + "\n\n\n" +

"Selling Directly to Customers." + "\n\n" +

"If you do not have a big farm or if you are a new farmer, it is a good idea to sell your crops directly to customers. This is called direct or retail marketing. Although you can make more money and get paid faster this way, you will need more time to sell. It is a good way to sell your crops if you are a good planner, have time, and enjoy meeting and talking to people." + "\n\n\n" +
"How to Decide the Best Retail Market." + "\n" +

"Many farmers sell vegetables at a farmers market or a roadside stand. Some farmers let customers pick their own vegetables. Which market is best for you?" + "\n\n\n" +

"The Farmer's Market." + "\n" +

"Many people come to the farmer's market to buy vegetables. You can sell a lot of vegetables, so you need to bring enough vegetables to last the day. You have to plan carefully. If you want to sell your vegetables at a farmers market, look for a market that is:" + "\n" +

    "- In a busy area" + "\n" +
    "- Well known by a lot of customers" + "\n" +
    "- Clean and well managed" + "\n\n\n" +

"Here are some ideas to help make your booth a successful display:" + "\n\n\n" +

    "\t" + "Make the area around your booth attractive" + "\n" +
    "\t" + "Customers like a large display to choose from. Put as many of your vegetables out as you can while still keeping them fresh in shade. Tilt every item to give your customer a better view and make your supply look larger. But be careful to place the vegetables so that they don't fall over when a customer takes some." + "\n" +
    "\t" + "Put your crops up on shelves, not on the ground" + "\n" +
    "\t" + "Put each of your crops in a group to make large blocks of color. Yellow vegetables, especially, catch the customer's eye" + "\n" +
    "\t" + "Make signs for all your crops with each name and price. Customers also like to read information about your farm." + "\n" +
    "\t" + "If you would like, hand out recipes (in English) that are from your country and use the vegetables you are selling." + "\n\n\n\n" +

"Roadside Stands." + "\n" +

"People like to stop at roadside stands to buy fresh vegetables. Roadside stands can be close to your home or garden. You can sell your crops without traveling far, and you can make money selling only one or two crops. For instance, fresh-picked sweet corn, tomatoes, and pumpkins sell well." + "\n" +

"Customers who stop at roadside stands like to see colorful plants, gardens, animals, even clean gardening tools. They also like to see your crops growing. If your stand is near your garden, make sure your garden is in good condition and customers can see your crops." + "\n" +

"If you want to sell your crops at a roadside stand:" + "\n\n" +

    "\t" + "Find a place close to a town or city, where people would not have to drive more than 10 miles to reach you." + "\n\n" +
    "\t" + "Find a place where a lot of cars go by. The cars should be going slow enough to be able to stop. A place next to a stoplight or stop sign is a good place." + "\n\n" +
    "\t" + "Find a place that people can see as they drive by." + "\n\n" +
    "\t" + "Find a place where people can park their cars." + "\n\n" +
    "\t" + "Ask customers what they think about your stand. You can learn a lot about what they want. This will help you plan for next year." + "\n\n\n" +

"Pick Your Own or You-Pick." + "\n" +

"Some customers like going into fields and picking their own vegetables. This is sometimes known as a You-Pick or 'U-Pick' field. The best customers for a you-pick field need a lot of vegetables for canning or freezing. If you are near people who can or freeze vegetables, selling this way may be a good choice." 
;
	

@Override
 	public void onBackPressed() {
 	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
 	    builder.setMessage("What do you want to do?")
 	           .setCancelable(false)
 	           .setPositiveButton("Go Back", new DialogInterface.OnClickListener() {
 	               public void onClick(DialogInterface dialog, int id) {
 	            	  Intent i = new Intent(getApplicationContext(),
 								SpeechMenu.class);
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
        setContentView(R.layout.afterharvestspeech);
        
       
     	addListenerOnButton();
     	
     	
     	addItemsOnspinnerCrops();
     	addListenerOnButton1();
     	addListenerOnSpinnerItemSelection1();
        
	}
	
	 // add items into spinner dynamically
	 
	  public void addItemsOnspinnerCrops() {
			 
		  spinnerCrops = (Spinner) findViewById(R.id.spinnerCrops);
		List<String> list1 = new ArrayList<String>();
		list1.add("Storage");
		list1.add("Preservation");
		list1.add("Treatment");
		list1.add("Transport");
		list1.add("Marketing");
		
		
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
   	 
   		//spinnerHabit = (Spinner) findViewById(R.id.spinnerHabit);
   		

   		
   		buttonBack = (Button) findViewById(R.id.buttonBack);
   		buttonExit = (Button) findViewById(R.id.buttonExit);
   		modernfarming = (View) findViewById(R.id.modernfarming);
   		showresults = (TextView) findViewById(R.id.showresults);
   		speak = (Button)findViewById(R.id.speak);
   		
   	//listen for clicks
    	speak.setOnClickListener(this);

		//check for TTS data
        Intent checkTTSIntent = new Intent();
        checkTTSIntent.setAction(TextToSpeech.Engine.ACTION_CHECK_TTS_DATA);
        startActivityForResult(checkTTSIntent, MY_DATA_CHECK_CODE);
   		
   		

   	buttonBack.setOnClickListener(new View.OnClickListener() {
    	public void onClick(View view) {
    		Intent i = new Intent(getApplicationContext(),
					SpeechMenu.class);
			startActivity(i);
			finish();
		} 
	});
   	
   	buttonExit.setOnClickListener(new View.OnClickListener() {
    	public void onClick(View view) {
    		 finish();
             System.exit(0);
		} 
	}); 
	

}
public void addListenerOnButton1() {
   	 
	//spinnerCrops = (Spinner) findViewById(R.id.spinnerCrops);
		buttonCrops = (Button) findViewById(R.id.buttonCrops);
		
   	//for crops tips
   	buttonCrops.setOnClickListener(new View.OnClickListener() {
		  public void onClick(View v) {
			  
			 value1 = spinnerCrops.getSelectedItem().toString();
			  if (value1 == "Storage")
			  {
				  showresults.setText(Storage);
			  }
			 
			  else if (value1 == "Preservation")
			  {
				  showresults.setText(Preservation);
			  }
			  else if (value1 == "Treatment")
			  {
				  showresults.setText(Treatment);
			  }
			  else if (value1 == "Transport")
			  {
				  showresults.setText(Transport);
			  }
			  
			  
			  else if (value1 == "Marketing")
			  {
				  showresults.setText(Marketing);
			  }
			  
			  
			
	
	
		  }
	 
		});
   	
   	
	

}


//respond to button clicks
public void onClick(View v) {

		//get the text entered
  	 showresults = (TextView)findViewById(R.id.showresults);
  	String words = showresults.getText().toString();
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



