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

public class EcoFriend extends Activity{
	Button buttonHabit;
	Button buttonCrops;
	Button buttonBack;
	Button buttonExit;
	
	Spinner spinnerCrops;
	TextView showresults;
	String value = "";
	String value1 = "";
	
	String ChemicalFertilizers = "The effects of chemical fertilizers are not widely spoken about. This is partially because they are largely untested. We understand there is a risk of groundwater contamination and the environmental issues that brings, but we're still not entirely sure what it means for our own health. " + "\n\n\n"+
			 
		
			"Fertilizer (or fertiliser) is any organic or inorganic material of natural or synthetic origin (other than liming materials) that is added to a soil to supply one or more plant nutrients essential to the growth of plants." + "\n\n\n" +
			"Negative Effects of Chemical Fertilizers."+ "\n\n" +
			"The biggest issue facing the use of chemical fertilizers is groundwater contamination. Nitorgen fertilizers break down into nitrates and travel easily through the soil. Because it is water-soluble and can remain in groundwater for decades, the addition of more nitrogen over the years has an accumulative effect."+ "\n\n\n" +
			"What We Can Do About It."+ "\n\n"+
			" Knowing and understanding the effects of chemical fertilizers doesn't do us much good without action on our part. Knowing how to protect our health is what counts."+"\n\n"+

    "\t"+ "-If you're on well-water have your water tested regularly by a reputable lab."+"\n\n"+
    "\t"+ "-Support organic and sustainable agriculture. Know your farm and your farmer and understand their practices."+"\n\n"+
    "\t"+ "-Take part in safeguarding organic practices and standards."+"\n\n"+
    "\t"+ "Learn more about organic fertilizer for your own garden.";
	
	
	
	String Deforestation = "Deforestation:" + "\n" +
			"The biggest deforestation problem, which is sometimes used to clear farm land, is the slash and burn method. The trees are destroyed and not even used productively as wood products. Animals and plants die, and the ground is less useful because of the fire. Crops are substandard, and no one gets much benefit out of this careless waste of forest land." + "\n" +
			"There are many other reasons for deforestation, including urban renewal and mining. As regards cause, the main thing you need to know is that there are numerous causes and, most importantly, they all make sense to the people tearing down the forests. They think what they’re doing is reasonable and that our requests to stop are unreasonable, and maybe a tad crazy." + "\n" + "\n" +
			" Tips to Avoid:" + "\n" +
			"-> Don’t use firewood in your fireplace, unless you use deadwood gathered in the forest (not cut). Use coals in your fireplace instead. Avoid cutting firewood unless you know the tree fell naturally, and you’ve been invited to take the wood away." + "\n" +
			"-> Join environmental groups and get involved. Pay attention to what’s going oan and ask how you can take action and how you can own this issue and make it an important part of your life." + "\n" +
			"-> Plant trees. The more trees you plant, the more of the rain forest you replace in your own yard. Consider giving live trees as gifts and encouraging others to help fight deforestation." + "\n" +
			"-> Do not buy products from large commercial companies which are involved in clearing rainforests for cattle ranching." + "\n" +
			"-> Do not buy meat grown on cleared rainforests";
	
	String Overcropping = "Overcropping" + "\n" +
			"Overcropping is when soil loses is fertility because too many crops were grown on it. The nutrients in the soil are depleted and would no longer be be able to support the growth of new crops." + "\n" + 
			"To exhaust the fertility of (land) by continuous cultivation of crops." + "\n" + "\n" +
			"Tips to avoid" + "\n" +
			"-> Promote Bio Fertilizers: To increase agricultural yield, most farmers took to using chemical fertilizers. No doubt that the yield did indeed increase, but at the cost of the soil losing its fertility. To restore the fertility of the soil to what it was, will take a very long time, however, one has to start at some point of time. Drastic measures are required for the same. Farmers should be encouraged to start using bio fertilizers. The microorganisms in these fertilizers will help in increasing the fertility of the soil." + "\n" +
			"-> Reduce Toxic Waste: If one has to look at the soil pollution facts, it will be seen that toxic waste has a big role to play in soil pollution. Hence, industrial toxic waste should be treated to reduce its toxicity before it is disposed off. At the same time, responsible methods should be used for disposing off the waste. The best, however, is to avoid the use of harmful chemicals unless they are of extreme importance." + "\n" +
			"-> Promote Use of Bio Pesticides and Fungicides: To avoid soil pollution, it is important, that along with fertilizers, farmers should shift to bio pesticides and fungicides, also known as herbicides. These products will take a little longer to react, but they do not have adverse effect on the soil. It is best to use manure both as a fertilizer as well as pesticide, as it has far less side effects as opposed to its chemical counterpart.";
	
	String Overgrazing = "Overgrazing" + "\n" +
			"Graze (grassland) so heavily that the vegetation is damaged and the ground becomes liable to erosion." + "\n" +
			"Overgrazing occurs when plants are exposed to intensive grazing for extended periods of time, or without sufficient recovery periods." + "\n" +
			"It can be caused by either livestock in poorly managed agricultural applications, or by overpopulations of native or non-native wild animals." + "\n" + "\n" +
			"Tips to Avoid:" + "\n" +
			"-> Avoid using supplementary feeding to support animals on unproductive land, except when the weather is particularly hard" + "\n" +
			"-> Reduce stock numbers if there is frequent bare ground, suppressed heather or grass sward heights under five centimetres for rough grassland, and three centimetres" + "\n" +
			"-> Reduce stock numbers in harsh weather conditions (prolonged drought or wet periods)" + "\n" +
			"-> Choose feed sites over 100 metres from dwarf shrub heath, blanket mire, calcareous grassland or wet, flushed areas" + "\n" +
			"-> Choose feed sites more than 10 metres from a water course" + "\n" +
			"-> Avoid feeding large numbers of stock at one site, especially at field entrances" + "\n" +
			"-> Rotate feed sites daily to minimise any damage";
	
