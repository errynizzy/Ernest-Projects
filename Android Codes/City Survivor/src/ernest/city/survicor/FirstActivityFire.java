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
	 
	public class FirstActivityFire extends Activity  implements View.OnLongClickListener, View.OnClickListener,
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
			int resourceId = R.drawable.fire1;

		    int m = mImageCount % 305;
		    if (m == 1) resourceId = R.drawable.fire2;
		    else if (m == 2) resourceId = R.drawable.fire3;
		    else if (m == 3) resourceId = R.drawable.fire4;
		    else if (m == 4) resourceId = R.drawable.fire5;
		    else if (m == 5) resourceId = R.drawable.fire6;
		    else if (m == 6) resourceId = R.drawable.fire7;
		    else if (m == 7) resourceId = R.drawable.fire8;
		    else if (m == 8) resourceId = R.drawable.fire9;
		    else if (m == 9) resourceId = R.drawable.fire10;
		    else if (m == 10) resourceId = R.drawable.fire11;
		    else if (m == 11) resourceId = R.drawable.fire12;
		    else if (m == 12) resourceId = R.drawable.fire13;
		    else if (m == 13) resourceId = R.drawable.fire14;
		    else if (m == 14) resourceId = R.drawable.fire15;
		    else if (m == 15) resourceId = R.drawable.fire16;
		    else if (m == 16) resourceId = R.drawable.fire17;
		    else if (m == 17) resourceId = R.drawable.fire18;
		    else if (m == 18) resourceId = R.drawable.fire19;
		    else if (m == 19) resourceId = R.drawable.fire20;
		    else if (m == 20) resourceId = R.drawable.fire21;
		    else if (m == 21) resourceId = R.drawable.fire22;
		    else if (m == 22) resourceId = R.drawable.fire23;
		    else if (m == 23) resourceId = R.drawable.fire24;
		    else if (m == 24) resourceId = R.drawable.fire25;
		    else if (m == 25) resourceId = R.drawable.fire26;
		    else if (m == 26) resourceId = R.drawable.fire27;
		    else if (m == 27) resourceId = R.drawable.fire28;
		    else if (m == 28) resourceId = R.drawable.fire29;
		    else if (m == 29) resourceId = R.drawable.fire30;
		    else if (m == 30) resourceId = R.drawable.fire31;
		    else if (m == 31) resourceId = R.drawable.fire32;
		    else if (m == 32) resourceId = R.drawable.fire33;
		    else if (m == 33) resourceId = R.drawable.fire34;
		    else if (m == 34) resourceId = R.drawable.fire35;
		    else if (m == 35) resourceId = R.drawable.fire36;
		    else if (m == 36) resourceId = R.drawable.fire37;
		    else if (m == 37) resourceId = R.drawable.fire38;
		    else if (m == 38) resourceId = R.drawable.fire39;
		    else if (m == 39) resourceId = R.drawable.fire40;
		    else if (m == 40) resourceId = R.drawable.fire41;
		    else if (m == 41) resourceId = R.drawable.fire42;
		    else if (m == 42) resourceId = R.drawable.fire43;
		    else if (m == 43) resourceId = R.drawable.fire44;
		    else if (m == 44) resourceId = R.drawable.fire45;
		    else if (m == 45) resourceId = R.drawable.fire46;
		    else if (m == 46) resourceId = R.drawable.fire47;
		    else if (m == 47) resourceId = R.drawable.fire48;
		    else if (m == 48) resourceId = R.drawable.fire49;
		    else if (m == 49) resourceId = R.drawable.fire50;
		    else if (m == 50) resourceId = R.drawable.fire51;
		    else if (m == 51) resourceId = R.drawable.fire52;
		    else if (m == 52) resourceId = R.drawable.fire53;
		    else if (m == 53) resourceId = R.drawable.fire54;
		    else if (m == 54) resourceId = R.drawable.fire55;
		    else if (m == 55) resourceId = R.drawable.fire56;
		    else if (m == 56) resourceId = R.drawable.fire57;
		    else if (m == 57) resourceId = R.drawable.fire58;
		    else if (m == 58) resourceId = R.drawable.fire59;
		    else if (m == 59) resourceId = R.drawable.fire60;
		    else if (m == 60) resourceId = R.drawable.fire61;
		    else if (m == 61) resourceId = R.drawable.fire62;
		    else if (m == 62) resourceId = R.drawable.fire63;
		    else if (m == 63) resourceId = R.drawable.fire64;
		    else if (m == 64) resourceId = R.drawable.fire65;
		    else if (m == 65) resourceId = R.drawable.fire66;
		    else if (m == 66) resourceId = R.drawable.fire67;
		    else if (m == 67) resourceId = R.drawable.fire68;
		    else if (m == 68) resourceId = R.drawable.fire69;
		    else if (m == 69) resourceId = R.drawable.fire70;
		    else if (m == 70) resourceId = R.drawable.fire71;
		    else if (m == 71) resourceId = R.drawable.fire72;
		    else if (m == 72) resourceId = R.drawable.fire73;
		    else if (m == 73) resourceId = R.drawable.fire74;
		    else if (m == 74) resourceId = R.drawable.fire75;
		    else if (m == 75) resourceId = R.drawable.fire76;
		    else if (m == 76) resourceId = R.drawable.fire77;
		    else if (m == 77) resourceId = R.drawable.fire78;
		    else if (m == 78) resourceId = R.drawable.fire79;
		    else if (m == 79) resourceId = R.drawable.fire80;
		    else if (m == 80) resourceId = R.drawable.fire81;
		    else if (m == 81) resourceId = R.drawable.fire82;
		    else if (m == 82) resourceId = R.drawable.fire83;
		    else if (m == 83) resourceId = R.drawable.fire84;
		    else if (m == 84) resourceId = R.drawable.fire85;
		    else if (m == 85) resourceId = R.drawable.fire86;
		    else if (m == 86) resourceId = R.drawable.fire87;
		    else if (m == 87) resourceId = R.drawable.fire88;
		    else if (m == 88) resourceId = R.drawable.fire89;
		    else if (m == 89) resourceId = R.drawable.fire90;
		    else if (m == 90) resourceId = R.drawable.fire91;
		    else if (m == 91) resourceId = R.drawable.fire92;
		    else if (m == 92) resourceId = R.drawable.fire93;
		    else if (m == 93) resourceId = R.drawable.fire94;
		    else if (m == 94) resourceId = R.drawable.fire95;
		    else if (m == 95) resourceId = R.drawable.fire96;
		    else if (m == 96) resourceId = R.drawable.fire97;
		    else if (m == 97) resourceId = R.drawable.fire98;
		    else if (m == 98) resourceId = R.drawable.fire99;
		    else if (m == 99) resourceId = R.drawable.fire100;
		    else if (m == 100) resourceId = R.drawable.fire101; //kitu 100
		    else if (m == 101) resourceId = R.drawable.fire102;
		    else if (m == 102) resourceId = R.drawable.fire103;
		    else if (m == 103) resourceId = R.drawable.fire104;
		    else if (m == 104) resourceId = R.drawable.fire105;
		    else if (m == 105) resourceId = R.drawable.fire106;
		    else if (m == 106) resourceId = R.drawable.fire107;
		    else if (m == 107) resourceId = R.drawable.fire108;
		    else if (m == 108) resourceId = R.drawable.fire109;
		    else if (m == 109) resourceId = R.drawable.fire110;
		    else if (m == 110) resourceId = R.drawable.fire111;
		    else if (m == 111) resourceId = R.drawable.fire112;
		    else if (m == 112) resourceId = R.drawable.fire113;
		    else if (m == 113) resourceId = R.drawable.fire114;
		    else if (m == 114) resourceId = R.drawable.fire115;
		    else if (m == 115) resourceId = R.drawable.fire116;
		    else if (m == 116) resourceId = R.drawable.fire117;
		    else if (m == 117) resourceId = R.drawable.fire118;
		    else if (m == 118) resourceId = R.drawable.fire119;
		    else if (m == 119) resourceId = R.drawable.fire120;
		    else if (m == 120) resourceId = R.drawable.fire121;
		    else if (m == 121) resourceId = R.drawable.fire122;
		    else if (m == 122) resourceId = R.drawable.fire123;
		    else if (m == 123) resourceId = R.drawable.fire124;
		    else if (m == 124) resourceId = R.drawable.fire125;
		    else if (m == 125) resourceId = R.drawable.fire126;
		    else if (m == 126) resourceId = R.drawable.fire127;
		    else if (m == 127) resourceId = R.drawable.fire128;
		    else if (m == 128) resourceId = R.drawable.fire129;
		    else if (m == 129) resourceId = R.drawable.fire130;
		    else if (m == 130) resourceId = R.drawable.fire131;
		    else if (m == 131) resourceId = R.drawable.fire132;
		    else if (m == 132) resourceId = R.drawable.fire133;
		    else if (m == 133) resourceId = R.drawable.fire134;
		    else if (m == 134) resourceId = R.drawable.fire135;
		    else if (m == 135) resourceId = R.drawable.fire136;
		    else if (m == 136) resourceId = R.drawable.fire137;
		    else if (m == 137) resourceId = R.drawable.fire138;
		    else if (m == 138) resourceId = R.drawable.fire139;
		    else if (m == 139) resourceId = R.drawable.fire140;
		    else if (m == 140) resourceId = R.drawable.fire141;
		    else if (m == 141) resourceId = R.drawable.fire142;
		    else if (m == 142) resourceId = R.drawable.fire143;
		    else if (m == 143) resourceId = R.drawable.fire144;
		    else if (m == 144) resourceId = R.drawable.fire145;
		    else if (m == 145) resourceId = R.drawable.fire146;
		    else if (m == 146) resourceId = R.drawable.fire147;
		    else if (m == 147) resourceId = R.drawable.fire148;
		    else if (m == 148) resourceId = R.drawable.fire149;
		    else if (m == 149) resourceId = R.drawable.fire150;
		    else if (m == 150) resourceId = R.drawable.fire151;
		    else if (m == 151) resourceId = R.drawable.fire152;
		    else if (m == 152) resourceId = R.drawable.fire153;
		    else if (m == 153) resourceId = R.drawable.fire154;
		    else if (m == 154) resourceId = R.drawable.fire155;
		    else if (m == 155) resourceId = R.drawable.fire156;
		    else if (m == 156) resourceId = R.drawable.fire157;
		    else if (m == 157) resourceId = R.drawable.fire158;
		    else if (m == 158) resourceId = R.drawable.fire159;
		    else if (m == 159) resourceId = R.drawable.fire160;
		    else if (m == 160) resourceId = R.drawable.fire161;
		    else if (m == 161) resourceId = R.drawable.fire162;
		    else if (m == 162) resourceId = R.drawable.fire163;
		    else if (m == 163) resourceId = R.drawable.fire164;
		    else if (m == 164) resourceId = R.drawable.fire165;
		    else if (m == 165) resourceId = R.drawable.fire166;
		    else if (m == 166) resourceId = R.drawable.fire167;
		    else if (m == 167) resourceId = R.drawable.fire168;
		    else if (m == 168) resourceId = R.drawable.fire169;
		    else if (m == 169) resourceId = R.drawable.fire170;
		    else if (m == 170) resourceId = R.drawable.fire171;
		    else if (m == 171) resourceId = R.drawable.fire172;
		    else if (m == 172) resourceId = R.drawable.fire173;
		    else if (m == 173) resourceId = R.drawable.fire174;
		    else if (m == 174) resourceId = R.drawable.fire175;
		    else if (m == 175) resourceId = R.drawable.fire176;
		    else if (m == 176) resourceId = R.drawable.fire177;
		    else if (m == 177) resourceId = R.drawable.fire178;
		    else if (m == 178) resourceId = R.drawable.fire179;
		    else if (m == 179) resourceId = R.drawable.fire180;
		    else if (m == 180) resourceId = R.drawable.fire181;
		    else if (m == 181) resourceId = R.drawable.fire182;
		    else if (m == 182) resourceId = R.drawable.fire183;
		    else if (m == 183) resourceId = R.drawable.fire184;
		    else if (m == 184) resourceId = R.drawable.fire185;
		    else if (m == 185) resourceId = R.drawable.fire186;
		    else if (m == 186) resourceId = R.drawable.fire187;
		    else if (m == 187) resourceId = R.drawable.fire188;
		    else if (m == 188) resourceId = R.drawable.fire189;
		    else if (m == 189) resourceId = R.drawable.fire190;
		    else if (m == 190) resourceId = R.drawable.fire191;
		    else if (m == 191) resourceId = R.drawable.fire192;
		    else if (m == 192) resourceId = R.drawable.fire193;
		    else if (m == 193) resourceId = R.drawable.fire194;
		    else if (m == 194) resourceId = R.drawable.fire195;
		    else if (m == 195) resourceId = R.drawable.fire196;
		    else if (m == 196) resourceId = R.drawable.fire197;
		    else if (m == 197) resourceId = R.drawable.fire198;
		    else if (m == 198) resourceId = R.drawable.fire199;
		    else if (m == 199) resourceId = R.drawable.fire200;
		    else if (m == 200) resourceId = R.drawable.fire201; // kitu 200
		    else if (m == 201) resourceId = R.drawable.fire202;
		    else if (m == 202) resourceId = R.drawable.fire203;
		    else if (m == 203) resourceId = R.drawable.fire204;
		    else if (m == 204) resourceId = R.drawable.fire205;
		    else if (m == 205) resourceId = R.drawable.fire206;
		    else if (m == 206) resourceId = R.drawable.fire207;
		    else if (m == 207) resourceId = R.drawable.fire208;
		    else if (m == 208) resourceId = R.drawable.fire209;
		    else if (m == 209) resourceId = R.drawable.fire210;
		    else if (m == 210) resourceId = R.drawable.fire211;




		    
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
	        setContentView(R.layout.main_game_fire);
	        
	        textView = (TextView) findViewById(R.id.textView);
	        
	        //strings containing different messages 
	        hellos = new String[22]; //n + 1
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
    						TimeUpFire.class);
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