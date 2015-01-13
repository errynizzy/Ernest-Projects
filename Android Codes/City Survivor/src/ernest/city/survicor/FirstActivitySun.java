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
	 



	public class FirstActivitySun extends Activity  implements View.OnLongClickListener, View.OnClickListener,
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
		    int resourceId = R.drawable.sun1;

		    int m = mImageCount % 305;
		    if (m == 1) resourceId = R.drawable.sun2;
		    else if (m == 2) resourceId = R.drawable.sun3;
		    else if (m == 3) resourceId = R.drawable.sun4;
		    else if (m == 4) resourceId = R.drawable.sun5;
		    else if (m == 5) resourceId = R.drawable.sun6;
		    else if (m == 6) resourceId = R.drawable.sun7;
		    else if (m == 7) resourceId = R.drawable.sun8;
		    else if (m == 8) resourceId = R.drawable.sun9;
		    else if (m == 9) resourceId = R.drawable.sun10;
		    else if (m == 10) resourceId = R.drawable.sun11;
		    else if (m == 11) resourceId = R.drawable.sun12;
		    else if (m == 12) resourceId = R.drawable.sun13;
		    else if (m == 13) resourceId = R.drawable.sun14;
		    else if (m == 14) resourceId = R.drawable.sun15;
		    else if (m == 15) resourceId = R.drawable.sun16;
		    else if (m == 16) resourceId = R.drawable.sun17;
		    else if (m == 17) resourceId = R.drawable.sun18;
		    else if (m == 18) resourceId = R.drawable.sun19;
		    else if (m == 19) resourceId = R.drawable.sun20;
		    else if (m == 20) resourceId = R.drawable.sun21;
		    else if (m == 21) resourceId = R.drawable.sun22;
		    else if (m == 22) resourceId = R.drawable.sun23;
		    else if (m == 23) resourceId = R.drawable.sun24;
		    else if (m == 24) resourceId = R.drawable.sun25;
		    else if (m == 25) resourceId = R.drawable.sun26;
		    else if (m == 26) resourceId = R.drawable.sun27;
		    else if (m == 27) resourceId = R.drawable.sun28;
		    else if (m == 28) resourceId = R.drawable.sun29;
		    else if (m == 29) resourceId = R.drawable.sun30;
		    else if (m == 30) resourceId = R.drawable.sun31;
		    else if (m == 31) resourceId = R.drawable.sun32;
		    else if (m == 32) resourceId = R.drawable.sun33;
		    else if (m == 33) resourceId = R.drawable.sun34;
		    else if (m == 34) resourceId = R.drawable.sun35;
		    else if (m == 35) resourceId = R.drawable.sun36;
		    else if (m == 36) resourceId = R.drawable.sun37;
		    else if (m == 37) resourceId = R.drawable.sun38;
		    else if (m == 38) resourceId = R.drawable.sun39;
		    else if (m == 39) resourceId = R.drawable.sun40;
		    else if (m == 40) resourceId = R.drawable.sun41;
		    else if (m == 41) resourceId = R.drawable.sun42;
		    else if (m == 42) resourceId = R.drawable.sun43;
		    else if (m == 43) resourceId = R.drawable.sun44;
		    else if (m == 44) resourceId = R.drawable.sun45;
		    else if (m == 45) resourceId = R.drawable.sun46;
		    else if (m == 46) resourceId = R.drawable.sun47;
		    else if (m == 47) resourceId = R.drawable.sun48;
		    else if (m == 48) resourceId = R.drawable.sun49;
		    else if (m == 49) resourceId = R.drawable.sun50;
		    else if (m == 50) resourceId = R.drawable.sun51;
		    else if (m == 51) resourceId = R.drawable.sun52;
		    else if (m == 52) resourceId = R.drawable.sun53;
		    else if (m == 53) resourceId = R.drawable.sun54;
		    else if (m == 54) resourceId = R.drawable.sun55;
		    else if (m == 55) resourceId = R.drawable.sun56;
		    else if (m == 56) resourceId = R.drawable.sun57;
		    else if (m == 57) resourceId = R.drawable.sun58;
		    else if (m == 58) resourceId = R.drawable.sun59;
		    else if (m == 59) resourceId = R.drawable.sun60;
		    else if (m == 60) resourceId = R.drawable.sun61;
		    else if (m == 61) resourceId = R.drawable.sun62;
		    else if (m == 62) resourceId = R.drawable.sun63;
		    else if (m == 63) resourceId = R.drawable.sun64;
		    else if (m == 64) resourceId = R.drawable.sun65;
		    else if (m == 65) resourceId = R.drawable.sun66;
		    else if (m == 66) resourceId = R.drawable.sun67;
		    else if (m == 67) resourceId = R.drawable.sun68;
		    else if (m == 68) resourceId = R.drawable.sun69;
		    else if (m == 69) resourceId = R.drawable.sun70;
		    else if (m == 70) resourceId = R.drawable.sun71;
		    else if (m == 71) resourceId = R.drawable.sun72;
		    else if (m == 72) resourceId = R.drawable.sun73;
		    else if (m == 73) resourceId = R.drawable.sun74;
		    else if (m == 74) resourceId = R.drawable.sun75;
		    else if (m == 75) resourceId = R.drawable.sun76;
		    else if (m == 76) resourceId = R.drawable.sun77;
		    else if (m == 77) resourceId = R.drawable.sun78;
		    else if (m == 78) resourceId = R.drawable.sun79;
		    else if (m == 79) resourceId = R.drawable.sun80;
		    else if (m == 80) resourceId = R.drawable.sun81;
		    else if (m == 81) resourceId = R.drawable.sun82;
		    else if (m == 82) resourceId = R.drawable.sun83;
		    else if (m == 83) resourceId = R.drawable.sun84;
		    else if (m == 84) resourceId = R.drawable.sun85;
		    else if (m == 85) resourceId = R.drawable.sun86;
		    else if (m == 86) resourceId = R.drawable.sun87;
		    else if (m == 87) resourceId = R.drawable.sun88;
		    else if (m == 88) resourceId = R.drawable.sun89;
		    else if (m == 89) resourceId = R.drawable.sun90;
		    else if (m == 90) resourceId = R.drawable.sun91;
		    else if (m == 91) resourceId = R.drawable.sun92;
		    else if (m == 92) resourceId = R.drawable.sun93;
		    else if (m == 93) resourceId = R.drawable.sun94;
		    else if (m == 94) resourceId = R.drawable.sun95;
		    else if (m == 95) resourceId = R.drawable.sun96;
		    else if (m == 96) resourceId = R.drawable.sun97;
		    else if (m == 97) resourceId = R.drawable.sun98;
		    else if (m == 98) resourceId = R.drawable.sun99;
		    else if (m == 99) resourceId = R.drawable.sun100;
		    else if (m == 100) resourceId = R.drawable.sun101; //kitu 100
		    else if (m == 101) resourceId = R.drawable.sun102;
		    else if (m == 102) resourceId = R.drawable.sun103;
		    else if (m == 103) resourceId = R.drawable.sun104;
		    else if (m == 104) resourceId = R.drawable.sun105;
		    else if (m == 105) resourceId = R.drawable.sun106;
		    else if (m == 106) resourceId = R.drawable.sun107;
		    else if (m == 107) resourceId = R.drawable.sun108;
		    else if (m == 108) resourceId = R.drawable.sun109;
		    else if (m == 109) resourceId = R.drawable.sun110;
		    else if (m == 110) resourceId = R.drawable.sun111;
		    else if (m == 111) resourceId = R.drawable.sun112;
		    else if (m == 112) resourceId = R.drawable.sun113;
		    else if (m == 113) resourceId = R.drawable.sun114;
		    else if (m == 114) resourceId = R.drawable.sun115;
		    else if (m == 115) resourceId = R.drawable.sun116;
		    else if (m == 116) resourceId = R.drawable.sun117;
		    else if (m == 117) resourceId = R.drawable.sun118;
		    else if (m == 118) resourceId = R.drawable.sun119;
		    else if (m == 119) resourceId = R.drawable.sun120;
		    else if (m == 120) resourceId = R.drawable.sun121;
		    else if (m == 121) resourceId = R.drawable.sun122;
		    else if (m == 122) resourceId = R.drawable.sun123;
		    else if (m == 123) resourceId = R.drawable.sun124;
		    else if (m == 124) resourceId = R.drawable.sun125;
		    else if (m == 125) resourceId = R.drawable.sun126;
		    else if (m == 126) resourceId = R.drawable.sun127;
		    else if (m == 127) resourceId = R.drawable.sun128;
		    else if (m == 128) resourceId = R.drawable.sun129;
		    else if (m == 129) resourceId = R.drawable.sun130;
		    else if (m == 130) resourceId = R.drawable.sun131;
		    else if (m == 131) resourceId = R.drawable.sun132;
		    else if (m == 132) resourceId = R.drawable.sun133;
		    else if (m == 133) resourceId = R.drawable.sun134;
		    else if (m == 134) resourceId = R.drawable.sun135;
		    else if (m == 135) resourceId = R.drawable.sun136;
		    else if (m == 136) resourceId = R.drawable.sun137;
		    else if (m == 137) resourceId = R.drawable.sun138;
		    else if (m == 138) resourceId = R.drawable.sun139;
		    else if (m == 139) resourceId = R.drawable.sun140;
		    else if (m == 140) resourceId = R.drawable.sun141;
		    else if (m == 141) resourceId = R.drawable.sun142;
		    else if (m == 142) resourceId = R.drawable.sun143;
		    else if (m == 143) resourceId = R.drawable.sun144;
		    else if (m == 144) resourceId = R.drawable.sun145;
		    else if (m == 145) resourceId = R.drawable.sun146;
		    else if (m == 146) resourceId = R.drawable.sun147;
		    else if (m == 147) resourceId = R.drawable.sun148;
		    else if (m == 148) resourceId = R.drawable.sun149;
		    else if (m == 149) resourceId = R.drawable.sun150;
		    else if (m == 150) resourceId = R.drawable.sun151;
		    else if (m == 151) resourceId = R.drawable.sun152;
		    else if (m == 152) resourceId = R.drawable.sun153;
		    else if (m == 153) resourceId = R.drawable.sun154;
		    else if (m == 154) resourceId = R.drawable.sun155;
		    else if (m == 155) resourceId = R.drawable.sun156;
		    else if (m == 156) resourceId = R.drawable.sun157;
		    else if (m == 157) resourceId = R.drawable.sun158;
		    else if (m == 158) resourceId = R.drawable.sun159;
		    else if (m == 159) resourceId = R.drawable.sun160;
		    else if (m == 160) resourceId = R.drawable.sun161;
		    else if (m == 161) resourceId = R.drawable.sun162;
		    else if (m == 162) resourceId = R.drawable.sun163;
		    else if (m == 163) resourceId = R.drawable.sun164;
		    else if (m == 164) resourceId = R.drawable.sun165;
		    else if (m == 165) resourceId = R.drawable.sun166;
		    else if (m == 166) resourceId = R.drawable.sun167;
		    else if (m == 167) resourceId = R.drawable.sun168;
		    else if (m == 168) resourceId = R.drawable.sun169;
		    else if (m == 169) resourceId = R.drawable.sun170;
		    else if (m == 170) resourceId = R.drawable.sun171;
		    else if (m == 171) resourceId = R.drawable.sun172;
		    else if (m == 172) resourceId = R.drawable.sun173;
		    else if (m == 173) resourceId = R.drawable.sun174;
		    else if (m == 174) resourceId = R.drawable.sun175;
		    else if (m == 175) resourceId = R.drawable.sun176;
		    else if (m == 176) resourceId = R.drawable.sun177;
		    else if (m == 177) resourceId = R.drawable.sun178;
		    else if (m == 178) resourceId = R.drawable.sun179;
		    else if (m == 179) resourceId = R.drawable.sun180;
		    else if (m == 180) resourceId = R.drawable.sun181;
		    else if (m == 181) resourceId = R.drawable.sun182;
		    else if (m == 182) resourceId = R.drawable.sun183;
		    else if (m == 183) resourceId = R.drawable.sun184;
		    else if (m == 184) resourceId = R.drawable.sun185;
		    else if (m == 185) resourceId = R.drawable.sun186;
		    else if (m == 186) resourceId = R.drawable.sun187;
		    else if (m == 187) resourceId = R.drawable.sun188;
		    else if (m == 188) resourceId = R.drawable.sun189;
		    else if (m == 189) resourceId = R.drawable.sun190;
		    else if (m == 190) resourceId = R.drawable.sun191;
		    else if (m == 191) resourceId = R.drawable.sun192;
		    else if (m == 192) resourceId = R.drawable.sun193;
		    else if (m == 193) resourceId = R.drawable.sun194;
		    else if (m == 194) resourceId = R.drawable.sun195;
		    else if (m == 195) resourceId = R.drawable.sun196;
		    else if (m == 196) resourceId = R.drawable.sun197;
		    else if (m == 197) resourceId = R.drawable.sun198;
		    else if (m == 198) resourceId = R.drawable.sun199;
		    else if (m == 199) resourceId = R.drawable.sun200;
		    else if (m == 200) resourceId = R.drawable.sun201; // kitu 200
		    else if (m == 201) resourceId = R.drawable.sun202;
		    else if (m == 202) resourceId = R.drawable.sun203;
		    else if (m == 203) resourceId = R.drawable.sun204;
		    else if (m == 204) resourceId = R.drawable.sun205;
		    else if (m == 205) resourceId = R.drawable.sun206;
		    else if (m == 206) resourceId = R.drawable.sun207;
		    else if (m == 207) resourceId = R.drawable.sun208;
		    else if (m == 208) resourceId = R.drawable.sun209;
		    else if (m == 209) resourceId = R.drawable.sun210;
		    else if (m == 210) resourceId = R.drawable.sun211;
		    else if (m == 211) resourceId = R.drawable.sun212;
		    else if (m == 212) resourceId = R.drawable.sun213;
		    else if (m == 213) resourceId = R.drawable.sun214;
		    else if (m == 214) resourceId = R.drawable.sun215;
		    else if (m == 215) resourceId = R.drawable.sun216;
		    else if (m == 216) resourceId = R.drawable.sun217;
		    else if (m == 217) resourceId = R.drawable.sun218;
		    else if (m == 218) resourceId = R.drawable.sun219;
		    else if (m == 219) resourceId = R.drawable.sun220;
		    else if (m == 220) resourceId = R.drawable.sun221;
		    else if (m == 221) resourceId = R.drawable.sun222;
		    else if (m == 222) resourceId = R.drawable.sun223;
		    else if (m == 223) resourceId = R.drawable.sun224;
		    else if (m == 224) resourceId = R.drawable.sun225;
		    else if (m == 225) resourceId = R.drawable.sun226;
		    else if (m == 226) resourceId = R.drawable.sun227;
		    else if (m == 227) resourceId = R.drawable.sun228;
		    else if (m == 228) resourceId = R.drawable.sun229;
		    else if (m == 229) resourceId = R.drawable.sun230;
		    else if (m == 230) resourceId = R.drawable.sun231;
		    else if (m == 231) resourceId = R.drawable.sun232;
		    else if (m == 232) resourceId = R.drawable.sun233;
		    else if (m == 233) resourceId = R.drawable.sun234;
		    else if (m == 234) resourceId = R.drawable.sun235;
		    else if (m == 235) resourceId = R.drawable.sun236;
		    else if (m == 236) resourceId = R.drawable.sun237;
		    else if (m == 237) resourceId = R.drawable.sun238;
		    else if (m == 238) resourceId = R.drawable.sun239;
		    else if (m == 239) resourceId = R.drawable.sun240;
		    else if (m == 240) resourceId = R.drawable.sun241;
		    else if (m == 241) resourceId = R.drawable.sun242;
		    else if (m == 242) resourceId = R.drawable.sun243;
		    else if (m == 243) resourceId = R.drawable.sun244;
		    else if (m == 244) resourceId = R.drawable.sun245;
		    else if (m == 245) resourceId = R.drawable.sun246;
		    else if (m == 246) resourceId = R.drawable.sun247;
		    else if (m == 247) resourceId = R.drawable.sun248;
		    else if (m == 248) resourceId = R.drawable.sun249;
		    else if (m == 249) resourceId = R.drawable.sun250;
		    else if (m == 250) resourceId = R.drawable.sun251;
		    else if (m == 251) resourceId = R.drawable.sun252;
		    else if (m == 252) resourceId = R.drawable.sun253;
		    else if (m == 253) resourceId = R.drawable.sun254;
		    else if (m == 254) resourceId = R.drawable.sun255;
		    else if (m == 255) resourceId = R.drawable.sun256;
		    else if (m == 256) resourceId = R.drawable.sun257;
		    else if (m == 257) resourceId = R.drawable.sun258;
		    else if (m == 258) resourceId = R.drawable.sun259;
		    else if (m == 259) resourceId = R.drawable.sun260;
		    else if (m == 260) resourceId = R.drawable.sun261;
		    else if (m == 261) resourceId = R.drawable.sun262;
		    else if (m == 262) resourceId = R.drawable.sun263;
		    else if (m == 263) resourceId = R.drawable.sun264;
		    else if (m == 264) resourceId = R.drawable.sun265;
		    else if (m == 265) resourceId = R.drawable.sun266;
		    else if (m == 266) resourceId = R.drawable.sun267;
		    else if (m == 267) resourceId = R.drawable.sun268;
		    else if (m == 268) resourceId = R.drawable.sun269;
		    else if (m == 269) resourceId = R.drawable.sun270;
		    else if (m == 270) resourceId = R.drawable.sun271;
		    else if (m == 271) resourceId = R.drawable.sun272;
		    else if (m == 272) resourceId = R.drawable.sun273;
		    else if (m == 273) resourceId = R.drawable.sun274;
		    else if (m == 274) resourceId = R.drawable.sun275;
		    else if (m == 275) resourceId = R.drawable.sun276;
		    else if (m == 276) resourceId = R.drawable.sun277;
		    else if (m == 277) resourceId = R.drawable.sun278;
		    else if (m == 278) resourceId = R.drawable.sun279;
		    else if (m == 279) resourceId = R.drawable.sun280;
		    else if (m == 280) resourceId = R.drawable.sun281;
		    else if (m == 281) resourceId = R.drawable.sun282;
		    else if (m == 282) resourceId = R.drawable.sun283;
		    else if (m == 283) resourceId = R.drawable.sun284;
		    else if (m == 284) resourceId = R.drawable.sun285;
		    else if (m == 285) resourceId = R.drawable.sun286;
		    else if (m == 286) resourceId = R.drawable.sun287;
		    else if (m == 287) resourceId = R.drawable.sun288;
		    else if (m == 288) resourceId = R.drawable.sun289;
		    else if (m == 289) resourceId = R.drawable.sun290;
		    else if (m == 290) resourceId = R.drawable.sun291;
		    else if (m == 291) resourceId = R.drawable.sun292;
		    else if (m == 292) resourceId = R.drawable.sun293;
		    else if (m == 293) resourceId = R.drawable.sun294;
		    else if (m == 294) resourceId = R.drawable.sun295;
		    else if (m == 295) resourceId = R.drawable.sun296;
		    else if (m == 296) resourceId = R.drawable.sun297;
		    else if (m == 297) resourceId = R.drawable.sun298;
		    else if (m == 298) resourceId = R.drawable.sun299;
		    else if (m == 299) resourceId = R.drawable.sun300;
		    else if (m == 300) resourceId = R.drawable.sun301;//kitu 300
		    else if (m == 301) resourceId = R.drawable.sun302;
		    else if (m == 302) resourceId = R.drawable.sun303;
		    else if (m == 303) resourceId = R.drawable.sun304;
		    else if (m == 304) resourceId = R.drawable.sun305;
		    
		    
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
	        setContentView(R.layout.main_game_sun);
	        
	        textView = (TextView) findViewById(R.id.textView);
	        
	        //strings containing different messages 
	        hellos = new String[42]; //n + 1
	        hellos[0] = "Solar energy is energy from the sun.";
	        hellos[1] = "Solar energy can be converted directly or indirectly into other forms of energy.";    
	        hellos[2] = "Solar energy is also referred to as solar power.";
	        hellos[3] = "Solar energy free and clean energy source.";
	        hellos[4] = "Solar energy does not produce waste or pollution and is ecologically acceptable.";
	        hellos[5] = "Solar energy drives climate and weather and supports all life on Earth.";
	        hellos[6] = "Solar energy technologies are using the Sun's energy for practical purposes.";
	        hellos[7] = "Solar energy usually refers to photovoltaic and concentrating solar thermal technologies that can convert Sun's energy into electricity.";
	        hellos[8] = "Solar energy is used in many applications like: Electricity, Evaporation, Biomass, Heating water and buildings and even for transport (solar cars).";
	        hellos[9] = "Solar energy is renewable energy source .";
	        hellos[10] = "Solar energy can't be easily exploited in all areas.";
	        hellos[11] = "Solar energy has these general problems: small thickness of energetic flow , huge oscillation of radiation intensity and large investments costs.";
	        hellos[12] = "Solar energy is still a very tiny fraction on global world energy market.";
	        hellos[13] = "Solar energy's reduction in unit costs has yielded its growth rates and therefore solar energy has potential to become very important energy source.";
	        hellos[14] = "Solar energy once installed has almost no variable costs.";
	        hellos[15] = "Solar energy is not exposed to market price movements so there's no forward exchange rate risk.";
	        hellos[16] = "Solar energy is very reliable energy source.";
	        hellos[17] = "Solar energy should play more effective role in meeting the electricity needs of the world.";
	        hellos[18] = "Solar energy's budget on global scale should be much bigger because solar energy is ecologically acceptable.";
	        hellos[19] = "Solar energy's great potential should really be more researched and more funds to this sector would be a wise thing to do.";
	        hellos[20] = "Solar energy's use should be gradually growing in years to come.";
	        hellos[21] = "Solar energy could generate 2.5 percent of the world's electricity by 2025.";
	        hellos[22] = "Solar energy has tremendous potential because for instance the energy we get from all of the world's reserves of coal, oil and natural gas can be matched by just 20 days' supply of sunshine.";
	        hellos[23] = "Solar energy will be more affordable in future with new scientific researches that should decrease the costs and increase the efficiency of the solar energy.";
	        hellos[24] = "Solar energy must be at or even below the costs of fossil fuels in order to play more significant role on global scale, therefore solar energy must be more economically viable for everyday use.";
	        hellos[25] = "Solar energy could improve environmental quality that is damaged by current dominant fossil fuels use.";
	        hellos[26] = "Solar energy's value must be recognized by politicians as well in order to get more funds for further research.";
	        hellos[27] = "Solar energy still doesn't have promotion in public it should be having considering the negative effects of fossil fuels use.";
	        hellos[28] = "Solar energy will be major energy source in years to come because of its massive potential and long-term advantages.";
	        hellos[29] = "Solar energy should be used not only to decrease the use of fossil fuels but also to decrease the price of fossil fuels.";
	        hellos[30] = "The sun is a direct source of energy. Using renewable energy technologies, we can convert that solar energy into electricity.";
	        hellos[31] = "All solar lights are “wireless”. They are not “hooked up” to external sources of power.";
	        hellos[32] = "Solar lights produce no pollution and cause no harmful environmental effects.";
	        hellos[33] = "Solar lighting is sometimes preferred for applications where the need is temporary (fairs, mining sites, Olympics, introduction of real estate developments, etc.).";
	        hellos[34] = "Solar lights are immune to black outs.";
	        hellos[35] = "Solar-powered outdoor lighting is virtually maintenance-free, since the batteries require no water or other regular service.";
	        hellos[36] = "Solar lights work at night.";
	        hellos[37] = "Once installed, the energy is free";
	        hellos[38] = "Solar lights provide enhanced security in poorly lit remote areas where access to grid power is challenging, such as parks and large parking lots.";
	        hellos[39] = "Solar lights work even after cloudy days. During daylight, even when overcast, the solar panels’ “solar generators” charge long-life batteries, which store the energy until needed, up to 5 days for Solar systems.";
	        hellos[40] = "Solar energy striking the Earth goes about 50% absorbed by Earth itself while 30% of solar energy is being reflected back into space.";
	        hellos[41] = "Solar energy is free and abundant energy supplied by nature itself";
	        
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
    						TimeUpSun.class);
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