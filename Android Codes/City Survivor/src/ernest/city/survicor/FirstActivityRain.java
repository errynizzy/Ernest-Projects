package ernest.city.survicor;

import java.util.Random;

import ernest.city.survicor.DeleteZoneSun;
import ernest.city.survicor.DragControllerSun;
import ernest.city.survicor.DragLayerSun;
import ernest.city.survicor.DragSourceSun;
import ernest.city.survicor.ImageCellSun;
import ernest.city.survicor.ImageCellAdapter;
import ernest.city.survicor.R;

import android.app.Activity;
import android.content.Intent;
	import android.os.Bundle;
	import android.os.CountDownTimer;
import android.util.Log;
import android.view.Gravity;
import android.view.Menu;
import android.view.MenuItem;
import android.view.MotionEvent;
	import android.view.View;
import android.view.ViewGroup.LayoutParams;
import android.widget.AdapterView;
import android.widget.FrameLayout;
import android.widget.GridView;
import android.widget.TextView;
import android.widget.Toast;
	 
	public class FirstActivityRain extends Activity  implements View.OnLongClickListener, View.OnClickListener,
    View.OnTouchListener
	{
		
		@Override
	  	public void onBackPressed() {
		 Intent i = new Intent(getApplicationContext(),
					MenuGame.class);
			startActivity(i);
			finish();
		}
		
		
		/**
		 */
		// Constants

		private static final int HIDE_TRASHCAN_MENU_ID = Menu.FIRST;
		private static final int SHOW_TRASHCAN_MENU_ID = Menu.FIRST + 1;
		private static final int ADD_OBJECT_MENU_ID = Menu.FIRST + 2;
		private static final int CHANGE_TOUCH_MODE_MENU_ID = Menu.FIRST + 3;

		/**
		 */
		// Variables

		private DragControllerSun mDragController;   // Object that handles a drag-drop sequence. It intersacts with DragSource and DropTarget objects.
		private DragLayerSun mDragLayer;             // The ViewGroup within which an object can be dragged.
		private DeleteZoneSun mDeleteZone;           // A drop target that is used to remove objects from the screen.
		private int mImageCount = 0;              // The number of images that have been added to screen.
		private ImageCellSun mLastNewCell = null;    // The last ImageCell added to the screen when Add Image is clicked.
		private boolean mLongClickStartsDrag = false;   // If true, it takes a long click to start the drag operation.
		                                                // Otherwise, any touch event starts a drag.

		public static final boolean Debugging = false;   // Use this to see extra toast messages.

		/**
		 */
		// Methods

		/**
		 * Add a new image so the user can move it around. It shows up in the image_source_frame
		 * part of the screen.
		 * 
		 * @param resourceId int - the resource id of the image to be added
		 */    

		public void addNewImageToScreen (int resourceId)
		{
		    if (mLastNewCell != null) mLastNewCell.setVisibility (View.GONE);

		    FrameLayout imageHolder = (FrameLayout) findViewById (R.id.image_source_frame);
		    if (imageHolder != null) {
		       FrameLayout.LayoutParams lp = new FrameLayout.LayoutParams (LayoutParams.FILL_PARENT, 
		                                                                   LayoutParams.FILL_PARENT, 
		                                                                   Gravity.CENTER);
		       ImageCellSun newView = new ImageCellSun (this);
		       newView.setImageResource (resourceId);
		       imageHolder.addView (newView, lp);
		       newView.mEmpty = false;
		       newView.mCellNumber = -1;
		       mLastNewCell = newView;
		       mImageCount++;

		       // Have this activity listen to touch and click events for the view.
		       newView.setOnClickListener(this);
		       newView.setOnLongClickListener(this);
		       newView.setOnTouchListener (this);

		    }
		}

		/**
		 * Add one of the images to the screen so the user has a new image to move around. 
		 * See addImageToScreen.
		 *
		 */    

		public void addNewImageToScreen ()
		{
		    int resourceId = R.drawable.rain25;

		    int m = mImageCount % 305;
		    if (m == 1) resourceId = R.drawable.sun4;
		    else if (m == 2) resourceId = R.drawable.sun6;
		    else if (m == 3) resourceId = R.drawable.sun8;
		    else if (m == 4) resourceId = R.drawable.sun9;
		    else if (m == 5) resourceId = R.drawable.sun12;
		    else if (m == 6) resourceId = R.drawable.sun14;
		    else if (m == 7) resourceId = R.drawable.sun17;
		    else if (m == 8) resourceId = R.drawable.sun18;
		    else if (m == 9) resourceId = R.drawable.sun20;
		    else if (m == 10) resourceId = R.drawable.sun21;
		    else if (m == 11) resourceId = R.drawable.sun24;
		    else if (m == 12) resourceId = R.drawable.sun25;
		    else if (m == 13) resourceId = R.drawable.sun38;
		    else if (m == 14) resourceId = R.drawable.sun43;
		    else if (m == 15) resourceId = R.drawable.sun44;
		    else if (m == 16) resourceId = R.drawable.sun46;
		    else if (m == 17) resourceId = R.drawable.sun54;
		    else if (m == 18) resourceId = R.drawable.sun58;
		    else if (m == 19) resourceId = R.drawable.sun65;
		    else if (m == 20) resourceId = R.drawable.sun75;
		    else if (m == 21) resourceId = R.drawable.sun91;
		    else if (m == 22) resourceId = R.drawable.sun92;
		    else if (m == 23) resourceId = R.drawable.rain1;
		    else if (m == 24) resourceId = R.drawable.rain2;
		    else if (m == 25) resourceId = R.drawable.rain3;
		    else if (m == 26) resourceId = R.drawable.rain4;
		    else if (m == 27) resourceId = R.drawable.rain5;
		    else if (m == 28) resourceId = R.drawable.rain6;
		    else if (m == 29) resourceId = R.drawable.rain7;
		    else if (m == 30) resourceId = R.drawable.rain8;
		    else if (m == 31) resourceId = R.drawable.rain9;
		    else if (m == 32) resourceId = R.drawable.rain10;
		    else if (m == 33) resourceId = R.drawable.rain11;
		    else if (m == 34) resourceId = R.drawable.rain12;
		    else if (m == 35) resourceId = R.drawable.rain13;
		    else if (m == 36) resourceId = R.drawable.rain14;
		    else if (m == 37) resourceId = R.drawable.rain15;
		    else if (m == 38) resourceId = R.drawable.rain16;
		    else if (m == 39) resourceId = R.drawable.rain17;
		    else if (m == 40) resourceId = R.drawable.rain18;
		    else if (m == 41) resourceId = R.drawable.rain19;
		    else if (m == 42) resourceId = R.drawable.rain20;
		    else if (m == 43) resourceId = R.drawable.rain21;
		    else if (m == 44) resourceId = R.drawable.rain22;
		    else if (m == 45) resourceId = R.drawable.rain23;
		    else if (m == 46) resourceId = R.drawable.rain24;
		    else if (m == 47) resourceId = R.drawable.rain25;
		    else if (m == 48) resourceId = R.drawable.rain26;
		    else if (m == 49) resourceId = R.drawable.rain27;
		    else if (m == 50) resourceId = R.drawable.rain28;
		    else if (m == 51) resourceId = R.drawable.rain29;
		    else if (m == 52) resourceId = R.drawable.rain30;
		    else if (m == 53) resourceId = R.drawable.rain31;
		    else if (m == 54) resourceId = R.drawable.rain32;
		    else if (m == 55) resourceId = R.drawable.rain33;
		    else if (m == 56) resourceId = R.drawable.rain34;
		    else if (m == 57) resourceId = R.drawable.rain35;
		    else if (m == 58) resourceId = R.drawable.rain36;
		    else if (m == 59) resourceId = R.drawable.rain37;
		    else if (m == 60) resourceId = R.drawable.rain38;
		    else if (m == 61) resourceId = R.drawable.rain39;
		    else if (m == 62) resourceId = R.drawable.rain40;
		    else if (m == 63) resourceId = R.drawable.rain41;
		    else if (m == 64) resourceId = R.drawable.rain42;
		    else if (m == 65) resourceId = R.drawable.rain43;
		    else if (m == 66) resourceId = R.drawable.rain44;
		    else if (m == 67) resourceId = R.drawable.rain45;
		    else if (m == 68) resourceId = R.drawable.rain46;
		    else if (m == 69) resourceId = R.drawable.rain47;
		    else if (m == 70) resourceId = R.drawable.rain48;
		    else if (m == 71) resourceId = R.drawable.rain49;
		    else if (m == 72) resourceId = R.drawable.rain50;
		    else if (m == 73) resourceId = R.drawable.rain51;
		    else if (m == 74) resourceId = R.drawable.rain52;
		    else if (m == 75) resourceId = R.drawable.rain53;
		    else if (m == 76) resourceId = R.drawable.rain54;
		    else if (m == 77) resourceId = R.drawable.rain55;
		    else if (m == 78) resourceId = R.drawable.rain56;
		    else if (m == 79) resourceId = R.drawable.rain57;
		    else if (m == 80) resourceId = R.drawable.rain58;
		    else if (m == 81) resourceId = R.drawable.rain59;
		    else if (m == 82) resourceId = R.drawable.rain60;
		    else if (m == 83) resourceId = R.drawable.rain61;
		    else if (m == 84) resourceId = R.drawable.rain62;
		    else if (m == 85) resourceId = R.drawable.rain63;
		    else if (m == 86) resourceId = R.drawable.rain64;
		    else if (m == 87) resourceId = R.drawable.rain65;
		    else if (m == 88) resourceId = R.drawable.rain66;
		    else if (m == 89) resourceId = R.drawable.rain67;
		    else if (m == 90) resourceId = R.drawable.rain68;
		    else if (m == 91) resourceId = R.drawable.rain69;
		    else if (m == 92) resourceId = R.drawable.rain70;
		    else if (m == 93) resourceId = R.drawable.rain71;
		    else if (m == 94) resourceId = R.drawable.rain72;
		    else if (m == 95) resourceId = R.drawable.rain73;
		    else if (m == 96) resourceId = R.drawable.rain74;
		    else if (m == 97) resourceId = R.drawable.rain75;
		    else if (m == 98) resourceId = R.drawable.rain76;
		    else if (m == 99) resourceId = R.drawable.rain77;
		    else if (m == 100) resourceId = R.drawable.rain78;
		    else if (m == 101) resourceId = R.drawable.rain79;
		    else if (m == 102) resourceId = R.drawable.rain80;
		    else if (m == 102) resourceId = R.drawable.rain81;
		    else if (m == 104) resourceId = R.drawable.rain82;
		    else if (m == 105) resourceId = R.drawable.rain83;
		    else if (m == 106) resourceId = R.drawable.rain84;
		    else if (m == 107) resourceId = R.drawable.rain85;
		    else if (m == 108) resourceId = R.drawable.rain86;
		    else if (m == 109) resourceId = R.drawable.rain87;
		    else if (m == 110) resourceId = R.drawable.rain88;
		    else if (m == 111) resourceId = R.drawable.rain89;
		    else if (m == 112) resourceId = R.drawable.rain90;
		    else if (m == 113) resourceId = R.drawable.rain91;
		    else if (m == 114) resourceId = R.drawable.rain92;
		    else if (m == 115) resourceId = R.drawable.rain93;
		    else if (m == 116) resourceId = R.drawable.rain94;
		    else if (m == 117) resourceId = R.drawable.rain95;
		    else if (m == 118) resourceId = R.drawable.rain96;
		    else if (m == 119) resourceId = R.drawable.rain97;
		    else if (m == 120) resourceId = R.drawable.rain98;
		    else if (m == 121) resourceId = R.drawable.rain99;
		    else if (m == 122) resourceId = R.drawable.rain100;
		    else if (m == 123) resourceId = R.drawable.rain101; //kitu 100
		    else if (m == 124) resourceId = R.drawable.rain102;
		    else if (m == 125) resourceId = R.drawable.rain103;
		    else if (m == 126) resourceId = R.drawable.rain104;
		    else if (m == 127) resourceId = R.drawable.rain105;
		    else if (m == 128) resourceId = R.drawable.rain106;
		    else if (m == 129) resourceId = R.drawable.rain107;
		    else if (m == 130) resourceId = R.drawable.rain108;
		    else if (m == 131) resourceId = R.drawable.rain109;
		    else if (m == 132) resourceId = R.drawable.rain110;
		    else if (m == 133) resourceId = R.drawable.rain111;
		    else if (m == 134) resourceId = R.drawable.rain112;
		    else if (m == 135) resourceId = R.drawable.rain113;
		    else if (m == 136) resourceId = R.drawable.rain114;
		    else if (m == 137) resourceId = R.drawable.rain115;
		    else if (m == 138) resourceId = R.drawable.rain116;
		    else if (m == 139) resourceId = R.drawable.rain117;
		    else if (m == 140) resourceId = R.drawable.rain118;
		    else if (m == 141) resourceId = R.drawable.rain119;
		    else if (m == 142) resourceId = R.drawable.rain120;
		    else if (m == 143) resourceId = R.drawable.rain121;
		    else if (m == 144) resourceId = R.drawable.rain122;
		    else if (m == 145) resourceId = R.drawable.rain123;
		    else if (m == 146) resourceId = R.drawable.rain124;
		    else if (m == 147) resourceId = R.drawable.rain125;
		    else if (m == 148) resourceId = R.drawable.rain126;
		    else if (m == 149) resourceId = R.drawable.rain127;
		    else if (m == 150) resourceId = R.drawable.rain128;
		    else if (m == 151) resourceId = R.drawable.rain129;
		    else if (m == 152) resourceId = R.drawable.rain130;
		    else if (m == 153) resourceId = R.drawable.rain131;
		    else if (m == 154) resourceId = R.drawable.rain132;
		    else if (m == 155) resourceId = R.drawable.rain133;
		    else if (m == 156) resourceId = R.drawable.rain134;
		    else if (m == 157) resourceId = R.drawable.rain135;
		    else if (m == 158) resourceId = R.drawable.rain136;
		    else if (m == 159) resourceId = R.drawable.rain137;
		    else if (m == 160) resourceId = R.drawable.rain138;
		    else if (m == 161) resourceId = R.drawable.rain139;
		    else if (m == 162) resourceId = R.drawable.rain140;
		    else if (m == 163) resourceId = R.drawable.rain141;
		    else if (m == 164) resourceId = R.drawable.rain142;
		    else if (m == 165) resourceId = R.drawable.rain143;
		    else if (m == 166) resourceId = R.drawable.rain144;
		    else if (m == 167) resourceId = R.drawable.rain145;
		    else if (m == 168) resourceId = R.drawable.rain146;
		    else if (m == 169) resourceId = R.drawable.rain147;
		    else if (m == 170) resourceId = R.drawable.rain148;
		    else if (m == 171) resourceId = R.drawable.rain149;
		    else if (m == 172) resourceId = R.drawable.rain150;
		    else if (m == 173) resourceId = R.drawable.rain151;
		    else if (m == 173) resourceId = R.drawable.rain152;
		    else if (m == 175) resourceId = R.drawable.rain153;
		    else if (m == 176) resourceId = R.drawable.rain154;
		    else if (m == 177) resourceId = R.drawable.rain155;
		    else if (m == 178) resourceId = R.drawable.rain156;
		    else if (m == 179) resourceId = R.drawable.rain157;
		    else if (m == 180) resourceId = R.drawable.rain158;
		    else if (m == 181) resourceId = R.drawable.rain159;
		    else if (m == 182) resourceId = R.drawable.rain160;
		    else if (m == 183) resourceId = R.drawable.rain161;
		    else if (m == 184) resourceId = R.drawable.rain162;
		    else if (m == 185) resourceId = R.drawable.rain163;
		    else if (m == 186) resourceId = R.drawable.rain164;
		    else if (m == 187) resourceId = R.drawable.rain165;
		    else if (m == 188) resourceId = R.drawable.rain166;
		    else if (m == 189) resourceId = R.drawable.rain167;
		    else if (m == 190) resourceId = R.drawable.rain168;
		    else if (m == 191) resourceId = R.drawable.rain169;
		    else if (m == 192) resourceId = R.drawable.rain170;
		    else if (m == 193) resourceId = R.drawable.rain171;
		    else if (m == 194) resourceId = R.drawable.rain172;
		    else if (m == 195) resourceId = R.drawable.rain173;
		    else if (m == 196) resourceId = R.drawable.rain174;
		    else if (m == 197) resourceId = R.drawable.rain175;
		    else if (m == 198) resourceId = R.drawable.rain176;
		    else if (m == 199) resourceId = R.drawable.rain177;
		    else if (m == 200) resourceId = R.drawable.rain178;
		    else if (m == 201) resourceId = R.drawable.rain179;
		    else if (m == 202) resourceId = R.drawable.rain180;
		    else if (m == 203) resourceId = R.drawable.rain181;
		    else if (m == 204) resourceId = R.drawable.rain182;
		    else if (m == 205) resourceId = R.drawable.rain183;
		    else if (m == 206) resourceId = R.drawable.rain184;
		    else if (m == 207) resourceId = R.drawable.rain185;
		    else if (m == 208) resourceId = R.drawable.rain186;
		    else if (m == 209) resourceId = R.drawable.rain187;
		    else if (m == 210) resourceId = R.drawable.rain188;
		    else if (m == 211) resourceId = R.drawable.rain189;
		    else if (m == 212) resourceId = R.drawable.rain190;
		    else if (m == 213) resourceId = R.drawable.rain191;
		    else if (m == 214) resourceId = R.drawable.rain192;
		    else if (m == 215) resourceId = R.drawable.rain193;
		    else if (m == 216) resourceId = R.drawable.rain194;
		    else if (m == 217) resourceId = R.drawable.rain195;
		    else if (m == 218) resourceId = R.drawable.rain196;
		    else if (m == 219) resourceId = R.drawable.rain197;
		    else if (m == 220) resourceId = R.drawable.rain198;
		    else if (m == 221) resourceId = R.drawable.rain199;
		    else if (m == 222) resourceId = R.drawable.rain200;
		    else if (m == 223) resourceId = R.drawable.rain201; // kitu 200
		    else if (m == 224) resourceId = R.drawable.rain202;
		    else if (m == 225) resourceId = R.drawable.rain203;
		   

		    
		    addNewImageToScreen (resourceId);
		}

		/**
		 * Handle a click on a view.
		 *
		 */    

		public void onClick(View v) 
		{
		    if (mLongClickStartsDrag) {
		       // Tell the user that it takes a long click to start dragging.
		       toast ("Press and hold to drag the word.");
		    }
		}

		/**
		 * Handle a click of the Add Image button
		 *
		 */    

		public void onClickAddImage (View v) 
		{
		    addNewImageToScreen ();
		}

		/**
		 * onCreate - called when the activity is first created.
		 * 
		 * Creates a drag controller and sets up three views so click and long click on the views are sent to this activity.
		 * The onLongClick method starts a drag sequence.
		 *
		 */
		
		
		private String[] hellos;
		String p;
	    private static final Random rgenerator = new Random();
	    TextView textView;
	 
	    TextView textViewShowTime;              // will show the time
	    CountDownTimer countDownTimer;          // built in android class CountDownTimer
	    long totalTimeCountInMilliseconds;      // total count down time in milliseconds
	    long timeBlinkInMilliseconds;           // start time of start blinking
	    boolean blink;                          // controls the blinking .. on and off
	 
	    /** Called when the activity is first created. */
	    @Override
	    public void onCreate(Bundle savedInstanceState) {
	        super.onCreate(savedInstanceState);
	        setContentView(R.layout.main_game_rain);
	        
	        textView = (TextView) findViewById(R.id.textView);
	        
	        //strings containing different messages 
	        hellos = new String[23]; //n + 1
	        hellos[0] = "Relatively cheap materials can be used for construction of containers and collecting surfaces in rainwater harvesting system.";
	        hellos[1] = "Construction methods of rainwater harvesting systems are relatively straightforward.";    
	        hellos[2] = "Rainwater harvesting systems has low maintenance costs and requirements.";
	        hellos[3] = "Collected rainwater can be consumed without treatment providing a clean collecting surface has been used.";
	        hellos[4] = "Rainwater harvesting system provides a supply of safe water close to homes, schools or clinics, encourages increased consumption, reduces the time [men] women and children spend collecting water, reduces back strain or injuries from carrying heavy water containers.";
	        hellos[5] = "Rainwater harvesting system supplies can be contaminated by bird/animal droppings on catchment surfaces and guttering structures unless they are cleaned/flushed before use.";
	        hellos[6] = "Poorly constructed water jars/containers can suffer from algal growth and invasion by insects, lizards etc..";
	        hellos[7] = "Rainwater harvesting system containers can act as a breeding ground for disease vectors if they are not properly maintained.";
	        hellos[8] = "If you are intending to drink the water you are harvesting, or use it in food preparation you will need to ensure you install a purifying or treatment system for your potable water.";
	        hellos[9] = "There are specialised tanks that are designed to be used for those who collect water for consumption, so always check you have the right type of tank and system in place .";
	        hellos[10] = " It’s also advisable to contact the local environmental health before consuming water to ensure your system is set up properly.";
	        hellos[11] = "Water storage tanks for Rainwater harvesting systems need to be kept clean and in good condition.";
	        hellos[12] = "Place the tank for Rainwater harvesting system either under the ground or above ground in a safe and secure position.";
	        hellos[13] = "It's a good idea to fence off larger tanks for Rainwater harvesting systems and also use an opaque tank placed out of direct sunlight to help prevent algae from growing inside.";
	        hellos[14] = "Clean out the tank for Rainwater harvesting system every three years and ensure it has a lockable lid to prevent animals and children from gaining access.";
	        hellos[15] = "In Rainwater harvesting system, water will be collected from your roof and transported into your container where you’ll hold it until it is needed.";
	        hellos[16] = "To help reduce the amount of debris and contaminants in Rainwater harvesting system it is a good idea to use some gutter mesh that stops leaves and debris from coming into the pipe system.";
	        hellos[17] = "In Rainwater harvesting system, rain heads can also be attached to downpipes that can also help to prevent insects from laying their eyes in the wet environment.";
	        hellos[18] = "Harvesting rain water is an excellent way of providing your home with a sustainable water supply.";
	        hellos[19] = "Rainwater harvesting system can be used in all sorts of ways and reduces the amount of water you use, and are charged for, from your supplier.";
	        hellos[20] = "Set up a safe water harvesting system so that the water is of the best possible quality before you begin using it..";
	        hellos[21] = "If you intend to drink the water, make sure all parts purchases for the distribution system indicate their use for potable water.";
	        hellos[22] = "Water should be purified or treated before being pumped to the point-of-use.";
	       

	        //text changer
	        p = hellos[rgenerator.nextInt(hellos.length)];
	        textView.setText(p);
	        
	        GridView gridView = (GridView) findViewById(R.id.image_grid_view);

            if (gridView == null) toast ("Unable to find GridView");
            else {
                 gridView.setAdapter (new ImageCellAdapter(this));
                 // gridView.setOnItemClickListener (this);
            }

            mDragController = new DragControllerSun(this);
            mDragLayer = (DragLayerSun) findViewById(R.id.drag_layer);
            mDragLayer.setDragController (mDragController);
            mDragLayer.setGridView (gridView);

            mDragController.setDragListener (mDragLayer);
            // mDragController.addDropTarget (mDragLayer);

            mDeleteZone = (DeleteZoneSun) findViewById (R.id.delete_zone_view);

            // Give the user a little guidance.
            Toast.makeText (getApplicationContext(), 
                            getResources ().getString (R.string.instructions),
                            Toast.LENGTH_LONG).show ();
	        
	        textViewShowTime = (TextView) findViewById(R.id.tvTimeCount);
	 
	        
	       
		 
		        totalTimeCountInMilliseconds = 60 * 1000;      // time count for 3 minutes = 180 seconds
		        timeBlinkInMilliseconds = 30 * 1000;            // blink starts at 1 minutes = 60 seconds
	        
	        
	   	 
            countDownTimer = new CountDownTimer(totalTimeCountInMilliseconds, 500) {
                // 500 means, onTick function will be called at every 500 milliseconds

                @Override
                public void onTick(long leftTimeInMilliseconds) {
                    long seconds = leftTimeInMilliseconds / 1000;

                    if ( leftTimeInMilliseconds < timeBlinkInMilliseconds ) {
                        textViewShowTime.setTextAppearance(getApplicationContext(), R.style.blinkText);
                        // change the style of the textview .. giving a red alert style

                        if ( blink ) {
                            textViewShowTime.setVisibility(View.VISIBLE);
                            // if blink is true, textview will be visible
                        } else {
                            textViewShowTime.setVisibility(View.INVISIBLE);
                        }

                        blink = !blink;         // toggle the value of blink
                    }

                    textViewShowTime.setText(String.format("%02d", seconds / 60) + ":" + String.format("%02d", seconds % 60));
                    // format the textview to show the easily readable format
                    
                    
                    
                    //endelea drag
                   
                    
                }

                @Override
                public void onFinish() {
                    // this function will be called when the timecount is finished
                	//link to another activity
                    textViewShowTime.setText("Time up!");
                    textViewShowTime.setVisibility(View.VISIBLE);
                    
                   	Intent i = new Intent(getApplicationContext(),
    						TimeUpRain.class);
    				startActivity(i);
    				finish();
                }

            }.start();
	        
            textViewShowTime.setTextAppearance(getApplicationContext(), R.style.normalText);
	        
	        
	    }
	 
	    /**
	     * Build a menu for the activity.
	     *
	     */    

	    public boolean onCreateOptionsMenu (Menu menu) 
	    {
	        super.onCreateOptionsMenu(menu);
	        
	        menu.add(0, HIDE_TRASHCAN_MENU_ID, 0, "Hide Trashcan").setShortcut('1', 'c');
	        menu.add(0, SHOW_TRASHCAN_MENU_ID, 0, "Show Trashcan").setShortcut('2', 'c');
	        menu.add(0, ADD_OBJECT_MENU_ID, 0, "Add Word").setShortcut('9', 'z');
	        menu.add (0, CHANGE_TOUCH_MODE_MENU_ID, 0, "Change Touch Mode");


	        return true;
	    }

	    /**
	     * Handle a click of an item in the grid of cells.
	     * 
	     */

	    public void onItemClick(AdapterView<?> parent, View v, int position, long id) 
	    {
	        ImageCellSun i = (ImageCellSun) v;
	        trace ("onItemClick in view: " + i.mCellNumber);
	    }

	    /**
	     * Handle a long click.
	     * If mLongClick only is true, this will be the only way to start a drag operation.
	     *
	     * @param v View
	     * @return boolean - true indicates that the event was handled
	     */    

	    public boolean onLongClick(View v) 
	    {
	        if (mLongClickStartsDrag) {
	           
	            //trace ("onLongClick in view: " + v + " touchMode: " + v.isInTouchMode ());

	            // Make sure the drag was started by a long press as opposed to a long click.
	            // (Note: I got this from the Workspace object in the Android Launcher code. 
	            //  I think it is here to ensure that the device is still in touch mode as we start the drag operation.)
	            if (!v.isInTouchMode()) {
	               toast ("isInTouchMode returned false. Try touching the view again.");
	               return false;
	            }
	            return startDrag (v);
	        }

	        // If we get here, return false to indicate that we have not taken care of the event.
	        return false;
	    }

	    /**
	     * Perform an action in response to a menu item being clicked.
	     *
	     */

	    public boolean onOptionsItemSelected (MenuItem item) 
	    {
	        switch (item.getItemId()) {
	            case HIDE_TRASHCAN_MENU_ID:
	                if (mDeleteZone != null) mDeleteZone.setVisibility (View.INVISIBLE);
	                return true;
	            case SHOW_TRASHCAN_MENU_ID:
	                if (mDeleteZone != null) mDeleteZone.setVisibility (View.VISIBLE);
	                return true;
	            case ADD_OBJECT_MENU_ID:
	                // Add a new object to the screen;
	                addNewImageToScreen ();
	                return true;
	            case CHANGE_TOUCH_MODE_MENU_ID:
	                mLongClickStartsDrag = !mLongClickStartsDrag;
	                String message = mLongClickStartsDrag ? "Changed touch mode. Drag now starts on long touch (click)." 
	                                                      : "Changed touch mode. Drag now starts on touch (click).";
	                Toast.makeText (getApplicationContext(), message, Toast.LENGTH_LONG).show ();
	                return true;
	        }

	        return super.onOptionsItemSelected(item);
	    }

	    /**
	     * This is the starting point for a drag operation if mLongClickStartsDrag is false.
	     * It looks for the down event that gets generated when a user touches the screen.
	     * Only that initiates the drag-drop sequence.
	     *
	     */    

	    public boolean onTouch (View v, MotionEvent ev) 
	    {
	        // If we are configured to start only on a long click, we are not going to handle any events here.
	        if (mLongClickStartsDrag) return false;

	        boolean handledHere = false;

	        final int action = ev.getAction();

	        // In the situation where a long click is not needed to initiate a drag, simply start on the down event.
	        if (action == MotionEvent.ACTION_DOWN) {
	           handledHere = startDrag (v);
	        }
	        
	        return handledHere;
	    }   

	    /**
	     * Start dragging a view.
	     *
	     */    

	    public boolean startDrag (View v)
	    {
	        DragSourceSun dragSource = (DragSourceSun) v;

	        // We are starting a drag. Let the DragController handle it.
	        mDragController.startDrag (v, dragSource, dragSource, DragControllerSun.DRAG_ACTION_MOVE);

	        return true;
	    }

	    /**
	     * Show a string on the screen via Toast.
	     * 
	     * @param msg String
	     * @return void
	     */

	    public void toast (String msg)
	    {
	        Toast.makeText (getApplicationContext(), msg, Toast.LENGTH_SHORT).show ();
	    } // end toast

	    /**
	     * Send a message to the debug log. Also display it using Toast if Debugging is true.
	     */

	    public void trace (String msg) 
	    {
	        Log.d ("DragActivity", msg);
	        if (!Debugging) return;
	        toast (msg);
	    }

	 
	   
}