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

public class PestControl extends Activity{
	Button buttonPest;
	Button buttonBack;
	Button buttonExit;
	Spinner spinnerPest;
	
	TextView showresults;
	String value = "";
	
	View pest;
	
	String Ants = "Studying ants is a lesson in survival. If ants encounter a substance that kills them or forms a barrier, they set to work and pile up enough of each other, dead or alive, to make a bridge to cross." + "\n" + "\n" +
			 "-> Diatomaceous earth sprinkled on ants' trails kills ants by dehydration when they're back in their nest." + "\n" + "\n" +
			 "-> Garlic fire spray will kill ants on contact... but there's plenty more on their way!" + "\n" + "\n" +
			 "-> There are lots of organic garden pest control deterrent for ants, but keep applying and changing them because they are determined little blighters indeed. When ants are under attack, some ants will gather a few eggs and move to another location, so often all you achieve is for them to move their nest somewhere else, in which case unless they become a pest again, leave them in peace."
			 + "\n" + "\n" +
			 
 			"-> Dab some jam, honey or sugar water (and borax if you wish) on the base of aphid infested plants. That will hold the ants back whilst you set some ladybugs on the aphids. You can spray the aphids and ants, but the ants will have a store of eggs underground and will soon move back to start farming again." + "\n" + "\n" +
 			"-> Cucumber peels on ant routes will send them away for a while." + "\n" + "\n" +
 			"-> If you find the ants' nest, make them disappear by sprinkling in or near their entrance one or more of these: black pepper, cayenne pepper, cinnamon or chilli powder. Likewise salt sends them into a frenzy." + "\n" + "\n" +
 			"-> Boiling water can then be poured on as many ants as you can reach (as long as it's safe and away from plants)." + "\n" + "\n" +
 			"-> Boiling water can of course be poured down an ant nest to kill the queen — if you are lucky enough to find an easy to reach nest, but usually they are very deep and constructed to stop rain and flooded water going in.";
	
	String Birds = "Most birds are insect eaters and will leave plants alone, especially in the breeding season when they are heavy protein eaters." + "\n" + "\n" +

	"Okay, it does happen that some birds rip leaves to threads, demolish berries, scatter garden matter far and wide and gouge great holes in your soil." + "\n" + "\n" +

	"Visual scare tactics for natural bird control" + "\n" + 

	"-> Shiny things: String old CDs around the patches of garden where you have planted seedlings for example. Those birds such as blackbirds, that scatter things far and wide, will be wary of the reflective movement." + "\n" + "\n" +

	"-> Other shiny stuff, such as festive paper and decorations, bottle tops, old utensils, tins and foil are also effective. Use the foil lids from dip and yogurt containers, and don't throw out any foil you used to bake dinner with." + "\n" + "\n" +

	"-> Make a scarecrow: Only feasible if you have the time, space, and especially helpful children." + "\n" + "\n" +

	"-> Snakes: A rubber toy snake or one of those sand filled ones gives excellent pest control. Birds will shy away instead of landing if you put a fake snake in a visible place." + "\n" + "\n" +

	"-> Hunters and predatory birds: A large cutout or kite of a hunter type of bird, such as a hawk or owl, can keep smaller birds away. Nobody likes bullies, even birds. Sit your fearsome picture in a nearby tree or attach to a pole, fence, house or on wire or twine across garden." + "\n" + "\n" +

	"-> Cats and dogs: Having pets doesn't always guarantee the birds will stay away. Anyway, most people that like pets, like birds, so it's back to that mutual understanding of community, jungle type rule of sharing, squaring off and semi-co-existing." + "\n" + "\n" +
	"-> Big bang: You don't have to create the universe again, just move a few birds along. Make a sudden loud bang or sharp crack. Do this a few times, especially when pigeons are settling down for a nap and they'll get the message and find another guesthouse.";
	
	String MildewMoldFungus = "Plants that are susceptible to mildew, such as peas, pumpkin, zucchini and cucumber can benefit from a milk spray. Use full-cream milk and spray every few days on the leaves until the mildew is under control." + "\n" + "\n" +

