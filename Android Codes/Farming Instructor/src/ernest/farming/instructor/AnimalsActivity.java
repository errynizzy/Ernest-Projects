package ernest.farming.instructor;

import java.util.ArrayList;
import java.util.List;



import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;
import android.widget.TextView;

public class AnimalsActivity extends Activity{
	Button buttonHabit;
	Button buttonCrops;
	Button buttonBack;
	Button buttonExit;
	
	Spinner spinnerCrops;
	TextView showresults;
	String value = "";
	String value1 = "";
	View animal;
	
	String ChickenKeeping = "Chicken" + "\n" +
			"Raising and keeping chickens in the backyard is an easy, economical way to get fresh eggs and save money. They are fairly inexpensive to maintain and to raise, and you are guaranteed to have eggs that are chemical and hormone free." + "\n" + "\n" +
			"Here are ten tips for keeping chickens in your backyard:" + "\n" + "\n" +
			"1.For starter chicks, check with local farms, or other chicken breeders in the locality." + "\n" + "\n" +
			"2.Pine shavings work well as flooring for both small and adult chickens." + "\n" + "\n" +
			"3.Play and interact with baby chicks to get them used to their surrounding and to other people." + "\n" + "\n" +
			"4.When the chickens “feather out”, they should be moved to a coop." + "\n" + "\n" +
			"5.Chickens like bread, vegetables, and even bugs as treats." + "\n" + "\n" +
			"6.Eggs take about 21 days to hatch, and should be incubated well. Natural incubation works best." + "\n" + "\n" +
			"7.Dedicate a large section of the backyard for the chickens to run." + "\n" + "\n" +
			"8.Cull, or get rid of, chickens with unwanted traits, as they can cause several serious problems for the others." + "\n" + "\n" +
			"9.Be sure to check for local laws in terms of how many chickens can be kept on your property." + "\n" + "\n" +
			"10.Protect chickens against predators by providing them with ample shelter.";
	
	String CowKeeping = "Cow" + "\n" +
			"Choose your cow: There are many suitable breeds of cows that can be used for milking." + "\n" + "\n" +
			"-> Holstein Fresian: These cows are most commonly found in commercial dairy farms since they tend to produce the highest quantity of milk." + "\n" + "\n" +
			"-> Jerseys: This breed is the second-most common dairy breed." + "\n" + "\n" +

			"Care taking:" + "\n" +
			"-> Like all animals, your cow needs food, water, shelter and space enough to move around at her free will." + "\n" + "\n" +
			"-> Depending on where you live, you will need adequate shelter for her to spend the night in and to go to during adverse weather conditions. A shed or barn is favorable for this. If you experience winters where its very cold and you get plenty of snow, you will need a barn to keep her sheltered during days where it's too cold for her to go out." + "\n" + "\n" +
			"-> Water is a must, and must where she can easily access it 24/7/365." + "\n" + "\n" +
			"-> Mineral licks or loose mineral is also very important for your cow, as the feed she eats is often deficient in different nutrients she needs to function properly." + "\n" + "\n" +
			"-> You need a fence of some sort to keep her in at all times. It must be a fence that is strong and sturdy enough to keep her inside and keep her from escaping on you. If you have a sturdy fence that is well built and in top shape you will only need to check it once a week, not every day. If you have her grazing in an area where you have a temporary electric fence and need to keep her there for a few days, then you will have to check it once a day." + "\n" + "\n" +

			"Health:" + "\n" +
			"-> Your cow can and will get sick, it's only a matter of when. Proper handling, vaccinations that are recommended by your large animal vet, and attention to detail when feeding her and having her graze pasture is important." + "\n" + "\n" + 

			"Feeding:" + "\n" +
			"-> Grass, with loose mineral freely accessible to her, is sufficient enough to feed her over the spring and summer without any needed supplementation. Come winter, however, proper feed and supplementation is necessary. Straw is also necessary for bedding during cold nights. A cow's peak nutrition demands occur 3 months after giving birth.";
	
	String Fishing = "Basic Fishing Tips:" + "\n" +
			"Fishing is a fun sport that requires some skill and timing. Depending on where you fish, your tactics will be different. Brackish or colder water may call for a certain style of fishing, while calm fresh water might need a different style. Regardless of the type of fish or water, there are some fishing tips that everyone should follow." + "\n" + "\n" +
			"-> For lake and river fishing, go where the water turns from shallow to deep. Fish like to congregate and look for food in this area." + "\n" + "\n" +
			"-> Shiny fishing lures can attract certain fish, but the reflection of the sun can blind them and cause confusion." + "\n" + "\n" +
			"-> Use a matted metal fishing lure instead if possible, to avoid too much reflection." + "\n" + "\n" +
			"-> Cast close to the shoreline for more bites." + "\n" + "\n" +
			"-> Look for mossy areas, as fish prefer to swim in these areas to forage for food." + "\n" + "\n" +
			"-> A lot of people use worms as bait, but locusts are also a great choice. Larger fish like bass really enjoy these insects." + "\n" + "\n" +
			"-> Check the local fishing reports that day for updates on areas where they're hiding." + "\n" + "\n" +
			"-> Sunrise is an excellent time to fish, try to go out early in the morning." + "\n" + "\n" +
			"-> Pay close attention to the movement of your line. Learn how to understand the difference between a curious fish and one that is biting so you can hook and reel it in." + "\n" + "\n" +
			"-> Research the region you will be fishing in to find out what kinds of fish live there and the things they like." + "\n" + "\n" +
			"-> Be patient. Patience really is the key to good fishing. Bring a book or radio if you plan to out for a long time and remember that all good things come to those who wait.";
	
	

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
        setContentView(R.layout.animal);
        
       
     	addListenerOnButton();
     	
     	
     	addItemsOnspinnerCrops();
     	addListenerOnButton1();
     	addListenerOnSpinnerItemSelection1();
        
	}
	
	 // add items into spinner dynamically
	 
	  public void addItemsOnspinnerCrops() {
			 
		  spinnerCrops = (Spinner) findViewById(R.id.spinnerCrops);
		List<String> list1 = new ArrayList<String>();
		list1.add("Chicken Keeping");
		list1.add("Cow Keeping");
		list1.add("Fishing");
		
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
   		animal = (View) findViewById(R.id.animal);
   		showresults = (TextView) findViewById(R.id.showresults);
   		

   	buttonBack.setOnClickListener(new View.OnClickListener() {
    	public void onClick(View view) {
    		Intent i = new Intent(getApplicationContext(),
					MainActivity.class);
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
			 if (value1 == "Chicken Keeping")
			  {
				 animal.setBackgroundResource(R.drawable.chicken);
				  showresults.setText(ChickenKeeping);
			  }
			  
			  else if (value1 == "Cow Keeping")
			  {
				  animal.setBackgroundResource(R.drawable.cow);
				  showresults.setText(CowKeeping);
			  }
			  
			  else if (value1 == "Fishing")
			  {
				  animal.setBackgroundResource(R.drawable.fishing);
				  showresults.setText(Fishing);
			  }
	
	
		  }
	 
		});
   	
   	
	

}
}


