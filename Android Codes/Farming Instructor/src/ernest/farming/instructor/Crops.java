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

public class Crops extends Activity{
	Button buttonCrops;
	Button buttonBack;
	Button buttonExit;
	
	Spinner spinnerCrops;
	TextView showresults;
	String value = "";
	String value1 = "";
	View modernfarming;
	
	
	String Rice = "Rice" + "\n" +
			"-> start: Direct" + "\n" +
			"-> Seed Life: 1-2 Years" + "\n" + "\n" +
			
			"Planting" + "\n" +
			"-> soil: Very Wet" + "\n" +
			"-> Sunlight: Sunny" + "\n" +
			"-> Days to harvest: 160 Days" + "\n" + "\n" +

			"GROWING NOTES:" + "\n" +
			"-> Growing Rice in a Container Garden Rice is an unusual and fun plant to grow in your garden or on your porch. The secret to growing rice is that you have to recreate the flooded rice paddy for the rice to thrive in." + "\n" + "\n" +
			"-> Collect all of your clean plastic buckets and empty plastic laundry soap buckets to work in. You do not want to use any container that has holes in the bottom that would let the water out."+ "\n" + "\n" +
			
			"MAINTAINING:" + "\n" +
			"-> Rice likes a warm climate, keep your bucket in a sunny area and move it if necessary to a warm place at night. Keep your water level at about 2 inches above the dirt until the rice is growing strong." + "\n" + "\n" +
			"-> When your plants are up to about 5-6 inches, increase your water level to about 4 inches deep. After that, let the water level lower in the bucket slowly over a period of time. You will want the plants just about dry of standing water by the time you are ready to harvest." + "\n" + "\n" +
			"-> Rice is mature somewhere in its fourth month if conditions are right. The stalks will change from green to gold in color when they are ready. To harvest, cut your stalks and let them dry in a warm place, wrapped in a newspaper for 2-3 weeks." + "\n" + "\n" +
			"-> Roast your rice in a very low heat (under 200) for about an hour, and then remove the hulls by hand. You are now ready to cook with your own long-grain brown rice." + "\n" + "\n" +

			"HARVESTING:" + "\n" +
			"Depending on the size of the operation and the amount of mechanization, rice is either harvested by hand or machine. The different harvesting systems are as follows:" + "\n" + "\n" +

			"Harvesting Systems:" + "\n" +
			"-> Manual harvesting makes use of traditional threshing tools such as threshing racks, simple treadle threshers and animals for trampling or by hand using sharp knives or sickles. Manual harvesting and machine threshing" + "\n" + 
			"-> Rice is manually threshed, then cleaned with a machine thresher." + "\n" + "\n" +

			"Machine reaping and machine threshing" + "\n" +
			"-> A reaper cuts and lays the crop in a line. Threshing and cleaning can then be performed manually or by machine." + "\n" + "\n" +
			"-> Combine harvesting - The combine harvester combines all operations: cutting, handling, threshing and cleaning." + "\n" + "\n" +

			"SAVING SEEDS:" + "\n" +
			"To prevent your seed from spoiling, remember to follow these steps:" + "\n" +
			"-> Select the healthy panicles and save only clean and sorted grains." + "\n" + "\n" +
			"-> Keep seed in airtight containers, and never in gunny sacks or polythene bags.";
	
	String Maize = "Maize" + "\n" +
			"-> start: Seeds" + "\n" +
			"-> Germination: 4 to 7 days, 65F to 85F" + "\n" +
			"-> Seed Life: 2 years" + "\n" + "\n" +
			"Planting" + "\n" +	
			"-> soil: High Fertility" + "\n" +
			"-> Sunlight: Full Sun" + "\n" +
			"-> Seeds: 4'' to 6'' apart" + "\n" +
			"-> Seedlings: 8'' to 12'' apart" + "\n" + 
			"-> Days to harvest: 90 to 110" + "\n" + "\n" +

			"GROWING NOTES:" + "\n" + 
			"-> Needs deep, well-drained, fertile soil, pH 6.0 to 6.8 and consistent, plentiful moisture." + "\n" + "\n" +
			"-> Tender annual Requires excellent soil and consistent moisture." + "\n" + "\n" +
			"-> Otherwise, it's not difficult to grow." + "\n" + "\n" +
			
