package ernest.city.survicor;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;


public class AboutCS extends Activity implements OnClickListener{
	
	
	
	
	
	 @Override
	  	public void onBackPressed() {
		 Intent i = new Intent(getApplicationContext(),
					GeneralInfo.class);
			startActivity(i);
			finish();
		 }
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.about_cs);
        
     // Importing all assets like buttons, text fields 
      
       
      
       
        
        //assigning button click events 
     
       
      
    }



	@Override
	public void onClick(View arg0) {
		// TODO Auto-generated method stub
		
	}


}


