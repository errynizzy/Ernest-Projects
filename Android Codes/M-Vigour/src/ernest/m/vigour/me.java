package ernest.m.vigour;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class me extends Activity{
	Button btnBack;
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.me);
        
     // Importing all assets like buttons, text fields 	
        btnBack =  (Button) findViewById(R.id.btnBack);
       
        
        //assigning button click events in order
        btnBack.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						AboutActivity.class);
				startActivity(i);
				finish();
			} 
		}); 

}
}