			"MAINTAINING:" + "\n" +
			"-> Maize requires rich, fertile soil. Add compost or well rotted manure in fall. Consider planting a legume cover crop the season before corn to help meet the nutrient needs of this heavy feeder." + "\n" + "\n" +

			"HARVESTING:" + "\n" +
			"-> Of all the crops grown, maize is the one most often harvested too late. With maize, it is essential to pick it at the right time to get the best quality and flavor. Maize also starts to lose its quality quickly after it is harvested. Within 24 hours after being picked, most maize loses more than half its natural sugars by converting them to starch. Ideally, you should harvest your corn at the time you are ready to cook it.";
	
	String Millet = "Millet" + "\n" +
			"-> start: Direct" + "\n" +
			"-> Germination: 68 and 86°F" + "\n" +
			"-> Seed Life: 2-4 Years" + "\n" + "\n" +

			"Planting" + "\n" +
			"-> soil: Well Drained" + "\n" + 
			"-> Sunlight: Full Sun" + "\n" +
			"-> Seeds: 2'' Apart" + "\n" +
			"-> Seedlings: 2'' - 3'' Apart" + "\n" +
			"-> Days to harvest: 60-90 days" + "\n" + "\n" +

			"GROWING NOTES:" + "\n" +
			"-> Millet is one of many seed grasses that can be used as a food source. The grain, similar in nutrient composition to corn, is richer in protein and fiber. Millet has been cultivated for thousands of years and is believed to be one of the first grains harvested by humans for food. Millet prefers hot, extended summers and does well growing in the southern states below the Mason-Dixon line." + "\n" + "\n" +
			"-> Prepare the plot for planting. Work in organic compost or a nitrogen-rich fertilizer." + "\n" + "\n" +

			"MAINTAINING:" + "\n" +
			"-> Normal average rainfall should take care of watering requirements to enable the grass to reach optimum growth. In the meantime, as the grass grows, it attracts more wildlife with the cover it affords." + "\n" + "\n" +

			"HARVESTING:" + "\n" +
			"-> Harvest the millet when the grasses and seed heads have turned golden brown. Millet can be harvested either by hand or with the use of a mechanical thresher." + "\n" + "\n" +
			
			"SAVING SEEDS:" + "\n" +
			"-> To save seeds cut the mature seed cluster from the stem....the mature seeds will be swollen and release easily from the cluster by simple rubbing. They are very small, roundish with pointed ends and light wheat color. Allow the seed head to dry for a few days to facilitate easy removal of the seeds. Once the seeds are released from the stem allow them to dry for a few more days before packing.";
	
	String Wheat = "Wheat" + "\n" +
			"-> start: Direct" + "\n" +
			"-> Germination: 4-5 Days" + "\n" +
			"-> Seed Life: 30+ Years" + "\n" + "\n" +

			"Planting" + "\n" +
			"-> soil: Adequate" + "\n" +
			"-> Sunlight: Full" + "\n" +
			"-> Days to harvest: 120" + "\n" + "\n" +

			"GROWING NOTES:" + "\n" +
			"Prepare the area selected to grow wheat. If the field has been previously used for farming purposes, smooth the soil with a rake. Dig long trenches using a shovel or rent a commercial wheat drill attached to a tractor to plow the field and dig long narrow furrows." + "\n" + "\n" +

			"MAINTAINING:" + "\n" +
			"-> Water the wheat seeds immediately after planting and once each month during the growing season. If your area gets a lot of rain, you might not need to water the plants at all." + "\n" + "\n" +
			"-> Place several plastic flags or streamers throughout your wheat patch. The noise made by the plastic blowing in the breeze deters birds from landing and scares off any birds that are already in the field. This will prevent birds from eating the wheat seeds before they have an opportunity to sprout." + "\n" +
			"-> Nourish the wheat with an all-purpose fertilizer twice during the growing season." + "\n" + "\n" +

			"HARVESTING:" + "\n" +
			"-> Check to see if the wheat is mature enough to harvest. Wheat is usually harvested from spring to early summer, depending on the weather. To test the crop, rub the wheat head between your fingers and chew on a piece of grain. If the grain cracks in your mouth and becomes soft as you chew, it is ready to be harvested." + "\n" + "\n" +
			"-> Prepare a place for your harvested wheat before you begin the harvest. If you plan to keep it on the farm, choose a location away from livestock that is weather resistant. Clear away anything that is left over from the last crop that was stored in the area. Keep the area cool and dry to maintain the wheat's freshness and keep away pests." + "\n" + "\n" +

