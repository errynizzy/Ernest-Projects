package connekt.ernest;

import java.io.ByteArrayOutputStream;
import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;


import android.app.Activity;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.Bitmap.CompressFormat;
import android.os.Bundle;
import android.util.Base64;
import android.util.Log;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

public class DisplayImageActivity_id_shop_brand extends Activity {
	@Override
 	public void onBackPressed() {
 	 
 	            	  Intent i = new Intent(getApplicationContext(),
 	            			 SQLiteDemoActivity_id_shop_brand.class);
 						startActivity(i);
 						finish();
 	}
	Button btnDelete;
	ImageView imageDetail;
	int imageId;
	Bitmap theImage;
	Button buttonSend;
	 String response;
	 String jina = " ";
		TextView tv;
		String	Toast_msg = null;

	    //text view
	    TextView showresult;
	    
	  //get bytes from bitmap
		public byte[] getBytesFromBitmap(Bitmap theImage){
		ByteArrayOutputStream stream = new ByteArrayOutputStream();
		theImage.compress(CompressFormat.JPEG, 100, stream);
		return stream.toByteArray();
		}
		
		

	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.display_id_shop_brand);
		btnDelete = (Button) findViewById(R.id.btnDelete);
		imageDetail = (ImageView) findViewById(R.id.imageView1);
		showresult =(TextView) findViewById(R.id.showresult);
		buttonSend = (Button) findViewById(R.id.buttonSend);
		tv = (TextView) findViewById(R.id.tv);

		/**
		 * getting intent data from search and previous screen
		 */
		Intent intnt = getIntent();
		theImage = (Bitmap) intnt.getParcelableExtra("imagename");
		imageId = intnt.getIntExtra("imageid", 20);
		jina = intnt.getStringExtra("jina");
		tv.setText(jina);//send it to db later
		Log.d("Image ID:****", String.valueOf(imageId));
		imageDetail.setImageBitmap(theImage);
		btnDelete.setOnClickListener(new OnClickListener() {

			@Override
			public void onClick(View v) {
				/**
				 * create DatabaseHandler object
				 */
				DataBaseHandler_id_shop_brand db = new DataBaseHandler_id_shop_brand(
						DisplayImageActivity_id_shop_brand.this);
				/**
				 * Deleting records from database
				 */
				Log.d("Delete Image: ", "Deleting.....");
				db.deleteContact(new Contact_id_shop_brand(imageId));
				// /after deleting data go to main page
				Intent i = new Intent(DisplayImageActivity_id_shop_brand.this,
						Main_Screen_branding.class);
				startActivity(i);
				finish();
			}
		});
		
		
		//dont mess with this button.....hahahaaaa
				buttonSend.setOnClickListener(new View.OnClickListener(){
		        	
					        public void onClick(View v) {
					        	String imgString = Base64.encodeToString(getBytesFromBitmap(theImage), 
					                    Base64.DEFAULT);
					        	
					                ArrayList<NameValuePair> postParameters1 = new ArrayList<NameValuePair>();
					                postParameters1.add(new BasicNameValuePair("mob_number", tv.getText().toString()));
					                postParameters1.add(new BasicNameValuePair("pic", imgString));
					            try {
					    			response = CustomHttpClient.executeHttpPost("http://connektafrica.net/pos_app/add_pos_shop_image.php",postParameters1);
					    			/**
									 * create DatabaseHandler object
									 */
									DataBaseHandler_id_shop_brand db = new DataBaseHandler_id_shop_brand(
											DisplayImageActivity_id_shop_brand.this);
									/**
									 * Deleting records from database
									 */
									Log.d("Delete Image: ", "Deleting.....");
									db.deleteContact(new Contact_id_shop_brand(imageId));
									// /after deleting data go to main page
									Intent i = new Intent(DisplayImageActivity_id_shop_brand.this,
											Main_Screen_branding.class);
									startActivity(i);
									finish();
					    			Intent ii = new Intent(DisplayImageActivity_id_shop_brand.this,
					    					Main_Screen_branding.class);
									startActivity(ii);
									finish();
									Toast_msg = "Photo Uploaded Successfully";
								    Show_Toast(Toast_msg);
					            } catch (Exception e) {
					    			showresult.setText("Error in Internet Connection. Saving Failed. Please check your Internet settings and Try again");
					    			e.printStackTrace();
					    		}
					            }
					});
					

	}
	public void Show_Toast(String msg) {
		Toast.makeText(getApplicationContext(), msg, Toast.LENGTH_LONG).show();
	    }
}