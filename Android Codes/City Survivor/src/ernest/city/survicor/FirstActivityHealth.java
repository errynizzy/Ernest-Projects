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
	 
	public class FirstActivityHealth extends Activity  implements View.OnLongClickListener, View.OnClickListener,
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
			int resourceId = R.drawable.health1;

		    int m = mImageCount % 305;
		    if (m == 1) resourceId = R.drawable.health2;
		    else if (m == 2) resourceId = R.drawable.health3;
		    else if (m == 3) resourceId = R.drawable.health4;
		    else if (m == 4) resourceId = R.drawable.health5;
		    else if (m == 5) resourceId = R.drawable.health6;
		    else if (m == 6) resourceId = R.drawable.health7;
		    else if (m == 7) resourceId = R.drawable.health8;
		    else if (m == 8) resourceId = R.drawable.health9;
		    else if (m == 9) resourceId = R.drawable.health10;
		    else if (m == 10) resourceId = R.drawable.health11;
		    else if (m == 11) resourceId = R.drawable.health12;
		    else if (m == 12) resourceId = R.drawable.health13;
		    else if (m == 13) resourceId = R.drawable.health14;
		    else if (m == 14) resourceId = R.drawable.health15;
		    else if (m == 15) resourceId = R.drawable.health16;
		    else if (m == 16) resourceId = R.drawable.health17;
		    else if (m == 17) resourceId = R.drawable.health18;
		    else if (m == 18) resourceId = R.drawable.health19;
		    else if (m == 19) resourceId = R.drawable.health20;
		    else if (m == 20) resourceId = R.drawable.health21;
		    else if (m == 21) resourceId = R.drawable.health22;
		    else if (m == 22) resourceId = R.drawable.health23;
		    else if (m == 23) resourceId = R.drawable.health24;
		    else if (m == 24) resourceId = R.drawable.health25;
		    else if (m == 25) resourceId = R.drawable.health26;
		    else if (m == 26) resourceId = R.drawable.health27;
		    else if (m == 27) resourceId = R.drawable.health28;
		    else if (m == 28) resourceId = R.drawable.health29;
		    else if (m == 29) resourceId = R.drawable.health30;
		    else if (m == 30) resourceId = R.drawable.health31;
		    else if (m == 31) resourceId = R.drawable.health32;
		    else if (m == 32) resourceId = R.drawable.health33;
		    else if (m == 33) resourceId = R.drawable.health34;
		    else if (m == 34) resourceId = R.drawable.health35;
		    else if (m == 35) resourceId = R.drawable.health36;
		    else if (m == 36) resourceId = R.drawable.health37;
		    else if (m == 37) resourceId = R.drawable.health38;
		    else if (m == 38) resourceId = R.drawable.health39;
		    else if (m == 39) resourceId = R.drawable.health40;
		    else if (m == 40) resourceId = R.drawable.health41;
		    else if (m == 41) resourceId = R.drawable.health42;
		    else if (m == 42) resourceId = R.drawable.health43;
		    else if (m == 43) resourceId = R.drawable.health44;
		    else if (m == 44) resourceId = R.drawable.health45;
		    else if (m == 45) resourceId = R.drawable.health46;
		    else if (m == 46) resourceId = R.drawable.health47;
		    else if (m == 47) resourceId = R.drawable.health48;
		    else if (m == 48) resourceId = R.drawable.health49;
		    else if (m == 49) resourceId = R.drawable.health50;
		    else if (m == 50) resourceId = R.drawable.health51;
		    else if (m == 51) resourceId = R.drawable.health52;
		    else if (m == 52) resourceId = R.drawable.health53;
		    else if (m == 53) resourceId = R.drawable.health54;
		    else if (m == 54) resourceId = R.drawable.health55;
		    else if (m == 55) resourceId = R.drawable.health56;
		    else if (m == 56) resourceId = R.drawable.health57;
		    else if (m == 57) resourceId = R.drawable.health58;
		    else if (m == 58) resourceId = R.drawable.health59;
		    else if (m == 59) resourceId = R.drawable.health60;
		    else if (m == 60) resourceId = R.drawable.health61;
		    else if (m == 61) resourceId = R.drawable.health62;
		    else if (m == 62) resourceId = R.drawable.health63;
		    else if (m == 63) resourceId = R.drawable.health64;
		    else if (m == 64) resourceId = R.drawable.health65;
		    else if (m == 65) resourceId = R.drawable.health66;
		    else if (m == 66) resourceId = R.drawable.health67;
		    else if (m == 67) resourceId = R.drawable.health68;
		    else if (m == 68) resourceId = R.drawable.health69;
		    else if (m == 69) resourceId = R.drawable.health70;
		    else if (m == 70) resourceId = R.drawable.health71;
		    else if (m == 71) resourceId = R.drawable.health72;
		    else if (m == 72) resourceId = R.drawable.health73;
		    else if (m == 73) resourceId = R.drawable.health74;
		    else if (m == 74) resourceId = R.drawable.health75;
		    else if (m == 75) resourceId = R.drawable.health76;
		    else if (m == 76) resourceId = R.drawable.health77;
		    else if (m == 77) resourceId = R.drawable.health78;
		    else if (m == 78) resourceId = R.drawable.health79;
		    else if (m == 79) resourceId = R.drawable.health80;
		    else if (m == 80) resourceId = R.drawable.health81;
		    else if (m == 81) resourceId = R.drawable.health82;
		    else if (m == 82) resourceId = R.drawable.health83;
		    else if (m == 83) resourceId = R.drawable.health84;
		    else if (m == 84) resourceId = R.drawable.health85;
		    else if (m == 85) resourceId = R.drawable.health86;
		    else if (m == 86) resourceId = R.drawable.health87;
		    else if (m == 87) resourceId = R.drawable.health88;
		    else if (m == 88) resourceId = R.drawable.health89;
		    else if (m == 89) resourceId = R.drawable.health90;
		    else if (m == 90) resourceId = R.drawable.health91;
		    else if (m == 91) resourceId = R.drawable.health92;
		    else if (m == 92) resourceId = R.drawable.health93;
		    else if (m == 93) resourceId = R.drawable.health94;
		    else if (m == 94) resourceId = R.drawable.health95;
		    else if (m == 95) resourceId = R.drawable.health96;
		    else if (m == 96) resourceId = R.drawable.health97;
		    else if (m == 97) resourceId = R.drawable.health98;
		    else if (m == 98) resourceId = R.drawable.health99;
		    else if (m == 99) resourceId = R.drawable.health100;
		    else if (m == 100) resourceId = R.drawable.health101; //kitu 100
		    else if (m == 101) resourceId = R.drawable.health102;
		    else if (m == 102) resourceId = R.drawable.health103;
		    else if (m == 103) resourceId = R.drawable.health104;
		    else if (m == 104) resourceId = R.drawable.health105;
		    else if (m == 105) resourceId = R.drawable.health106;
		    else if (m == 106) resourceId = R.drawable.health107;
		    else if (m == 107) resourceId = R.drawable.health108;
		    else if (m == 108) resourceId = R.drawable.health109;
		    else if (m == 109) resourceId = R.drawable.health110;
		    else if (m == 110) resourceId = R.drawable.health111;
		    else if (m == 111) resourceId = R.drawable.health112;
		    else if (m == 112) resourceId = R.drawable.health113;
		    else if (m == 113) resourceId = R.drawable.health114;
		    else if (m == 114) resourceId = R.drawable.health115;
		    else if (m == 115) resourceId = R.drawable.health116;
		    else if (m == 116) resourceId = R.drawable.health117;
		    else if (m == 117) resourceId = R.drawable.health118;
		    else if (m == 118) resourceId = R.drawable.health119;
		    else if (m == 119) resourceId = R.drawable.health120;
		    else if (m == 120) resourceId = R.drawable.health121;
		    else if (m == 121) resourceId = R.drawable.health122;
		    else if (m == 122) resourceId = R.drawable.health123;
		    else if (m == 123) resourceId = R.drawable.health124;
		    else if (m == 124) resourceId = R.drawable.health125;
		    else if (m == 125) resourceId = R.drawable.health126;
		    else if (m == 126) resourceId = R.drawable.health127;
		    else if (m == 127) resourceId = R.drawable.health128;
		    else if (m == 128) resourceId = R.drawable.health129;
		    else if (m == 129) resourceId = R.drawable.health130;
		    else if (m == 130) resourceId = R.drawable.health131;
		    else if (m == 131) resourceId = R.drawable.health132;
		    else if (m == 132) resourceId = R.drawable.health133;
		    else if (m == 133) resourceId = R.drawable.health134;
		    else if (m == 134) resourceId = R.drawable.health135;
		    else if (m == 135) resourceId = R.drawable.health136;
		    else if (m == 136) resourceId = R.drawable.health137;
		    else if (m == 137) resourceId = R.drawable.health138;
		    else if (m == 138) resourceId = R.drawable.health139;
		    else if (m == 139) resourceId = R.drawable.health140;
		    else if (m == 140) resourceId = R.drawable.health141;
		    else if (m == 141) resourceId = R.drawable.health142;
		    else if (m == 142) resourceId = R.drawable.health143;
		    else if (m == 143) resourceId = R.drawable.health144;
		    else if (m == 144) resourceId = R.drawable.health145;
		    else if (m == 145) resourceId = R.drawable.health146;
		    else if (m == 146) resourceId = R.drawable.health147;
		    else if (m == 147) resourceId = R.drawable.health148;
		    else if (m == 148) resourceId = R.drawable.health149;
		    else if (m == 149) resourceId = R.drawable.health150;
		    else if (m == 150) resourceId = R.drawable.health151;
		    else if (m == 151) resourceId = R.drawable.health152;
		    else if (m == 152) resourceId = R.drawable.health153;
		    else if (m == 153) resourceId = R.drawable.health154;
		    else if (m == 154) resourceId = R.drawable.health155;
		    else if (m == 155) resourceId = R.drawable.health156;
		    else if (m == 156) resourceId = R.drawable.health157;
		    else if (m == 157) resourceId = R.drawable.health158;
		    else if (m == 158) resourceId = R.drawable.health159;
		    else if (m == 159) resourceId = R.drawable.health160;
		    else if (m == 160) resourceId = R.drawable.health161;
		    else if (m == 161) resourceId = R.drawable.health162;




		    
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
	        setContentView(R.layout.main_game_health);
	        
	        textView = (TextView) findViewById(R.id.textView);
	        
	        //strings containing different messages 
	        hellos = new String[22]; //n + 1
	        hellos[0] = "Drink plenty of water or other calorie-free beverages.";
	        hellos[1] = "Think about what you can add to your diet, not what you should take away.";    
	        hellos[2] = "Consider whether you're really hungry before you eat.";
	        hellos[3] = "Be choosy about nighttime snacks.";
	        hellos[4] = "Enjoy your favorite foods.";
	        hellos[5] = "Enjoy your treats away from home.";
	        hellos[6] = "Eat several mini-meals during the day.";
	        hellos[7] = "Eat protein at every meal.";
	        hellos[8] = "Add spices or chiles to your food for a flavor boost that can help you feel satisfied.";
	        hellos[9] = "Protein is more satisfying than carbohydrates or fats, and thus may be the new secret weapon in weight control.";
	        hellos[10] = "Stock your kitchen with healthy convenience foods.";
	        hellos[11] = "Eat foods in season.";
	        hellos[12] = "Use non-food alternatives to cope with stress.";
	        hellos[13] = "Be physically active.";
	        hellos[14] = "Sunlight is an easy way to raise vitamin D levels.";
	        hellos[15] = "Add color to salads with baby carrots, grape tomatoes, spinach leaves or mandarin oranges.";
	        hellos[16] = "The healthiest way to lose weight is neither crash diets nor bursts of exercise. The body likes slow changes in terms of food and exercise.";
	        hellos[17] = "Water is the basic medium in which life processes take place – from intricate biochemical reactions inside cells to the removal of waste products from the body.";
	        hellos[18] = "Caffeine is mildly addictive, making it one of the world's most widely used drugs. It can cause a number of health problems.";
	        hellos[19] = "Limit your bread intake, eliminate it or replace thick bread with healthy alternatives.";
	        hellos[20] = "Use smaller plates and cups";
	        hellos[21] = "Eliminate soda. Soda is another example of empty calories";


	       

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
    						TimeUpHealth.class);
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