			"SAVING SEEDS:" + "\n" + "\n" +
			"-> Collect seed heads as they dry on the plants and store in closed paper bags to finish drying (many of the seeds" + "\n" + "\n" +
			"-> will shed naturally). Chaff easily blows away after seed heads are crumbled (watch for thorns or prickles in some plants).";
	
	String Tomatoes ="Tips For Growing Tomatoes:" + "\n" +
			"1. A good fertilizer for growing tomatoes is dried, composted manure mixed with bone meal or you can use a balanced fertilizer such as 10-10-10. Sprinkle this around the plants about 6 inches from the stem and cover with a thin layer of soil and mulch. Water in. Do this about once a month." + "\n" +  "\n" +
			"2. Rotate you crops - growing tomatoes where you have grown them in the last 3 years is not recommended. Changing locations each year helps to reduce disease and insect problems." + "\n" +  "\n" +
			"3. Companion plants - tomatoes like to grow near chives, onions, parsley, marigolds, nasturtiums, carrots or garlic." + "\n" +  "\n" +
			"4. Wait until the soil warms up before mulching your tomato plants." + "\n" +  "\n" +
			"5. Water tomatoes early in the day so the foliage has time to dry before night." + "\n" +  "\n" +
			"6. If you smoke, wash your hands before touching tomato plants to keep from infecting them with tobacco mosaic virus." + "\n" +  "\n" +
			"7. If you stake your tomato plants, strips of old pantyhose make good ties." + "\n" +  "\n" +
			"8. When temperatures are above 85 degrees, pick the tomatoes before they are completely ripe and ripen inside." + "\n" +  "\n" +
			"9. In the fall, before frost, pick all green tomatoes. Use the small ones to make pickles and bring the larger ones inside to ripen." + "\n" +  "\n" +
			"10. Clean up all tomato residue when the season is over and destroy any diseased plants. This will help control insects and disease next year.";
	
	String BeansandPeas = "Planting Beans and Peas:" + "\n" +
			"-> Decide on the number of plants you want. This will be determined by the spacing requirements of the variety you’ve chosen. If you plan to plant rows, be sure to leave enough space between them for easy access - particularly if you’ve chosen a tall variety." + "\n" + "\n" +
			"->Get some seeds. These are the beans or peas themselves, of course, which means that, unlike with many other seed types, you'll need relatively fresh ones. Fresh beans or peas from a farmers' market will work fine; fresh ones from the supermarket might work." + "\n" + "\n" +
			"-> Prepare the soil. Either put dirt in a suitably-sized container (unfertilized potting soil from any garden store will work fine) or dig up the ground where you want to plant them. You need about 6 inches (15 cm) of loose, rich soil. If your ground is mostly clay or sand, you'll probably have better luck in a pot. (Or buy some compost and topsoil, mix it with the dirt you dug up - about 50/50 - and put it back so it forms a slight mound.)" + "\n" + "\n" +
			"-> Go easy on fertilization. Remember that peas and beans can obtain their own nitrogen. If you provide too much nitrogen in the form of fertilizer, the vines will get big but there will be fewer beans and peas to harvest" + "\n" + "\n" +
			"-> Plant the seeds. Push your finger down into the soil you're planting to about to the first joint (1-1.5'', 2.5-5cm) and then put the seed into that hole. Pat soil down over it (to ensure soil contact, which is critical for germination) and water gently (to avoid re-exposure). Ex.: pour water on your hand and sprinkle it over where each seed was planted." + "\n" + "\n" +
			"-> Set up a watering schedule. Water them at least daily -- and more often if it's dry -- but remember that too much water is as harmful as too little. To test the soil, push your finger into the ground. If it gets it wet/muddy, you’re overwatering; it should be damp to dry." + "\n" + "\n" +
			"-> Water with a “rain” spray on a hose or a watering can. Don't run the hose directly onto the seeds; they'll either wash away or drown." + "\n" + "\n" +
			"-> As soon as the sprouts reach 1 to 2 inches tall, attach them to their twining surface (pole, net, whatever). If you let them fall over, a) they may rot on the surface and b) they may twine with their neighbors and become difficult to separate without breaking." + "\n" + "\n" +
			"-> Harvest pea shoots if desired. Tender pea shoots are delicious, raw or cooked. When the peas are 4-6'' or 10-15cm tall, you can cut off the top two levels of leaves and bring them to the kitchen." + "\n" + "\n" +
			"-> Watch them grow. Flowers will begin to show a couple weeks after the sprouts come up. (Beans and peas flower in lots of different colors, including white, pink and purple, so you could even sneak some into a flower garden for show.)" + "\n" + "\n" +
			"-> Harvest the pods. If your variety is edible-podded, pick and eat them when they plump up. If it isn’t edible-podded, wait until the pods are round and you can see the little bumps from the peas/beans inside. Pick them, open the pods and use the peas/beans inside.";
	
	
	String Bananas = "Planting bananas:"+ "\n" +
			"-> You can not grow bananas from seeds. Banana plants don't produce seeds." + "\n" + "\n" +
			"-> The best way is to start with the suckers. Know someone who grows bananas? Talk to them. Every banana plant produces a lot more suckers than you need, so people usually have plenty to give away." + "\n" + "\n" +
			"-> Only take suckers from vigorous banana plants. The suckers should have small, spear shaped leaves and ideally be about four feet high. (Smaller suckers will take longer to fruit and the first buch will be smaller.)" + "\n" + "\n" +
			"-> Cut the sucker from the main banana plant with a sharp shovel. Cut downwards between the mature plant and the sucker. You have to cut through the corm. It's not easy..." + "\n" + "\n" +
			"-> Make sure you get a good chunk of corm and many roots with it. Chop the top off the sucker to reduce evaporation while you move it and while it settles into its new home. (Remember, the growing point is at the bottom of a banana plant. You can decapitate the sucker. It will grow back.)" + "\n" + "\n" +
			"-> You can also dig up a bit of corm and chop it into bits. Every bit that has an eye can be planted and will grow into a banana plant. But it takes longer than growing banana suckers..." + "\n" + "\n" +
			"-> Plant your bits or suckers in your well prepared banana patch, keeping two to five metres between them." + "\n" + "\n" +