	"-> If the small white patches of mildew are just starting, you should be able to catch it early and stop further spreading by using a diluted milk solution of equal parts water and milk." + "\n" + "\n" +

	"-> If the situation is out of control, either remove the affected leaves or the whole plant and destroy it." + "\n" + "\n" +

	"-> 'Damping off' is caused by fungi such as Phtophtora and Pythium. Seedlings, like lettuce, suddenly collapse with the rot. Soggy conditions, overcrowding or too much peat in the mix can be the cause. Try letting the soil dry out on the surface in-between waterings, and even sprinkling a layer of sand on the surface." + "\n" + "\n" +

	"-> Sand and a dry surface will also control 'Fungus gnats.' They are tiny little black midget type flies that crawl and fly around the surface of the soil. They lay their eggs and the larvae will damage seedling by eating their roots." + "\n" + "\n" +

	"-> Chamomile tea is a fungicide. Prepare a cup of chamomile tea and allow it to steep for 10 minutes. Once cool it can be sprayed on the affected leaves, top and bottom." + "\n" + "\n" +

	"-> Cinnamon powder sprinkled around plants and soil also controls fungus." + "\n" + "\n" +

	"-> If you can make or buy good quality Compost tea, this is extremely beneficial. Compost tea balances the microbes and bacteria in the soil, thus fighting the disease organisms and providing active healthy organisms and fertiliser to strengthen plants and make them resistant to problems.";
	
	
	String Caterpillars = "To discourage moths and grubs on corn, fruit, brassicas (includes broccoli, spinach, cabbage, cauliflower, Brussels sprouts, kale, collard greens, pak choi and kohlrabi) simply spray with a molasses blend. Mix one tablespoon of molasses with a litre of hot water. Then add a teaspoon of liquid detergent and put in a spray bottle. Spray the leaves, top and bottom, about once a week." + "\n" + "\n" +

	"An alternative to the molasses spray is a blend of 1 part vinegar to 3 parts water. Add a teaspoon of liquid detergent and put in a spray bottle. Spray the leaves, top and bottom to kill off grubs and bugs.";
	
	String Earwigs = "If earwigs are eating your plants, crumple some newspaper in old flower pots and leave them in the garden. The earwigs will hide in the paper once they're done eating. In the morning, shake the paper out where they can have a new home or into a bucket of hot water if earwigs aren't your cup of tea.";
	
	String Mice = "If they get into your home from the garden, smarten up your housekeeping to the point of being fanatical. Don't leave food out, put stored food in containers and empty the crumb tray of your toaster." + "\n" + "\n" +

	"Deter mice with peppermint or eucalyptus oil – soak cloths or cottonwool and put where mice come in or have been. They tend to go around edges and under appliances, so concentrate your efforts there and if you have to lay traps, bait them with peanut butter, cheese, stiff porridge or bread.";
	
	String  Whitefly = "Windy conditions keep whitefly away temporarily, and also a strongish hose down will move them on. Detergent or oil coats their wings and stops them flying, so mix up approximately 1-2 teaspoons detergent to 1 litre (15oz) water, or half a cup of cheap salad oil to 1 litre water, with a dash of detergent. Spray all over infected plants, including underside of leaves if possible." + "\n" + "\n" +

	"-> Whitefly are attracted to yellow. Get some sticky stuff, such as vaseline, castor oil, natural gum resin, or vegetable wax. Tie bright yellow plastic bag bits coated with sticky stuff to stakes, or smear a yellow plastic bucket, or paint a nearby board the brightest yellow you can buy." + "\n" + "\n" +

	"-> If necessary shake the whitefly off the plants then watch as they land on the yellow traps and get stuck.";
	
	
	String Deer = "Deer are the most difficult of all pests to deter from a garden. They love many different plants. Flowers, vegetables, trees and shrubs are all on their menu." + "\n" + "\n" +

	"The best way to keep deer out of a garden is by using a fence that is at least 6 feet high. If it's a small garden that may be feasible but for large gardens or yards, the cost is prohibitive, or possibly not practical." + "\n" + "\n" +

	"So the only other choice is deterrents." + "\n" + 