	String Soilerosion = "Soil Erosion (Gardens)" + "\n" +
			"the washing away of soil by the flow of water." + "\n" + "\n" +
			"Tips to avoid:" + "\n" +
			"The soil structure of your organic garden can be safeguarded by various methods like," + "\n" +
			"\t" + "1. Mulching" + "\n" +
			"\t" + "2. Cover crops" + "\n" +
			"\t" + "3. Succession planting" + "\n" +
			"\t" + "4. Raised beds" + "\n" +  "\n" + "\n" +
			"Mulching Process" + "\n" +
			"-> Mulching is a process of creating a healthy soil structure prolonging the plant life. It safeguards your soil from drainage, moisture retention and nutrient retention with the help of organic matter. Manure, banana peels and many such natural sources act exceptional organic matters which nourishes your soil structure. It also allows the excess water to drain properly and retain enough moisture needed for plant life." + "\n" + "\n" +
			"Cover Crops" + "\n" +
			"-> Cover crops are crops which are planted to suppress the growth of weed, build soil productivity, control pests and improve soil fertility."+ "\n" +
			"Succession Planting" + "\n" + 
			"-> Succession planting is done by planting the same crop simultaneously multiple times or making the crops grow in a way that they mature at different times throughout the season in the same area. This will control soil erosion besides keeping your soil healthy." + "\n" + "\n" +
			"Raised Beds" + "\n" + 
			"-> Raised beds are a process of building a soil platform over surfaces which is not helpful for planting like rocky or hard planes. The chances of soil erosion with this method are completely out of question, since the raised beds are built above the natural existing ground elevation." + "\n" + "\n" +
			"These are a few natural ways which could prevent your garden from soil erosion. By using pesticides, it could affect the plant’s growth. So it is better to follow the eco-friendly and healthy way of gardening.";
	
	String SoilErosionFarms = "Soil Erosion (Farms)" + "\n" +
			"The washing away of soil by the flow of water." + "\n" + "\n" +
			"Tips to prevent:" + "\n" +
			"-> Design the site to infiltrate stormwater into the ground and to keep it out of storm drains. Eliminate or minimize the use of stormwater collection and conveyance systems while maximizing the use of stormwater infiltration" + "\n" +
			"-> Minimize the amount of exposed soil on site. To the extent possible, plan the project in stages to minimize the amount of area that is bare and subject to erosion. The less soil exposed, the easier and cheaper it will be to control erosion." + "\n" +
			"-> Protect defined channels immediately with measures adequate to handle the storm flows expected.";
	
	String Salination = "Salination" + "\n" +
			"The increase in concentration of salts in soil which are soluble lead to the process of salination." + "\n" +
			"It depends on many factors. The poor drainage of soil leads to the accumulation of salts on the surface of soil. It may happen during the flood. The quality of irrigation water also plays a crucial role. In arid areas the ground water is saline. The irrigation water is rich in soluble salts." + "\n" + "\n" +
			"Tips to prevent:" + "\n" +
			"-> Select a crop that fits the conditions in your field" + "\n" +
			"-> Know the leaching requirement for your crop" + "\n" +
			"-> Keep the right Intervals between irrigations" + "\n" +
			"-> Use appropriate fertilizers types" + "\n" +
			"-> Have your soil tested periodically";
	
	String Desertification = "Desertification" + "\n" +
			"The process by which fertile land becomes desert, typically as a result of drought, deforestation, or inappropriate agriculture."+ "\n" +  "\n" +
			"To prevent soil pollution, deforestation measures have to be undertaken at rapid pace. Soil erosion is caused, when there are no trees to prevent the top layer of the soil from being transported by different agents of nature like water and air. At the same time, measures should be taken to avoid over cropping and over grazing, as it leads to flood and soil erosion and further deterioration of the soil layer.";


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
        setContentView(R.layout.ecofriend);
        
       
     	addListenerOnButton();
     	
     	
     	addItemsOnspinnerCrops();
     	addListenerOnButton1();
     	addListenerOnSpinnerItemSelection1();
        
	}
	
	 // add items into spinner dynamically
	 
	  public void addItemsOnspinnerCrops() {
			 
		  spinnerCrops = (Spinner) findViewById(R.id.spinnerCrops);
		List<String> list1 = new ArrayList<String>();
		list1.add("Chemical fertilizers");
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
			  if (value1 == "Chemical fertilizers")
			  {
				  showresults.setText(ChemicalFertilizers);
			  }
			  else if (value1 == "Deforestation")
			  {
				  showresults.setText(Deforestation);
			  }
			  else if (value1 == "Overcropping")
			  {
				  showresults.setText(Overcropping);
			  }
			  else if (value1 == "Overgrazing")
			  {
				  showresults.setText(Overgrazing);
			  }
			  else if (value1 == "Soil Erosion")
			  {
				  showresults.setText(Soilerosion);
			  }
			  else if (value1 == "Soil Erosion in Farms")
			  {
				  showresults.setText(SoilErosionFarms);
			  }
			  else if (value1 == "Salination")
			  {
				  showresults.setText(Salination);
			  }
			  else if (value1 == "Desertification")
			  {
				  showresults.setText(Desertification);
			  }
			  
			
	
	
		  }
	 
		});
   	
   	
	

}
}