			"Maintaining your banana patch:" + "\n" +
			"The most common cause of death for bananas is lack of water. The most common cause for not getting fruit is starvation. Banana plants blow over in strong winds. Protect them and feed them and water them and all will be well. Other than that bananas don't need much maintenance." + "\n" + "\n" +

			"Growing banana fruit" + "\n" +
			"-> You may see your first flower emerge after about six months" + "\n" + "\n" +
			"-> Bananas are ready to be picked when they look well rounded with ribs, and the little flowers at the end are dry and rub off easily.";
	
	String SweetPotatoes = "Plant and Grow Sweet Potatoes:" + "\n" +
			"Step 1: Start the Slips" + "\n" +
			"\t" + "Sweet potatoes aren't started by seed like most other vegetables, they're started from slips. Slips are shoots that are grown from a mature sweet potato." + "\n" +  "\n" +
			"Step 2: Root the Slips" + "\n" +
			"\t" + "Once your sweet potatoes have sprouted, you have to separate them into plantable slips. To do this, you take each sprout and carefully twist it off of the sweet potato. Take each sprout and lay it in a shallow bowl with the bottom half of the stem submerged in water and the leaves hanging out over the rim of the bowl. Within a few days roots will emerge from the bottom of each new plant. When the roots are about an inch long the new slips are ready to plant." + "\n" + "\n" +
			"Step 3: Prepare the Soil for the Slips" + "\n" +
			"\t" + "Before you plant sweet potato slips, you have a little extra work to do. Sweet potatoes need loose, well-drained soil to form large tubers. You don't want the roots to face resistance when they try to expand within the soil. Loose soil is more critical than almost any other factor when it comes to growing sweet potatoes successfully." + "\n" + "\n" +
			"Step 4: Plant the Slip" + "\n" +
			"\t" + "Using a small hand trowel, dig a hole about 4'' or 5'' deep and 3'' wide. Place one slip in each hole with the roots pointing down. Position the slip so that the bottom half will be covered with dirt while the top half with all of the new leaves is above ground. Carefully fill the hole with dirt so that you don't bruise the new plant. Sweet potatoes don't like to be bruised or bumped around too much. When you have completely covered it with soil, gently press the plant and surrounding dirt to set the plant and to remove any remaining air pockets. Continue the same way until all of your slips are planted." + "\n" + "\n" + 
			"Step 5: Water, Water, Water" + "\n" +
			"\t" + "Once all of the slips are in place water them. You'll need to give them a thorough soaking until all of the surrounding dirt is wet. Stop watering before your mound starts to erode. New plants, like slips, need to be watered everyday for the first week and every other day the second week. Each week the watering will get a little farther apart until you're watering once a week. If the ground is very dry or you've had a lot of rain, you may need to adjust this schedule in your own garden. Sweet potatoes can withstand drought but they'll produce less, so make sure you water them during the hottest weather";
	
