package ernest.farming.instructor;

import java.util.ArrayList;
import java.util.List;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.drawable.AnimationDrawable;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.RelativeLayout;
import android.widget.Spinner;

public class AnimatedActivity extends Activity{
	ImageButton imageButtonPlay;
	
	Spinner spinnerCrops;
	String value1 = "";
	 AnimationDrawable animation;
     AnimationDrawable animation1;
     AnimationDrawable animationSoil;
     AnimationDrawable animationWater;
     ImageView imgSun;
     ImageView imgbottom;
	
	
	
	
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
        setContentView(R.layout.animated);
        
       
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
   		

   		
   		

   	
   	
   	
	

}
public void addListenerOnButton1() {
   	 
	imageButtonPlay = (ImageButton) findViewById(R.id.imageButtonPlay);
	 final ImageView imgView = (ImageView)findViewById(R.id.imgrain); 
	 imgSun = (ImageView)findViewById(R.id.imgSun);
     imgbottom = (ImageView)findViewById(R.id.imgbottom);
		
   	//for crops tips
	imageButtonPlay.setOnClickListener(new View.OnClickListener() {
		  public void onClick(View v) {
			  
			 value1 = spinnerCrops.getSelectedItem().toString();
			  if (value1 == "Rice")
			  {
				  startAnimationRice();
			  }
			 
			  else if (value1 == "Maize")
			  {
				  startAnimationMaize();
			  }
			  else if (value1 == "Millet")
			  {
				  startAnimationMillet();
			  }
			  else if (value1 == "Wheat")
			  {
				  startAnimationWheat();
			  }
			  
			  else if (value1 == "Tomatoes")
			  {
				  startAnimationTomato();
			  }
			  else if (value1 == "Beans and Peas")
			  {
				  startAnimationBeans();
			  }
			  
			  else if (value1 == "Bananas")
			  {
				  startAnimationBanana();
			  }
			 
			  
			  else if (value1 == "Onions")
			  {
				  startAnimationOnion();
			  }
			  
			  else if (value1 == "Cabbage")
			  {
				  startAnimationCabbage();
			  }
		
	
		  }
	 
		});
	
	
	 imgView.setOnClickListener(new View.OnClickListener() {
	      @Override
	      public void onClick(View v) {
	     
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

 private void startAnimationRice(){
	  
	
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil), 1600); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil2water), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil3loosen), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil4planted), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil5growing), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil6growing), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil7final), 2000);
     animationSoil.setOneShot(true);
     
    
     
     
     animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.setOneShot(true);
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
     animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);

     animation.setOneShot(true);
     
     //the view itself
     ImageView imageView = (ImageView) findViewById(R.id.imgrain);
     ImageView imageViewSun = (ImageView)findViewById(R.id.imgSun);
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(600, 150);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 500, 10, 10);
     
    //rain
     RelativeLayout.LayoutParams params = new RelativeLayout.LayoutParams(110, 110);
     params.alignWithParent = true;
   //(left, top, right, bottom)
     // params.setMargins(0, 400, 10, 400);down just on top of soil
     params.setMargins(150, 300, 0, 400);
     
     //sun
     RelativeLayout.LayoutParams params1 = new RelativeLayout.LayoutParams(100, 100);
     params1.alignWithParent = true;
     //params1.addRule(RelativeLayout.ALIGN_PARENT_LEFT);
   //(left, top, right, bottom)
     params1.setMargins(20, 250, 0, 400);
     
     

   //final
     imageView.setLayoutParams(params);
     imageView.setImageDrawable(animation);
     imageView.post(new Starter());
     
     imageViewSun.setLayoutParams(params1); 
     imageViewSun.setImageDrawable(animation1);
     imageViewSun.post(new Starter());
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }
 
 private void startAnimationMaize(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil), 1600); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil1maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil2maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil3maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil4maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil5maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil6maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil7maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil8maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil9maize), 2000);
     animationSoil.setOneShot(true);
     
    
     
     
     animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.setOneShot(true);
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
     animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);

     animation.setOneShot(true);
     
     //the view itself
     ImageView imageView = (ImageView) findViewById(R.id.imgrain);
     ImageView imageViewSun = (ImageView)findViewById(R.id.imgSun);
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(600, 150);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 500, 10, 10);
     
    //rain
     RelativeLayout.LayoutParams params = new RelativeLayout.LayoutParams(110, 110);
     params.alignWithParent = true;
   //(left, top, right, bottom)
     // params.setMargins(0, 400, 10, 400);down just on top of soil
     params.setMargins(150, 300, 0, 400);
     
     //sun
     RelativeLayout.LayoutParams params1 = new RelativeLayout.LayoutParams(100, 100);
     params1.alignWithParent = true;
     //params1.addRule(RelativeLayout.ALIGN_PARENT_LEFT);
   //(left, top, right, bottom)
     params1.setMargins(20, 250, 0, 400);
     
     

   //final
     imageView.setLayoutParams(params);
     imageView.setImageDrawable(animation);
     imageView.post(new Starter());
     
     imageViewSun.setLayoutParams(params1); 
     imageViewSun.setImageDrawable(animation1);
     imageViewSun.post(new Starter());
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }
 
 private void startAnimationMillet(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil), 1600); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil1maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil2maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil3maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil4maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil5maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil6maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil7maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil8maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil9millet), 2000);
     animationSoil.setOneShot(true);
     
    
     
     
     animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.setOneShot(true);
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
     animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);

     animation.setOneShot(true);
     
     //the view itself
     ImageView imageView = (ImageView) findViewById(R.id.imgrain);
     ImageView imageViewSun = (ImageView)findViewById(R.id.imgSun);
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(600, 150);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 500, 10, 10);
     
    //rain
     RelativeLayout.LayoutParams params = new RelativeLayout.LayoutParams(110, 110);
     params.alignWithParent = true;
   //(left, top, right, bottom)
     // params.setMargins(0, 400, 10, 400);down just on top of soil
     params.setMargins(150, 300, 0, 400);
     
     //sun
     RelativeLayout.LayoutParams params1 = new RelativeLayout.LayoutParams(100, 100);
     params1.alignWithParent = true;
     //params1.addRule(RelativeLayout.ALIGN_PARENT_LEFT);
   //(left, top, right, bottom)
     params1.setMargins(20, 250, 0, 400);
     
     

   //final
     imageView.setLayoutParams(params);
     imageView.setImageDrawable(animation);
     imageView.post(new Starter());
     
     imageViewSun.setLayoutParams(params1); 
     imageViewSun.setImageDrawable(animation1);
     imageViewSun.post(new Starter());
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }

 
 private void startAnimationWheat(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil), 1600); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil1maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil2maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil3maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil4maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil5maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil6maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil7maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil8maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil9wheat), 2000);
     animationSoil.setOneShot(true);
     
    
     
     
     animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.setOneShot(true);
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
     animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);

     animation.setOneShot(true);
     
     //the view itself
     ImageView imageView = (ImageView) findViewById(R.id.imgrain);
     ImageView imageViewSun = (ImageView)findViewById(R.id.imgSun);
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(600, 150);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 500, 10, 10);
     
    //rain
     RelativeLayout.LayoutParams params = new RelativeLayout.LayoutParams(110, 110);
     params.alignWithParent = true;
   //(left, top, right, bottom)
     // params.setMargins(0, 400, 10, 400);down just on top of soil
     params.setMargins(150, 300, 0, 400);
     
     //sun
     RelativeLayout.LayoutParams params1 = new RelativeLayout.LayoutParams(100, 100);
     params1.alignWithParent = true;
     //params1.addRule(RelativeLayout.ALIGN_PARENT_LEFT);
   //(left, top, right, bottom)
     params1.setMargins(20, 250, 0, 400);
     
     

   //final
     imageView.setLayoutParams(params);
     imageView.setImageDrawable(animation);
     imageView.post(new Starter());
     
     imageViewSun.setLayoutParams(params1); 
     imageViewSun.setImageDrawable(animation1);
     imageViewSun.post(new Starter());
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }
 
 private void startAnimationTomato(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil), 1600); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato1), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato2), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato3), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato4), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato5), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato6), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato7), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil1maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil2maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil3maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato8), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato9), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato10), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato11), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato12), 2000);
    
    
     animationSoil.setOneShot(true);
     
    
     
     
     animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.setOneShot(true);
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
     animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);

     animation.setOneShot(true);
     
     //the view itself
     ImageView imageView = (ImageView) findViewById(R.id.imgrain);
     ImageView imageViewSun = (ImageView)findViewById(R.id.imgSun);
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(600, 150);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 500, 10, 10);
     
    //rain
     RelativeLayout.LayoutParams params = new RelativeLayout.LayoutParams(110, 110);
     params.alignWithParent = true;
   //(left, top, right, bottom)
     // params.setMargins(0, 400, 10, 400);down just on top of soil
     params.setMargins(150, 300, 0, 400);
     
     //sun
     RelativeLayout.LayoutParams params1 = new RelativeLayout.LayoutParams(100, 100);
     params1.alignWithParent = true;
     //params1.addRule(RelativeLayout.ALIGN_PARENT_LEFT);
   //(left, top, right, bottom)
     params1.setMargins(20, 250, 0, 400);
     
     

   //final
     imageView.setLayoutParams(params);
     imageView.setImageDrawable(animation);
     imageView.post(new Starter());
     
     imageViewSun.setLayoutParams(params1); 
     imageViewSun.setImageDrawable(animation1);
     imageViewSun.post(new Starter());
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }

 private void startAnimationBeans(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil), 1600); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil1maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil2maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil3maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil4maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil5maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil6maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil7maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil8maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.beans0), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.beans1), 2000);
     animationSoil.setOneShot(true);
     
    
     
     
     animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.setOneShot(true);
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
     animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);

     animation.setOneShot(true);
     
     //the view itself
     ImageView imageView = (ImageView) findViewById(R.id.imgrain);
     ImageView imageViewSun = (ImageView)findViewById(R.id.imgSun);
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(600, 150);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 500, 10, 10);
     
    //rain
     RelativeLayout.LayoutParams params = new RelativeLayout.LayoutParams(110, 110);
     params.alignWithParent = true;
   //(left, top, right, bottom)
     // params.setMargins(0, 400, 10, 400);down just on top of soil
     params.setMargins(150, 300, 0, 400);
     
     //sun
     RelativeLayout.LayoutParams params1 = new RelativeLayout.LayoutParams(100, 100);
     params1.alignWithParent = true;
     //params1.addRule(RelativeLayout.ALIGN_PARENT_LEFT);
   //(left, top, right, bottom)
     params1.setMargins(20, 250, 0, 400);
     
     

   //final
     imageView.setLayoutParams(params);
     imageView.setImageDrawable(animation);
     imageView.post(new Starter());
     
     imageViewSun.setLayoutParams(params1); 
     imageViewSun.setImageDrawable(animation1);
     imageViewSun.post(new Starter());
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }
 
 private void startAnimationBanana(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil), 1600); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil1maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil2maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil3maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil4maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.banana1), 2000);
     
     animationSoil.setOneShot(true);
     
    
     
     
     animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.setOneShot(true);
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
     animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    

     animation.setOneShot(true);
     
     //the view itself
     ImageView imageView = (ImageView) findViewById(R.id.imgrain);
     ImageView imageViewSun = (ImageView)findViewById(R.id.imgSun);
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(600, 150);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 500, 10, 10);
     
    //rain
     RelativeLayout.LayoutParams params = new RelativeLayout.LayoutParams(110, 110);
     params.alignWithParent = true;
   //(left, top, right, bottom)
     // params.setMargins(0, 400, 10, 400);down just on top of soil
     params.setMargins(150, 300, 0, 400);
     
     //sun
     RelativeLayout.LayoutParams params1 = new RelativeLayout.LayoutParams(100, 100);
     params1.alignWithParent = true;
     //params1.addRule(RelativeLayout.ALIGN_PARENT_LEFT);
   //(left, top, right, bottom)
     params1.setMargins(20, 250, 0, 400);
     
     

   //final
     imageView.setLayoutParams(params);
     imageView.setImageDrawable(animation);
     imageView.post(new Starter());
     
     imageViewSun.setLayoutParams(params1); 
     imageViewSun.setImageDrawable(animation1);
     imageViewSun.post(new Starter());
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }
 
 
 private void startAnimationOnion(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil), 1600); 
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil1maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil2maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil3maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil4maize), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.onion1), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.onionfinal), 2000);
     
     animationSoil.setOneShot(true);
     
    
     
     
     animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.setOneShot(true);
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
     animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    
    
     animation.setOneShot(true);
     
     //the view itself
     ImageView imageView = (ImageView) findViewById(R.id.imgrain);
     ImageView imageViewSun = (ImageView)findViewById(R.id.imgSun);
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(600, 150);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 500, 10, 10);
     
    //rain
     RelativeLayout.LayoutParams params = new RelativeLayout.LayoutParams(110, 110);
     params.alignWithParent = true;
   //(left, top, right, bottom)
     // params.setMargins(0, 400, 10, 400);down just on top of soil
     params.setMargins(150, 300, 0, 400);
     
     //sun
     RelativeLayout.LayoutParams params1 = new RelativeLayout.LayoutParams(100, 100);
     params1.alignWithParent = true;
     //params1.addRule(RelativeLayout.ALIGN_PARENT_LEFT);
   //(left, top, right, bottom)
     params1.setMargins(20, 250, 0, 400);
     
     

   //final
     imageView.setLayoutParams(params);
     imageView.setImageDrawable(animation);
     imageView.post(new Starter());
     
     imageViewSun.setLayoutParams(params1); 
     imageViewSun.setImageDrawable(animation1);
     imageViewSun.post(new Starter());
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }
 
 private void startAnimationCabbage(){
	  
		
     animation = new AnimationDrawable();
     animation1 = new AnimationDrawable();
     animationSoil = new AnimationDrawable();
     animationWater = new AnimationDrawable();
     
     animationSoil.addFrame(getResources().getDrawable(R.drawable.soil), 1600); 
    
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato8), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato9), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato10), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.tomato11), 2000);
     animationSoil.addFrame(getResources().getDrawable(R.drawable.cabbage0), 2000);
    
    
     animationSoil.setOneShot(true);
     
    
     
     
     animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.addFrame(getResources().getDrawable(R.drawable.blank), 300);
    animation1.addFrame(getResources().getDrawable(R.drawable.sun), 600);
    animation1.setOneShot(true);
   
     //trick put some blank images to appear before the one image u want. hahaaaaaa
     
     animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
    animation.addFrame(getResources().getDrawable(R.drawable.rain), 800);
    animation.addFrame(getResources().getDrawable(R.drawable.blank), 700);
   
    

     animation.setOneShot(true);
     
     //the view itself
     ImageView imageView = (ImageView) findViewById(R.id.imgrain);
     ImageView imageViewSun = (ImageView)findViewById(R.id.imgSun);
     ImageView imageViewSoil = (ImageView)findViewById(R.id.imgbottom);
     
     //coordinates for the view and frame size
     																		//width  x height 
     RelativeLayout.LayoutParams paramsSoil = new RelativeLayout.LayoutParams(600, 150);
     paramsSoil.alignWithParent = true;
    // paramsSoil.addRule(RelativeLayout.ALIGN_BOTTOM);
    //(left, top, right, bottom) this is how i will arrange the images.....hahaaaaaaaaaaaaaaa nizzzy coder
     paramsSoil.setMargins(10, 500, 10, 10);
     
    //rain
     RelativeLayout.LayoutParams params = new RelativeLayout.LayoutParams(110, 110);
     params.alignWithParent = true;
   //(left, top, right, bottom)
     // params.setMargins(0, 400, 10, 400);down just on top of soil
     params.setMargins(150, 300, 0, 400);
     
     //sun
     RelativeLayout.LayoutParams params1 = new RelativeLayout.LayoutParams(100, 100);
     params1.alignWithParent = true;
     //params1.addRule(RelativeLayout.ALIGN_PARENT_LEFT);
   //(left, top, right, bottom)
     params1.setMargins(20, 250, 0, 400);
     
     

   //final
     imageView.setLayoutParams(params);
     imageView.setImageDrawable(animation);
     imageView.post(new Starter());
     
     imageViewSun.setLayoutParams(params1); 
     imageViewSun.setImageDrawable(animation1);
     imageViewSun.post(new Starter());
     
     imageViewSoil.setLayoutParams(paramsSoil);
     imageViewSoil.setImageDrawable(animationSoil);
     imageViewSoil.post(new Starter());
     
    
   
 }
 

}