	"-> Deer don't like the smell of raw eggs, fish products, kelp, or ammonia. Any spray made from these products can be used. Just mix the product of choice in water and spray the plants to be protected." + "\n" + "\n" +

	"-> Deer don't like the smell of soap either. Some gardeners have especially found success with Dial and Zest brands." + "\n" + "\n" +

	"-> Blood meal scattered around the garden is another good deterrent." + "\n" + "\n" +

	"-> Since deer don't like capsaicin, the ingredient that makes peppers hot, a spray made from chili peppers deters deers." + "\n" + "\n" +

	"-> Hang fragrant fabric-softener strips, and small nylon bags filled with human hair on trees around the garden." + "\n" + "\n" +

	"-> Some gardeners have found success by laying chicken wire on the ground about six feet wide around the perimeter of the garden. The deer don't like to walk on it because their hooves get stuck in the loops of the wire." + "\n" + "\n" +

	"-> Try planting time-released garlic capsules at the bases of trees or shrubs or in the rows of plants to be protected.";
	
	

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
        setContentView(R.layout.pest);
        
        addItemsOnspinnerPest();
     	addListenerOnButton();
     	addListenerOnSpinnerItemSelection();
     	
     	
        
	}
	
	 // add items into spinner dynamically
	  public void addItemsOnspinnerPest() {
	 
		  spinnerPest = (Spinner) findViewById(R.id.spinnerPest);
		List<String> list = new ArrayList<String>();
		list.add("Ants");
		list.add("Birds");
		list.add("Mildew, Mold & Fungus");
		list.add("Caterpillars");
		list.add("Earwigs");
		list.add("Mice");
		list.add("Whitefly");
		list.add("Deer");
		
		ArrayAdapter<String> dataAdapter = new ArrayAdapter<String>(this,
			android.R.layout.simple_spinner_item, list);
		dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
		spinnerPest.setAdapter(dataAdapter);

}
	 
	  
	  public void addListenerOnSpinnerItemSelection() {
		  spinnerPest.setOnItemSelectedListener(new CustomOnItemSelectedListener1());
   	  }
	  
	  
   	 
   	  // get the selected dropdown list value
   	  public void addListenerOnButton() {
   	 
   		buttonPest = (Button) findViewById(R.id.buttonPest);

   		
   		buttonBack = (Button) findViewById(R.id.buttonBack);
   		buttonExit = (Button) findViewById(R.id.buttonExit);
   		pest = (View) findViewById(R.id.pest);
   		showresults = (TextView) findViewById(R.id.showresults);
   		
//for pest
   		buttonPest.setOnClickListener(new View.OnClickListener() {
		  public void onClick(View v) {
			  
			 value = spinnerPest.getSelectedItem().toString();
			  if (value == "Ants")
			  {
				  pest.setBackgroundResource(R.drawable.ant);
				  showresults.setText(Ants);
			  }
			 
			  else if (value == "Birds")
			  {
				  pest.setBackgroundResource(R.drawable.bird);
				  showresults.setText(Birds);
			  }
			  else if (value == "Mildew, Mold & Fungus")
			  {
				  pest.setBackgroundResource(R.drawable.fungus);
				  showresults.setText(MildewMoldFungus);
			  }
			  else if (value == "Caterpillars")
			  {
				  pest.setBackgroundResource(R.drawable.catepirl);
				  showresults.setText(Caterpillars);
			  }
			  else if (value == "Earwigs")
			  {
				  pest.setBackgroundResource(R.drawable.eagr);
				  showresults.setText(Earwigs);
			  }
			  else if (value == "Mice")
			  {
				  pest.setBackgroundResource(R.drawable.mice);
				  showresults.setText(Mice);
			  }
			  else if (value == "Whitefly")
			  {
				  pest.setBackgroundResource(R.drawable.whitfry);
				  showresults.setText(Whitefly);
			  }
			  
			  else if (value == "Deer")
			  {
				  pest.setBackgroundResource(R.drawable.deer);
				  showresults.setText(Deer);
			  }
	
	 //final else can come in action....but not nowwwwwwww ernest the top coder
			
		    
		  }
	 
		});
   	
   
   	
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

	

}