	String Groundnuts = "Groundnuts:" + "\n" +
			"-> start: seeds or seedlings" + "\n" +
			"-> Germination: 10 days, 65F" + "\n" +
			"-> Seed Life: 5years" + "\n" + "\n" +
			
			"Planting:" + "\n" +
			"-> soil: Loose, well drained" + "\n" +
			"-> Sunlight: Full Sun" + "\n" +
			"-> Seeds: 6'' to 8'' apart" + "\n" +
			"-> Seedlings: 24'' to 36'' apart" + "\n" +
			"-> Days to harvest: 120 to 150" + "\n" + "\n" +

			"GROWING NOTES:"+ "\n" +
			"-> Groundnuts prefer a light sandy soil with a lot of compost and manure." + "\n" + "\n" +
			"-> Loosen the soil to a depth of several inches deep and ensure that it will drain well." + "\n" + "\n" +
			"-> You may need to create elevated rows to ensure adequate drainage." + "\n" + "\n" +

			"MAINTAINING:" + "\n" +
			"-> Keep the soil moist without over watering the Groundnuts plants. This can be challenging as the sandy soil will dry out quickly. Cover to protect them from frost, if needed. You can harvest the peanuts after the first frost. Pull the plant out by the roots and allow the Groundnuts to dry naturally." + "\n" + "\n" +
			"HARVESTING:" + "\n" +
			"-> Harvest the Groundnuts when the foliage begins to yellow. Dig up the plants with a spading fork and carefully shake off the loose soil.";
	
	String Onions = "Onions" + "\n" +
			"-> start: seeds or seedlings" + "\n" +
			"-> Germination: 4 to 5 days, 45F to 95F" + "\n" +
			"-> Seed Life: I year" + "\n" + "\n" +

			"Planting:" + "\n" +
			"-> soil: Well Drained, High Fertility" + "\n" +
			"-> Sunlight: Full Sun" + "\n" +
			"-> Seeds: 1/2'' apart" + "\n" +
			"-> Seedlings: 4'' apart" + "\n" +
			"-> Days to harvest: 65 to 75" + "\n" + "\n" +

			"GROWING NOTES:" + "\n" +
			"-> Well-drained, rich soil, high in organic matter, neutral pH. Optimum pH is 6.2 to 6.8. Requires plentiful, even moisture for good yields." + "\n" + "\n" + 

			"MAINTAINING:" + "\n" +
			"-> Can be direct-seeded, grown from transplants started inside, or from sets -- small bulbs about ½-inch in diameter grown from seed the previous season." + "\n" + "\n" +
			"-> Choose a weed-free, well-drained location. Raised beds are ideal. Onions are good for intercropping with other garden plants, especially early-maturing spring greens. Do not plant where other onion family crops have been grown in the past 3 years." + "\n" + "\n" +
			"-> Onions have shallow root systems and need consistent moisture and good weed control. Water weekly if weather is dry, and mulch to retain moisture and suppress weeds." + "\n" + "\n" +

			"HARVESTING:" + "\n" +
			"-> You can always tell when onions have stopped growing. The leaves will lose their color, weaken at the top of the bulb and flop over. Each year a few new gardeners watch the leaves die and wonder, 'What's wrong?' There's nothing wrong; it's Nature's plan. The leaves' job is done - they've put the last of their energy into the bulbs.";
	
	String Cabbage = "Cabbage" + "\n" +
			"-> start: Seeds or Seedlings" + "\n" +
			"-> Germination: 4 to 7 days, 45F to 85F" + "\n" +
			"-> Seed Life:5 years" + "\n" + "\n" +

			"Planting" + "\n" +
			"-> soil: Well Drained, Fertile" + "\n" +
			"-> Sunlight: Full Sun" + "\n" +
			"-> Seeds: 1-1/2'' to 2'' apart" + "\n" +
			"-> Seedlings: 12'' to 15'' apart" + "\n" +
			"-> Days to harvest: 60 to 90" + "\n" + "\n" +

			"GROWING NOTES:" + "\n" +
			"-> Can tolerate light shade but will slow maturity. Light shade can be beneficial in warm weather." + "\n" + "\n" +
			"-> Prefers well-drained, fertile soil high in organic matter, pH 6.0 to 7.5. Can tolerate slightly alkaline soil. This heavy feeder also needs plentiful, consistent moisture." + "\n" + "\n" +
			
			"MAINTAINING:" + "\n" +
			"->Sow seeds indoors 6 to 8 weeks before average last spring frost. Keep soil warm (about 75 F) until germination. Then keep plants around 60 F. Provide direct sun so plants don’t get leggy. When plants are 4 to 6 weeks old, transplants into garden 12 to 24 inches apart, in rows 18 to 34 inches apart. Use closer spacings for smaller, early varieties, wider spacings for larger, late-season varieties." + "\n" + "\n" +
			"-> When cabbages are 4 to 5 inches tall its good time to start control all common cabbage pests such as aphids, root maggots, cabbageworms, and cabbage loopers." + "\n" + "\n" +  

			"HARVESTING:" + "\n" +
			"-> Cabbage can be harvested anytime after the heads form. For highest yield, cut the cabbage heads when they are solid (firm to hand pressure) but before they crack or split. When heads are mature, a sudden heavy rain may cause heads to crack or split wide open. The exposed internal tissue soon becomes unusable. Harvest and salvage split heads as soon as possible after they are discovered.";
	

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
        setContentView(R.layout.crops);
        
       
     	addListenerOnButton();
     	
     	
     	addItemsOnspinnerCrops();
     	addListenerOnButton1();
     	addListenerOnSpinnerItemSelection1();
        
	}
	
	 // add items into spinner dynamically
	 
	  public void addItemsOnspinnerCrops() {
			 
		  spinnerCrops = (Spinner) findViewById(R.id.spinnerCrops);
		List<String> list1 = new ArrayList<String>();
		list1.add("Rice");
		list1.add("Maize");
		list1.add("Millet");
		list1.add("Wheat");
		list1.add("Tomatoes");
		list1.add("Beans and Peas");
		list1.add("Bananas");
		list1.add("Sweet Potatoes");
		list1.add("Groundnuts");
		list1.add("Onions");
		list1.add("Cabbage");
		
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
			  if (value1 == "Rice")
			  {
				  modernfarming.setBackgroundResource(R.drawable.rice);
				  showresults.setText(Rice);
			  }
			 
			  else if (value1 == "Maize")
			  {
				  modernfarming.setBackgroundResource(R.drawable.maize);
				  showresults.setText(Maize);
			  }
			  else if (value1 == "Millet")
			  {
				  modernfarming.setBackgroundResource(R.drawable.millet);
				  showresults.setText(Millet);
			  }
			  else if (value1 == "Wheat")
			  {
				  modernfarming.setBackgroundResource(R.drawable.wheat);
				  showresults.setText(Wheat);
			  }
			  
			  else if (value1 == "Tomatoes")
			  {
				  modernfarming.setBackgroundResource(R.drawable.tomato);
				  showresults.setText(Tomatoes);
			  }
			  else if (value1 == "Beans and Peas")
			  {
				  modernfarming.setBackgroundResource(R.drawable.beans);
				  showresults.setText(BeansandPeas);
			  }
			  
			  else if (value1 == "Bananas")
			  {
				  modernfarming.setBackgroundResource(R.drawable.banana);
				  showresults.setText(Bananas);
			  }
			  else if (value1 == "Sweet Potatoes")
			  {
				  modernfarming.setBackgroundResource(R.drawable.sweetpotato);
				  showresults.setText(SweetPotatoes);
			  }
			  else if (value1 == "Groundnuts")
			  {
				  modernfarming.setBackgroundResource(R.drawable.gnuts);
				  showresults.setText(Groundnuts);
			  }
			  
			  else if (value1 == "Onions")
			  {
				  modernfarming.setBackgroundResource(R.drawable.onion);
				  showresults.setText(Onions);
			  }
			  
			  else if (value1 == "Cabbage")
			  {
				  modernfarming.setBackgroundResource(R.drawable.cabbage);
				  showresults.setText(Cabbage);
			  }
			  
			
	
	
		  }
	 
		});
   	
   	
	

}
}


